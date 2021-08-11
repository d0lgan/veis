
<?php $__env->startSection('content'); ?>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div id="app">
        <table-products-component :manufacturers="<?php echo e(json_encode($manufacturers)); ?>" :stocks="<?php echo e(json_encode($stocks)); ?>" :categories="<?php echo e(json_encode($categories)); ?>" :prod="<?php echo e(json_encode($products)); ?>" :settings="<?php echo e(json_encode($settings)); ?>" :count_p="<?php echo e(json_encode($count_p)); ?>"></table-products-component>
    </div>


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('test'); ?>
    <script type="text/javascript">
        
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/product/index.blade.php ENDPATH**/ ?>