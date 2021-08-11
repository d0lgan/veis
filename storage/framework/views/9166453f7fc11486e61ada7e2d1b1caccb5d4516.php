

<?php $__env->startSection('title', $locale == 'ru' ? $page->title_ru : $page->title_uk); ?>
<?php $__env->startSection('locale', $locale); ?>

<?php $__env->startSection('content'); ?>
    <site-info-component :locale="<?php echo e(json_encode($locale)); ?>" :translate="<?php echo e(json_encode($translate)); ?>" :tabs="<?php echo e(json_encode($tabs)); ?>"></site-info-component>
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
        <site-catalog-description-component :desc="<?php echo e(json_encode($desc)); ?>" :locale="<?php echo e(json_encode($locale)); ?>"></site-catalog-description-component>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.layout_with_long_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/site/info.blade.php ENDPATH**/ ?>