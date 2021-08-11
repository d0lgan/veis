
<?php $__env->startSection('content'); ?>





    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="mb-4 d-flex header justify-content-between align-items-center">

                            <div class="col">
                                <h2 class="title-1">Группы Атрибутов</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="<?php echo e(route('admin-group-attribute.create')); ?>">Добавить</a>
                                </div>
                            </div>
                        </div>



                        <table class="table table-data2 datatable border-0" >
                            <thead class="border-0">
                                <tr class="border-0">
                                    <th class="align-middle py-1 pr-3">Название RU</th>
                                    <th class="align-middle py-1 pr-3">Название UK</th>
                                    <th class="align-middle py-1 pr-3">Категория</th>
                                    <th class="align-middle py-1 pr-3">Сортировка</th>
                                    <th class="align-middle py-1 pr-3">Отображение</th>
                                    <th class="align-middle py-1 pr-3 bg-none"></th>
                                </tr>
                            </thead>

                            <tbody class="border-0">
                                <?php $__currentLoopData = $group_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="align-middle py-1 pr-3"><?php echo e($group_attribute->title_ru); ?></td>
                                        <td class="align-middle py-1 pr-3"><?php echo e($group_attribute->title_uk); ?></td>
                                        <td class="align-middle py-1 pr-3">
                                            <?php $__empty_1 = true; $__currentLoopData = $group_attribute->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <span ><?php echo e($category->title_ru); ?></span><?php if($key < count($group_attribute->categories) - 1): ?><span>,</span><?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle py-1 pr-3"><?php echo e($group_attribute->sort); ?></td>
                                        <td class="align-middle py-1 pr-3">
                                            <?php if($group_attribute->public == 1): ?> Да <?php else: ?> Нет <?php endif; ?>
                                        </td>
                                        <td class="align-middle py-1 pr-3 d-flex justify-content-end">


                                            <a href="<?php echo e(route('admin-group-attribute.edit',$group_attribute->id)); ?>" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center mr-2 align-items-center" title="Редактировать">
                                                <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                            </a>


                                            <form method="post" action="<?php echo e(route('admin-group-attribute.destroy',$group_attribute->id)); ?>"
                                                  role="form">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                                <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="color: #808080"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>






                         <!-- <div style="border-radius: 10px" class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Название</th>
                                        <th class="border-0">Категория</th>
                                        <th class="border-0">Сортировка</th>
                                        <th class="border-0">Отображение</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $group_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="border-right-0 border-bottom">
                                            <td class="border-0"><?php echo e($group_attribute->title); ?></td>
                                            <td class="border-0">
                                                <?php $__empty_1 = true; $__currentLoopData = $group_attribute->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <span ><?php echo e($category->title); ?></span><?php if($key < count($group_attribute->categories) - 1): ?><span>,</span><?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                <?php endif; ?>
                                            </td>
                                            <td class="border-0 text-center">
                                                <?php echo e($group_attribute->sort); ?>

                                            </td>
                                            <td class="border-0 text-center">
                                                <?php if($group_attribute->public == 1): ?> Да <?php else: ?> Нет <?php endif; ?>
                                            </td>
                                            <td class="d-flex border-0">
                                                <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="<?php echo e(route('admin-group-attribute.edit',$group_attribute->id)); ?>"><i class="fas fa-pencil-alt"></i></a></p>
                                                <form method="post" action="<?php echo e(route('admin-group-attribute.destroy',$group_attribute->id)); ?>" role="form">
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
            <h1>Группы Атрибутов</h1>
            <div class="row">
            <div class="col-md-12">
           <div class="table-responsive">
               <div class="col-12 d-flex justify-content-end">
                    <a type="button" class="btn btn-primary" href="<?php echo e(route('admin-group-attribute.create')); ?>">Добавить</a>
               </div>
               <hr>
        <table class="table table-striped table-hover table-bordered datatable">
            <thead>
            <tr>
                <th>Название</th>
                <th>Категория</th>
                <th>Сортировка</th>
                <th>Отображение</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $group_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($group_attribute->title); ?></td>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $group_attribute->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <span ><?php echo e($category->title); ?></span><?php if($key < count($group_attribute->categories) - 1): ?><span>,</span><?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>
                    </td>
                    <td>
                        <?php echo e($group_attribute->sort); ?>

                    </td>
                    <td>
                        <?php if($group_attribute->public == 1): ?> Да <?php else: ?> Нет <?php endif; ?>
                    </td>
                    <td class="d-flex">
                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="<?php echo e(route('admin-group-attribute.edit',$group_attribute->id)); ?>"><i class="fas fa-pencil-alt"></i></a></p>
                        <form method="post" action="<?php echo e(route('admin-group-attribute.destroy',$group_attribute->id)); ?>" role="form">
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/group-attribute/index.blade.php ENDPATH**/ ?>