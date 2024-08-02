<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<!-- Page title -->
<div class="page-title mb-4">
    <div class="row justify-content-between align-items-center">
        <div class="mb-3 col-12">
            <h5 class="mb-0 text-white h3 font-weight-400">Your Courses</h5>
        </div>
    </div>
</div>
<?php if (isset($component)) {
    $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component;
} ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert', 'data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()) : ?>
    <?php $__env->startComponent($component->resolveView(), $component->data()); ?>
    <?php $component->withAttributes([]); ?>
    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)) : ?>
    <?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
    <?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) {
    $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component;
} ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert', 'data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()) : ?>
    <?php $__env->startComponent($component->resolveView(), $component->data()); ?>
    <?php $component->withAttributes([]); ?>
    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)) : ?>
    <?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
    <?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div class="row">
    <div class="col-md-12">
        <div class="row">

            <?php $__empty_1 = true;
            $__currentLoopData = $courses;
            $__env->addLoop($__currentLoopData);
            foreach ($__currentLoopData as $course) : $__env->incrementLoopIndices();
                $loop = $__env->getLastLoop();
                $__empty_1 = false; ?>
                <div class="col-md-4">
                    <div class="card rounded-0">
                        <img src="<?php echo e(str_starts_with($course->course->course_image, 'http') ? $course->course->course_image : asset('storage/app/public/' . $course->course->course_image)); ?>" class="card-img-top" alt="course image">
                        <div class="card-body">
                            <h5 class="font-weight-bolder"><?php echo e($course->course->course_title); ?></h5>
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <div class="d-flex align-items-center">
                                    <i class="mr-1 fa fa-book"></i>
                                    <span>
                                        <?php echo e(count($course->lessons)); ?>

                                        <?php echo e(count($course->lessons) > 1 ? 'Lessons' : 'Lesson'); ?>

                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="<?php echo e(route('user.mycoursedetails', $course->course->id)); ?>" class="btn btn-primary btn-block rounded-0 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-play-circle fa-2x text-danger mr-2"></i>
                                    <span>Watch</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            $__env->popLoop();
            $loop = $__env->getLastLoop();
            if ($__empty_1) : ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center py-2">
                            <p>No Data Available</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/purpose/user/membership/my-course.blade.php ENDPATH**/ ?>