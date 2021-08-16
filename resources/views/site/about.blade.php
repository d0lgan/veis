@extends('layouts.site.layout_with_short_header')

@section('title', $locale == 'ru' ? $page->title_ru : $page->title_uk)
@section('locale', $locale)

@section('content')
    <div class="container">
        <div class="breadcrumbs">
            <div class="holder">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="{{ $locale == 'ru' ? '/ru' : '/' }}" class="breadcrumbs__link">{{ $locale == 'ru' ? 'ИНТЕРНЕТ МАГАЗИН' : 'ІНТЕРНЕТ МАГАЗИН'}}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="" class="breadcrumbs__link" >{{ $locale == 'ru' ? $page->title_ru : $page->title_uk }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="product-card">
            <div class="holder">
                <div class="product-card__head">
                    <a href="{{ $locale == 'ru' ? 'Вернуться назад' : 'Повернутися назад' }}" class="back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M7 0h1L1 10l7 9v1L0 10z" />
                                </g>
                            </g>
                        </svg>
                        {{ $locale == 'ru' ? 'Вернуться назад' : 'Повернутися назад' }}
                    </a>
                </div>
            </div>
        </section>

        <div class="conteiner">
            {{ $locale == 'ru' ? $page->description_ru : $page->description_uk }}
        </div>
    </div>
@endsection
