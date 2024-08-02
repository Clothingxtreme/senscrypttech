<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.signal.setup', [])->html();
} elseif ($_instance->childHasBeenRendered('4ZWP3if')) {
    $componentId = $_instance->getRenderedChildComponentId('4ZWP3if');
    $componentTag = $_instance->getRenderedChildComponentTagName('4ZWP3if');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4ZWP3if');
} else {
    $response = \Livewire\Livewire::mount('admin.signal.setup', []);
    $html = $response->html();
    $_instance->logRenderedChild('4ZWP3if', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/signals/signalSettings.blade.php ENDPATH**/ ?>