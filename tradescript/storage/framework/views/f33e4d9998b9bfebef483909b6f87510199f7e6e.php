<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth()->user()->name); ?>

                            <span class="user-level"> <?php echo e(auth()->user()->email); ?></span>
                        </span>
                    </a>
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-item <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li
                    class="nav-item <?php echo e(request()->routeIs('deposits') ? 'active' : ''); ?> <?php echo e(request()->routeIs('payment') ? 'active' : ''); ?> <?php echo e(request()->routeIs('pay.crypto') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('deposits')); ?>">
                        <i class="fas fa-angle-double-down"></i>
                        <p>Deposit</p>
                    </a>
                </li>

                <?php if($mod['investment'] || $mod['cryptoswap']): ?>
                    <li
                        class="nav-item <?php echo e(request()->routeIs('withdrawalsdeposits') ? 'active' : ''); ?> <?php echo e(request()->routeIs('withdrawfunds') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('withdrawalsdeposits')); ?>">
                            <i class="fas fa-arrow-alt-circle-up "></i>
                            <p>Withdraw</p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($mod['investment']): ?>
                    <li class="nav-item <?php echo e(request()->routeIs('tradinghistory') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('tradinghistory')); ?>">
                            <i class="fas fa-history "></i>
                            <p>Profit History</p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item <?php echo e(request()->routeIs('accounthistory') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('accounthistory')); ?>">
                        <i class="fas fa-money-check-alt "></i>
                        <p>Transactions</p>
                    </a>
                </li>
                <?php if($moresettings->use_transfer): ?>
                    <li class="nav-item <?php echo e(request()->routeIs('transferview') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('transferview')); ?>">
                            <i class="fas fa-bezier-curve"></i>
                            <p>Transfer funds</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($mod['investment']): ?>
                    <li class="nav-item <?php echo e(request()->routeIs('mplans') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('mplans')); ?>">
                            <i class="fas fa-clipboard-list"></i>
                            <p>Trading Plans</p>
                        </a>

                    </li>
                    <li
                        class="nav-item <?php echo e(request()->routeIs('myplans') ? 'active' : ''); ?> <?php echo e(request()->routeIs('plandetails') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('myplans', 'All')); ?>">
                            <i class="fas fa-cube"></i>
                            <p>My Plans</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($mod['cryptoswap']): ?>
                    <li
                        class="nav-item <?php echo e(request()->routeIs('assetbalance') ? 'active' : ''); ?> <?php echo e(request()->routeIs('swaphistory') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('assetbalance')); ?>">
                            <i class="fab fa-stack-exchange "></i>
                            <p>Swap Crypto</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($mod['subscription']): ?>
                    <li class="nav-item <?php echo e(request()->routeIs('subtrade') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('subtrade')); ?>">
                            <i class="fas fa-layer-group"></i>
                            <p>Copytrading</p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($mod['signal']): ?>
                    <li class="nav-item <?php echo e(request()->routeIs('tsignals') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('tsignals')); ?>">
                            <i class="fas fa-rss"></i>
                            <p>Trade Signals</p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($mod['membership']): ?>
                    <li
                        class="nav-item <?php echo e(request()->routeIs('user.mycourses') ? 'active' : ''); ?> <?php echo e(request()->routeIs('user.courses') ? 'active' : ''); ?> <?php echo e(request()->routeIs('user.course.details') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('user.courses')); ?>">
                            <i class="fas fa-graduation-cap "></i>
                            <p>Education</p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item <?php echo e(request()->routeIs('referuser') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('referuser')); ?>">
                        <i class="fas fa-retweet "></i>
                        <p>Referrals</p>
                    </a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('support') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('support')); ?>" class="btn btn-sm btn-block btn-white rounded-pill">
                        <i class="fa fa-envelope "></i>
                        <p> Contact Us</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/millage/user/sidebar.blade.php ENDPATH**/ ?>