<?php $__env->startSection('content'); ?>









    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        <?php echo Form::open(['method' => 'PUT','route' => ['admin-tags.update', $tag->id],'files' => true,
                            'multiple' => 'multiple']); ?>


                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <strong>Редактирование - <?php echo e($tag->name_ru); ?></strong>

                            <div class="m-0 p-0 d-flex align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="<?php echo e(route('admin-tags-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <ul class="nav nav-tabs d-flex justify-content-start px-3" id="myTab">
                            <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab"><strong>Основное</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab"><strong>SEO</strong></a></li>
                        </ul>


                        <div style="background-color: #fff" class="tab-content">
                            <div style="background-color: #fff" class="tab-pane p-3 active" id="main">
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
                                        <?php echo $__env->make('admin.partials.title', ['item' => $tag, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <!-- <label for="description">Описание</label>
                                        <editor-component :name="'description'" :v="<?php echo e(json_encode($tag->description)); ?>"></editor-component> -->
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #fff" class="tab-pane p-3" id="seo">
                                <div class="form-group">
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
                                        <?php echo $__env->make('admin.partials.url', ['item' => $tag, 'title' => false, 'tag_url' => '1','description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'seo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <h1 class="sub-header">Редактирование <?php echo e($tag->name); ?></h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="<?php echo e(route('admin-tags-index')); ?>" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            <?php echo Form::open(['method' => 'PUT','route' => ['admin-tags.update', $tag->id],'files' => true,
                            'multiple' => 'multiple']); ?>

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
                                        <?php echo $__env->make('admin.partials.title', ['item' => $tag, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Сохранить" class="btn btn-primary">
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/tag/edit.blade.php ENDPATH**/ ?>