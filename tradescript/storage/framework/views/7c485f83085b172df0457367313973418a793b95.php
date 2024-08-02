<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-users', [])->html();
} elseif ($_instance->childHasBeenRendered('LP5qE9P')) {
    $componentId = $_instance->getRenderedChildComponentId('LP5qE9P');
    $componentTag = $_instance->getRenderedChildComponentTagName('LP5qE9P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LP5qE9P');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-users', []);
    $html = $response->html();
    $_instance->logRenderedChild('LP5qE9P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/Users/users.blade.php ENDPATH**/ ?>