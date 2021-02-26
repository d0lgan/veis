<?php $__env->startSection('content'); ?>







    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">
                        <form method="post" action="<?php echo e(route('admin-group-attribute.update', $group_attribute->id)); ?>">
                                <?php echo method_field('put'); ?>
                                <?php echo csrf_field(); ?>
                        
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование - <?php echo e($group_attribute->title_ru); ?></strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="<?php echo e(route('admin-group-attribute-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div class="w-100 p-3" style="background-color: #fff">

                                <div class= "form-group">
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
                                        <select-component :default="<?php echo e(json_encode($group_attribute->categories)); ?>" :categories="<?php echo e(json_encode($categories)); ?>"></select-component>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="public" class="align-middle mt-2">Отображение</label>
                                    <select name="public" id="public" class="form-control ">
                                        <option value="1">Да</option>
                                        <option <?php if($group_attribute->public == 0): ?> selected <?php endif; ?> value="0">Нет</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sort" class=" align-middle mt-2">Сортировка</label>
                                    <input type="text" value="<?php echo e($group_attribute->sort); ?>" name="sort" class="form-control ">
                                </div>
                            
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>















    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Редактирование - <?php echo e($group_attribute->name); ?></h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="<?php echo e(route('admin-group-attribute-index')); ?>" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">



                        <form method="post" action="<?php echo e(route('admin-group-attribute.update', $group_attribute->id)); ?>">
                            <?php echo method_field('put'); ?>
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
                                    <select-component :default="<?php echo e(json_encode($group_attribute->categories)); ?>" :categories="<?php echo e(json_encode($categories)); ?>"></select-component>
                                </div>
                            </div>
                            <div class="form-group col-md-3 row">
                                <label for="public" class="col-md-6 align-middle mt-2">Отображение</label>
                                <select name="public" id="public" class="form-control col-md-6">
                                    <option value="1">Да</option>
                                    <option <?php if($group_attribute->public == 0): ?> selected <?php endif; ?> value="0">Нет</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 row">
                                <label for="sort" class="col-md-6 align-middle mt-2">Сортировка</label>
                                <input type="text" value="<?php echo e($group_attribute->sort); ?>" name="sort" class="form-control col-md-6">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>






                        
                    </div>
                    </div>
                </div>
            </div>
        </div> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        function spoiler(id) {
            if   (  document.getElementById(id).style.display == "none" )
            {  document.getElementById(id).style.display = "";   }
            else {  document.getElementById(id).style.display = "none"; }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/group-attribute/edit.blade.php ENDPATH**/ ?>