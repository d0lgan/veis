<?php $__env->startSection('content'); ?>

    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="mb-4 d-flex header justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="title-1">Атрибуты</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center mb-3">
                                    <a type="button" class="btn btn-primary ml-3" href="<?php echo e(route('admin-attribute.create')); ?>">Добавить</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <table class="table table-data2 datatable border-0" >
                                <thead>
                                    <tr>
                                        <th class="align-middle py-1 pr-3">Название RU</th>
                                        <th class="align-middle py-1 pr-3">Название UK</th>
                                        <th class="align-middle py-1 pr-3">Группа</th>
                                        <th class="align-middle py-1 pr-3">Сортировка</th>
                                        <th class="align-middle py-1 pr-3 bg-none"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="border-right-0">
                                            <td class="align-middle py-1 pr-3"><?php echo e($attribute->name_ru); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php echo e($attribute->name_uk); ?></td>
                                            <td class="align-middle py-1 pr-3"><?php if($attribute->group_attribute != null): ?><?php echo e($attribute->group_attribute->title_ru); ?><?php endif; ?></td>
                                            
                                            <td class="align-middle py-1 pr-3"><?php echo e($attribute->sort); ?></td>
                                            <td class="align-middle py-1 pr-3">


                                                 <div class="table-data-feature d-flex justify-content-center">
                                                    <a href="<?php echo e(route('admin-attribute.edit',$attribute->id)); ?>" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                    </a>


                                                    <form method="post" action="<?php echo e(route('admin-attribute.destroy',$attribute->id)); ?>"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


























<!--     <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Атрибуты</h1>
            <div class="row">
            <div class="col-md-12">
           <div class="table-responsive">
               <div class="col-12 d-flex justify-content-end">
                    <a type="button" class="btn btn-primary" href="<?php echo e(route('admin-attribute.create')); ?>">ДобавитьaAA</a>
               </div>
               <hr>
        <table class="table table-striped table-hover table-bordered datatable">
            <thead>
            <tr>
                <th>Название</th>
                <th>Группа</th>
                <th>Сортировка</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($attribute->title); ?></td>
                    <td><?php if($attribute->group_attribute != null): ?><?php echo e($attribute->group_attribute->title); ?><?php endif; ?></td>
                    
                    <td><?php echo e($attribute->sort); ?></td>
                    <td class="d-flex">
                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="<?php echo e(route('admin-attribute.edit',$attribute->id)); ?>"><i class="fas fa-pencil-alt"></i></a></p>
                        <form method="post" action="<?php echo e(route('admin-attribute.destroy',$attribute->id)); ?>" role="form">
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
                <div class="col-12 d-flex justify-content-end p-3 pr-5 pt-5" style="background:#fff;">
                    <a href="#">Техподдержка</a>
                </div>
    </div>
    </div>

    </div> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/attribute/index.blade.php ENDPATH**/ ?>