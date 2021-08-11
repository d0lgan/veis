@extends('layouts.admin.app')
@section('content')









    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">
                        <div id="app" class="w-100">
                            <div class="w-100">
                                {!! Form::open(['method' => 'post','route' => ['admin-redirects.store'],'files' => true])
                           !!}
                                
                                <div class="my-3 d-flex align-items-center">
                                    <h2 class="title-3 col-7 m-0 p-0">Новый редирект</h2>

                                    <div class="d-flex w-100 justify-content-end">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="{{route('admin-redirects-index')}}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>

                                </div>

                                <ul class="nav nav-tabs px-3" id="myTab">
                                    <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                                </ul>

                                <div style="background-color: #fff" class="tab-content p-3">
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
                                            @include('admin.partials.title', ['item' => $redirect, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="category">Категория</label>
                                            <category-component :categories="{{ json_encode($categories_json) }}"
                                                                id="category"></category-component>
                                        </div>

                                        </div>
                                        {{--<div class="col-md-4 form-group">
                                            {!! Form::label('image', 'Изображение',['class' => 'control-label']) !!}
                                            {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                        </div>--}}
                                        {{--<div class="col-md-4 form-group">
                                            {!! Form::label('link', 'Ссылка (относительно корня)',['class' => 'control-label']) !!}
                                            {!! Form::text('link','', array_merge(['class' => 'form-control', 'required' => 'required'])) !!}
                                        </div>--}}
                                        {{--<div class="col-md-4 form-group">
                                            {!! Form::label('sort', 'Сортировка',['class' => 'control-label']) !!}
                                            {!! Form::text('sort','', array_merge(['class' => 'form-control', 'required' => 'required'])) !!}
                                        </div>--}}
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
                                            @include('admin.partials.url', ['item' => $redirect, 'title' => false, 'manufacturer_create_url' => '1','description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
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