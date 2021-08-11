@extends('layouts.admin.app')
@section('content')







    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">

                    <form class="w-100" action="{{route('admin-users.update',$user->id)}}" method="post" role="form" enctype="multipart/form-data">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}

                        <div class="w-100">
                            
                            <div class="mb-3 d-flex w-100 justify-content-between align-items-center">
                                <strong>Редактирование - {{$user->name}}</strong>

                                <div class="d-flex">
                                    <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                    <a href="{{route('admin-users-index')}}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                </div>
                            </div>


                            <div class="w-100 p-3" style="background-color: #fff">
                                <div class="form-group">
                                    <label for="title" class="control-label">ФИО</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="{{old($user->name)}}" value="{{$user->name}}">
                                </div>


                                <div class="form-group">
                                    <label for="phone" class="control-label">Телефон</label>
                                    <input id="phone" type="text" class="form-control" name="phone" placeholder="{{old($user->phone)}}" value="{{$user->phone}}">                                
                                </div>

                                <div class="form-group">
                                    <label for="title" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="{{old($user->email)}}" value="{{$user->email}}">

                                </div>

                                <div class="form-group">
                                    <label for="slug" class="control-label">Slug</label>
                                    <input disabled id="slug" type="text" class="form-control" name="slug" placeholder="{{old($user->slug)}}" value="{{$user->slug}}">
                                </div>

                                <div class="form-group">
                                    @if($user->blocked)
                                    <label class="control-label" for="blocked">Забанен: <span style="color: #c00000;">Да</span></label>
                                    @else
                                        <label class="control-label" for="blocked">Забанен: <span style="color: #3cc000;">НЕТ</span></label>
                                    @endif
                                    <select class="form-control" name="blocked" id="blocked">
                                        <option value="">-Выбрать-</option>
                                        <option value="1">Да</option>
                                        <option value="0">Нет</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                   <label class="control-label">Роль</label>

                                        <select class="form-control" name="role_id[]">
                                            @foreach($roles as $role)
                                                <option @if($user->roles[0]->name == $role->name) selected @endif value="{{ $role->id }}">{{ $role->name }}</option>


                                                   {{--@if($user->roles[0]->name == 'user')
                                                        <option selected value="{{$role->id}}">{{$role->name}}</option>
                                                       @else
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                       @endif--}}
                                                   @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>







    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Редактирование - {{$user->name}}</h1>
                        <div class="table-responsive">
                            <form action="{{route('admin-users.update',$user->id)}}" method="post" role="form" enctype="multipart/form-data">
                                {{method_field('PATCH')}}
                                {{csrf_field()}}

                                <div class="tab-content">
                                    <div class="tab-pane active" id="desc">
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">ФИО</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" placeholder="{{old($user->name)}}" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-md-4 control-label">Телефон</label>
                                            <div class="col-md-6">
                                                <input id="phone" type="text" class="form-control" name="phone" placeholder="{{old($user->phone)}}" value="{{$user->phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" placeholder="{{old($user->email)}}" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="col-md-4 control-label">Slug</label>
                                            <div class="col-md-6">
                                                <input disabled id="slug" type="text" class="form-control" name="slug" placeholder="{{old($user->slug)}}" value="{{$user->slug}}">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            @if($user->blocked)
                                            <label class="col-md-4 control-label" for="blocked">Забанен: <span style="color: #c00000;">Да</span></label>
                                            @else
                                                <label class="col-md-4 control-label" for="blocked">Забанен: <span style="color: #3cc000;">НЕТ</span></label>
                                            @endif
                                            <div class="col-md-6">
                                            <select class="form-control" name="blocked" id="blocked">
                                                <option value="">-Выбрать-</option>
                                                <option value="1">Да</option>
                                                <option value="0">Нет</option>
                                            </select>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                   <label class="col-md-4 control-label">Роль</label>
                                        <div class="col-md-6">

                                            <select class="form-control" name="role_id[]">
                                               @foreach($roles as $role)
                                                    <option @if($user->roles[0]->name == $role->name) selected @endif value="{{ $role->id }}">{{ $role->name }}</option>


                                                   {{--@if($user->roles[0]->name == 'user')
                                                        <option selected value="{{$role->id}}">{{$role->name}}</option>
                                                       @else
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                       @endif--}}
                                                   @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">Сохранить</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div> -->
@endsection
