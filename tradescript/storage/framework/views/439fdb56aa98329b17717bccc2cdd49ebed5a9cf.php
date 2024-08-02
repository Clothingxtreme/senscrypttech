<div>
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
    <div class="mt-2 mb-4 d-flex justify-content-between align-items-center">
        <h1 class="title1 ">Trade Signals</h1>
        <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm px-3" wire:click='newSignal'>
                Add Signal
            </button>
        </div>
    </div>

    <div class="mb-5 row">
        <?php if($newSignal): ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form wire:submit.prevent='addSignal'>
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <label for="">Order type</label>
                                            <select wire:model.defer="tradeDirection" class=" form-control rounded-none"
                                                required>
                                                <option value="Sell">Sell</option>
                                                <option value="Buy">Buy</option>
                                                <option value="Buy-Stop">Buy-Stop</option>
                                                <option value="Sell-Stop">Sell-Stop</option>
                                                <option value="Sell-Limit">Sell-Limit</option>
                                                <option value="Buy-Limit">Buy-Limit</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Currency Pair</label>
                                            <input type="text" wire:model.defer="tradePair"
                                                class="form-control rounded-non" placeholder="eg EUR/USD" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Price</label>
                                            <input type="text" wire:model.defer="price"
                                                class="form-control rounded-none" placeholder="" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Take Profit 1</label>
                                            <input type="text" step="any" wire:model.defer="takeProfit1"
                                                class="form-control rounded-none" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Take Profit 2</label>
                                            <input type="text" step="any" wire:model.defer="takeProfit2"
                                                class="form-control rounded-none">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Stop Loss</label>
                                            <input type="number" step="any" class="form-control rounded-none"
                                                wire:model.defer="stopLoss" required>
                                        </div>
                                        
                                        
                                        <div class="col-12 mt-3">
                                            <button class="btn btn-info btn-sm" type="button"
                                                wire:click='cancel'>Cancel</button>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <div class="spinner-border spinner-border-sm" role="status"
                                                    wire:loading wire:target="addSignal">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                Add Signal
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!$newSignal): ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>
                                        Ref
                                    </th>
                                    <th>
                                        Order type
                                    </th>
                                    <th>
                                        Currency Pair
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Take Profit-1
                                    </th>
                                    <th>
                                        Take Profit-2
                                    </th>
                                    <th>
                                        Stop Loss
                                    </th>
                                    
                                    <th>
                                        Result
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Date Added
                                    </th>
                                    <th>
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $signals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $signal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>#<?php echo e($signal['reference']); ?></td>
                                            <td>
                                                <?php if($signal['trade_direction'] == 'Buy'): ?>
                                                    <i class="fa fa-arrow-up text-success"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-arrow-down text-danger"></i>
                                                <?php endif; ?>
                                                <?php echo e($signal['trade_direction']); ?>

                                            </td>
                                            <td><?php echo e($signal['currency_pair']); ?></td>
                                            <td><?php echo e($signal['price']); ?></td>
                                            <td><?php echo e($signal['take_profit1']); ?></td>
                                            <td><?php echo e($signal['take_profit2'] ? $signal['take_profit2'] : '-'); ?></td>
                                            <td><?php echo e($signal['stop_loss1']); ?></td>
                                            
                                            <td><?php echo e($signal['result'] ? $signal['result'] : '-'); ?></td>
                                            <td>
                                                <?php if($signal['status'] == 'published'): ?>
                                                    <span class="badge badge-success"> <?php echo e($signal['status']); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger"> <?php echo e($signal['status']); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e(\Carbon\Carbon::parse($signal['created_at'])->addHour()->toDayDateTimeString()); ?>

                                            </td>
                                            <td>
                                                <?php if($signal['status'] == 'unpublished'): ?>
                                                    <button type="submit" wire:click="publish(<?php echo e($signal['id']); ?>)"
                                                        class="btn btn-primary btn-sm" wire:loading.attr='disabled'
                                                        wire:target="publish(<?php echo e($signal['id']); ?>)">
                                                        <div class="spinner-border spinner-border-sm" role="status"
                                                            wire:loading wire:target="publish(<?php echo e($signal['id']); ?>)">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                        Publish
                                                    </button>
                                                <?php else: ?>
                                                    <a href="#" class="btn btn-secondary btn-sm m-1"
                                                        data-toggle="modal" data-target="#resultModal"
                                                        wire:click="setSignalId(<?php echo e($signal['id']); ?>)">
                                                        Add Result
                                                    </a>
                                                <?php endif; ?>

                                                <a href="#" wire:click="setSignalId(<?php echo e($signal['id']); ?>)"
                                                    class="btn btn-danger btn-sm m-1" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="11" class="text-center">
                                                No Data Available
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <!-- Delete Modal -->
                                    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true close-btn">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Are you sure want to delete this signal?</h4>
                                                    <div class="float-right text-right">
                                                        <button type="button" class="btn btn-secondary close-btn"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" wire:click.prevent="deleteSignal()"
                                                            class="btn btn-danger close-modal"
                                                            data-dismiss="modal">Yes,
                                                            Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="resultModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Update Signal Result
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form wire:submit.prevent='updateResult'>
                                                        <div class="form-group">
                                                            <label>Result</label>
                                                            <input type="text" wire:model.defer='signalResult'
                                                                class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary btn-sm">
                                                                <div class="spinner-border spinner-border-sm"
                                                                    role="status" wire:loading
                                                                    wire:target='updateResult'>
                                                                    <span class="sr-only">Loading...</span>
                                                                </div>
                                                                Publish Result
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                data-dismiss="modal" aria-label="Close">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/livewire/admin/signal/trade-signals.blade.php ENDPATH**/ ?>