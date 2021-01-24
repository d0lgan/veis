@extends('layouts.admin.app')
@section('content')



    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <div class="mb-4 w-100 header d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="title-1">Категории</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="{{route('admin-categories.create')}}">Добавить</a>
                                </div>
                            </div>
                        </div>







                        <table class="table table-data2 datatable-category border-0">
                                <thead class="border-0">
                                    <tr class="border-0">
                                        <th class="align-middle py-1 pr-3">Изобр-е</th>
                                        <th class="align-middle py-1 pr-3">Название RU</th>
                                        <th class="align-middle py-1 pr-3">Название UK</th>
                                        <th class="align-middle py-1 pr-3">Родитель</th>
                                        <th class="align-middle py-1 pr-3">ЧПУ RU</th>
                                        <th class="align-middle py-1 pr-3">ЧПУ UK</th>
                                        <th class="align-middle py-1 pr-3">На главной</th>
                                        <th class="align-middle py-1 pr-3 bg-none"></th>
                                    </tr>
                                </thead>

                                <tbody class="border-0">
                                    @foreach($categories as $category)
                                        <tr>
                                            <td style="padding: 5px 0 !important" class="align-middle py-0">@if($category->image) <img style="width: 40px !important" class="im_admin"
                                                                           src="{{asset('house/uploads/' . $category->image)}}"> @else
                                                    - @endif</td>
                                            <td style="padding: 5px 0 !important" class="align-middle py-0">{{  $category->title_ru }}</td>
                                            <td style="padding: 5px 0 !important" class="align-middle py-0">{{  $category->title_uk }}</td>
                                            @if($category->parent != null)
                                                <td style="padding: 5px 0 !important">{{$category->parent->title_ru}}</td>
                                            @else
                                                <td style="padding: 5px 0 !important">-</td>
                                            @endif

                                            <td style="padding: 5px 0 !important" class="align-middle py-0">{{$category->slug_ru}}</td>
                                            <td style="padding: 5px 0 !important" class="align-middle py-0">{{$category->slug_uk}}</td>
                                            <td style="padding: 5px 0 !important" class="align-middle py-0">@if($category->at_home == 1)Да @else Нет @endif</td>
                                            <td style="padding: 5px 0 !important" class="align-middle py-0">


                                                <div class="table-data-feature d-flex justify-content-center">
                                                    <a href="{{route('admin-categories.edit',$category->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                    </a>


                                                    <form method="post" action="{{route('admin-categories.destroy',$category->id)}}"
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










                        <!-- <div style="border-radius: 10px" class="table-responsive table-responsive-data2 m-b-40">
                            <table style="border-radius: 10px" class="table table-data2">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-white align-middle">Изображение</th>
                                        <th class="text-white align-middle">Название</th>
                                        <th class="text-white align-middle">Родитель</th>
                                        <th class="text-white align-middle">ЧПУ</th>
                                        <th class="text-white align-middle">На главной</th>
                                        <th></th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>@if($category->image) <img class="im_admin"
                                                                           src="{{asset('house/uploads/' . $category->image)}}"> @else
                                                    - @endif</td>
                                            <td>{{  $category->title }}</td>
                                            @if($category->parent != null)
                                                <td>{{$category->parent->title}}</td>
                                            @else
                                                <td>-</td>
                                            @endif

                                            <td>{{$category->slug}}</td>
                                            <td>@if($category->at_home == 1)Да @else Нет @endif</td>
                                            <td class="d-flex">
                                                <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"
                                                      href="{{route('admin-categories.edit',$category->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                                </p>
                                                <form method="post" action="{{route('admin-categories.destroy',$category->id)}}"
                                                      role="form">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
        {{--                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>--}}
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
            <h1>Категории</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="col-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="{{route('admin-categories.create')}}">Добавить</a>
                        </div>

                        <hr>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Изображение</th>
                                <th>Название</th>
                                <th>Родитель</th>
                                <th>ЧПУ</th>
                                <th>На главной</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $category)
                                <tr>
                                    <td>@if($category->image) <img class="im_admin"
                                                                   src="{{asset('house/uploads/' . $category->image)}}"> @else
                                            - @endif</td>
                                    <td>{{  $category->title }}</td>
                                    @if($category->parent != null)
                                        <td>{{$category->parent->title}}</td>
                                    @else
                                        <td>-</td>
                                    @endif

                                    <td>{{$category->slug}}</td>
                                    <td>@if($category->at_home == 1)Да @else Нет @endif</td>
                                    <td class="d-flex">
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"
                                              href="{{route('admin-categories.edit',$category->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                        </p>
                                        <form method="post" action="{{route('admin-categories.destroy',$category->id)}}"
                                              role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
{{--                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>--}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--{{ $categories->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
