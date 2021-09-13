@extends('layouts.admin.app')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">

            <div id="app" class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <div class="mb-3 w-100 d-flex header justify-content-between align-items-center">
                            <div class="col">
                                <h2 class="title-1">Акции</h2>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="{{ route('admin-stocks.create') }}">Добавить</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 datatable border-0">
                                <thead>
                                    <tr>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">№</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Название RU</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Название UK</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Ярлык</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Статус</th>
                                        <th style="vertical-align: middle; padding: 5px !important" class="align-middle stick">Отображение</th>
                                        <th style="vertical-align: middle; padding: 5px !important; background-image: none !important;" class="align-middle stick"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($stocks as $stock)
                                        <tr>
                                            <td style="vertical-align: middle; padding: 5px !important">{{ $stock->id }}</td>
                                            <td style="vertical-align: middle; padding: 5px !important">{{ $stock->title_ru }}</td>
                                            <td style="vertical-align: middle; padding: 5px !important">{{ $stock->title_uk }}</td>
                                            <td style="vertical-align: middle; padding: 5px !important">{{ $stock->label }}</td>
                                            <td style="vertical-align: middle; padding: 5px !important">
                                                @if($stock->public == 0)
                                                    <p style="color: red;">Не активная</p>
                                                @else
                                                    <p style="color: #3cc000;">Активная</p>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle; padding: 5px !important">{{ $stock->side ? ($stock->side == 'left' ? 'Слево' : 'Справо') : 'Отстутствует' }}</td>
                                            <td style="vertical-align: middle; padding: 5px !important">
                                                <div class="table-data-feature d-flex justify-content-center">
                                                    <a href="{{route('admin-stocks.edit',$stock->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px" class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form method="post" action="{{route('admin-stocks.destroy',$stock->id)}}" role="form">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" title="Удалить" class="item p-1 d-flex justify-content-center align-items-center" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt" style="font-size: 16px"></i></button>
                                                    </form>
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
        </div>
    </div>
@endsection
