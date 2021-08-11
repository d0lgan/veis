
<?php $__env->startSection('content'); ?>


    <div class="main-content">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100" style="background-color: transparent;">
                        <?php echo Form::open(['method' => 'post','route' => ['admin-products.store'],'files' => true,
                                'multiple' => 'multiple']); ?>

                        <div style="background-color: transparent;" class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Новый товар</strong>

                            <div class="m-0 p-0 d-flex justify-content-end">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="<?php echo e(route('admin-products-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <ul class="nav nav-tabs d-flex justify-content-around" id="myTab">
                            <li class="nav-item"><a class="nav-link active" href="#desc" data-toggle="tab"><strong>Основное</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#data" data-toggle="tab"><strong>Данные</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#gallery" data-toggle="tab"><strong>Изображения</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#optii" data-toggle="tab"><strong>Атрибуты</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#option" data-toggle="tab"><strong>Опции</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#tags" data-toggle="tab"><strong>Теги</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#glasses_sizes" data-toggle="tab"><strong>Размеры (очки)</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab"><strong>Seo</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#add" data-toggle="tab"><strong>Доп</strong></a></li>
                        </ul>

                        <div class="tab-content" style="background-color: #fff">
                            <div style="background-color: #fff;" class="tab-pane p-3 active" id="desc">
                                <div class="col-md-12 form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>">
                                                <a
                                                        href="#language_main_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>"
                                                >
                                                    <?php if($lang->locate_code == 'ru'): ?>
                                                        <img style="height: 25px;" src="<?php echo e(asset('/images/russia.svg')); ?>" alt="">
                                                    <?php elseif($lang->locate_code == 'uk'): ?>
                                                        <img style="height: 25px;" src="<?php echo e(asset('/images/ukraine.svg')); ?>" alt="">
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                    <div class="tab-content">
                                        <?php echo $__env->make('admin.partials.title', ['item' => $product, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #fff;" class="tab-pane p-3" id="add">
                                <div class="col-md-12 form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                        href="#language_add_<?php echo e($lang->locate_code); ?>" class="nav-link <?php echo e($key == 0 ? 'active' : null); ?>" data-toggle="tab"
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
                                        <?php echo $__env->make('admin.partials.title', ['item' => $product, 'title' => false, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'add', 'additional' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label for="how_size_image">Изображение</label>
                                            <input type="file" id="how_size_image" name="how_size_image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div style="background-color: #fff;" class="tab-pane p-3" id="data">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="category">Категория</label>
                                            <category-component :categories="<?php echo e(json_encode($categories_json)); ?>"
                                                                id="category"></category-component>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <div id="app">
                                                <select-component
                                                        :categories="<?php echo e(json_encode($categories_json)); ?>"></select-component>
                                            </div>


                                        <!-- <?php echo Form::label('manufacturer_id', 'Производитель',['class' => 'control-label']); ?>

                                        <?php echo Form::select('manufacturer_id', $manufacturers, old('manufacturer_id'), ['class'=>'form-control']); ?> -->
                                        </div>


                                        <div class="col-md-4 form-group">
                                            <label>Сортировка</label>
                                            <input class="form-control" type="text" name="">
                                        </div>
                                    <!-- <div class="col-md-4 form-group">
                                        <?php echo Form::label('supplier', 'Поставщик',['class' => 'control-label']); ?>

                                    <?php echo Form::select('supplier', $suppliers, old('supplier'), ['class'=>'form-control']); ?>

                                            </div> -->

                                    </div>
                                    <div class="row my-4">
                                        <div class="col-md-3 form-group">

                                            <?php echo Form::label('manufacturer_id', 'Производитель',['class' => 'control-label']); ?>

                                            <?php echo Form::select('manufacturer_id', $manufacturers, old('manufacturer_id'), ['class'=>'form-control']); ?>

                                        </div>
                                    <!-- <div class="col-md-6 form-group">
                                        <select-component
                                                :categories="<?php echo e(json_encode($categories_json)); ?>"></select-component>
                                    </div> -->
                                        <div class="col-md-3 form-group">
                                            <label for="vendor_code">Артикул</label>
                                            <input class="form-control" required type="text" name="vendor_code"
                                                   id="vendor_code">
                                        </div>

                                        <div class="col-md-2 form-group">
                                        <?php echo Form::label('stock_id', 'Ярлык',['class' => 'control-label']); ?>

                                        <select id="stock_id" name="stock_id" class="form-control">
                                            <option value="" selected>Без ярлыка</option>
                                            <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($id); ?>"><?php echo e($title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <!-- <label for="model">Модель</label>
                                        <input class="form-control" type="text" name="model" id="model"> -->
                                        </div>

                                        <div class="col-md-2 form-group">
                                            <label for="availability">Наличие</label>
                                            <select name="availability" id="availability"
                                                    class="form-control">
                                                <option value="1">В наличии</option>
                                                <option value="0">Нет в наличнии</option>
                                                <option value="2">Ожидаеться</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 d-flex align-items-end">
                                            <label for="public">Отображение</label>
                                            <label class="switch switch-3d switch-success ml-3">
                                                <input type="checkbox" class="switch-input" id="public" checked="true">
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="jumbotron p-3">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label for="ude">УДЕ</label>
                                                        <input class="form-control" type="text" name="ude"
                                                               id="ude">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="course">Курс</label>
                                                        <input class="form-control" type="text" name="course"
                                                               id="course">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="price">Цена</label>
                                                        <input class="form-control" type="text" name="price"
                                                               id="price">
                                                    </div>

                                                    <div class="form-group col-md-1">
                                                        <label for="percent">%</label>
                                                        <input class="form-control" type="text" name="percent"
                                                               id="percent">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="undiscounted">Цена без скидки</label>
                                                        <input class="form-control" type="text" name="undiscounted"
                                                               id="undiscounted">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label for="stock">Акция</label>
                                                        <input type="text" name="stock" id="stock"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="type_stock">Тип</label>
                                                        <select name="type_stock" id="type_stock"
                                                                class="form-control">
                                                            <option value="percent">%</option>
                                                            <option value="number">Цена</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="start_stock">От</label>
                                                        <datetime-component :i="<?php echo e(json_encode('start_stock')); ?>" :val="<?php echo e(json_encode(null)); ?>" :name="<?php echo e(json_encode('start_stock')); ?>"></datetime-component>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="end_stock">До</label>
                                                        <datetime-component :i="<?php echo e(json_encode('end_stock')); ?>" :val="<?php echo e(json_encode(null)); ?>" :name="<?php echo e(json_encode('end_stock')); ?>"></datetime-component>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                <!-- <div class="row d-flex justify-content-around">
                                    <div class=" col-md-3 form-group">
                                        <label for="type">Тип</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="null">Обычный</option>
                                            <option value="recommended">Рекомендуемый</option>
                                            <option value="hit">Хит продаж</option>
                                            <option value="new"><?php echo e($settings->new); ?></option>
                                            <option value="sell"><?php echo e($settings->sell); ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="availability">Наличие</label>
                                        <select name="availability" id="availability"
                                                class="form-control">
                                            <option value="1">В наличии</option>
                                            <option value="0">Нет в наличнии</option>
                                            <option value="2">Ожидаеться</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="public">Отображение</label>
                                        <select name="public" id="public" class="form-control">
                                            <option value="1">Включено</option>
                                            <option value="0">Отключено</option>
                                        </select>
                                    </div>
                                </div> -->
                                </div>
                            </div>



                            <div style="background-color: #fff;" class="tab-pane p-3" id="gallery">
                                <gallery-component></gallery-component>
                                
                            </div>
                            <div style="background-color: #fff;" class="tab-pane p-3" id="optii">
                                <attributes-component :group_attributes_prop="<?php echo e(json_encode($group_attributes)); ?>"></attributes-component>
                            </div>
                            <div style="background-color: #fff;" class="tab-pane p-3" id="option">
                                <option-component :options="<?php echo e(json_encode($options)); ?>"></option-component>
                            </div>

                            <div style="background-color: #fff;" class="tab-pane p-3" id="tags">
                                <div class="row">
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-2 form-group border-dark">

                                            <input type="checkbox" class="mr-3" name="tag_id[]" value="<?php echo e($tag->id); ?>" id="<?php echo e('tag_' . $tag->id); ?>">
                                            <label for="<?php echo e('tag_' . $tag->id); ?>"><?php echo e($tag->title_ru); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <div style="background-color: #fff;" class="tab-pane p-3" id="glasses_sizes">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row m-0">
                                            <label for="lens_height" class="col-md-3">Высота линзы (мм)</label>
                                            <input type="text" name="lens_height" id="lens_height" class="form-control col-md-3">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group row m-0">
                                            <label for="lens_width" class="col-md-3">Ширина линзы (мм)</label>
                                            <input type="text" name="lens_width" id="lens_width" class="form-control col-md-3">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group row m-0">
                                            <label for="bridge_width" class="col-md-3">Ширина моста (мм)</label>
                                            <input type="text" name="bridge_width" id="bridge_width"
                                                   class="form-control col-md-3">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group row m-0">
                                            <label for="long_arms" class="col-md-3">Длинна дужки (мм)</label>
                                            <input type="text" name="long_arms" id="long_arms" class="form-control col-md-3">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group row m-0">
                                            <label for="frame_width" class="col-md-3">Ширина оправы (мм)</label>
                                            <input type="text" name="frame_width" id="frame_width" class="form-control col-md-3">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #fff;" class="tab-pane p-3" id="seo">
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
                                        <?php echo $__env->make('admin.partials.url', ['item' => $product, 'title' => false, 'prod_url' => '1','description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <h1 class="sub-header">Новый товар</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="<?php echo e(route('admin-products-index')); ?>" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            <?php echo Form::open(['method' => 'post','route' => ['admin-products.store'],'files' => true,
                            'multiple' => 'multiple']); ?>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#desc" data-toggle="tab">Основное</a></li>
                <li><a href="#data" data-toggle="tab">Данные</a></li>
                <li><a href="#gallery" data-toggle="tab">Изображения</a></li>
                <li><a href="#optii" data-toggle="tab">Атрибуты</a></li>
                <li><a href="#option" data-toggle="tab">Опции</a></li>
                <li><a href="#tags" data-toggle="tab">Теги</a></li>
                <li><a href="#glasses_sizes" data-toggle="tab">Размеры (очки)</a></li>
                <li><a href="#seo" data-toggle="tab">Seo</a></li>
                <li><a href="#add" data-toggle="tab">Доп</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="desc">
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
<?php echo $__env->make('admin.partials.title', ['item' => $product, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <div class="tab-pane" id="add">
        <div class="col-md-12 form-group">
            <ul class="nav nav-tabs" id="language">
<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item <?php echo e($key == 0 ? 'active' : null); ?>"><a
                                                            href="#language_add_<?php echo e($lang->locate_code); ?>" data-toggle="tab"
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
<?php echo $__env->make('admin.partials.title', ['item' => $product, 'title' => false, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'add', 'additional' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
                <label for="how_size_image">Изображение</label>
                <input type="file" id="how_size_image" name="how_size_image" class="form-control">
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id="data">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="category">Категория</label>
                <category-component :categories="<?php echo e(json_encode($categories_json)); ?>"
                                                                    id="category"></category-component>
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <?php echo Form::label('manufacturer_id', 'Производитель',['class' => 'control-label']); ?>

    <?php echo Form::select('manufacturer_id', $manufacturers, old('manufacturer_id'), ['class'=>'form-control']); ?>

            </div>

            <div class="col-md-4 form-group">
<?php echo Form::label('supplier', 'Поставщик',['class' => 'control-label']); ?>

    <?php echo Form::select('supplier', $suppliers, old('supplier'), ['class'=>'form-control']); ?>

            </div>

        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <select-component
                        :categories="<?php echo e(json_encode($categories_json)); ?>"></select-component>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="vendor_code">Артикул</label>
                                                <input class="form-control" type="text" name="vendor_code"
                                                       id="vendor_code">
                                            </div>

                                            <div class="col-md-3 form-group">
                                                <label for="model">Модель</label>
                                                <input class="form-control" type="text" name="model" id="model">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="jumbotron">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="ude">УДЕ</label>
                                                            <input class="form-control" type="text" name="ude"
                                                                   id="ude">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="course">Курс</label>
                                                            <input class="form-control" type="text" name="course"
                                                                   id="course">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="price">Цена</label>
                                                            <input class="form-control" type="text" name="price"
                                                                   id="price">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="percent">%</label>
                                                            <input class="form-control" type="text" name="percent"
                                                                   id="percent">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="undiscounted">Цена без скидки</label>
                                                            <input class="form-control" type="text" name="undiscounted"
                                                                   id="undiscounted">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="jumbotron col-md-12 p-5">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="stock">Акция</label>
                                                                <input type="text" name="stock" id="stock"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="type_stock">Тип</label>
                                                                <select name="type_stock" id="type_stock"
                                                                        class="form-control">
                                                                    <option value="percent">%</option>
                                                                    <option value="number">Цена</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="start_stock">От</label>
                                                                <datetime-component :i="<?php echo e(json_encode('start_stock')); ?>" :val="<?php echo e(json_encode(null)); ?>" :name="<?php echo e(json_encode('start_stock')); ?>"></datetime-component>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="end_stock">До</label>
                                                                <datetime-component :i="<?php echo e(json_encode('end_stock')); ?>" :val="<?php echo e(json_encode(null)); ?>" :name="<?php echo e(json_encode('end_stock')); ?>"></datetime-component>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="availability">Наличие</label>
                                                        <select name="availability" id="availability"
                                                                class="form-control">
                                                            <option value="1">В наличии</option>
                                                            <option value="0">Нет в наличнии</option>
                                                            <option value="2">Ожидаеться</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="public">Отображение</label>
                                                        <select name="public" id="public" class="form-control">
                                                            <option value="1">Включено</option>
                                                            <option value="0">Отключено</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-3 form-group">
                                                <label for="type">Тип</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="null">Обычный</option>
                                                    <option value="recommended">Рекомендуемый</option>
                                                    <option value="hit">Хит продаж</option>
                                                    <option value="new"><?php echo e($settings->new); ?></option>
                                                    <option value="sell"><?php echo e($settings->sell); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="gallery">
                                    <gallery-component></gallery-component>
                                    
            </div>
            <div class="tab-pane" id="optii">
                <attributes-component></attributes-component>
            </div>
            <div class="tab-pane" id="option">
                <option-component :options="<?php echo e(json_encode($options)); ?>"></option-component>
                                </div>
                                <div class="tab-pane" id="tags"><div class="row">
                                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2 form-group border-light">
            <input type="checkbox" name="tag_id[]" value="<?php echo e($tag->id); ?>" id="<?php echo e('tag_' . $tag->id); ?>">
                                                <label for="<?php echo e('tag_' . $tag->id); ?>"><?php echo e($tag->title); ?></label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="tab-pane p-4" id="glasses_sizes">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row m-0">
                        <label for="lens_height" class="col-md-3">Высота линзы (мм)</label>
                        <input type="text" name="lens_height" id="lens_height" class="form-control col-md-3">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group row m-0">
                        <label for="lens_width" class="col-md-3">Ширина линзы (мм)</label>
                        <input type="text" name="lens_width" id="lens_width" class="form-control col-md-3">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group row m-0">
                        <label for="bridge_width" class="col-md-3">Ширина моста (мм)</label>
                        <input type="text" name="bridge_width" id="bridge_width"
                               class="form-control col-md-3">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group row m-0">
                        <label for="long_arms" class="col-md-3">Длинна дужки (мм)</label>
                        <input type="text" name="long_arms" id="long_arms" class="form-control col-md-3">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group row m-0">
                        <label for="frame_width" class="col-md-3">Ширина оправы (мм)</label>
                        <input type="text" name="frame_width" id="frame_width" class="form-control col-md-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="seo">
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
<?php echo $__env->make('admin.partials.title', ['item' => $product, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $__env->startSection('js'); ?>
    <script>

        $(document).ready(function () {
            $('#category_id').on('change', function () {

                localStorage.setItem('test', $(this).val())

            });

            $('#ude').change(function () {
                changePrice();
            });

            $('#course').change(function () {
                changePrice();
            });

            function changePrice() {
                var ude = $('#ude').val();
                var course = $('#course').val();
                if (ude != '' && course != '') {
                    var price = ude * course;
                    $('#price').val(price);
                }
            }

            $('#percent').change(function () {
                changeFullPrice();
            });

            $('#price').change(function () {
                changeFullPrice();
            });

            function changeFullPrice() {
                var price = $('#price').val();
                var percent = $('#percent').val();
                if (price != '' && percent != '') {
                    var undiscounted = (price / (100 - percent)) * 100;
                    undiscounted = Math.round(undiscounted);
                    $('#undiscounted').val(undiscounted);
                }
            }

            /*$('#tags').select2({
                placeholder: 'Please select',
                tags: true
            });*/

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/product/create.blade.php ENDPATH**/ ?>