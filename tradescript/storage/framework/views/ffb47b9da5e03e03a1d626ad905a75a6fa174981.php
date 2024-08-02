<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, []); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        Active user investment
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e)): ?>
<?php $component = $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e; ?>
<?php unset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e); ?>
<?php endif; ?>
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
    <div class="col-12 card shadow p-4 ">
        <div class="table-responsive" data-example-id="hoverable-table">
            <table id="ShipTable" class="table table-hover ">
                <thead>
                    <tr>
                        <th>Client name</th>
                        <th>Plan</th>
                        <th>Amount Invested</th>
                        <th>Duration</th>
                        <th>ROI</th>
                        <th>Start Date</th>
                        <th>Expiration Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($plan->duser->name); ?></td>
                            <td><?php echo e($plan->dplan->name); ?></td>
                            <td><?php echo e($settings->currency); ?><?php echo e(number_format($plan->amount)); ?></td>
                            <td><?php echo e($plan->inv_duration); ?></td>
                            <td>
                                <?php echo e($settings->currency); ?><?php echo e($plan->profit_earned ? $plan->profit_earned : '0'); ?>

                            </td>
                            <td><?php echo e($plan->created_at->toDayDateTimeString()); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($plan->expire_date)->toDayDateTimeString()); ?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item text-danger"
                                            href="<?php echo e(route('deleteplan', $plan->id)); ?>">Delete</a>
                                        <a class="dropdown-item" href="<?php echo e(route('user.plans', $plan->duser->id)); ?>">More
                                            actions</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/Plans/activeinv.blade.php ENDPATH**/ ?>