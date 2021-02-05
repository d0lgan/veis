<?php $__env->startSection('content'); ?>







    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <?php echo Form::model($product,['method' => 'PUT','files' => true, 'route' =>['admin-products.update',$product->id]]); ?>


                    <div class="mb-3 d-flex w-100 justify-content-between align-items-center">
                        <strong>Редактирование - <?php echo e($product->title_ru); ?></strong>

                        <div class="d-flex">
                            <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                            <a href="<?php echo e(route('admin-products-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                        </div>
                    </div>


                    <ul class="nav nav-tabs d-flex justify-content-around" id="myTab">
                        <li class="nav-item"><a class="nav-link active" href="#desc" data-toggle="tab">Основное</a></li>
                        <li class="nav-item"><a class="nav-link" href="#data" data-toggle="tab">Данные</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery" data-toggle="tab">Изображения</a></li>
                        <li class="nav-item"><a class="nav-link" href="#optii" data-toggle="tab">Атрибуты</a></li>
                        <li class="nav-item"><a class="nav-link" href="#option" data-toggle="tab">Опции</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tags" data-toggle="tab">Теги</a></li>
                        <li class="nav-item"><a class="nav-link" href="#glasses_sizes" data-toggle="tab">Размеры (очки)</a></li>
                        <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">Seo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#add" data-toggle="tab">Доп</a></li>
                    </ul>



                    <div style="background-color: #fff" class="tab-content" id="myTabContent">
                        <div style="background-color: #fff" class="tab-pane p-3 fade show active" id="desc" role="tabpanel" aria-labelledby="home-tab">
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



                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="data" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="category">Категория</label>
                                        <category-component :default_category="<?php echo e($product->category_id); ?>"
                                                            :categories="<?php echo e(json_encode($categories_json)); ?>"></category-component>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <div id="app">
                                            <select-component :default="<?php echo e(json_encode($product->categories)); ?>"
                                                              :categories="<?php echo e(json_encode($categories_json)); ?>"
                                                              id="category"></select-component>
                                        </div>
                                    </div> 

                                    <div class="col-md-4 form-group">
                                        <label>Сортировка</label>
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-3 form-group">
                                        <?php echo Form::label('manufacturer_id', 'Производитель',['class' => 'control-label']); ?>

                                        <?php echo Form::select('manufacturer_id', $manufacturers, old('manufacturer_id'), ['class'=>'form-control']); ?>

                                    </div>
                                    
                                    <div class="col-md-3 form-group">
                                        <label for="vendor_code">Артикул</label>
                                        <input value="<?php echo e($product->vendor_code); ?>" required class="form-control" type="text" name="vendor_code"
                                               id="vendor_code">
                                    </div>

                                    <div class=" col-md-2 form-group">
                                        <label for="type">Тип</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="null">Обычный</option>
                                            <option <?php if($product->type == 'recommended'): ?> selected <?php endif; ?> value="recommended">Рекомендуемый</option>
                                            <option <?php if($product->type == 'hit'): ?> selected <?php endif; ?> value="hit">Хит продаж</option>
                                            <option <?php if($product->type == 'new'): ?> selected <?php endif; ?> value="new"><?php echo e($settings->new); ?></option>
                                            <option <?php if($product->type == 'sell'): ?> selected <?php endif; ?> value="sell"><?php echo e($settings->sell); ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="availability">Наличие</label>
                                        <select name="availability" id="availability"
                                                class="form-control">
                                            <option value="1">В наличии</option>
                                            <option <?php if($product->availability == 0): ?> selected <?php endif; ?> value="0">Нет в наличнии</option>
                                            <option <?php if($product->availability == 2): ?> selected <?php endif; ?> value="2">Ожидаеться</option>
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
                                        <div class="jumbotron p-3 ">
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label for="ude">УДЕ</label>
                                                    <input value="<?php echo e($product->ude); ?>" class="form-control" type="text" name="ude"
                                                           id="ude">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="course">Курс</label>
                                                    <input value="<?php echo e($product->course); ?>" class="form-control" type="text" name="course"
                                                           id="course">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="price">Цена</label>
                                                    <input value="<?php echo e($product->price); ?>" class="form-control" type="text" name="price"
                                                           id="price">
                                                </div>

                                                <div class="form-group col-md-1">
                                                    <label for="percent">%</label>
                                                    <input value="<?php echo e($product->percent); ?>" class="form-control" type="text" name="percent"
                                                           id="percent">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="undiscounted">Цена без скидки</label>
                                                    <input value="<?php echo e($product->undiscounted); ?>" class="form-control" type="text" name="undiscounted"
                                                           id="undiscounted">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                        <label for="stock">Акция</label>
                                                        <input value="<?php echo e($product->stock); ?>" type="text" name="stock" id="stock"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="type_stock">Тип</label>
                                                        <select name="type_stock" id="type_stock"
                                                                class="form-control">
                                                            <option value="percent">%</option>
                                                            <option <?php if($product->type_stock == 'number'): ?> selected <?php endif; ?> value="number">Цена</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="start_stock">От</label>
                                                        <datetime-component :i="<?php echo e(json_encode('start_stock')); ?>" :val="<?php echo e(json_encode($product->start_stock)); ?>" :name="<?php echo e(json_encode('start_stock')); ?>"></datetime-component>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="end_stock">До</label>
                                                        <datetime-component :i="<?php echo e(json_encode('end_stock')); ?>" :val="<?php echo e(json_encode($product->end_stock)); ?>" :name="<?php echo e(json_encode('end_stock')); ?>"></datetime-component>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="gallery" role="tabpanel" aria-labelledby="home-tab">
                            <gallery-component :product_images="<?php echo e(json_encode($images)); ?>"></gallery-component>
                        </div>


                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="optii" role="tabpanel" aria-labelledby="home-tab">
                            <!-- <span><?php echo e(json_encode($selected_attr)); ?></span> -->
                            <attributes-component ref="saveAttribute" :isModal="false" :default_category="<?php echo e($product->category_id); ?>" :prod="<?php echo e($product); ?>" :product_id="<?php echo e($product->id); ?>" :selected_attr="<?php echo e(json_encode($selected_attr)); ?>"></attributes-component>
                        </div> 


                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="option" role="tabpanel" aria-labelledby="home-tab">
                            <option-component ref="saveOption" :isModal="false" :options="<?php echo e(json_encode($options)); ?>" :product_id="<?php echo e($product->id); ?>" :product_selected="<?php echo e(json_encode($selected)); ?>"></option-component>
                        </div>


                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="tags" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-2 form-group border-light">
                                        <input type="checkbox" class="mr-3" <?php if(in_array($tag->id, $selected_tags)): ?> checked <?php endif; ?> name="tag_id[]" value="<?php echo e($tag->id); ?>" id="<?php echo e('tag_' . $tag->id); ?>">
                                        <label for="<?php echo e('tag_' . $tag->id); ?>"><?php echo e($tag->name_ru); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="glasses_sizes" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row m-0">
                                        <label for="lens_height" class="col-md-3">Высота линзы (мм)</label>
                                        <input value="<?php echo e($product->lens_height); ?>" type="text" name="lens_height" id="lens_height" class="form-control col-md-3">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group row m-0">
                                        <label for="lens_width" class="col-md-3">Ширина линзы (мм)</label>
                                        <input value="<?php echo e($product->lens_width); ?>" type="text" name="lens_width" id="lens_width" class="form-control col-md-3">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group row m-0">
                                        <label for="bridge_width" class="col-md-3">Ширина моста (мм)</label>
                                        <input value="<?php echo e($product->bridge_width); ?>" type="text" name="bridge_width" id="bridge_width"
                                               class="form-control col-md-3">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group row m-0">
                                        <label for="long_arms" class="col-md-3">Длинна дужки (мм)</label>
                                        <input value="<?php echo e($product->long_arms); ?>" type="text" name="long_arms" id="long_arms" class="form-control col-md-3">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group row m-0">
                                        <label for="frame_width" class="col-md-3">Ширина оправы (мм)</label>
                                        <input value="<?php echo e($product->frame_width); ?>" type="text" name="frame_width" id="frame_width" class="form-control col-md-3">
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="seo" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-md-12">
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
                                    <?php echo $__env->make('admin.partials.url', ['item' => $product, 'slug_t' => $product->slug, 'title' => false, 'description' => false, 'slug' => true, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                            </div>
                        </div>


                        
                        <div style="background-color: #fff" class="tab-pane p-3 fade show" id="add" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-md-12 form-group">
                                <ul class="nav nav-tabs" id="language">
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item"><a
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
                                    <?php if($product->how_size_image): ?>
                                        <img class="col-md-2" src="<?php echo e(asset('/house/uploads/' . $product->how_size_image)); ?>" alt="">

                                        <div class="form-check col-md-4">
                                            <input type="checkbox" name="del_how_size">
                                            <label>
                                                Удалить изображение
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group ">
                                        <label for="how_size_image">Изображение</label>
                                        <input type="file" id="how_size_image" name="how_size_image" class="form-control">
                                    </div>
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
                        <h1 class="sub-header">Редактирование - <?php echo e($product->title); ?></h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="<?php echo e(route('admin-products-index')); ?>" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            <?php echo Form::model($product,['method' => 'PUT','files' => true, 'route' =>['admin-products.update',$product->id]]); ?>


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
                                    <div class="col-md-12">
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
                                            <?php if($product->how_size_image): ?>
                                                <img class="col-md-2" src="<?php echo e(asset('/house/uploads/' . $product->how_size_image)); ?>" alt="">

                                                <div class="form-check col-md-4">
                                                    <input type="checkbox" name="del_how_size">
                                                    <label>
                                                        Удалить изображение
                                                    </label>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group col-md-4">
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
                                                <category-component :default_category="<?php echo e($product->category_id); ?>"
                                                                    :categories="<?php echo e(json_encode($categories_json)); ?>"></category-component>
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
                                                <div id="app">
                                                    <select-component :default="<?php echo e(json_encode($product->categories)); ?>"
                                                                      :categories="<?php echo e(json_encode($categories_json)); ?>"
                                                                      id="category"></select-component>
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="vendor_code">Артикул</label>
                                                <input value="<?php echo e($product->vendor_code); ?>" class="form-control" type="text" name="vendor_code"
                                                       id="vendor_code">
                                            </div>

                                            <div class="col-md-3 form-group">
                                                <label for="model">Модель</label>
                                                <input value="<?php echo e($product->model); ?>" class="form-control" type="text" name="model" id="model">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="jumbotron">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="ude">УДЕ</label>
                                                            <input value="<?php echo e($product->ude); ?>" class="form-control" type="text" name="ude"
                                                                   id="ude">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="course">Курс</label>
                                                            <input value="<?php echo e($product->course); ?>" class="form-control" type="text" name="course"
                                                                   id="course">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="price">Цена</label>
                                                            <input value="<?php echo e($product->price); ?>" class="form-control" type="text" name="price"
                                                                   id="price">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="percent">%</label>
                                                            <input value="<?php echo e($product->percent); ?>" class="form-control" type="text" name="percent"
                                                                   id="percent">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="undiscounted">Цена без скидки</label>
                                                            <input value="<?php echo e($product->undiscounted); ?>" class="form-control" type="text" name="undiscounted"
                                                                   id="undiscounted">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="jumbotron col-md-12 p-5">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="stock">Акция</label>
                                                                <input value="<?php echo e($product->stock); ?>" type="text" name="stock" id="stock"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="type_stock">Тип</label>
                                                                <select name="type_stock" id="type_stock"
                                                                        class="form-control">
                                                                    <option value="percent">%</option>
                                                                    <option <?php if($product->type_stock == 'number'): ?> selected <?php endif; ?> value="number">Цена</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="start_stock">От</label>
                                                                <datetime-component :i="<?php echo e(json_encode('start_stock')); ?>" :val="<?php echo e(json_encode($product->start_stock)); ?>" :name="<?php echo e(json_encode('start_stock')); ?>"></datetime-component>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="end_stock">До</label>
                                                                <datetime-component :i="<?php echo e(json_encode('end_stock')); ?>" :val="<?php echo e(json_encode($product->end_stock)); ?>" :name="<?php echo e(json_encode('end_stock')); ?>"></datetime-component>
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
                                                            <option <?php if($product->availability == 0): ?> selected <?php endif; ?> value="0">Нет в наличнии</option>
                                                            <option <?php if($product->availability == 2): ?> selected <?php endif; ?> value="2">Ожидаеться</option>
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
                                                    <option <?php if($product->type == 'recommended'): ?> selected <?php endif; ?> value="recommended">Рекомендуемый</option>
                                                    <option <?php if($product->type == 'hit'): ?> selected <?php endif; ?> value="hit">Хит продаж</option>
                                                    <option <?php if($product->type == 'new'): ?> selected <?php endif; ?> value="new"><?php echo e($settings->new); ?></option>
                                                    <option <?php if($product->type == 'sell'): ?> selected <?php endif; ?> value="sell"><?php echo e($settings->sell); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="gallery">
                                    <gallery-component :product_images="<?php echo e(json_encode($images)); ?>"></gallery-component>
                                </div>

                                <div class="tab-pane" id="optii">
                                    <attributes-component
                                            :default_category="<?php echo e($product->category_id); ?>" :selected_attr="<?php echo e(json_encode($selected_attr)); ?>"></attributes-component>
                                </div>
                                <div class="tab-pane" id="option">
                                    <option-component :options="<?php echo e(json_encode($options)); ?>" :product_selected="<?php echo e(json_encode($selected)); ?>"></option-component>
                                </div>
                                <div class="tab-pane" id="tags">
                                    <div class="row">
                                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-2 form-group border-light">
                                                <input type="checkbox" <?php if(in_array($tag->id, $selected_tags)): ?> checked <?php endif; ?> name="tag_id[]" value="<?php echo e($tag->id); ?>" id="<?php echo e('tag_' . $tag->id); ?>">
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
                                                <input value="<?php echo e($product->lens_height); ?>" type="text" name="lens_height" id="lens_height" class="form-control col-md-3">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group row m-0">
                                                <label for="lens_width" class="col-md-3">Ширина линзы (мм)</label>
                                                <input value="<?php echo e($product->lens_width); ?>" type="text" name="lens_width" id="lens_width" class="form-control col-md-3">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group row m-0">
                                                <label for="bridge_width" class="col-md-3">Ширина моста (мм)</label>
                                                <input value="<?php echo e($product->bridge_width); ?>" type="text" name="bridge_width" id="bridge_width"
                                                       class="form-control col-md-3">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group row m-0">
                                                <label for="long_arms" class="col-md-3">Длинна дужки (мм)</label>
                                                <input value="<?php echo e($product->long_arms); ?>" type="text" name="long_arms" id="long_arms" class="form-control col-md-3">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group row m-0">
                                                <label for="frame_width" class="col-md-3">Ширина оправы (мм)</label>
                                                <input value="<?php echo e($product->frame_width); ?>" type="text" name="frame_width" id="frame_width" class="form-control col-md-3">
                                            </div>
                                        </div>





                                    </div>
                                </div>
                                <div class="tab-pane" id="seo">
                                    <div class="col-md-12">

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
                                            <?php echo $__env->make('admin.partials.title', ['item' => $product, 'slug_t' => $product->slug, 'title' => false, 'description' => false, 'slug' => true, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            /*$('#tags').select2({
                placeholder: 'Please select',
                tags: true
            });*/


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

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>