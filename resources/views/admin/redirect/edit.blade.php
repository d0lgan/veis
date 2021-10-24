@extends('layouts.admin.app')
@section('content')









    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">
                        <div id="app" class="w-100">

                            <div class="w-100">
                                {!! Form::model($redirect,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-redirects.update',$redirect->id]]) !!}

                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                    <strong>Редактирование - {{$redirect->title_ru}}</strong>

                                    <div class="d-flex justify-content-end align-items-center">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="{{ route('admin-redirects-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>

                                </div>

                                <ul class="nav nav-tabs px-3" id="myTab">
                                    <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                                </ul>

                                <div style="background-color: #fff" class="p-3 tab-content">
                                    <div style="background-color: #fff" class="tab-pane active" id="main">
                                        <div class="col-md-12 form-group">
                                            <ul class="nav nav-tabs" id="language">
                                                @foreach($langs as $key => $lang)
                                                    <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                                href="#language_main_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}" data-toggle="tab" class="nav-link {{ $key == 0 ? 'active' : null }}"
                                                                >
                                                            @if($lang->locate_code == 'ru')
                                                                <img style="height: 25px;" src="{{ asset('/images/russia.svg') }}" alt="">
                                                            @elseif($lang->locate_code == 'uk')
                                                                <img style="height: 25px;" src="{{ asset('/images/ukraine.svg') }}" alt="">
                                                            @endif
                                                        </a></li>
                                                @endforeach
                                            </ul>

                                            <div class="tab-content">
                                                @include('admin.partials.title', ['item' => $redirect, 'title' => true,  'description' => true,'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="category">Категория</label>
                                                    <category-component :default_category="{{ $redirect->category_id }}"
                                                                        :categories="{{ json_encode($categories_json) }}"></category-component>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div id="app">
                                                        <select-component :default="{{ json_encode($redirect->attributes) }}"
                                                                          :categories="{{ json_encode($attributes) }}"
                                                                          :title="{{ json_encode('Aтрибуты') }}"
                                                                          :title-or-name="{{ json_encode('name') }}"
                                                                          id="category"></select-component>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <div id="app">
                                                        <select-component :default="{{ json_encode($redirect->tags) }}"
                                                                          :categories="{{ json_encode($tags) }}"
                                                                          :title="{{ json_encode('Теги') }}"
                                                                          :title-or-name="{{ json_encode('title') }}"
                                                                          :name="{{ json_encode('tags') }}"
                                                                          id="category"></select-component>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 form-group">
                                                    <label>Страница</label>
                                                    <input class="form-control" type="number" value="{{ $redirect->page }}" name="page">
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="sail">Товары по Акции</label>
                                                    <select name="sail" id="sail"
                                                            class="form-control" style="display: block;">
                                                        <option value="1" @if($redirect->sail == 1) selected @endif>Да</option>
                                                        <option value="0" @if($redirect->sail == 0 || $redirect->sail == null) selected @endif>Нет</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div style="background-color: #fff" class="tab-pane" id="seo">
                                        <div class="col-md-12 form-group">
                                            <ul class="nav nav-tabs" id="language">
                                                @foreach($langs as $key => $lang)
                                                    <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                                href="#language_seo_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}" data-toggle="tab"
                                                                >
                                                            @if($lang->locate_code == 'ru')
                                                                <img style="height: 25px;" src="{{ asset('/images/russia.svg') }}" alt="">
                                                            @elseif($lang->locate_code == 'uk')
                                                                <img style="height: 25px;" src="{{ asset('/images/ukraine.svg') }}" alt="">
                                                            @endif
                                                        </a></li>
                                                @endforeach
                                            </ul>

                                            <div class="tab-content">
                                                @include('admin.partials.url', ['item' => $redirect, 'title' => false, 'manufacturer_url' => '1', 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

            </div>

    </div>













@endsection
