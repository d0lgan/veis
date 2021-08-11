

<?php $__env->startSection('title', $locale == 'ru' ? $page->title_ru : $page->title_uk); ?>

<?php $__env->startSection('content'); ?>
<site-basket-component :locale="<?php echo e(json_encode($locale)); ?>" :way-to-pays="<?php echo e(json_encode($wayToPays)); ?>" :translate="<?php echo e(json_encode($translate)); ?>" :settings="<?php echo e(json_encode($settings)); ?>"></site-basket-component>

<section class="work">
    <h2 class="work__title"><?php echo e(__('site.howWeDoing.how')); ?></h2>
    <p class="work__subtitle"><?php echo e(__('site.howWeDoing.schema')); ?></p>
    <div class="work__inner">
        <div class="work__iteam">
            <img src="/assets/front/img/list-alt.svg">
            <p><?php echo e(__('site.howWeDoing.leave')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/phone-volume.svg">
            <p><?php echo e(__('site.howWeDoing.call_back')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/check-double.svg">
            <p><?php echo e(__('site.howWeDoing.clarify')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/box-open.svg">
            <p><?php echo e(__('site.howWeDoing.form')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/truck-loading.svg">
            <p><?php echo e(__('site.howWeDoing.send')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/child.svg">
            <p><?php echo e(__('site.howWeDoing.receive')); ?></p>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.layout_without_anything', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/site/basket.blade.php ENDPATH**/ ?>