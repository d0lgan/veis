@extends('layouts.admin.app')
@section('content')







    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">
                        {!! Form::open(['method' => 'post','route' => ['admin-suppliers.store'],'files' => true,
                            'multiple' => 'multiple'])!!}

                        <div class="d-flex justify-content-between my-3">
                            <h2 class="title-3 col-7 m-0 p-0">Новый поставщик</h2>

                            <div class="d-flex">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-suppliers-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div style="background-color: #fff" class="p-3 w-100">
                            

                            <div class="col-md-12 form-group">
                                <label for="title">Название</label>
                                <input type="text" required name="title" id="title" class="form-control">
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
                        <h1 class="sub-header">Новый поставщик</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-suppliers-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            {!! Form::open(['method' => 'post','route' => ['admin-suppliers.store'],'files' => true,
                            'multiple' => 'multiple'])!!}
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
{{--                                <li><a href="#set" data-toggle="tab">Данные</a></li>--}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="main">
                                    <div class="col-md-12 form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                </div>
                                {{--<div class="tab-pane" id="set">

                                    <div class="col-md-12 form-group">
                                        <label for="link">Ссылка на XML</label>
                                        <input type="text" name="link" id="link" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="checkbox" name="exchange" id="exchange">
                                        <label for="exchange">Включить обмен</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="checkbox" name="add_new_products" id="add_new_products">
                                        <label for="add_new_products">Добавить новые товары</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="checkbox" name="update_new_products" id="update_new_products">
                                        <label for="update_new_products">Обновлять новые товары</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="checkbox" name="overwrite_products" id="overwrite_products">
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
