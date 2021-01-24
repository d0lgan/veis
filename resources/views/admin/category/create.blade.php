@extends('layouts.admin.app')
@section('content')






    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">
                            <div id="app" class="w-100">

                                <div class="w-100">
                                    {!! Form::open(['method' => 'post','route' => ['admin-categories.store'],'files' => true,
                                        'multiple' => 'multiple'])!!}
                                    <div class="my-4 d-flex align-items-center justify-content-between">
                                        <strong class="title-3">Новая категория</strong>

                                        <div class="d-flex">

                                            <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                            <a href="{{ route('admin-categories-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                        </div>
                                    </div>


                                    <ul class="nav nav-tabs d-flex justify-content-start px-3" id="myTab">
                                        <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab"><strong>Основное</strong></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab"><strong>SEO</strong></a></li>
                                    </ul>


                                    <div style="background-color: #fff" class="tab-content">
                                        <div style="background-color: #fff" class="tab-pane p-3 active" id="main">
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
                                                    @include('admin.partials.title', ['item' => $category, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    {{--<div class="form-group col-md-12">
                                                        <label for="title">Название</label>
                                                        <input type="text" id="title" name="title" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="description">Описание</label>
                                                        <editor-component :name="'description'"></editor-component>
                                                    </div>--}}
                                                    <div class="form-group col-md-4">
                                                        <label for="image">Изображение</label>
                                                        <input type="file" id="image" name="image" class="form-control">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        {!! Form::label('parent_id', 'Выбрать родителя',['class' => 'control-label']) !!}
                                                        {!! Form::select('parent_id', $categories, old('parent_id'), array_merge(['class'
                                                                =>'form-control']))!!}
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="at_home">На главной</label>
                                                        <select name="at_home" id="at_home" class="form-control">
                                                            <option value="0">Нет</option>
                                                            <option value="1">Да</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="sort">Сортировка</label>
                                                        <input type="number" name="sort" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div style="background-color: #fff" class="tab-pane p-3" id="seo">
                                            <div class="col-md-12">
                                                <div class="form-group">
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
                                                        @include('admin.partials.url', ['item' => $category, 'title' => false, 'category_create_url' => '1', 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row m-0">
                                                    {{--<div class="form-group col-md-12">
                                                        <label for="meta_h1">Мета заголовок</label>
                                                        <input type="text" id="meta_h1" name="meta_h1" class="form-control">
                                                    </div>--}}
                                                    {{--<div class="form-group col-md-12">
                                                        <label for="seo_desc">SEO описание</label>
                                                        <editor-component :name="'seo_desc'"></editor-component>
                                                    </div>--}}
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











    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Новая категория</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-categories-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            {!! Form::open(['method' => 'post','route' => ['admin-categories.store'],'files' => true,
                            'multiple' => 'multiple'])!!}
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                                <li><a href="#seo" data-toggle="tab">SEO</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="main">
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
                                            @include('admin.partials.title', ['item' => $category, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            {{--<div class="form-group col-md-12">
                                                <label for="title">Название</label>
                                                <input type="text" id="title" name="title" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="description">Описание</label>
                                                <editor-component :name="'description'"></editor-component>
                                            </div>--}}
                                            <div class="form-group col-md-4">
                                                <label for="image">Изображение</label>
                                                <input type="file" id="image" name="image" class="form-control">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                {!! Form::label('parent_id', 'Выбрать родителя',['class' => 'control-label']) !!}
                                                {!! Form::select('parent_id', $categories, old('parent_id'), array_merge(['class'
                                                        =>'form-control']))!!}
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="at_home">На главной</label>
                                                <select name="at_home" id="at_home" class="form-control">
                                                    <option value="0">Нет</option>
                                                    <option value="1">Да</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="sort">Сортировка</label>
                                                <input type="number" name="sort" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="seo">
                                    <div class="col-md-12">
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
                                                @include('admin.partials.title', ['item' => $category, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row m-0">
                                            {{--<div class="form-group col-md-12">
                                                <label for="meta_h1">Мета заголовок</label>
                                                <input type="text" id="meta_h1" name="meta_h1" class="form-control">
                                            </div>--}}
                                            <div class="form-group col-md-12">
                                                <label for="slug">Чпу</label>
                                                <input disabled type="text" id="title" class="form-control">
                                            </div>
                                            {{--<div class="form-group col-md-12">
                                                <label for="seo_desc">SEO описание</label>
                                                <editor-component :name="'seo_desc'"></editor-component>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 ">
                                        {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'])) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection