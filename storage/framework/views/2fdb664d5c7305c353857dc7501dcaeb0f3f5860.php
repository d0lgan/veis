
<?php $__env->startSection('content'); ?>









    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">
                        <div id="app" class="w-100">

                            <div class="w-100">
                                <?php echo Form::model($manufacturer,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-manufacturers.update',$manufacturer->id]]); ?>

                                
                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                    <strong>Редактирование - <?php echo e($manufacturer->title); ?></strong>

                                    <div class="d-flex justify-content-end align-items-center">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="<?php echo e(route('admin-manufacturers-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>

                                </div>

                                <ul class="nav nav-tabs px-3" id="myTab">
                                    <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                                </ul>

                                <div style="background-color: #fff" class="p-3 tab-content">
                                    <div style="background-color: #fff" class="tab-pane active" id="main">
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
                                                <?php echo $__env->make('admin.partials.title', ['item' => $manufacturer, 'title' => true,  'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>


                                        <?php if($manufacturer->image != null): ?>
                                            <div class="col-md-3">
                                                <img class="col-md-12" src="<?php echo e(asset('/house/uploads/' . $manufacturer->image)); ?>" />
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="del">
                                                <label>
                                                    Удалить изображение
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-md-4 form-group">
                                            <?php echo Form::label('image', 'Изображение',['class' => 'control-label']); ?>

                                            <?php echo Form::file('image', array_merge(['class' => 'form-control'])); ?>

                                        </div>
                                        
                                        <div class="col-md-4 form-group">
                                            <?php echo Form::label('sort', 'Сортировать',['class' => 'control-label']); ?>

                                            <?php echo Form::text('sort',$manufacturer->sort, array_merge(['class' => 'form-control', 'required' => 'required'])); ?>

                                        </div>
                                    </div>

                                    <div style="background-color: #fff" class="tab-pane" id="seo">
                                        <div class="col-md-12 form-group">
                                            <ul class="nav nav-tabs" id="language">
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                                href="#language_seo_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab"
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
                                                <?php echo $__env->make('admin.partials.url', ['item' => $manufacturer, 'title' => false, 'manufacturer_url' => '1', 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>

            </div>

    </div>














    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Редактирование - <?php echo e($manufacturer->title); ?></h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="<?php echo e(route('admin-manufacturers-index')); ?>" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <?php echo Form::model($manufacturer,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-manufacturers.update',$manufacturer->id]]); ?>


                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                            <li><a href="#seo" data-toggle="tab">Seo</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="main">
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
                                        <?php echo $__env->make('admin.partials.title', ['item' => $manufacturer, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                                <?php if($manufacturer->image != null): ?>
                                    <div class="col-md-3">
                                        <img class="col-md-12" src="<?php echo e(asset('/house/uploads/' . $manufacturer->image)); ?>" />
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="del">
                                        <label>
                                            Удалить изображение
                                        </label>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-4 form-group">
                                    <?php echo Form::label('image', 'Изображение',['class' => 'control-label']); ?>

                                    <?php echo Form::file('image', array_merge(['class' => 'form-control'])); ?>

                                </div>
                                <div class="col-md-4 form-group">
                                    <?php echo Form::label('link', 'Ссылка',['class' => 'control-label']); ?>

                                    <?php echo Form::text('link',$manufacturer->link, array_merge(['class' => 'form-control'])); ?>

                                </div>
                                <div class="col-md-4 form-group">
                                    <?php echo Form::label('sort', 'Сортировать',['class' => 'control-label']); ?>

                                    <?php echo Form::text('sort',$manufacturer->sort, array_merge(['class' => 'form-control'])); ?>

                                </div>
                            </div>
                            <div class="tab-pane" id="seo">

                                <div class="col-md-12 form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                        href="#language_seo_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab"
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
                                        <?php echo $__env->make('admin.partials.title', ['item' => $manufacturer, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="col-md-12 form-group">
                            <?php echo Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )); ?>

                        </div>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/manufacturer/edit.blade.php ENDPATH**/ ?>