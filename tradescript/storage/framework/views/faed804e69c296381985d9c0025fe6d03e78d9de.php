<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">
        <a href="/" class="logo">
            <img src="<?php echo e(asset('storage/app/public/' . $settings->logo)); ?>" alt=" <?php echo e($settings->site_name); ?>" class="w-50">
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu "></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu "></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">

        <div class="container-fluid">
            <div class="collapse" id="search-nav">

            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <?php if ($settings->enable_kyc == 'yes') : ?>
                    <li class="nav-item dropdown hidden-caret">
                        <?php if (Auth::user()->account_verify == 'Verified') : ?>
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-check"></i>
                                <strong style="font-size:8px;" class="text-success">Verified</strong>
                            </a>
                        <?php else : ?>
                            <a class="nav-link nav-link-icon" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                                <strong style="font-size:8px;" class="text-primary">KYC</strong>
                            </a>
                            <div class="p-0 dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow">
                                <div class="p-2">
                                    <h5 class="mb-0 heading h6">KYC Verification</h5>
                                </div>
                                <div class="pb-2 mt-0 text-center list-group list-group-flush">
                                    <?php if (Auth::user()->account_verify == 'Under review') : ?>
                                        Your Submission is under review
                                    <?php else : ?>
                                        <div class="">
                                            <a href="<?php echo e(route('account.verify')); ?>" class="btn btn-primary btn-sm">Verify
                                                Account </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">Account
                                    Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTrader/onlinetrade/resources/views/millage/user/topmenu.blade.php ENDPATH**/ ?>