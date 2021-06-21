@extends('layouts.site.layout_with_short_header')

@section('title', 'Каталог - Veis')

@section('content')
{{--{{dd(json_encode($filters, JSON_PRETTY_PRINT))}}--}}
    <site-catalog-component :translate="{{json_encode($translate)}}" :locale="{{json_encode($locale)}}" :filters="{{json_encode($filters)}}" :instant-category="{{json_encode($instantCategory)}}" :child-categories="{{json_encode($childCategories)}}"></site-catalog-component>

    <section class="consul">
        <img src="{{ asset("assets/front/img/consul.png") }}" class="consul__foto">
        <div class="consul__block">
            <h2>{{ __('site.consultation.want') }}</h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="{{ __('site.consultation.send') }}" name="">
            </form>
        </div>
        <img src="{{ asset("assets/front/img/consul2.png") }}" class="consul__foto2">
    </section>
    <section class="about">
        <div class="conteiner">

            @if($instantCategory) <p class="about__text">{!! $locale == 'ru' ? $instantCategory->description_ru : $instantCategory->description_uk !!}</p>

            @else <h2 class="about__title">{{ __('site.pre-footer.veis') }}</h2>
                <p>{{ __('site.pre-footer.desc') }}</p>
            @endif

            <div class="about__view_more">
                <span>Читать далее</span>
                <img src="{{ asset("assets/front/img/down.svg") }}">
            </div>
        </div>
    </section>
@endsection