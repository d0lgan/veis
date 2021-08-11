
<?php $__env->startSection('content'); ?>








     <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        <form method="post" action="<?php echo e(route('admin-attribute.update', $attribute->id)); ?>">
                                <?php echo method_field('put'); ?>
                                <?php echo csrf_field(); ?>
                        
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование - <?php echo e($attribute->name_ru); ?></strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="<?php echo e(route('admin-attribute-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <ul class="nav nav-tabs px-3" id="myTab">
                            <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                            <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                        </ul>
                        <div style="background-color: #fff" class="p-3 tab-content">
                            <div style="background-color: #fff" class="w-100 p-3 tab-pane active" id="main">
                                <div class="row">
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
                                            <?php echo $__env->make('admin.partials.title', ['item' => $attribute, 'title_name' => 'Значение (для фильтра)', 'title' => false, 'name' => true, 'long_title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="form-group w-100 d-flex align-items-center justify-content-between">
                                        <div class="form-group col-6">
                                            <label class="control-label" for="group_attribute_id">Группа аттрибутов:</label>
                                            <group-attributes-component :group="<?php echo e(json_encode($group_attributes)); ?>" :s="<?php echo e(json_encode($attribute->group_attribute_id)); ?>"></group-attributes-component>
                                            
                                        </div>

                                        <div class="form-group col-6">
                                            <label class="control-label" for="name">Сортировка:</label>
                                            <input class="form-control" type="text" name="sort" value="<?php echo e($attribute->sort ?? ''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #fff" class="tab-pane p-3 fade show" id="seo" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                        href="#language_seo_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>"
                                                        data-toggle="tab"
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
                                        <?php echo $__env->make('admin.partials.url', ['item' => $attribute, 'slug_t' => $attribute->slug, 'title' => false, 'description' => false, 'slug' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>

                                </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>












    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Редактирование - <?php echo e($attribute->title); ?></h1>
            <div class="col-12 d-flex justify-content-end">
                <a href="<?php echo e(route('admin-attribute-index')); ?>" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">

                        <form method="post" action="<?php echo e(route('admin-attribute.update', $attribute->id)); ?>">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row">
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
                                        <?php echo $__env->make('admin.partials.title', ['item' => $attribute, 'title' => true, 'title_name' => 'Значение (для фильтра):', 'long_title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>

                                <div class="form-group col-6 col-md-5">
                                    <label class="control-label" for="group_attribute_id">Группа аттрибутов:</label>
                                    <group-attributes-component :group="<?php echo e(json_encode($group_attributes)); ?>" :s="<?php echo e(json_encode($attribute->group_attribute_id)); ?>"></group-attributes-component>
                                    
                                </div>

                                <div class="form-group col-6 col-md-3">
                                    <label class="control-label" for="name">Сортировка:</label>
                                    <input class="form-control" type="text" name="sort" value="<?php echo e($attribute->sort ?? ''); ?>">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <input class="btn btn-primary" type="submit" value="Сохранить">
                                </div>

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
            if (document.getElementById(id).style.display == "none") {
                document.getElementById(id).style.display = "";
            } else {
                document.getElementById(id).style.display = "none";
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/attribute/edit.blade.php ENDPATH**/ ?>