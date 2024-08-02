<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.system-courses', [])->html();
} elseif ($_instance->childHasBeenRendered('C1P8rpK')) {
    $componentId = $_instance->getRenderedChildComponentId('C1P8rpK');
    $componentTag = $_instance->getRenderedChildComponentTagName('C1P8rpK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('C1P8rpK');
} else {
    $response = \Livewire\Livewire::mount('user.system-courses', []);
    $html = $response->html();
    $_instance->logRenderedChild('C1P8rpK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.millage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/millage/user/membership/courses.blade.php ENDPATH**/ ?>