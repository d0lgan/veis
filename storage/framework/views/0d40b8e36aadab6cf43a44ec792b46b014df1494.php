
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="w-100">
                        <div id="app">
                            <statistics-component></statistics-component>


                            <div class="col mb-4">
                                <h2 class="title-1">Брошенные <span style="text-transform: lowercase;">к</span>орзины
                                </h2>
                            </div>


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center mt-1 m-0">

                                </div>
                            </div>

                            <table class="table table-data2 border-0"
                                   style="border-collapse: separate; border-spacing: 0 5px">
                                <thead>
                                <tr>
                                    <th class="align-middle py-2 pr-3">№</th>
                                    <th class="align-middle py-2 pr-3">Имя</th>
                                    <th class="align-middle py-2 pr-3">Email</th>
                                    <th class="align-middle py-2 pr-3">Телефон</th>
                                    <th class="align-middle py-2 pr-3">Дата</th>
                                    <th class="align-middle py-2 pr-3">Товаров</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="align-middle py-2 pr-3"><?php echo e($order->id); ?></td>
                                        <td class="align-middle py-2 pr-3"><?php echo e($order->name); ?></td>
                                        <td class="align-middle py-2 pr-3"><?php echo e($order->email); ?></td>
                                        <td class="align-middle py-2 pr-3"><?php echo e($order->phone); ?></td>
                                        <td class="align-middle py-2 pr-3"><?php echo e($order->created_at); ?></td>
                                        <td class="align-middle py-1 pr-3" style="" title="<?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($product['name'] . "\n"); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>"><?php echo e(count($order->products)); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/home.blade.php ENDPATH**/ ?>