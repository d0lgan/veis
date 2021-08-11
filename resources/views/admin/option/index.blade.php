@extends('layouts.admin.app')
@section('content')



    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="mb-4 d-flex header justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="title-1">Опции</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="{{route('admin-options.create')}}">Добавить</a>
                                </div>
                            </div>
                        </div>





                        <table class="table table-data2 datatable border-0" >
                            <thead class="border-0">
                                <tr class="border-0">
                                    <th class="align-middle py-1 pr-3">Название RU</th>
                                    <th class="align-middle py-1 pr-3">Название UK</th>
                                    <th class="align-middle py-1 pr-3">Сортировка</th>
                                    <th class="align-middle py-1 pr-3 bg-none"></th>
                                </tr>
                            </thead>

                            <tbody class="border-0">
                                @foreach($options as $option)
                                    <tr>
                                        <td class="align-middle py-1 pr-3">{{  $option->title_ru }}</td>
                                        <td class="align-middle py-1 pr-3">{{  $option->title_uk }}</td>
                                        <td class="align-middle py-1 pr-3">{{  $option->sort }}</td>
                                        <td class="align-middle py-1 pr-3">


                                            <div class="table-data-feature d-flex justify-content-center">
                                                <a href="{{route('admin-options.edit',$option->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                    <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                </a>


                                                <form method="post" action="{{route('admin-options.destroy',$option->id)}}"
                                                      role="form">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="color: #808080"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>




                        <!-- <div style="border-radius: 10px" class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th >Сортировка</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($options as $option)
                                    <tr>
                                        <td>{{  $option->title }}</td>
                                        <td>{{  $option->sort }}</td>
                                        <td class="d-flex">
                                            <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"
                                                  href="{{route('admin-options.edit',$option->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                            </p>
                                            <form method="post" action="{{route('admin-options.destroy',$option->id)}}"
                                                  role="form">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Новая опция</h1>
            <div class="col-12 d-flex justify-content-end">
                <a type="button" class="btn btn-primary" href="{{route('admin-options.create')}}">Добавить</a>
            </div>
            <table class="table table-striped table-hover table-bordered datatable">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Сортировка</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($options as $option)
                    <tr>
                        <td>{{  $option->title }}</td>
                        <td>{{  $option->sort }}</td>
                        <td class="d-flex">
                            <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"
                                  href="{{route('admin-options.edit',$option->id)}}"><i class="fas fa-pencil-alt"></i></a>
                            </p>
                            <form method="post" action="{{route('admin-options.destroy',$option->id)}}"
                                  role="form">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div> -->
@endsection

