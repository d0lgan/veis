@extends('layouts.admin.app')
@section('content')




    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-75">
                        <div class="mb-4 w-100 d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="title-1">Статусы заказа</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center mt-1 m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="{{route('admin-status.create')
                            }}">Добавить</a>
                                </div>
                            </div>
                        </div>








                        <table class="table table-data2 border-0" style="border-collapse: separate; border-spacing: 0 5px">
                                <thead class="border-0">
                                    <tr class="border-0">
                                        <th class="align-middle py-1 pr-3">Название</th>
                                        <th class="align-middle py-1 pr-3">Тип</th>
                                        <th class="align-middle py-1 pr-3 bg-none"></th>
                                    </tr>
                                </thead>

                                <tbody class="border-0">
                                    @foreach($statuses as $status)
                                        <tr>
                                            <td class="align-middle py-1 pr-3">{{ $status->title }}</td>
                                            <td class="align-middle py-1 pr-3">@if($status->public) Активен @else Не активен @endif</td>
                                            <td class="align-middle py-1 pr-3 d-flex">

                                                <div class="table-data-feature d-flex justify-content-center">
                                                    <a href="{{ route('admin-status.edit', $status->id) }}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                    </a>


                                                    <form method="post" action="{{route('admin-status.destroy',$status->id)}}"
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
                            <table class="table table-borderless table-data3 table-hover datatable">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Тип</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Ожидание</td>
                                    <td>Зарезервирован</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Оплачен</td>
                                    <td>Зарезервирован</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Выполнен</td>
                                    <td>Зарезервирован</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>В работе</td>
                                    <td>Зарезервирован</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Отменен</td>
                                    <td>Зарезервирован</td>
                                    <td></td>
                                </tr>
                                @foreach($statuses as $status)
                                    <tr>
                                        <td>{{ $status->title }}</td>
                                        <td>@if($status->public) Активен @else Не активен @endif</td>
                                        <td class="d-flex">
                                            <a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{ route('admin-status.edit', $status->id) }}"><i class="fas fa-pencil-alt"></i></a>

                                            <form method="post" action="{{route('admin-status.destroy',$status->id)}}" role="form">
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





    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Статусы заказа</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="col-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="{{route('admin-status.create')
                            }}">Добавить</a>
                        </div>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Тип</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Ожидание</td>
                                <td>Зарезервирован</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Оплачен</td>
                                <td>Зарезервирован</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Выполнен</td>
                                <td>Зарезервирован</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>В работе</td>
                                <td>Зарезервирован</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Отменен</td>
                                <td>Зарезервирован</td>
                                <td></td>
                            </tr>
                            @foreach($statuses as $status)
                                <tr>
                                    <td>{{ $status->title }}</td>
                                    <td>@if($status->public) Активен @else Не активен @endif</td>
                                    <td class="d-flex">
                                        <a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{ route('admin-status.edit', $status->id) }}"><i class="fas fa-pencil-alt"></i></a>

                                        <form method="post" action="{{route('admin-status.destroy',$status->id)}}" role="form">
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
                </div>
            </div>
        </div>
    </div> -->
@endsection

