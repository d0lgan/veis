
@extends('layouts.admin.app')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">

            <div id="app" class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <div class="w-100 header mb-3 d-flex justify-content-between align-items-center">
                            <div class="col">
								<h2 class="title-1">Страницы</h2>
							</div>
							<div class="datateble-actions col">
								<div class="row w-100 justify-content-end align-items-center m-0">
									<a type="button" class="btn btn-primary ml-3" href="#">Добавить</a>
								</div>
							</div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 datatable border-0">
                                <thead>
                                    <tr>
                                        <th class="align-middle py-1 stick">Название</th>
                                        <th class="align-middle py-1 stick">Тип</th>
                                        <th class="align-middle py-1 stick">Slug</th>
                                        <th class="align-middle py-1 stick">H1</th>
                                        <th class="align-middle py-1 stick">Статус</th>
                                        <th class="align-middle py-1 stick">Редактировать</th>
                                    </tr>
                                </thead>
                                <tbody >
                                @foreach($pages as $page)
                                    <tr>
                                        <td class="align-middle py-1 pr-3">{{$page->title_ru}}</td>
                                        <td class="align-middle py-1 pr-3">{{$page->type}}</td>
                                        <td class="align-middle py-1 pr-3">{{$page->slug}}</td>
                                        <td class="align-middle py-1 pr-3">{{$page->meta_h1_ru}}</td>
                                        <td class="align-middle py-1 pr-3">
                                            @if($page->public == 0)
                                                <p style="color: red;">Не активно</p>
                                            @else
                                                <p style="color: #3cc000;">Активна</p>
                                            @endif
                                        </td>
                                        <td class="align-middle py-1 pr-3">



                                            <div class="table-data-feature d-flex justify-content-center">
                                                
                                                <a href="{{route('admin-pages.edit',$page->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                    <i style="font-size: 16px" class="fas fa-pencil-alt"></i>
                                                </a>

                                                <a href="#" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить">
                                                    <i style="font-size: 16px" class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <h1>Страницы</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Тип</th>
                                <th>Slug</th>
                                <th>H1</th>
                                <th>Статус</th>
                                <th>Редактировать</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->type}}</td>
                                    <td>{{$page->slug}}</td>
                                    <td>{{$page->meta_h1}}</td>
                                    <td>
                                        @if($page->public == 0)
                                            <p style="color: red;">Не активно</p>
                                        @else
                                            <p style="color: #3cc000;">Активна</p>
                                        @endif
                                    </td>
                                    <td>
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{route('admin-pages.edit',$page->id)}}"><i class="fas fa-pencil-alt"></i></a></p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@endsection
