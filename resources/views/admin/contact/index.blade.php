@extends('layouts.admin.app')
@section('content')






    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="w-100">
                                    <div class="mb-4 w-100 header d-flex justify-content-between align-items-center">
                                        <div class="col">
                                            <h2 class="title-1">Запросы с сайта</h2>
                                        </div>   


                                        <div class="datateble-actions col">
                                            <div class="row w-100 justify-content-end align-items-center m-0">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <table class="table table-data2 datatable border-0" >
                                            <thead>
                                            <tr>
                                                <th class="align-middle py-1 pr-3">Тип</th>
                                                <th class="align-middle py-1 pr-3">Тема</th>
                                                <th class="align-middle py-1 pr-3">Имя</th>
                                                <th class="align-middle py-1 pr-3">Email</th>
                                                <th class="align-middle py-1 pr-3">Телефон</th>
                                                <th class="align-middle py-1 pr-3">Дата</th>
                                                <th class="align-middle py-1 pr-3">Статус</th>
                                                <th class="align-middle py-1 pr-3 bg-none"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($contacts as $contact)
                                                <tr>
                                                    <td class="align-middle py-1 pr-3">@if($contact->type == 'call') Звонок @else Сообщение @endif</td>
                                                    <td class="align-middle py-1 pr-3">{{ $contact->theme }}</td>
                                                    <td class="align-middle py-1 pr-3">{{ $contact->name }}</td>
                                                    <td class="align-middle py-1 pr-3">{{ $contact->email }}</td>
                                                    <td class="align-middle py-1 pr-3">{{ $contact->phone }}</td>
                                                    <td class="align-middle py-1 pr-3">{{ $contact->created_at }}</td>
                                                    <td class="align-middle py-1 pr-3">@if($contact->status == 1)Новый@elseПросмотренный@endif</td>
                                                    <td class="align-middle py-1 pr-3 d-flex">
                                                        <form method="post" action="{{route('admin-contacts.destroy',$contact->id)}}"
                                                              role="form">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="color: #808080"></i></button>
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
                </div>
            </div>












    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Запросы с сайта</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Тип</th>
                                <th>Тема</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Дата</th>
                                <th>Статус</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>@if($contact->type == 'call') Звонок @else Сообщение @endif</td>
                                    <td>{{ $contact->theme }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td>@if($contact->status == 1)Новый@elseПросмотренный@endif</td>
                                    <td class="d-flex">
                                        <a href="/admin-contacts/{{ $contact->id }}/edit" style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" type="submit"><i class="fas fa-pencil-alt"></i></a>
                                        <form method="post" action="{{route('admin-contacts.destroy',$contact->id)}}"
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
                        {{--{{ $contacts->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
