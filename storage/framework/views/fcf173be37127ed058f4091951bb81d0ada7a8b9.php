<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">

                    <?php echo Form::open(['method' => 'post','route' => ['admin-stocks.store'],'files' => true,
                            'multiple' => 'multiple']); ?>

                        <div class="my-3 d-flex align-items-center justify-content-between">
                            <strong>Новая акция</strong>
                            <div class="m-0 p-0 d-flex justify-content-end align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="<?php echo e(route('admin-stocks-index')); ?>" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="w-100 p-3">
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
	                            <?php echo $__env->make('admin.partials.title', ['item' => $stock, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <div class="form-group">
                                    <label for="label">Ярлык:</label>

                                    <input id="label" required class="form-control" placeholder="Label" type="text" name="label" value="">
                                </div>


                                <div class="form-group">
                                    <label class="form-label" for="public">Статус:</label>

                                    <select name="public" class="form-control">
                                        <option value="1">Активная</option>
                                        <option value="0">Не активная</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label">Отображение</label>

                                    <select name="" class="form-control">
                                        <option value="1">Левая сторона</option>
                                        <option value="0">Правая сторона</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/admin/stock/create.blade.php ENDPATH**/ ?>