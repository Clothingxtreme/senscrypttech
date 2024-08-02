<div>
    <form action="" method="post" wire:submit.prevent='saveTheme'>
        <div class="form-group">
            <label>Current user dashboard theme</label>
            <select class="form-control" wire:model='theme'>
                <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option>
                        <?php echo e($item); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <small class="text-success"><?php echo e($sucMsg); ?></small>
        </div>
        <div class="form-group">
            <button type="submit" class="px-4 btn btn-primary btn-sm">Save</button>
        </div>
    </form>
    
</div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/livewire/admin/choose-theme.blade.php ENDPATH**/ ?>