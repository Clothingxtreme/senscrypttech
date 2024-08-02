<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.system-courses', [])->html();
} elseif ($_instance->childHasBeenRendered('mm52IYo')) {
    $componentId = $_instance->getRenderedChildComponentId('mm52IYo');
    $componentTag = $_instance->getRenderedChildComponentTagName('mm52IYo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mm52IYo');
} else {
    $response = \Livewire\Livewire::mount('user.system-courses', []);
    $html = $response->html();
    $_instance->logRenderedChild('mm52IYo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/purpose/user/membership/courses.blade.php ENDPATH**/ ?>