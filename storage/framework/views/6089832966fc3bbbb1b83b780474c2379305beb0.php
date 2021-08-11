

<?php $__env->startSection('title', $locale == 'ru' ? $page->title_ru : $page->title_uk); ?>
<?php $__env->startSection('locale', $locale); ?>

<?php $__env->startSection('content'); ?>
<div class="intro">
    <div class="intro__slider_block">
        <div class="intro__inner">
            <div class="intro__iteam">
                <h1 class="intro__title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</h1>
                <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <div class="intro__btn_box">
                    <a class="intro__btn left__btn" href="#/">вся коллекция</a>
                    <a class="intro__btn btn2" href="#/">вся коллекция</a>
                </div>
            </div>
            <div class="intro__slider">
                <div class="intro__foto">
                    <img src="/assets/front/img/intro__bg.png">
                </div>
            </div>
        </div>
        <div class="intro__inner">
            <div class="intro__iteam">
                <h1 class="intro__title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</h1>
                <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <div class="intro__btn_box">
                    <a class="intro__btn left__btn" href="#/">вся коллекция</a>
                    <a class="intro__btn btn2" href="#/">вся коллекция</a>
                </div>
            </div>
            <div class="intro__slider">
                <div class="intro__foto">
                    <img src="/assets/front/img/intro__bg.png">
                </div>
            </div>
        </div>
        <div class="intro__inner">
            <div class="intro__iteam">
                <h1 class="intro__title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</h1>
                <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <div class="intro__btn_box">
                    <a class="intro__btn left__btn" href="#/">вся коллекция</a>
                    <a class="intro__btn btn2" href="#/">вся коллекция</a>
                </div>
            </div>
            <div class="intro__slider">
                <div class="intro__foto">
                    <img src="/assets/front/img/intro__bg.png">
                </div>
            </div>
        </div>
    </div>

    <div style="display: none;" class="intro__slider_block2">
        <div class="intro__inner">
            <div class="intro__iteam">
                <h1 class="intro__title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</h1>
                <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <div class="intro__btn_box">
                    <a class="intro__btn left__btn" href="#/">вся коллекция</a>
                    <a class="intro__btn btn2" href="#/">вся коллекция</a>
                </div>
            </div>
            <div class="intro__slider">
                <div class="intro__foto">
                    <img src="/assets/front/img/glass.jpg">
                </div>
            </div>
        </div>
        <div class="intro__inner">
            <div class="intro__iteam">
                <h1 class="intro__title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</h1>
                <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <div class="intro__btn_box">
                    <a class="intro__btn left__btn" href="#/">вся коллекция</a>
                    <a class="intro__btn btn2" href="#/">вся коллекция</a>
                </div>
            </div>
            <div class="intro__slider">
                <div class="intro__foto">
                    <img src="/assets/front/img/glass.jpg">
                </div>
            </div>
        </div>
        <div class="intro__inner">
            <div class="intro__iteam">
                <h1 class="intro__title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</h1>
                <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <div class="intro__btn_box">
                    <a class="intro__btn left__btn" href="#/">вся коллекция</a>
                    <a class="intro__btn btn2" href="#/">вся коллекция</a>
                </div>
            </div>
            <div class="intro__slider">
                <div class="intro__foto">
                    <img src="/assets/front/img/glass.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="intro__control">
        <div class="left__arrow">
            <img src="/assets/front/img/left.svg" alt="">
        </div>
        <div class="right__arrow">
            <img src="/assets/front/img/next.svg" alt="">
        </div>
    </div>

    <div class="intro__control2 hide">
        <div class="left__arrow2">
            <img src="/assets/front/img/left.svg" alt="">
        </div>
        <div class="right__arrow2">
            <img src="/assets/front/img/next.svg" alt="">
        </div>
    </div>
</div>
<section class="brands">
    <div class="holder">
        <div class="brands__name">
            <div class="brands__slide">
                <div class="brands__block1">
                    
                    <?php for($i = 0; $i < 7; $i++): ?>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($locale == 'ru'): ?>
                                <a href="<?php echo e($brand->link_ru); ?>"><?php echo e($brand->title_ru); ?></a>
                            <?php elseif($locale == 'uk'): ?>
                                <a href="<?php echo e($brand->link_uk); ?>"><?php echo e($brand->title_uk); ?></a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="brands__inner">
        <a href="#/" class="brands__iteam">
            <img style="mix-blend-mode: darken;" src="/assets/front/img/brands__foto.jpg">
            <div class="brands__text">
                <p class="brands__text_name"><?php echo e(__('site.products.umbrellas')); ?></p>
                <p class="brands__text_more"><?php echo e(__('site.products.details')); ?></p>
                <img src="/assets/front/img/brand__icon.svg">
            </div>
        </a>
        <a href="#/" class="brands__iteam">
            <img src="/assets/front/img/brands__foto2.jpg">
            <div class="brands__text">
                <p class="brands__text_name"><?php echo e(__('site.products.bags')); ?></p>
                <p class="brands__text_more"><?php echo e(__('site.products.details')); ?></p>
                <img src="/assets/front/img/brand__icon.svg">
            </div>
        </a>
        <a href="#/" class="brands__iteam">
            <img src="/assets/front/img/brands__foto3.jpg">
            <div class="brands__text">
                <p class="brands__text_name"><?php echo e(__('site.products.portfolios')); ?></p>
                <p class="brands__text_more"><?php echo e(__('site.products.details')); ?></p>
                <img src="/assets/front/img/brand__icon.svg">
            </div>
        </a>
        <a href="#/" class="brands__iteam">
            <img src="/assets/front/img/brands__foto4.jpg">
            <div class="brands__text">
                <p class="brands__text_name"><?php echo e(__('site.products.wallets')); ?></p>
                <p class="brands__text_more"><?php echo e(__('site.products.details')); ?></p>
                <img src="/assets/front/img/brand__icon.svg">
            </div>
        </a>
    </div>
</section>

<site-products-card-component :left-glasses="<?php echo e(json_encode($leftGlasses)); ?>" :right-glasses="<?php echo e(json_encode($rightGlasses)); ?>" :left-stock="<?php echo e(json_encode($leftStock)); ?>" :right-stock="<?php echo e(json_encode($rightStock)); ?>" :translate="<?php echo e(json_encode($translate)); ?>" :locale="<?php echo e(json_encode($locale)); ?>"></site-products-card-component>

<section class="work">
    <h2 class="work__title"><?php echo e(__('site.howWeDoing.how')); ?></h2>
    <p class="work__subtitle"><?php echo e(__('site.howWeDoing.schema')); ?></p>
    <div class="work__inner">
        <div class="work__iteam">
            <img src="/assets/front/img/list-alt.svg">
            <p><?php echo e(__('site.howWeDoing.leave')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/phone-volume.svg">
            <p><?php echo e(__('site.howWeDoing.call_back')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/check-double.svg">
            <p><?php echo e(__('site.howWeDoing.clarify')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/box-open.svg">
            <p><?php echo e(__('site.howWeDoing.form')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/truck-loading.svg">
            <p><?php echo e(__('site.howWeDoing.send')); ?></p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/child.svg">
            <p><?php echo e(__('site.howWeDoing.receive')); ?></p>
        </div>
    </div>
</section>
<section class="blog">
    <!-- <div class="mobile__product">
        <div class="media__foot_iteam">
            <span>БЛОГ</span>
            <img src="/assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="#/">КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ</a>
            <a href="#/">КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ</a>
            <a href="#/">TIFOSI – ВЕДУЩИЙ БРЕНД НА РЫНКЕ</a>
        </div>

        <div class="media__foot_iteam">
            <span>INSTAGRAM</span>
            <img src="/assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="#/">КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ</a>
            <a href="#/">КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ</a>
            <a href="#/">TIFOSI – ВЕДУЩИЙ БРЕНД НА РЫНКЕ</a>
        </div>
    </div> -->
    <div class="product__king second__kind">
        <pre><span class="product__king_active">БЛОГ</span>   /   <span>INSTAGRAM</span></pre>
    </div>
    <div class="blog__subtitle">
        <pre><span class="blog__subtitle_active">КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ </span>    /    <span>КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ</span>    /    <span>TIFOSI – ВЕДУЩИЙ БРЕНД НА РЫНКЕ </span></pre>
    </div>
    <div class="blog__wrap">
        <div class="blog__slider_inner">
            <div class="blog__slider_center">
                <div class="blog__slider_iteam center">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>

                </div>

                <div class="blog__slider_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/1.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>

                <div class="blog__slider_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto3.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>

                <div class="blog__slider_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto4.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>

                <div class="blog__slider_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto5.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>

                <div class="blog__slider_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto6.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="mobile__blog_slide">
                <div class="mobile__blog_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
                <div class="mobile__blog_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto3.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
                <div class="mobile__blog_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto4.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
                <div class="mobile__blog_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto2.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
                <div class="mobile__blog_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/1.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
                <div class="mobile__blog_iteam">
                    <div class="blog_foto">
                        <img src="/assets/front/img/product__foto.png">
                    </div>
                    <div class="blog__title">
                        КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                    </div>
                    <div class="blog__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?
                    </div>
                    <div class="blog__bottom">
                        <a href="#/" class="intro__btn">ПОДРОБНЕЕ</a>

                        <a href="blog.html" class="blog__view_all">
                            <span>Смотреть все статьи </span>
                            <img src="/assets/front/img/next.svg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="slider__box left">
                <img class="slider_left" src="/assets/front/img/left.svg">
            </div>
            <div class="slider__box right">
                <img class="slider_right" src="/assets/front/img/next.svg">
            </div>
        </div>
        <a href="blog.html" class="blog__view_all desktop-hidden" style="justify-content: center;">
            <span>Смотреть все статьи </span>
            <img src="/assets/front/img/next.svg">
        </a>
    </div>

</section>
<section class="consul">
    <img src="/assets/front/img/consul.png" class="consul__foto">
    <div class="consul__block">
        <h2><?php echo e(__('site.consultation.want')); ?></h2>
        <form action="" method="" class="consul__block_input">
            <input type="text" placeholder="Ваш E-Mail">
            <input type="submit" value="<?php echo e(__('site.consultation.send')); ?>" name="">
        </form>
    </div>
    <img src="/assets/front/img/consul2.png" class="consul__foto2">
</section>
<section class="about">
    <site-catalog-description-component :desctran="<?php echo e(json_encode($desctran)); ?>" :desc="<?php echo e(json_encode($desc)); ?>" :locale="<?php echo e(json_encode($locale)); ?>"></site-catalog-description-component>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.layout_with_long_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/site/home.blade.php ENDPATH**/ ?>