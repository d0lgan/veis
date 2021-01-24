@extends('layouts.admin.app')
@section('content')







    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div class="w-100">
                    <form action="{{ route('admin-status.store') }}" method="post">
                    @csrf
                        <div class="my-4 d-flex align-items-center justify-content-between">
                            <strong>Новый статус</strong>

                            <div class="d-flex">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-status-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="w-100 p-3" style="background-color: #fff">
                            <div class="form-group">
                                <label class="control-label" for="name">Название</label>
                                <input type="text" required id="name" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="public">Тип</label>
                                <select name="public" id="public" class="form-control">
                                    <option value="1">Активен</option>
                                    <option value="0">Не активен</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Новый статус</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('admin-status-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin-status.store') }}" method="post">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="name">Название</label>
                            <input type="text" id="name" name="title" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="public">Тип</label>
                            <select name="public" id="public" class="form-control">
                                <option value="1">Активен</option>
                                <option value="0">Не активен</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input class="btn btn-primary" type="submit" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
@endsection

