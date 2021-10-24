@extends('layouts.admin.app')
@section('content')




    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="mb-4 d-flex header justify-content-between align-items-center">

                            <div class="col">
                                <h2 class="title-1">Редиректы</h2>
                            </div>


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" href="{{route('admin-redirects.create')}}">Добавить</a>
                                </div>
                            </div>
                        </div>





                        <table class="table table-data2 datatable border-0" >
                            <thead class="border-0">
                                <tr class="border-0">
                                    <th class="align-middle py-1 pr-3">Название UK</th>
                                    <th class="align-middle py-1 pr-3">Ссылка Ua</th>
                                    <th class="align-middle py-1 pr-3">Ссылка Ru</th>
                                    <th class="align-middle py-1 pr-3 bg-none"></th>
                                </tr>
                            </thead>

                            <tbody class="border-0">
                                @foreach($redirects as $redirect)
                                    <tr>
                                        <td class="align-middle py-1 pr-3">{{$redirect->title_ru}}</td>
                                        <td class="align-middle py-1 pr-3">{{url("/{$redirect->slug_uk}")}}</td>
                                        <td class="align-middle py-1 pr-3">{{url("/ru/{$redirect->slug_ru}")}}</td>
                                        <td class="align-middle py-1 pr-3">

                                            <div class="table-data-feature d-flex justify-content-center">
                                                <a href="{{route('admin-redirects.edit',$redirect->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                    <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                </a>


                                                <form method="post" action="{{route('admin-redirects.destroy',$redirect->id)}}"
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



                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection
