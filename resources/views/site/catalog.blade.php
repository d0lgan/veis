@extends('layouts.site.layout_with_short_header')

@section('title', $locale == 'ru' ? $page->title_ru : $page->title_uk)
@section('meta', $locale == 'ru' ? $page->seo_ru : $page->seo_uk)

@section('locale', $locale)
@section('h1', $locale == 'ru' ? $page->title_ru : $page->title_uk)

@section('content')
{{--{{dd(json_encode($filters, JSON_PRETTY_PRINT))}}--}}
    <site-catalog-component :translate="{{json_encode($translate)}}" :locale="{{json_encode($locale)}}" :filters="{{json_encode($filters)}}" :dropdown="{{json_encode($dropdown)}}" :instant-category="{{json_encode($instantCategory)}}" :child-categories="{{json_encode($childCategories)}}" :instant-manufacturer="{{json_encode($instantManufacturer)}}" :instant-tag="{{json_encode($instantTag)}}" :instant-redirect="{{json_encode($instantRedirect)}}"></site-catalog-component>

    <section class="consul">
        <img src="{{ asset("assets/front/img/consul.webp") }}" class="consul__foto">
        <div class="consul__block">
            <h2>{{ __('site.consultation.want') }}</h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="{{ __('site.consultation.send') }}" name="">
            </form>
        </div>
        <img src="{{ asset("assets/front/img/consul2.webp") }}" class="consul__foto2">
    </section>
    <section class="about">
        <site-catalog-description-component :desctran="{{ json_encode($desctran) }}" :desc="{{ json_encode($desc) }}" :locale="{{ json_encode($locale) }}" :instant-category="{{ json_encode($instantCategory) }}"></site-catalog-description-component>
    </section>
@endsection
