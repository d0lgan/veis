@extends('layouts.admin.app')
@section('content')




    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="mb-4 d-flex header justify-content-between align-items-center">

                            <div class="col">
                                <h2 class="title-1">Производители</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="{{route('admin-manufacturers.create')}}">Добавить</a>
                                </div>
                            </div>
                        </div>





                        <table class="table table-data2 datatable border-0" >
                            <thead class="border-0">
                                <tr class="border-0">
                                    <th class="align-middle py-1 pr-3">Название RU</th>
                                    <th class="align-middle py-1 pr-3">Название UK</th>
                                    <th class="align-middle py-1 pr-3">ЧПУ RU</th>
                                    <th class="align-middle py-1 pr-3">ЧПУ UK</th>
                                    <th class="align-middle py-1 pr-3">Сортировка</th>
                                    <th class="align-middle py-1 pr-3 bg-none"></th>
                                </tr>
                            </thead>

                            <tbody class="border-0">
                                @foreach($manufacturers as $manufacturer)
                                    <tr>
                                        <td class="align-middle py-1 pr-3">{{$manufacturer->title_ru}}</td>
                                        <td class="align-middle py-1 pr-3">{{$manufacturer->title_uk}}</td>
                                        <td class="align-middle py-1 pr-3">{{$manufacturer->slug_ru}}</td>
                                        <td class="align-middle py-1 pr-3">{{$manufacturer->slug_uk}}</td>
                                        <td class="align-middle py-1 pr-3">{{$manufacturer->sort}}</td>
                                        <td class="align-middle py-1 pr-3">

                                            <div class="table-data-feature d-flex justify-content-center">
                                                <a href="{{route('admin-manufacturers.edit',$manufacturer->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                    <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                </a>


                                                <form method="post" action="{{route('admin-manufacturers.destroy',$manufacturer->id)}}"
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
                                    <th>ЧПУ</th>
                                    <th>Сортировка</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($manufacturers as $manufacturer)
                                    <tr>
                                        <td>{{$manufacturer->title}}</td>
    {{--                                    <td><img class="im_admin" src="{{asset('house/uploads/' . $manufacturer->image)}}"></td>--}}
                                        <td>{{$manufacturer->slug}}</td>
                                        <td>{{$manufacturer->sort}}</td>
                                        <td class="d-flex">
                                            <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{route('admin-manufacturers.edit',$manufacturer->id)}}"><i class="fas fa-pencil-alt"></i></a></p>
                                            <form method="post" action="{{route('admin-manufacturers.destroy',$manufacturer->id)}}" role="form">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
    {{--                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>--}}
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












    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Производители</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="col-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="{{route('admin-manufacturers.create')}}">Добавить</a>
                        </div>
                        <hr>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>ЧПУ</th>
                                <th>Сортировка</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($manufacturers as $manufacturer)
                                <tr>
                                    <td>{{$manufacturer->title}}</td>
{{--                                    <td><img class="im_admin" src="{{asset('house/uploads/' . $manufacturer->image)}}"></td>--}}
                                    <td>{{$manufacturer->slug}}</td>
                                    <td>{{$manufacturer->sort}}</td>
                                    <td class="d-flex">
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{route('admin-manufacturers.edit',$manufacturer->id)}}"><i class="fas fa-pencil-alt"></i></a></p>
                                        <form method="post" action="{{route('admin-manufacturers.destroy',$manufacturer->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
{{--                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>--}}
                                            <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--{{ $manufacturers->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
