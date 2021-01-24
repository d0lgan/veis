@extends('layouts.admin.app')
@section('content')





    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        <form method="post" action="{{ route('admin-group-attribute.store') }}">
                        @csrf

                        <div class="my-3 d-flex align-items-center justify-content-between">
                            <strong>Создание Группы Атрибутов</strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-group-attribute-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="w-100 p-3">
                            
                                <div class="bs-example">
                                        
                                        <div class="form-group">
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
                                                @include('admin.partials.title', ['item' => $group_attribute, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div id="app" class="w-100">
                                                <select-component :categories="{{ json_encode($categories) }}"></select-component>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="public" class="align-middle mt-2">Отображение</label>
                                            <select name="public" id="public" class="form-control">
                                                <option value="1">Да</option>
                                                <option value="0">Нет</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="sort" class="align-middle mt-2">Сортировка</label>
                                            <input type="text" name="sort" class="form-control">
                                        </div>


                                        {{--<div class="row">
                                        {!! Form::open(['method' => 'post','route' => ['admin-group-attribute.store'],'files' => true])
                                        !!}
                                        <div class="col-md-4 form-group">
                                            {!! Form::label('name', 'Название',['class' => 'control-label']) !!}
                                            {!! Form::text('name','', array_merge(['class' => 'form-control'])) !!}
                                        </div>
                                            <div class="col-md-3 form-group">
                                                {!! Form::label('category_id', 'Категоря',['class' => 'control-label']) !!}
                                                {!! Form::select('category_id', $categories, old('category_id'), ['class'=>'form-control'])!!}
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="form-group">
    
                                        </div>
                                        {!! Form::close() !!}
                                        </div>--}}

                                    </form>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1 class="m-0">Создание Группы Атрибутов</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('admin-group-attribute-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <form method="post" action="{{ route('admin-group-attribute.store') }}">
                            @csrf
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
                                    @include('admin.partials.title', ['item' => $group_attribute, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                </div>
                            </div>

                            <div class="form-group">

                                <div id="app">
                                    <select-component :categories="{{ json_encode($categories) }}"></select-component>
                                </div>
                            </div>
                            <div class="form-group col-md-3 row mt-4">
                                <label for="public" class="col-md-6 align-middle mt-2">Отображение</label>
                                <select name="public" id="public" class="form-control col-md-6">
                                    <option value="1">Да</option>
                                    <option value="0">Нет</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 row mt-4">
                                <label for="sort" class="col-md-6 align-middle mt-2">Сортировка</label>
                                <input type="text" name="sort" class="form-control col-md-6">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </form>


                            {{--<div class="row">
                            {!! Form::open(['method' => 'post','route' => ['admin-group-attribute.store'],'files' => true])
                            !!}
                            <div class="col-md-4 form-group">
                                {!! Form::label('name', 'Название',['class' => 'control-label']) !!}
                                {!! Form::text('name','', array_merge(['class' => 'form-control'])) !!}
                            </div>
                                <div class="col-md-3 form-group">
                                    {!! Form::label('category_id', 'Категоря',['class' => 'control-label']) !!}
                                    {!! Form::select('category_id', $categories, old('category_id'), ['class'=>'form-control'])!!}
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                            </div>
                            {!! Form::close() !!}
                            </div>--}}

                    </div>
                </div>
            </div>
          </div>
        </div> -->
@endsection