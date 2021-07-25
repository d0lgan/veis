<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>Страница не найдена</title>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/front.css')); ?>">

</head>

<body>

<div id="app">
    <?php
        use Illuminate\Support\Facades\App;
        use Illuminate\Support\Facades\Lang;
        if (request()->segment(1) == 'ru') {
            App::setLocale('ru');
        } else {
            App::setLocale('uk');
        }
        $locale = App::getLocale();
        $translate = [
            'notFound' => Lang::trans('site.notFound.notFound'),
            'onMain' => Lang::trans('site.notFound.onMain'),
            'after' => Lang::trans('site.notFound.after'),
            'seconds' => Lang::trans('site.notFound.seconds'),
            'input' => Lang::trans('site.notFound.input'),
        ];
    ?>
    <site-not-found-component :translate="<?php echo e(json_encode($translate)); ?>" :locale="<?php echo e(json_encode($locale)); ?>"></site-not-found-component>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<!-- <script type="text/javascript" src="js/jquery.js" defer></script>
-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js?ver=5.5.3" id="range-js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="<?php echo e(asset('assets/front/js/front.js')); ?>"></script>

</body>

</html><?php /**PATH W:\domains\veisshop\resources\views/errors/404.blade.php ENDPATH**/ ?>