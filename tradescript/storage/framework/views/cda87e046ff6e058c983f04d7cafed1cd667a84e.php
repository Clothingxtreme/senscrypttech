<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.plans.system-plans', [])->html();
} elseif ($_instance->childHasBeenRendered('3MemjYw')) {
    $componentId = $_instance->getRenderedChildComponentId('3MemjYw');
    $componentTag = $_instance->getRenderedChildComponentTagName('3MemjYw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3MemjYw');
} else {
    $response = \Livewire\Livewire::mount('admin.plans.system-plans', []);
    $html = $response->html();
    $_instance->logRenderedChild('3MemjYw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/Plans/plans.blade.php ENDPATH**/ ?>