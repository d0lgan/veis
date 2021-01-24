@extends('layouts.admin.app')
@section('content')




    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <h2 class="title-1 m-b-25">Валюта</h2>


                        <div class="table-responsive table-responsive-data2 m-b-40">
                            <table style="border-collapse: separate; border-spacing: 0 .25rem;" class="table table-data2 border-0">
                                <thead>
                                <tr>
                                    <th class="align-middle">ID</th>
                                    <th class="align-middle">Title</th>
                                    <th class="align-middle">Code</th>
                                    <th class="align-middle">Rate</th>
                                    <th class="align-middle">Public</th>
                                    <th class="align-middle">Default</th>
                                    <th class="align-middle">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($currencies as $currency)
                                    <tr>
                                        <td class="align-middle py-2 pr-3">{{$currency->id}}</td>
                                        <td class="align-middle py-2 pr-3">{{$currency->title}}</td>
                                        <td class="align-middle py-2 pr-3">{{$currency->code}}</td>
                                        <td class="align-middle py-2 pr-3">{{$currency->rate}}</td>
                                        <td class="align-middle py-2 pr-3">{{$currency->public}}</td>
                                        <td class="align-middle py-2 pr-3">{{$currency->default}}</td>
                                        <td class="align-middle py-2 pr-3">
                                            <a href="{{route('admin-currency.edit',$currency->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
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
            <h1>Валюта</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <hr>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Rate</th>
                                <th>Public</th>
                                <th>Default</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($currencies as $currency)
                                <tr>
                                    <td>{{$currency->id}}</td>
                                    <td>{{$currency->title}}</td>
                                    <td>{{$currency->code}}</td>
                                    <td>{{$currency->rate}}</td>
                                    <td>{{$currency->public}}</td>
                                    <td>{{$currency->default}}</td>
                                    <td> <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{route('admin-currency.edit',$currency->id)}}"><i class="fas fa-pencil-alt"></i></a></p></td>
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
