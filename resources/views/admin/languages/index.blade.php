@extends('layouts.admin.app')
@section('content')


    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <h2 class="title-1 m-b-25">Языки</h2>


                        <div class="table-responsive table-responsive-data2 m-b-40">
                            <table style="border-collapse: separate; border-spacing: 0 .25rem;" class="table table-data2 border-0">
                                <thead>
                                <tr>
                                    <th class="align-middle">id</th>
                                    <th class="align-middle">locate code</th>
                                    <th class="align-middle">name</th>
                                    <th class="align-middle">script</th>
                                    <th class="align-middle">native</th>
                                    <th class="align-middle">regional</th>
                                    <th class="align-middle">public</th>
                                    <th class="align-middle">default</th>
                                    <th class="align-middle">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($languages as $language)
                                    <tr>
                                        <td class="align-middle py-2 pr-3">{{$language->id}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->locate_code}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->name}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->script}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->native}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->regional}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->public}}</td>
                                        <td class="align-middle py-2 pr-3">{{$language->default}}</td>
                                        <td class="align-middle py-2 pr-3"> 
                                            <a href="{{route('admin-languages.edit',$language->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px;color: #808080" class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Языки</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <hr>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>locate code</th>
                                <th>name</th>
                                <th>script</th>
                                <th>native</th>
                                <th>regional</th>
                                <th>public</th>
                                <th>default</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($languages as $language)
                                <tr>
                                    <td>{{$language->id}}</td>
                                    <td>{{$language->locate_code}}</td>
                                    <td>{{$language->name}}</td>
                                    <td>{{$language->script}}</td>
                                    <td>{{$language->native}}</td>
                                    <td>{{$language->regional}}</td>
                                    <td>{{$language->public}}</td>
                                    <td>{{$language->default}}</td>
                                    <td> <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{route('admin-languages.edit',$language->id)}}"><i class="fas fa-pencil-alt"></i></a></p></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
