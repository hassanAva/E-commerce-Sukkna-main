<?php
// get theme color
$setting = App\Models\Utility::colorset();
$settings = Utility::settings();
$color = 'theme-3';
if (!empty($setting['color'])) {
    $color = $setting['color'];
  
}
$company_logo = \App\Models\Utility::GetLogo();
$logo=\App\Models\Utility::get_file('uploads/logo/');

?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(isset($setting['SITE_RTL']) && $setting['SITE_RTL'] == 'on' ? 'rtl' : ''); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="StoreGo - Business Ecommerce">
    <title><?php echo e((\App\Models\Utility::getValByName('title_text')) ? \App\Models\Utility::getValByName('title_text') : config('app.name', 'StoreGo SaaS')); ?> - <?php echo $__env->yieldContent('page-title'); ?></title>

    <link rel="icon" href="<?php echo e(asset(Storage::url('uploads/logo/')).'/favicon.png'); ?>" type="image/png">
     <!-- CSS Libraries -->
     <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome.css')); ?>">

      <!-- font css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/tabler-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/material.css')); ?>">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/customizer.css')); ?>">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo e(asset('custom/css/custom.css')); ?>">
    <?php if( $setting['SITE_RTL'] == 'on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-rtl.css')); ?>" id="main-style-link">
    <?php endif; ?>
    <?php if($setting['cust_darklayout']=='on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-dark.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" id="main-style-link">
    <?php endif; ?>
</head>
<body class="<?php echo e($color); ?>">
    <div class="auth-wrapper auth-v3">
        <div class="bg-auth-side bg-primary"></div>
        <div class="auth-content">
            <nav class="navbar navbar-expand-md navbar-light default">
                <div class="container-fluid pe-2">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo e($logo.$company_logo); ?>" alt="<?php echo e(config('app.name', 'Storego')); ?>" class="navbar-brand-img auth-navbar-brand">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="flex-grow: 0;">
                        <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Support')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Terms')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Privacy')); ?></a>
                            </li>
                            <?php echo $__env->yieldContent('language-bar'); ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card">
                <div class="row align-items-center">
                    <?php echo $__env->yieldContent('content'); ?>
                    <div class="col-xl-6 img-card-side">
                        
                    </div>
                </div>
            </div>
            <div class="auth-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            &copy; <?php echo e(__('Copyright')); ?> <?php echo e(Utility::getValByName('footer_text') ? Utility::getValByName('footer_text') : config('app.name', 'LeadGo')); ?> <?php echo e(date('Y')); ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($settings['enable_cookie'] == 'on'): ?>
        <?php echo $__env->make('layouts.cookie_consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php echo $__env->yieldPushContent('custom-scripts'); ?>
<script src="<?php echo e(asset('custom/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('custom/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor-all.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/feather.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>

</body>
</html>
<?php /**PATH C:\Users\esraa\OneDrive\Desktop\up\main_file\resources\views/layouts/auth.blade.php ENDPATH**/ ?>