

<?php $__env->startSection('title', $locale == 'ru' ? $page->title_ru : $page->title_uk); ?>
<?php $__env->startSection('locale', $locale); ?>

<?php $__env->startSection('content'); ?>
    <site-map-component :translate="<?php echo e(json_encode($translate)); ?>" :locale="<?php echo e(json_encode($locale)); ?>" :main-cats="<?php echo e(json_encode($mainCats)); ?>" :manufacturers="<?php echo e(json_encode($manufacturers)); ?>" :tags="<?php echo e(json_encode($tags)); ?>" :back="<?php echo e(json_encode(url()->previous())); ?>"></site-map-component>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        a {
            color: #000;
            text-decoration: none;
            outline: none;
        }

        a:hover {
            text-decoration: underline;
        }

        h1 {
            margin-bottom: 40px
        }

        .product-card .holder {
            padding: 26px 15px;
        }

        .wrap {
            margin: 0 auto;
            width: 100%;
            max-width: 1080px;
            padding: 0 15px;
        }

        .holder {
            margin: 0 auto;
            width: 100%;
            max-width: 1080px;
            padding: 0 15px;
        }

        .cats {
            margin: 13px 0 0 0;
        }

        .product-card__head {
            padding-bottom: 22px !important;
        }

        .second_layer {
            margin-left: 26px;
            margin-top: 6px;
        }

        .second_layer span {
            font-weight: 450;
        }

        .third_layer {
            margin-left: 26px;
            margin-top: 5px;
        }

        .third_layer span {
            font-weight: 400;
        }

        .category_title {
            font-size: 1.15em;
            font-weight: 700;
            margin: 10px 0;
        }

        .second {
            margin: 8px;
        }

        .back-btn {
            font-size: 15px !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.layout_with_short_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/site/map.blade.php ENDPATH**/ ?>