<?php
    $sub_link = 'https://trade.mql5.com/trade';
?>


<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div class="mb-3 col-md-6 mb-md-0">
                <h5 class="mb-0  h3 font-weight-400">Trading Account(s)</h5>
            </div>

        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 p-lg-3 p-sm-5">
                            <h2 class=""><?php echo e($settings->site_name); ?> Account manager</h2> <br>
                            <div clas="well">
                                <p class="text-justify ">Don’t have time to trade or learn how to
                                    trade?
                                    Our Account Management Service is The Best Profitable Trading Option for you,
                                    We can help you to manage your account in the financial MARKET with a simple
                                    subscription model.<br>
                                    <small>Terms and Conditions apply</small><br>Reach us at <?php echo e($settings->contact_email); ?>

                                    for more info.
                                </p>
                            </div>
                            <br>
                            <div class="py-3">
                                <a class="btn btn-primary" data-toggle="modal" data-target="#submitmt4modal">
                                    Subscribe Now
                                </a>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-12 py-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="mb-5">Accounts under management.</h2>
                                <?php if($settings->ib_link): ?>
                                    <div>
                                        <a href="<?php echo e($settings->ib_link); ?>" target="_blank" class="btn btn-primary">
                                            Open trading account
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if($subscriptions->count() === 0): ?>
                                <div class="text-center">
                                    <i class="fas fa-database" style="font-size: 50px"></i>
                                    <h4>You have no managed accounts</h4>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#submitmt4modal">
                                        Add Account
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class=" table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Account</th>
                                            <th>Currency</th>
                                            <th>Leverage</th>
                                            <th>Server</th>
                                            <th>Duration</th>
                                            <th>Account Password</th>
                                            <th>Status</th>
                                            <th>Submited at</th>
                                            <th>Start/End date</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($sub->mt4_id); ?> <br> <?php echo e($sub->account_type); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($sub->currency); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($sub->leverage); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($sub->server); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($sub->duration); ?>

                                                    </td>
                                                    <td>
                                                        **********
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info"> <?php echo e($sub->status); ?></span>
                                                    </td>
                                                    <td>
                                                        <?php echo e(\Carbon\Carbon::parse($sub->created_at)->format('M d Y')); ?>

                                                    </td>
                                                    <td>
                                                        <?php if(!empty($sub->start_date)): ?>
                                                            <?php echo e(\Carbon\Carbon::parse($sub->start_date)->format('M d Y')); ?>

                                                        <?php else: ?>
                                                            -
                                                        <?php endif; ?>
                                                        /
                                                        <?php if(!empty($sub->end_date)): ?>
                                                            <?php echo e(\Carbon\Carbon::parse($sub->end_date)->format('M d Y')); ?>

                                                        <?php else: ?>
                                                            -
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $endAt = \Carbon\Carbon::parse($sub->end_date);
                                                            $remindAt = \Carbon\Carbon::parse($sub->reminded_at);
                                                        ?>
                                                        <a href="#" data-bs-toggle="modal"
                                                            class="btn btn-danger btn-sm" onclick="deletemt4()">Cancel</a>
                                                        <?php if(($sub->status != 'Pending' && now()->isSameDay($remindAt)) || $sub->status == 'Expired'): ?>
                                                            <a href="<?php echo e(route('renewsub', $sub->id)); ?>"
                                                                class="btn btn-primary btn-sm">Renew</a>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- end of chart -->
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('millage.user.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript">
        function deletemt4() {
            swal({
                title: "Error!",
                text: "Send an Email to <?php echo e($settings->contact_email); ?> to have your MT4 Details cancelled.",
                icon: "error",
                buttons: {
                    confirm: {
                        text: "Okay",
                        value: true,
                        visible: true,
                        className: "btn btn-danger",
                        closeModal: true
                    }
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.millage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/millage/user/subtrade.blade.php ENDPATH**/ ?>