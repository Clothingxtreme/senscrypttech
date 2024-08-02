<div>
    <div class="text-right">
        <button class="btn btn-warning btn-sm" wire:click='clearCache'>Clear all cache</button>
    </div>
    
    <table class="table table-light">
        <thead>
            <tr>
                <th>Cache</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Clear compiled views to make views up to date.
                </td>
                <td>
                    <?php if($viewCached): ?>
                        <button class="btn btn-warning btn-sm" wire:click='clearCompiledViews'>Clear view cache</button>
                    <?php else: ?>
                        <button class="btn btn-primary btn-sm" wire:click='cacheViews'>Cache Views</button>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Clear and cache your routes.
                </td>
                <td>
                    <?php if($routeCached): ?>
                        <button class="btn btn-warning btn-sm" wire:click='clearRouteCache'>Clear route cache</button>
                    <?php else: ?>
                        <button class="btn btn-primary btn-sm" wire:click='cacheRoutes'>Cache Routes</button>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Clear and cache config.
                </td>
                <td>
                    <?php if($configCached): ?>
                        <button class="btn btn-warning btn-sm" wire:click='clearConfigCache'>Clear config cache</button>
                    <?php else: ?>
                        <button class="btn btn-primary btn-sm" wire:click='cacheConfig'>Cache Config</button>
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/livewire/admin/platform/caches.blade.php ENDPATH**/ ?>