<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page title -->
    <div class="page-title mb-5">

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
                    <div>
                        <h3 class="text-primary"><?php echo e($course->course->course_title); ?></h3>
                    </div>
                    <div class="p-2 d-lg-flex justify-content-lg-between align-items-center mt-3">
                        <div class="mt-2 mt-lg-0">
                            <p class="m-0 text-primary font-weight-bold">CREATED BY</p>
                            <P class="m-0"><?php echo e($settings->site_name); ?></P>
                        </div>
                        <div class="mt-2 mt-lg-0">
                            <p class="m-0 text-primary font-weight-bold">CATEGORY</p>
                            <P class="m-0"><?php echo e($course->course->category); ?></P>
                        </div>
                        <div class="mt-2 mt-lg-0">
                            <p class="m-0 text-primary font-weight-bold">PURCHASED</p>
                            <P class="m-0">
                                <?php echo e(\Carbon\Carbon::parse($course->course->created_at)->toDayDateTimeString()); ?></P>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h4>Course Lessons</h4>
                        <?php $__empty_1 = true; $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div>
                                <a
                                    href="<?php echo e(route('user.learning', ['lesson' => $lesson->id, 'course' => $course->course->id])); ?>">
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <i class="fas fa-play-circle fa-2x text-danger mr-2"></i>
                                            <div>
                                                <h6 class="h6 m-0"><?php echo e($lesson->title); ?></h6>
                                                <small class="text-muted">Length: <?php echo e($lesson->length); ?></small>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="<?php echo e(route('user.learning', ['lesson' => $lesson->id, 'course' => $course->course->id])); ?>"
                                                class="px-3 shadow bg-info text-white rounded-4 rounded-md">Watch</a>
                                        </div>
                                    </div>
                                </a>
                                <div style="border-top: 1px dashed black;" class="my-3"></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="text-center py-3">
                                <p>No Data Available</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.millage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/millage/user/membership/mycourse-details.blade.php ENDPATH**/ ?>