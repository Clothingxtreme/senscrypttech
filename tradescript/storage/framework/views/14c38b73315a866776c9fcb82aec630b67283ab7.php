<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.withdrawal.manage-withdrawal', [])->html();
} elseif ($_instance->childHasBeenRendered('MVXr5iG')) {
    $componentId = $_instance->getRenderedChildComponentId('MVXr5iG');
    $componentTag = $_instance->getRenderedChildComponentTagName('MVXr5iG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MVXr5iG');
} else {
    $response = \Livewire\Livewire::mount('admin.withdrawal.manage-withdrawal', []);
    $html = $response->html();
    $_instance->logRenderedChild('MVXr5iG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/withdrawals/mwithdrawals.blade.php ENDPATH**/ ?>