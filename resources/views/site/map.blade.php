@extends('layouts.site.layout_with_short_header')

@section('title', $locale == 'ru' ? $page->meta_h1_ru : $page->meta_h1_uk)
@section('meta', $locale == 'ru' ? $page->seo_ru : $page->seo_uk)

@section('locale', $locale)
@section('h1', $locale == 'ru' ? $page->title_ru : $page->title_uk)

@section('content')
    <site-map-component :translate="{{ json_encode($translate) }}" :locale="{{ json_encode($locale) }}" :main-cats="{{json_encode($mainCats)}}" :manufacturers="{{ json_encode($manufacturers) }}" :tags="{{ json_encode($tags) }}" :back="{{ json_encode(url()->previous()) }}"></site-map-component>
@endsection

@section('css')
    <style>
        a {
            color: #000;
            text-decoration: none;
            outline: none;
        }

        a:hover {
            text-decoration: underline;
        }

        h1 {
            margin-bottom: 40px
        }

        .product-card .holder {
            padding: 26px 15px;
        }

        .wrap {
            margin: 0 auto;
            width: 100%;
            max-width: 1080px;
            padding: 0 15px;
        }

        .holder {
            margin: 0 auto;
            width: 100%;
            max-width: 1080px;
            padding: 0 15px;
        }

        .cats {
            margin: 13px 0 0 0;
        }

        .product-card__head {
            padding-bottom: 22px !important;
        }

        .second_layer span {
            font-weight: 550;
            font-size: 18px;
        }

        .third_layer span {
            font-weight: 450;
            font-size: 17px;
        }

        .fourth_layer span {
            font-weight: 400;
            font-size: 16px;
        }

        .second_layer, .third_layer,.fourth_layer {
            margin-left: 17px;
            margin-top: 6px;
        }

        .category_title {
            font-size: 1.15em;
            font-weight: 700;
            margin: 10px 0;
        }

        .second {
            margin: 4px;
        }

        .back-btn {
            font-size: 15px !important;
        }
    </style>
@endsection
