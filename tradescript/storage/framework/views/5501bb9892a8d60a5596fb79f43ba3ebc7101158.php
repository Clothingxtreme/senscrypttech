<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.mam.master-account-setup', [])->html();
} elseif ($_instance->childHasBeenRendered('HN0x0c3')) {
    $componentId = $_instance->getRenderedChildComponentId('HN0x0c3');
    $componentTag = $_instance->getRenderedChildComponentTagName('HN0x0c3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HN0x0c3');
} else {
    $response = \Livewire\Livewire::mount('admin.mam.master-account-setup', []);
    $html = $response->html();
    $_instance->logRenderedChild('HN0x0c3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/subscription/trading-settings.blade.php ENDPATH**/ ?>