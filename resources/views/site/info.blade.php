@extends('layouts.site.layout_with_long_header')

@section('title', $locale == 'ru' ? $page->meta_h1_ru : $page->meta_h1_uk)
@section('meta', $locale == 'ru' ? $page->seo_ru : $page->seo_uk)

@section('locale', $locale)
@section('h1', $locale == 'ru' ? $page->title_ru : $page->title_uk)

@section('content')
    <site-info-component :locale="{{json_encode($locale)}}" :translate="{{json_encode($translate)}}" :tabs="{{json_encode($tabs)}}"></site-info-component>
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
    {{--<section class="blog">
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
        --}}{{--<div class="blog__subtitle">
            <pre><span class="blog__subtitle_active">КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ </span>    /    <span>КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ</span>    /    <span>TIFOSI – ВЕДУЩИЙ БРЕНД НА РЫНКЕ </span></pre>
        </div>--}}{{--
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

    </section>--}}
    <section class="consul">
        <img src="/assets/front/img/consul.webp" class="consul__foto">
        <div class="consul__block">
            <h2>{{ __('site.consultation.want') }}</h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="{{ __('site.consultation.send') }}" name="">
            </form>
        </div>
        <img src="/assets/front/img/consul2.webp" class="consul__foto2">
    </section>
    <section class="about">
        <site-catalog-description-component :desc="{{ json_encode($desc) }}" :locale="{{ json_encode($locale) }}"></site-catalog-description-component>
    </section>
@endsection
