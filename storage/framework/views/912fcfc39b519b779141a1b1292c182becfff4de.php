<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Описание">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(pagetitle()->get()); ?> - <?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="<?php echo e(asset('css/uikit.min.css')); ?>">
    <!--vue-->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app_site.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themify/themify-icons.css')); ?>">

    <!--vue-->

    

    <?php echo $__env->yieldContent('head'); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
<div id="app">
    
    <div style="z-index:1;" class="bg-secondary w-100 p-2">
        
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Laravel')); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="navbar-nav">

                    

                    <?php echo $__env->make('layouts.site.language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>

                <ul class="navbar-nav ml-auto">

                    <li  class="nav-item mr-4">
                        <a class="nav-link"  href="<?php echo e(route('favorites')); ?>">
                            <img width="16px;" src="<?php echo e(asset('images/icon/star.svg')); ?>" alt="">
                        </a>
                    </li>


                    
                    <site-nav-cart-component></site-nav-cart-component>

                    <li class="nav-item">
                        <div class="dropdown">

                            <a class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                                <img width="16px;" src="<?php echo e(asset('images/icon/user.svg')); ?>" alt="">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <?php if(Auth::guest()): ?>
                                    <a href="<?php echo e(route('login')); ?>" class="dropdown-item" type="button"><?php echo app('translator')->getFromJson('navbar.login'); ?></a>
                                    <a href="<?php echo e(route('register')); ?>" class="dropdown-item" type="button"><?php echo app('translator')->getFromJson('navbar.registration'); ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" type="button"><?php echo app('translator')->getFromJson('navbar.forgot'); ?></a>
                                <?php else: ?>

                                    <?php if(Auth::user()->roles[0]->name == 'admin'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('admin-home-index')); ?>"><?php echo app('translator')->getFromJson('navbar.admin_panel'); ?></a>
                                    <?php endif; ?>
                                    
                                    <div class="dropdown-divider"></div>
                                        <form method="post" class="dropdown-item" action="<?php echo e(route('logout')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <button style="padding:0;margin:0;" type="submit" class="dropdown-item btn btn-link"><?php echo app('translator')->getFromJson('navbar.logout'); ?></button>
                                        </form>
                                <?php endif; ?>


                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    

    <?php if($site_on_of): ?>
        <?php echo $__env->yieldContent('close_site'); ?>
    <?php else: ?>
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    <?php endif; ?>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; iCreative 2020</p>
        </div>
        <!-- /.container -->
    </footer>
</div>








<script src="https://kit.fontawesome.com/226334c91f.js" crossorigin="anonymous"></script>

<!--vue-->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<!--vue-->


<script src="<?php echo e(asset('js/uikit.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/uikit-icons.min.js')); ?>"></script>








<?php echo $__env->yieldContent('js'); ?>
<?php echo $__env->yieldContent('modal'); ?>

</body>
</html>
<?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/layouts/site/app.blade.php ENDPATH**/ ?>