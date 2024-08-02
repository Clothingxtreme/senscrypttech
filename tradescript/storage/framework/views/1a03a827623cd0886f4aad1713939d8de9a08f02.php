<div>
    <div class="mt-2 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, []); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                Investment Plans
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e)): ?>
<?php $component = $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e; ?>
<?php unset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e); ?>
<?php endif; ?>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('newplan')); ?>">
                    <i class="fa fa-plus"></i> New plan
                </a>
            </div>
        </div>
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
        <?php if(!session('removeInfo')): ?>
            <div class="col-12">
                <div class="alert alert-info">
                    <i class="fas fa-exclamation-triangle"></i>
                    Users cannot invest in an inactive plan.
                    Plan status is useful when you want to display to your users a plan but you do not
                    want them to invest in it at the moment. Users already subscribed to an inactive plan
                    would still receive ROI till the plan expires, but will not be able to purchase it.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                        wire:click='removeInfoSession'>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>

        <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-4">
                <div class="pricing-table purple border card">
                    <div class="card-body">
                        <div class="text-center">
                            <div>
                                <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'badge',
                                    'badge-danger' => $plan->status == 'inactive',
                                    'badge-success' => $plan->status == 'active',
                                ]) ?>"><?php echo e($plan->status); ?></span>
                            </div>

                            <h2 class=""><?php echo e($plan->name); ?></h2>
                        </div>
                        <!-- Price -->
                        <div class="price-tag">
                            <span class="symbol "><?php echo e($settings->currency); ?></span>
                            <span class="amount "><?php echo e(number_format($plan->price)); ?></span>
                        </div>
                        <!-- Features -->
                        <div class="pricing-features">
                            <div class="feature text-dark">Minimum Possible Deposit:<span
                                    class=""><?php echo e($settings->currency); ?><?php echo e(number_format($plan->min_price)); ?></span>
                            </div>
                            <div class="feature text-dark">Maximum Possible Deposit:<span
                                    class=""><?php echo e($settings->currency); ?><?php echo e(number_format($plan->max_price)); ?></span>
                            </div>
                            <div class="feature text-dark">Minimum Return:<span
                                    class=""><?php echo e(number_format($plan->minr)); ?>%</span></div>
                            <div class="feature text-dark">Maximum Return:<span
                                    class=""><?php echo e(number_format($plan->maxr)); ?>%</span></div>
                            <div class="feature text-dark">Gift Bonus:<span
                                    class=""><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?></span></div>
                            <div class="feature text-dark">Duration:<span class=""><?php echo e($plan->expiration); ?></span>
                            </div>
                        </div> <br>

                        <!-- Button -->
                        <div class="text-center">
                            <a href="<?php echo e(route('editplan', $plan->id)); ?>" class="btn btn-primary btn-sm"><i
                                    class="text-white flaticon-pencil"></i>
                            </a> &nbsp;
                            <a href="#" wire:click="deleteId(<?php echo e($plan->id); ?>)" class="btn btn-danger btn-sm"
                                data-toggle="modal" data-target="#deleteModal">
                                <i class="text-white fa fa-times"></i>
                            </a>
                            <?php if($plan->status == 'inactive'): ?>
                                <button class="btn btn-success btn-sm"
                                    wire:click="markPlanAs(<?php echo e($plan->id); ?>, 'active')">
                                    Mark as active
                                </button>
                            <?php else: ?>
                                <button class="btn btn-warning btn-sm"
                                    wire:click="markPlanAs(<?php echo e($plan->id); ?>, 'inactive')">
                                    Mark as inactive
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-lg-12 text-center">
                <div class="pricing-table card purple border p-4">
                    <h4 class="">No Investment Plan at the moment, click the button above to add a plan.
                    </h4>
                </div>
            </div>
        <?php endif; ?>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Are you sure want to delete this plan?</h4>
                        <p>If a user have bought this plan, it will also be deleted.</p>
                        <div class="float-right text-right">
                            <button type="button" class="btn btn-secondary close-btn"
                                data-dismiss="modal">Close</button>
                            <button type="button" wire:click.prevent="deletePlan()" class="btn btn-danger close-modal"
                                data-dismiss="modal">Yes,
                                Delete</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/livewire/admin/plans/system-plans.blade.php ENDPATH**/ ?>