
<?php $__env->startSection('title', $locale == 'ru' ? $page->title_ru : $page->title_uk); ?>
<?php $__env->startSection('locale', $locale); ?>

<?php $__env->startSection('content'); ?>

    <site-search-page-component :translate="<?php echo e(json_encode($translate)); ?>" :locale="<?php echo e(json_encode($locale)); ?>" :query="<?php echo e(json_encode($query)); ?>"></site-search-page-component>

<section class="consul">
    <img src="/assets/front/img/consul.png" class="consul__foto">
    <div class="consul__block">
        <h2><?php echo e(__('site.consultation.want')); ?></h2>
        <form action="" method="" class="consul__block_input">
            <input type="text" placeholder="Ваш E-Mail">
            <input type="submit" value="<?php echo e(__('site.consultation.send')); ?>" name="">
        </form>
    </div>
    <img src="/assets/front/img/consul2.png" class="consul__foto2">
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.layout_with_long_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/site/search.blade.php ENDPATH**/ ?>