<?php echo $__env->make('site.technical_mode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

    <?php if($settings->slide_home && count($slider) > 0): ?>
        <div class="row">
            <div class="col-lg-12">
                <carousel-component :slides="<?php echo e(json_encode($slider)); ?>"></carousel-component>
            </div>
        </div>
    <?php endif; ?>

    <?php if($settings->brands): ?>
        <div class="row col-md-12 mt-3" style="height: 50px;">
            <manufacturer-component :brands="<?php echo e(json_encode($brands)); ?>"></manufacturer-component>
        </div>
    <?php endif; ?>

    <?php if($settings->categories): ?>
        <div class="col-md-12">
            <categories-component :locale="<?php echo e(json_encode($locale)); ?>" :categories="<?php echo e(json_encode($categories)); ?>"></categories-component>
        </div>

    <?php endif; ?>

    <?php if($settings->universal): ?>
        <div class="row">
            <div class="col-md-12">
                <universal-component :translate="<?php echo e(json_encode($translate_universal)); ?>" :settings="<?php echo e(json_encode($settings)); ?>" :categories="<?php echo e(json_encode($new_categories)); ?>" :products="<?php echo e(json_encode($new_products)); ?>" :locale="<?php echo e(json_encode($locale)); ?>" :sell_products="<?php echo e(json_encode($sell_products)); ?>" :sell_categories="<?php echo e(json_encode($sell_categories)); ?>"></universal-component>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if(count($blog_articles) > 0): ?>
        <div class="row">
            <div class="col-md-12">
                <design-carousel-component :translate="<?php echo e(json_encode($translate_blog)); ?>" :articles="<?php echo e(json_encode($blog_articles)); ?>" :categories="<?php echo e(json_encode($blog_categories)); ?>"></design-carousel-component>
            </div>
        </div>
    <?php endif; ?>












    


    
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/site/home.blade.php ENDPATH**/ ?>