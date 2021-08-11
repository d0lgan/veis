
<?php $__env->startSection('content'); ?>





    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        <form method="post" action="<?php echo e(route('admin-group-attribute.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="my-3 d-flex align-items-center justify-content-between">
                            <strong>Создание Группы Атрибутов</strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="<?php echo e(route('admin-group-attribute-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="w-100 p-3">
                            
                                <div class="bs-example">
                                        
                                        <div class="form-group">
                                            <ul class="nav nav-tabs" id="language">
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                                href="#language_main_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>"
                                                                >
                                                            <?php if($lang->locate_code == 'ru'): ?>
                                                                <img style="height: 25px;" src="<?php echo e(asset('/images/russia.svg')); ?>" alt="">
                                                            <?php elseif($lang->locate_code == 'uk'): ?>
                                                                <img style="height: 25px;" src="<?php echo e(asset('/images/ukraine.svg')); ?>" alt="">
                                                            <?php endif; ?>
                                                        </a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>

                                            <div class="tab-content">
                                                <?php echo $__env->make('admin.partials.title', ['item' => $group_attribute, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div id="app" class="w-100">
                                                <select-component :categories="<?php echo e(json_encode($categories)); ?>"></select-component>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="public" class="align-middle mt-2">Отображение</label>
                                            <select name="public" id="public" class="form-control">
                                                <option value="1">Да</option>
                                                <option value="0">Нет</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="sort" class="align-middle mt-2">Сортировка</label>
                                            <input type="text" name="sort" class="form-control">
                                        </div>


                                        

                                    </form>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1 class="m-0">Создание Группы Атрибутов</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="<?php echo e(route('admin-group-attribute-index')); ?>" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <form method="post" action="<?php echo e(route('admin-group-attribute.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-12 form-group">
                                <ul class="nav nav-tabs" id="language">
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                    href="#language_main_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>"
                                                    >
                                                <?php if($lang->locate_code == 'ru'): ?>
                                                    <img style="height: 25px;" src="<?php echo e(asset('/images/russia.svg')); ?>" alt="">
                                                <?php elseif($lang->locate_code == 'uk'): ?>
                                                    <img style="height: 25px;" src="<?php echo e(asset('/images/ukraine.svg')); ?>" alt="">
                                                <?php endif; ?>
                                            </a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                                <div class="tab-content">
                                    <?php echo $__env->make('admin.partials.title', ['item' => $group_attribute, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>

                            <div class="form-group">

                                <div id="app">
                                    <select-component :categories="<?php echo e(json_encode($categories)); ?>"></select-component>
                                </div>
                            </div>
                            <div class="form-group col-md-3 row mt-4">
                                <label for="public" class="col-md-6 align-middle mt-2">Отображение</label>
                                <select name="public" id="public" class="form-control col-md-6">
                                    <option value="1">Да</option>
                                    <option value="0">Нет</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 row mt-4">
                                <label for="sort" class="col-md-6 align-middle mt-2">Сортировка</label>
                                <input type="text" name="sort" class="form-control col-md-6">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </form>


                            

                    </div>
                </div>
            </div>
          </div>
        </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/group-attribute/create.blade.php ENDPATH**/ ?>