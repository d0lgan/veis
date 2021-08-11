
<?php $__env->startSection('content'); ?>





<div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row" id="app">

                            <div class="w-100 mb-3">
                                <?php echo Form::open(['method' => 'PUT','files' => true, 'route' =>['admin-categories.update', $category->id]]); ?>

                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <strong>Редактирование - <?php echo e($category->title_ru); ?></strong>

                                    <div class="m-0 p-0 d-flex align-items-center">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="<?php echo e(route('admin-categories-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>
                                </div>


                                <ul class="nav nav-tabs d-flex justify-content-start px-3" id="myTab">
                                    <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab"><strong>Основное</strong></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab"><strong>SEO</strong></a></li>
                                </ul>


                                <div style="background-color: #fff" class="tab-content">


                                    <div  style="background-color: #fff" class="tab-pane p-3 active" id="main">
                                    <div class="col-md-12 form-group">
                                        <ul class="nav nav-tabs" id="language">
                                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="nav-item"><a
                                                            href="#language_main_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>"
                                                            class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>">
                                                        <?php if($lang->locate_code == 'ru'): ?>
                                                            <img style="height: 25px;" src="<?php echo e(asset('/images/russia.svg')); ?>" alt="">
                                                        <?php elseif($lang->locate_code == 'uk'): ?>
                                                            <img style="height: 25px;" src="<?php echo e(asset('/images/ukraine.svg')); ?>" alt="">
                                                        <?php endif; ?>
                                                    </a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>

                                        <div style="background-color: #fff" class="tab-content">
                                            <?php echo $__env->make('admin.partials.title', ['item' => $category, 'title' => true,  'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                            <div class="row col-md-12">
                                                <div class="col-md-4 form-group">
                                                    <?php echo Form::label('parent_id', 'Выбрать (изменить) родителя',['class' =>
                                                    'control-label']); ?>

                                                    <?php echo Form::select('parent_id', $categories, $category->parent_id, ['class'=>'form-control']); ?>

                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="at_home">На главной</label>
                                                    <select name="at_home" id="at_home" class="form-control">
                                                        <option value="0">Нет</option>
                                                        <option <?php if($category->at_home == 1): ?> selected <?php endif; ?> value="1">Да</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="sort">Сортировка</label>
                                                    <input type="number" value="<?php echo e($category->sort); ?>" name="sort" class="form-control">
                                                </div>
                                            </div>
                                            

                                            <div class="d-flex">
                                                <?php if($category->image): ?>

                                                    <div class="form-check col-md-6">
                                                        <img class="col-md-10" src="<?php echo e(asset('/house/uploads/' . $category->image)); ?>" alt="">
                                                        <div class="d-flex align-items-center">
                                                            <label for="del" class="d-flex align-items-center m-0">
                                                                Удалить изображение
                                                            </label>
                                                            <input class="m-l-15" type="checkbox" id="del" name="del">
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="form-group col-md-6">
                                                    <label for="image">Изображение</label>
                                                    <input type="file" id="image" name="image" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <div id="app">
                                                        <select-component :default="<?php echo e(json_encode($category->attributes)); ?>"
                                                                          :categories="<?php echo e(json_encode($attributes)); ?>"
                                                                          :title="<?php echo e(json_encode('Aтрибуты')); ?>"
                                                                          :title-or-name="<?php echo e(json_encode('name')); ?>"
                                                                          id="category"></select-component>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-3" id="seo">
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
                                        <?php echo $__env->make('admin.partials.url', ['item' => $category, 'title' => false, 'category_url' => '1', 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <?php echo Form::close(); ?>

                            </div>
                    </div>
            </div>
    </div>














    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Редактирование <?php echo e($category->title); ?></h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="<?php echo e(route('admin-categories-index')); ?>" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            <?php echo Form::open(['method' => 'PUT','files' => true, 'route' =>['admin-categories.update', $category->id]]); ?>

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                                <li><a href="#seo" data-toggle="tab">SEO</a></li>
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
                                            <?php echo $__env->make('admin.partials.title', ['item' => $category, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                            <div class="row col-md-12">
                                                <div class="col-md-4 form-group">
                                                    <?php echo Form::label('parent_id', 'Выбрать (изменить) родителя',['class' =>
                                                    'control-label']); ?>

                                                    <?php echo Form::select('parent_id', $categories, $category->parent_id, ['class'=>'form-control']); ?>

                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="at_home">На главной</label>
                                                    <select name="at_home" id="at_home" class="form-control">
                                                        <option value="0">Нет</option>
                                                        <option <?php if($category->at_home == 1): ?> selected <?php endif; ?> value="1">Да</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="sort">Сортировка</label>
                                                    <input type="number" value="<?php echo e($category->sort); ?>" name="sort" class="form-control">
                                                </div>
                                            </div>
                                            <?php if($category->image): ?>
                                                <img class="col-md-2" src="<?php echo e(asset('/house/uploads/' . $category->image)); ?>" alt="">

                                                <div class="form-check">
                                                    <input type="checkbox" name="del">
                                                    <label>
                                                        Удалить изображение
                                                    </label>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group col-md-4">
                                                <label for="image">Изображение</label>
                                                <input type="file" id="image" name="image" class="form-control">
                                            </div>



                                        </div>
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
                                            <?php echo $__env->make('admin.partials.title', ['item' => $category, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                            <div class="form-group col-md-12">
                                                <label for="slug">Чпу</label>
                                                <input type="text" value="<?php echo e($category->slug); ?>" id="title" name="slug" class="form-control" required>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 ">
                                        <?php echo Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'])); ?>

                                    </div>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/category/edit.blade.php ENDPATH**/ ?>