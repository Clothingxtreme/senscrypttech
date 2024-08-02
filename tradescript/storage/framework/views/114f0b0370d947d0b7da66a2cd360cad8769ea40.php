<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4">
        <h1 class="title1"><?php echo e($settings->site_name); ?> KYC Application list</h1>
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
    <div class="mb-5 row">
        <div class="col-12 card p-4  shadow">
            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                <table id="ShipTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>KYC Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $kycs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if($list->user): ?>
                                        <?php echo e($list->user->name); ?>

                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php if($list->status == 'Verified'): ?>
                                        <span class="badge badge-success">Verified</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger"><?php echo e($list->status); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('viewkyc', $list->id)); ?>" class="btn btn-primary btn-sm">View
                                        application</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/kyc.blade.php ENDPATH**/ ?>