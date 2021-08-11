@extends('layouts.admin.app')
@section('content')







    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">


                    <div class="w-100">
                        {!! Form::open(['method' => 'PUT','route' => ['admin-suppliers.update', $supplier->id],'files' => true,
                            'multiple' => 'multiple'])!!}
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Редактирование {{ $supplier->title }}</strong>

                            <div class="d-flex align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-suppliers-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div style="background-color: #fff" class="p-3 w-100">
                            <div class="col-md-12 form-group">
                                <label for="title">Название</label>
                                <input required value="{{ $supplier->title }}" type="text" name="title" id="title" class="form-control">
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
                        <h1 class="sub-header">Редактирование {{ $supplier->title }}</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-suppliers-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            {!! Form::open(['method' => 'PUT','route' => ['admin-suppliers.update', $supplier->id],'files' => true,
                            'multiple' => 'multiple'])!!}
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
{{--                                <li><a href="#set" data-toggle="tab">Данные</a></li>--}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="main">
                                    <div class="col-md-12 form-group">
                                        <label for="title">Название</label>
                                        <input value="{{ $supplier->title }}" type="text" name="title" id="title" class="form-control">
                                    </div>
                                </div>
                                {{--<div class="tab-pane" id="set">

                                    <div class="col-md-12 form-group">
                                        <label for="link">Ссылка на XML</label>
                                        <input value="{{ $supplier->link }}" type="text" name="link" id="link" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input @if($supplier->exchange == 'on') checked @endif type="checkbox" name="exchange" id="exchange">
                                        <label for="exchange">Включить обмен</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input @if($supplier->add_new_products == 'on') checked @endif type="checkbox" name="add_new_products" id="add_new_products">
                                        <label for="add_new_products">Добавить новые товары</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input @if($supplier->update_new_products == 'on') checked @endif type="checkbox" name="update_new_products" id="update_new_products">
                                        <label for="update_new_products">Обновлять новые товары</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input @if($supplier->overwrite_products == 'on') checked @endif type="checkbox" name="overwrite_products" id="overwrite_products">
                                        <label for="overwrite_products">Переписывать полностью товары</label>
                                    </div>
                                </div>--}}
                            </div>
                            <br>
                                <div class="col-md-12">
                                    {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
