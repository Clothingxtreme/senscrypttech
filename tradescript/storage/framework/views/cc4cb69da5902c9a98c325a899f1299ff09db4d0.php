<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.deposit.manage-deposit', [])->html();
} elseif ($_instance->childHasBeenRendered('rGrhWOi')) {
    $componentId = $_instance->getRenderedChildComponentId('rGrhWOi');
    $componentTag = $_instance->getRenderedChildComponentTagName('rGrhWOi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rGrhWOi');
} else {
    $response = \Livewire\Livewire::mount('admin.deposit.manage-deposit', []);
    $html = $response->html();
    $_instance->logRenderedChild('rGrhWOi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/Deposits/mdeposits.blade.php ENDPATH**/ ?>