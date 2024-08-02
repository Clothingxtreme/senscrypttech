<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page title -->
    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h5 class="text-white h3 font-weight-400"><?php echo e($lesson->title); ?></h5>
                <?php if($course): ?>
                    <a href="<?php echo e(route('user.mycoursedetails', ['id' => $course->id])); ?>" class="btn btn-outline-light btn-sm">
                        <i class="fa fa-arrow-left"></i>
                        Back
                    </a>
                <?php endif; ?>

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
        <div class="col-12">
            <p class="text-white"><?php echo $lesson->description; ?></p>
        </div>
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo e($lesson->video_link); ?>" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.millage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/millage/user/membership/watchlesson.blade.php ENDPATH**/ ?>