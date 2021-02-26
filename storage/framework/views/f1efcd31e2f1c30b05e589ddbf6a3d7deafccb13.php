<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div id="app">
                <div class="row">
                    <order-component :warehouse="<?php echo e(json_encode($warehouses)); ?>" :cities="<?php echo e(json_encode($cities)); ?>" :statuses="<?php echo e(json_encode($statuses)); ?>" :regi="<?php echo e(json_encode($regions)); ?>" :create="<?php echo e(json_encode(true)); ?>"></order-component>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/order/create.blade.php ENDPATH**/ ?>