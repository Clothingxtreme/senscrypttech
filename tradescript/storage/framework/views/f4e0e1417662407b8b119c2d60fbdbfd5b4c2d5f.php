<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4">
        <h1 class="title1">Trading Accounts</h1>
        <p class="">
            Manage trading accounts submitted by users. Collect their submitted details and connect to your
            master trading account
        </p>
    </div>
    <?php if (isset($component)) { $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Alert::class, []); ?>
<?php $component->withName('admin.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e)): ?>
<?php $component = $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e; ?>
<?php unset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e); ?>
<?php endif; ?>
    <?php if($settings->subscription_type == 'Percentage'): ?>
        <div class="alert alert-info fade show" role="alert">
            <span class=" font-weight-bolder">NOTE:</span>
            You are using percentage share subsciption model
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="mt-2 mb-5 row">
        <div class="col-12">
            <div class="card p-3">
                <?php if($settings->use_copytrade): ?>
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('msubtrade')); ?>" class="nav-link active">Submited Accounts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('tacnts')); ?>" class="nav-link">Connected Accounts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Account</th>
                                        <th>Account Password</th>
                                        <th>Account Type</th>
                                        <th>MT Type</th>
                                        <th>Account Name</th>
                                        <th>Currency</th>
                                        <th>Leverage</th>
                                        <th>Server</th>
                                        <th>Provider</th>
                                        <th>Duration</th>
                                        <th>Submitted at</th>
                                        <th>Started at</th>
                                        <th>Expiring at</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($sub->tuser->name); ?> <?php echo e($sub->tuser->l_name); ?></td>
                                            <td><?php echo e($sub->mt4_id); ?></td>
                                            <td><?php echo e($sub->mt4_password); ?></td>
                                            <td><?php echo e($sub->account_type); ?></td>
                                            <td><?php echo e($sub->mt_type); ?></td>
                                            <td><?php echo e($sub->account_name); ?></td>
                                            <td><?php echo e($sub->currency); ?></td>
                                            <td><?php echo e($sub->leverage); ?></td>
                                            <td><?php echo e($sub->server); ?></td>
                                            <td><?php echo e($sub->provider ? $sub->provider : '-'); ?></td>
                                            <td><?php echo e($sub->duration ? $sub->duration : '-'); ?></td>
                                            <td><?php echo e($sub->created_at->toDayDateTimeString()); ?>

                                            </td>
                                            <td>
                                                <?php if(!empty($sub->start_date)): ?>
                                                    <?php echo e($sub->start_date->toDayDateTimeString()); ?>

                                                <?php else: ?>
                                                    Not Started yet
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty($sub->end_date)): ?>
                                                    <?php echo e($sub->end_date->toDayDateTimeString()); ?>

                                                <?php else: ?>
                                                    Not Started yet
                                                <?php endif; ?>

                                            </td>
                                            <td><span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                'badge',
                                                'badge-success' => $sub->status === 'Active',
                                                'badge-danger' => $sub->status !== 'Active',
                                            ]) ?>"><?php echo e($sub->status); ?></span></td>
                                            <td>
                                                <?php if($sub->status == 'Pending'): ?>
                                                    <form action="<?php echo e(route('create.sub')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="login" value="<?php echo e($sub->mt4_id); ?>">
                                                        <input type="hidden" name="password"
                                                            value="<?php echo e($sub->mt4_password); ?>">
                                                        <input type="hidden" name="serverName"
                                                            value="<?php echo e($sub->server); ?>">
                                                        <input type="hidden" name="acntype"
                                                            value="<?php echo e($sub->account_type); ?>">
                                                        <input type="hidden" name="leverage" value="<?php echo e($sub->leverage); ?>">
                                                        <input type="hidden" name="currency" value="<?php echo e($sub->currency); ?>">
                                                        <input type="hidden" name="name"
                                                            value="<?php echo e($sub->account_name); ?>">
                                                        <input type="hidden" name="mt4id" value="<?php echo e($sub->id); ?>">
                                                        <button type="submit" class="m-1 btn btn-info btn-sm">
                                                            Process
                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                                <a href="<?php echo e(route('admin.invoices', ['id' => $sub->id])); ?>"
                                                    class="btn btn-primary btn-sm m-1">
                                                    Invoices</a>
                                                <a href="<?php echo e(url('admin/dashboard/delsub')); ?>/<?php echo e($sub->id); ?>"
                                                    class="btn btn-danger btn-sm m-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($subscriptions->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/subscription/msubtrade.blade.php ENDPATH**/ ?>