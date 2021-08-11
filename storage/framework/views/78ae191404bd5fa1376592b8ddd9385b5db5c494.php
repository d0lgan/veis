

<?php $__env->startSection('title', $locale == 'ru' ? $page->title_ru : $page->title_uk); ?>
<?php $__env->startSection('locale', $locale); ?>

<?php $__env->startSection('content'); ?>

    <site-catalog-component :translate="<?php echo e(json_encode($translate)); ?>" :locale="<?php echo e(json_encode($locale)); ?>" :filters="<?php echo e(json_encode($filters)); ?>" :instant-category="<?php echo e(json_encode($instantCategory)); ?>" :child-categories="<?php echo e(json_encode($childCategories)); ?>" :instant-manufacturer="<?php echo e(json_encode($instantManufacturer)); ?>" :instant-tag="<?php echo e(json_encode($instantTag)); ?>" :instant-redirect="<?php echo e(json_encode($instantRedirect)); ?>"></site-catalog-component>

    <section class="consul">
        <img src="<?php echo e(asset("assets/front/img/consul.png")); ?>" class="consul__foto">
        <div class="consul__block">
            <h2><?php echo e(__('site.consultation.want')); ?></h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="<?php echo e(__('site.consultation.send')); ?>" name="">
            </form>
        </div>
        <img src="<?php echo e(asset("assets/front/img/consul2.png")); ?>" class="consul__foto2">
    </section>
    <section class="about">
        <site-catalog-description-component :desctran="<?php echo e(json_encode($desctran)); ?>" :desc="<?php echo e(json_encode($desc)); ?>" :locale="<?php echo e(json_encode($locale)); ?>" :instant-category="<?php echo e(json_encode($instantCategory)); ?>"></site-catalog-description-component>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.layout_with_short_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/site/catalog.blade.php ENDPATH**/ ?>