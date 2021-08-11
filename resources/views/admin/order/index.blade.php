@extends('layouts.admin.app')
@section('content')



    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="w-100">

                            <div class="mb-4 d-flex w-100 header align-items-center justify-content-between">

                                <div class="col">
                                    <h2 class="title-1">Заказы</h2>
                                </div>   


                                <div class="datateble-actions col">
                                    <div class="row w-100 justify-content-end align-items-center m-0">
                                        <a type="button" class="btn btn-primary ml-3" href="{{route('admin-orders.create')}}">Добавить</a>
                                    </div>
                                </div>
                            </div>






                            <table class="table table-data2 datatable border-0" >
                            	<thead>
                                    <tr class="border-0">
                                        <th class="align-middle py-1 pr-3">№</th>
                                        <th class="align-middle py-1 pr-3">Покупатель</th>
                                        <th class="align-middle py-1 pr-3">Телефон</th>
                                        <th class="align-middle py-1 pr-3">Email</th>
                                        <th class="align-middle py-1 pr-3">Статус</th>
                                        <th class="align-middle py-1 pr-3">Итого</th>
                                        <th class="align-middle py-1 pr-3">Дата создания</th>
                                        <th class="align-middle py-1 pr-3 bg-none"></th>
                                    </tr>
                                </thead>

                                <tbody class="border-0">
                                	@foreach($orders as $order)
                                        <tr>
                                            <td class="align-middle py-1 pr-3">{{ $order->id }}</td>
                                            <td class="align-middle py-1 pr-3">{{ $order->name }}</td>
                                            <td class="align-middle py-1 pr-3">{{ $order->phone }}</td>
                                            <td class="align-middle py-1 pr-3">{{ $order->email }}</td>
                                            <td class="align-middle py-1 pr-3">{{ $order->status }}</td>
                                            <td class="align-middle py-1 pr-3">{{ $order->total }}</td>
                                            <td class="align-middle py-1 pr-3">{{ $order->created_at }}</td>
                                            <td class="align-middle py-1 pr-3">
                                                <div class="d-flex">
                                                    <a href="/admin-orders/{{ $order->id }}/edit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                    </a>


                                                    <form method="post" action="{{route('admin-orders.destroy',$order->id)}}"
                                                          role="form">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="ml-2 item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i style="font-size: 16px; color: #808080" class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


















                            <!-- <div style="border-radius: 10px" class="table-responsive m-b-40">

                                <table style="border-radius: 10px; overflow-x: scroll;" class="table table-data3">
                                    <thead class="border-0">
                                    <tr class="border-0">
                                        <th style="vertical-align: middle;">№</th>
                                        <th style="vertical-align: middle;">Покупатель</th>
                                        <th style="vertical-align: middle;">Телефон</th>
                                        <th style="vertical-align: middle;">Email</th>
                                        <th style="vertical-align: middle;">Статус</th>
                                        <th style="vertical-align: middle;">Итого</th>
                                        <th style="vertical-align: middle;">Дата создания</th>
                                        <th style="vertical-align: middle;"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="border-0">
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->total }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="/admin-orders/{{ $order->id }}/edit"><i class="fas fa-pencil-alt"></i></a></p>
                                                    <form method="post" action="{{route('admin-orders.destroy',$order->id)}}" role="form">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--<tr>
                                        <td>252</td>
                                        <td>Иванов Иван</td>
                                        <td>В работе</td>
                                        <td>5460</td>
                                        <td>20-01-2020 13:43:24</td>
                                        <td>
                                            <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                        </td>
                                        <td>
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>252</td>
                                        <td>Иванов Иван</td>
                                        <td>Ожидание</td>
                                        <td>187</td>
                                        <td>20-01-2020 13:43:24</td>
                                        <td>
                                            <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                        </td>
                                        <td>
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>252</td>
                                        <td>Иванов Иван</td>
                                        <td>Ожидание</td>
                                        <td>5460</td>
                                        <td>20-01-2020 13:43:24</td>
                                        <td>
                                            <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                        </td>
                                        <td>
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>252</td>
                                        <td>Иванов Иван</td>
                                        <td>В работе</td>
                                        <td>187</td>
                                        <td>20-01-2020 13:43:24</td>
                                        <td>
                                            <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                        </td>
                                        <td>
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </td>
                                    </tr>--}}
                                   {{-- @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->status->title}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>
                                                <p><a class="btn btn-warning" href="{{route('admin-orders.edit',$order->id)}}">Редактировать</a></p>
                                            </td>
                                            <td>
                                                <form method="post" action="{{route('admin-orders.destroy',$order->id)}}" role="form">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach--}}
                                    </tbody>
                                </table>

                                {{--{{ $orders->links() }}--}}
                            </div> -->


                    </div>
                    
                </div>
            </div>
        </div>
    </div>





    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Заказы</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="col-12 d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="{{route('admin-orders.create')
                            }}">Добавить</a>
                        </div>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Покупатель</th>
                                <th>Статус</th>
                                <th>Итого</th>
                                <th>Дата создания</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td class="d-flex">
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="/admin-orders/{{ $order->id }}/edit"><i class="fas fa-pencil-alt"></i></a></p>
                                        <form method="post" action="{{route('admin-orders.destroy',$order->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{--<tr>
                                <td>252</td>
                                <td>Иванов Иван</td>
                                <td>В работе</td>
                                <td>5460</td>
                                <td>20-01-2020 13:43:24</td>
                                <td>
                                    <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                </td>
                                <td>
                                    <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                </td>
                            </tr>
                            <tr>
                                <td>252</td>
                                <td>Иванов Иван</td>
                                <td>Ожидание</td>
                                <td>187</td>
                                <td>20-01-2020 13:43:24</td>
                                <td>
                                    <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                </td>
                                <td>
                                    <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                </td>
                            </tr>
                            <tr>
                                <td>252</td>
                                <td>Иванов Иван</td>
                                <td>Ожидание</td>
                                <td>5460</td>
                                <td>20-01-2020 13:43:24</td>
                                <td>
                                    <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                </td>
                                <td>
                                    <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                </td>
                            </tr>
                            <tr>
                                <td>252</td>
                                <td>Иванов Иван</td>
                                <td>В работе</td>
                                <td>187</td>
                                <td>20-01-2020 13:43:24</td>
                                <td>
                                    <p><a class="btn btn-warning" href="/admin-orders/1/edit">Редактировать</a></p>
                                </td>
                                <td>
                                    <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                </td>
                            </tr>--}}
                           {{-- @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->status->title}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <p><a class="btn btn-warning" href="{{route('admin-orders.edit',$order->id)}}">Редактировать</a></p>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin-orders.destroy',$order->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach--}}
                            </tbody>
                        </table>
                        {{--{{ $orders->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection

