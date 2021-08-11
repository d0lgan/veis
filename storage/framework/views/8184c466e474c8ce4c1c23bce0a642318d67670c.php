
<?php $__env->startSection('content'); ?>




    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="mb-4 d-flex header justify-content-between align-items-center">

                            <div class="col">
                                <h2 class="title-1">Производители</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="<?php echo e(route('admin-manufacturers.create')); ?>">Добавить</a>
                                </div>
                            </div>
                        </div>





                        <table class="table table-data2 datatable border-0" >
                            <thead class="border-0">
                                <tr class="border-0">
                                    <th class="align-middle py-1 pr-3">Название RU</th>
                                    <th class="align-middle py-1 pr-3">Название UK</th>
                                    <th class="align-middle py-1 pr-3">ЧПУ RU</th>
                                    <th class="align-middle py-1 pr-3">ЧПУ UK</th>
                                    <th class="align-middle py-1 pr-3">Сортировка</th>
                                    <th class="align-middle py-1 pr-3 bg-none"></th>
                                </tr>
                            </thead>

                            <tbody class="border-0">
                                <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="align-middle py-1 pr-3"><?php echo e($manufacturer->title_ru); ?></td>
                                        <td class="align-middle py-1 pr-3"><?php echo e($manufacturer->title_uk); ?></td>
                                        <td class="align-middle py-1 pr-3"><?php echo e($manufacturer->slug_ru); ?></td>
                                        <td class="align-middle py-1 pr-3"><?php echo e($manufacturer->slug_uk); ?></td>
                                        <td class="align-middle py-1 pr-3"><?php echo e($manufacturer->sort); ?></td>
                                        <td class="align-middle py-1 pr-3">

                                            <div class="table-data-feature d-flex justify-content-center">
                                                <a href="<?php echo e(route('admin-manufacturers.edit',$manufacturer->id)); ?>" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                    <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                </a>


                                                <form method="post" action="<?php echo e(route('admin-manufacturers.destroy',$manufacturer->id)); ?>"
                                                      role="form">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="color: #808080"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>






                        <!-- <div style="border-radius: 10px" class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>ЧПУ</th>
                                    <th>Сортировка</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($manufacturer->title); ?></td>
    
                                        <td><?php echo e($manufacturer->slug); ?></td>
                                        <td><?php echo e($manufacturer->sort); ?></td>
                                        <td class="d-flex">
                                            <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="<?php echo e(route('admin-manufacturers.edit',$manufacturer->id)); ?>"><i class="fas fa-pencil-alt"></i></a></p>
                                            <form method="post" action="<?php echo e(route('admin-manufacturers.destroy',$manufacturer->id)); ?>" role="form">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

    
                                                <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                            </form>
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
            <h1>Производители</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="col-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="<?php echo e(route('admin-manufacturers.create')); ?>">Добавить</a>
                        </div>
                        <hr>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>ЧПУ</th>
                                <th>Сортировка</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($manufacturer->title); ?></td>

                                    <td><?php echo e($manufacturer->slug); ?></td>
                                    <td><?php echo e($manufacturer->sort); ?></td>
                                    <td class="d-flex">
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="<?php echo e(route('admin-manufacturers.edit',$manufacturer->id)); ?>"><i class="fas fa-pencil-alt"></i></a></p>
                                        <form method="post" action="<?php echo e(route('admin-manufacturers.destroy',$manufacturer->id)); ?>" role="form">
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/manufacturer/index.blade.php ENDPATH**/ ?>