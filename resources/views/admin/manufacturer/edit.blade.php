@extends('layouts.admin.app')
@section('content')









    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">
                        <div id="app" class="w-100">

                            <div class="w-100">
                                {!! Form::model($manufacturer,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-manufacturers.update',$manufacturer->id]]) !!}
                                
                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                    <strong>Редактирование - {{$manufacturer->title}}</strong>

                                    <div class="d-flex justify-content-end align-items-center">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="{{ route('admin-manufacturers-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
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
                                                @include('admin.partials.title', ['item' => $manufacturer, 'title' => true,  'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                            </div>
                                        </div>


                                        @if($manufacturer->image != null)
                                            <div class="col-md-3">
                                                <img class="col-md-12" src="{{asset('/house/uploads/' . $manufacturer->image)}}" />
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="del">
                                                <label>
                                                    Удалить изображение
                                                </label>
                                            </div>
                                        @endif
                                        <div class="col-md-4 form-group">
                                            {!! Form::label('image', 'Изображение',['class' => 'control-label']) !!}
                                            {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                        </div>
                                        {{--<div class="col-md-4 form-group">
                                            {!! Form::label('link', 'Ссылка',['class' => 'control-label']) !!}
                                            {!! Form::text('link',$manufacturer->link, array_merge(['class' => 'form-control', 'required' => 'required'])) !!}
                                        </div>--}}
                                        <div class="col-md-4 form-group">
                                            {!! Form::label('sort', 'Сортировать',['class' => 'control-label']) !!}
                                            {!! Form::text('sort',$manufacturer->sort, array_merge(['class' => 'form-control', 'required' => 'required'])) !!}
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
                                                @include('admin.partials.url', ['item' => $manufacturer, 'title' => false, 'manufacturer_url' => '1', 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
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
                        <h1 class="sub-header">Редактирование - {{$manufacturer->title}}</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-manufacturers-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        {!! Form::model($manufacturer,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-manufacturers.update',$manufacturer->id]]) !!}

                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                            <li><a href="#seo" data-toggle="tab">Seo</a></li>
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
                                        @include('admin.partials.title', ['item' => $manufacturer, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                    </div>
                                </div>
                                @if($manufacturer->image != null)
                                    <div class="col-md-3">
                                        <img class="col-md-12" src="{{asset('/house/uploads/' . $manufacturer->image)}}" />
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="del">
                                        <label>
                                            Удалить изображение
                                        </label>
                                    </div>
                                @endif
                                <div class="col-md-4 form-group">
                                    {!! Form::label('image', 'Изображение',['class' => 'control-label']) !!}
                                    {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                </div>
                                <div class="col-md-4 form-group">
                                    {!! Form::label('link', 'Ссылка',['class' => 'control-label']) !!}
                                    {!! Form::text('link',$manufacturer->link, array_merge(['class' => 'form-control'])) !!}
                                </div>
                                <div class="col-md-4 form-group">
                                    {!! Form::label('sort', 'Сортировать',['class' => 'control-label']) !!}
                                    {!! Form::text('sort',$manufacturer->sort, array_merge(['class' => 'form-control'])) !!}
                                </div>
                            </div>
                            <div class="tab-pane" id="seo">

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
                                        @include('admin.partials.title', ['item' => $manufacturer, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="col-md-12 form-group">
                            {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection
