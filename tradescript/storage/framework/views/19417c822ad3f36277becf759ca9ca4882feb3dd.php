<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Alert::class, []); ?>
<?php $component->withName('admin.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e)): ?>
<?php $component = $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e; ?>
<?php unset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e); ?>
<?php endif; ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                                type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
                                type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Environment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Cache Management
                            </button>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <h1 class="title1">About Onlintrader Software</h1>
                            <p class="title1">Current Version: 5.0</p>

                            <div class="mt-1">
                                <a href="https://getonlinetrader.com/doc/help-desk" target="_blank" class="btn btn-primary">
                                    Software
                                    documentation</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.platform.production-setup', [])->html();
} elseif ($_instance->childHasBeenRendered('PLb48S4')) {
    $componentId = $_instance->getRenderedChildComponentId('PLb48S4');
    $componentTag = $_instance->getRenderedChildComponentTagName('PLb48S4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PLb48S4');
} else {
    $response = \Livewire\Livewire::mount('admin.platform.production-setup', []);
    $html = $response->html();
    $_instance->logRenderedChild('PLb48S4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.platform.caches', [])->html();
} elseif ($_instance->childHasBeenRendered('JHUvDYY')) {
    $componentId = $_instance->getRenderedChildComponentId('JHUvDYY');
    $componentTag = $_instance->getRenderedChildComponentTagName('JHUvDYY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JHUvDYY');
} else {
    $response = \Livewire\Livewire::mount('admin.platform.caches', []);
    $html = $response->html();
    $_instance->logRenderedChild('JHUvDYY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                        <div class="tab-pane fade" id="pills-cleanup" role="tabpanel" aria-labelledby="pills-cleanup-tab">
                            ...
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/admin/about.blade.php ENDPATH**/ ?>