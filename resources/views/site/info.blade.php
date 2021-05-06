@extends('layouts.site.layout_with_long_header')

@section('title', 'Информация о магазине - Veis')

@section('content')
    <div class="breadcrumbs">
        <div class="holder">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">ИНТЕРНЕТ МАГАЗИН</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">ПЕРЧАТКИ </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">АВТОМОБИЛЬНЫЕ </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">МУЖСКИЕ</a>
                </li>

            </ul>
        </div>
    </div>
    <section class="product product-more">
        <div class="conteiner">
            <h2 class="section-title product-more__title">{{ __('site.info.useful') }}</h2>
            <div class="product__name info__changer">
                <pre><span class="product__name_active">{{ __('site.info.del') }}</span>/<span>{{ __('site.info.pay') }}</span>/<span>{{ __('site.info.back') }}</span>/<span>{{ __('site.info.guarantee') }}</span></pre>
            </div>

            <div class="information">
                <div class="information__item active">
                    <img src="/img/box.png" alt="" class="information__item-img">

                    <div class="information__item-body">
                        <h4 class="information__item-title">
                            {{ __('site.info.del') }}
                        </h4>
                        <p class="information__item-text">
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        </p>
                        <p class="information__item-text">
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>

                <div class="information__item">
                    <img src="/img/money-check-alt.png" alt="" class="information__item-img">

                    <div class="information__item-body">
                        <h4 class="information__item-title">
                            {{ __('site.info.pay') }}
                        </h4>
                        <p class="information__item-text">
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        </p>
                        <p class="information__item-text">
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>

                <div class="information__item">
                    <img src="/img/map-signs.png" alt="" class="information__item-img">

                    <div class="information__item-body">
                        <h4 class="information__item-title">
                            {{ __('site.info.back_prod') }}
                        </h4>
                        <p class="information__item-text">
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        </p>
                        <p class="information__item-text">
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>

                <div class="information__item">
                    <img src="/img/medal.png" alt="" class="information__item-img">

                    <div class="information__item-body">
                        <h4 class="information__item-title">
                            {{ __('site.info.useful') }}
                        </h4>
                        <p class="information__item-text">
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        </p>
                        <p class="information__item-text">
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="work">
        <h2 class="work__title">{{ __('site.howWeDoing.how') }}</h2>
        <p class="work__subtitle">{{ __('site.howWeDoing.schema') }}</p>
        <div class="work__inner">
            <div class="work__iteam">
                <img src="/assets/front/img/list-alt.svg">
                <p>{{ __('site.howWeDoing.leave') }}</p>
            </div>
            <div class="work__iteam">
                <img src="/assets/front/img/phone-volume.svg">
                <p>{{ __('site.howWeDoing.call_back') }}</p>
            </div>
            <div class="work__iteam">
                <img src="/assets/front/img/check-double.svg">
                <p>{{ __('site.howWeDoing.clarify') }}</p>
            </div>
            <div class="work__iteam">
                <img src="/assets/front/img/box-open.svg">
                <p>{{ __('site.howWeDoing.form') }}</p>
            </div>
            <div class="work__iteam">
                <img src="/assets/front/img/truck-loading.svg">
                <p>{{ __('site.howWeDoing.send') }}</p>
            </div>
            <div class="work__iteam">
                <img src="/assets/front/img/child.svg">
                <p>{{ __('site.howWeDoing.receive') }}</p>
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
        {{--<div class="blog__subtitle">
            <pre><span class="blog__subtitle_active">КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ </span>    /    <span>КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ</span>    /    <span>TIFOSI – ВЕДУЩИЙ БРЕНД НА РЫНКЕ </span></pre>
        </div>--}}
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
            <h2>{{ __('site.consultation.want') }}</h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="{{ __('site.consultation.send') }}" name="">
            </form>
        </div>
        <img src="/assets/front/img/consul2.png" class="consul__foto2">
    </section>
    <section class="about">
        <div class="conteiner">
            <h2 class="about__title">{{ __('site.pre-footer.veis') }}</h2>
            <p class="about__text">{{ __('site.pre-footer.desc') }}</p>
            <div class="about__view_more">
                <span>Читать далее</span>
                <img src="/assets/front/img/down.svg">
            </div>
        </div>
    </section>
@endsection