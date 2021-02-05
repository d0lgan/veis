<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="section__content section__content--p30">

            <div id="app" class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <div class="mb-3 w-100 d-flex header justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="title-1">Акции</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="<?php echo e(route('admin-stocks.create')); ?>">Добавить</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 datatable border-0">
                                <thead>
                                    <tr>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">№</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Название</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Ярлык</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Статус</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Отображение</th>
                                        <th style="vertical-align: middle; padding: 5px !important; background-image: none !important;" class="align-middle stick"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td style="vertical-align: middle; padding: 5px !important"><?php echo e($stock->id); ?></td>
                                            <td style="vertical-align: middle; padding: 5px !important"><?php echo e($stock->title); ?></td>
                                            <td style="vertical-align: middle; padding: 5px !important"><?php echo e($stock->label); ?></td>
                                            <td style="vertical-align: middle; padding: 5px !important">
                                                <?php if($stock->public == 0): ?>
                                                    <p style="color: red;">Не активная</p>
                                                <?php else: ?>
                                                    <p style="color: #3cc000;">Активная</p>
                                                <?php endif; ?>
                                            </td>
                                            <td style="vertical-align: middle; padding: 5px !important"></td>
                                            <td style="vertical-align: middle; padding: 5px !important">
                                                <div class="table-data-feature d-flex justify-content-center">
                                                    <a href="<?php echo e(route('admin-stocks.edit',$stock->id)); ?>" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px" class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form method="post" action="<?php echo e(route('admin-stocks.destroy',$stock->id)); ?>" role="form">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" title="Удалить" class="item p-1 d-flex justify-content-center align-items-center" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt" style="font-size: 16px"></i></button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/stock/index.blade.php ENDPATH**/ ?>