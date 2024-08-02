<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Settings;
use App\Models\Deposit;
use App\Models\Tp_Transaction;
use App\Mail\DepositStatus;
use App\Notifications\AccountNotification;
use App\Services\ReferralCommisionService;
use App\Traits\PingServer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ManageDepositController extends Controller
{
    use PingServer;

    //Delete deposit
    public function deldeposit($id)
    {
        $deposit = Deposit::where('id', $id)->first();
        Storage::disk('public')->delete($deposit->proof);
        Deposit::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deposit history has been deleted!');
    }

    //process deposits
    public function pdeposit($id)
    {
        //confirm the users plan
        $deposit = Deposit::where('id', $id)->first();
        $user = User::where('id', $deposit->user)->first();
        //get settings 
        $settings = Settings::where('id', '=', '1')->first();

        $response = $this->callServer('earnings', '/process-deposit', [
            'referral_commission' => $settings->referral_commission,
            'amount' => $deposit->amount,
            'account_bal' => $user->account_bal,
            'depositBonus' => $settings->deposit_bonus,
        ]);

        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }

        $data = json_decode($response);
        $earnings = floatval($data->data->earnings);
        $bonus = intval($data->data->bonusToAdd);
        $funds = intval($data->data->funding);

        if ($deposit->user == $user->id) {
            //add funds to user's account
            $user->account_bal = $funds;
            $user->cstatus = 'Customer';
            $user->bonus = $user->bonus + $bonus;
            $user->save();

            if ($bonus != NULL and $bonus > 0) {
                Tp_Transaction::create([
                    'user' => $user->id,
                    'plan' => "Deposit Bonus for $settings->currency $deposit->amount deposited",
                    'amount' => $bonus,
                    'type' => "Bonus",
                ]);
            }

            //update deposit status
            $deposit->status = 'Processed';
            $deposit->save();

            if ($settings->referral_proffit_from == 'Deposit') {
                // credit referral commission
                $ref = new ReferralCommisionService($user, $funds);
                $ref->run();
            }

            //Send notification to user regarding his deposit and it's successful.
            $user->notify(new AccountNotification("Your Deposit have been Confirmed and the amount is added to your account balance. Amount: {$settings->currency}{$funds}", 'Deposit is Confirmed'));
            //Send confirmation email to user regarding his deposit and it's successful.
            Mail::to($user->email)->send(new DepositStatus($deposit, $user, 'Your Deposit have been Confirmed', false));
        }

        return redirect()->back()->with('success', 'Action Sucessful!');
    }
}
