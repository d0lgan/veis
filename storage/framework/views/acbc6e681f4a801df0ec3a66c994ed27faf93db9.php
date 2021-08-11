
<?php $__env->startSection('content'); ?>
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <div id="app">
                <div class="row">
                    <order-component :statuses="<?php echo e(json_encode($statuses)); ?>" :way-to-pays="<?php echo e(json_encode($wayToPays)); ?>" :ord="<?php echo e(json_encode($order)); ?>" :prod="<?php echo e(json_encode($products)); ?>" :regi="<?php echo e(json_encode($regions)); ?>" :cit="<?php echo e(json_encode($cities)); ?>" :warehouse="<?php echo e(json_encode($warehouses)); ?>"></order-component>
                </div>
            </div>
        </div>
    </div>
</div>












    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/order/edit.blade.php ENDPATH**/ ?>