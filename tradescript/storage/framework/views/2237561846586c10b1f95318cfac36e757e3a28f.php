<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.signal.trade-signals', [])->html();
} elseif ($_instance->childHasBeenRendered('lbeumxy')) {
    $componentId = $_instance->getRenderedChildComponentId('lbeumxy');
    $componentTag = $_instance->getRenderedChildComponentTagName('lbeumxy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lbeumxy');
} else {
    $response = \Livewire\Livewire::mount('admin.signal.trade-signals', []);
    $html = $response->html();
    $_instance->logRenderedChild('lbeumxy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/signals/tradeSignals.blade.php ENDPATH**/ ?>