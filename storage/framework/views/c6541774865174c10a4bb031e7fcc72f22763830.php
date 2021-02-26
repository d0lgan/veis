<?php $__env->startSection('content'); ?>



    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="w-100">

                            <div class="mb-4 d-flex w-100 header align-items-center justify-content-between">

                                <div class="col">
                                    <h2 class="title-1">Заказы</h2>
                                </div>   


                                <div class="datateble-actions col">
                                    <div class="row w-100 justify-content-end align-items-center m-0">
                                        <a type="button" class="btn btn-primary ml-3" href="<?php echo e(route('admin-orders.create')); ?>">Добавить</a>
                                    </div>
                                </div>
                            </div>






                            <table class="table table-data2 datatable border-0" >
                            	<thead>
                                    <tr class="border-0">
                                        <th class="align-middle py-1 pr-3">№</th>
                                        <th class="align-middle py-1 pr-3">Покупатель</th>
                                        <th class="align-middle py-1 pr-3">Телефон</th>
                                        <th class="align-middle py-1 pr-3">Email</th>
                                        <th class="align-middle py-1 pr-3">Статус</th>
                                        <th class="align-middle py-1 pr-3">Итого</th>
                                        <th class="align-middle py-1 pr-3">Дата создания</th>
                                        <th class="align-middle py-1 pr-3 bg-none"></th>
                                    </tr>
                                </thead>

                                <tbody class="border-0">
                                	<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->id); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->name); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->phone); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->email); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->status); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->total); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($order->created_at); ?></td>
                                            <td class="align-middle py-1 pr-3">
                                                <div class="d-flex">
                                                    <a href="/admin-orders/<?php echo e($order->id); ?>/edit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                    </a>


                                                    <form method="post" action="<?php echo e(route('admin-orders.destroy',$order->id)); ?>"
                                                          role="form">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="ml-2 item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i style="font-size: 16px; color: #808080" class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>


















                            <!-- <div style="border-radius: 10px" class="table-responsive m-b-40">

                                <table style="border-radius: 10px; overflow-x: scroll;" class="table table-data3">
                                    <thead class="border-0">
                                    <tr class="border-0">
                                        <th style="vertical-align: middle;">№</th>
                                        <th style="vertical-align: middle;">Покупатель</th>
                                        <th style="vertical-align: middle;">Телефон</th>
                                        <th style="vertical-align: middle;">Email</th>
                                        <th style="vertical-align: middle;">Статус</th>
                                        <th style="vertical-align: middle;">Итого</th>
                                        <th style="vertical-align: middle;">Дата создания</th>
                                        <th style="vertical-align: middle;"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="border-0">
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($order->id); ?></td>
                                            <td><?php echo e($order->name); ?></td>
                                            <td></td>
                                            <td></td>
                                            <td><?php echo e($order->status); ?></td>
                                            <td><?php echo e($order->total); ?></td>
                                            <td><?php echo e($order->created_at); ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="/admin-orders/<?php echo e($order->id); ?>/edit"><i class="fas fa-pencil-alt"></i></a></p>
                                                    <form method="post" action="<?php echo e(route('admin-orders.destroy',$order->id)); ?>" role="form">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                   
                                    </tbody>
                                </table>

                                
                            </div> -->


                    </div>
                    
                </div>
            </div>
        </div>
    </div>





    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Заказы</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="col-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="<?php echo e(route('admin-orders.create')); ?>">Добавить</a>
                        </div>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Покупатель</th>
                                <th>Статус</th>
                                <th>Итого</th>
                                <th>Дата создания</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->status); ?></td>
                                    <td><?php echo e($order->total); ?></td>
                                    <td><?php echo e($order->created_at); ?></td>
                                    <td class="d-flex">
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="/admin-orders/<?php echo e($order->id); ?>/edit"><i class="fas fa-pencil-alt"></i></a></p>
                                        <form method="post" action="<?php echo e(route('admin-orders.destroy',$order->id)); ?>" role="form">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                           
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/order/index.blade.php ENDPATH**/ ?>