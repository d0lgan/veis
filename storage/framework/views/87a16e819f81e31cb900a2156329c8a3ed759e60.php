<?php $__env->startSection('content'); ?>

    <div id="app">
        <table-products-component :manufacturers="<?php echo e(json_encode($manufacturers)); ?>" :categories="<?php echo e(json_encode($categories)); ?>" :prod="<?php echo e(json_encode($products)); ?>" :settings="<?php echo e(json_encode($settings)); ?>" :count_p="<?php echo e(json_encode($count_p)); ?>"></table-products-component>
    </div>


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('test'); ?>
    <script type="text/javascript">
        
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/product/index.blade.php ENDPATH**/ ?>