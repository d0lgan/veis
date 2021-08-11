@extends('layouts.admin.app')
@section('content')
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Заказы</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                    {{--<a type="button" class="btn btn-primary" href="{{route('admin-orders.create')
                            }}">Добавить</a>--}}
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Покупатель</th>
                                <th>Статус</th>
                                <th>Итого</th>
                                <th>Дата создания</th>
                                <th></th>
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
                                    <td>
                                        <p><a class="btn btn-warning" href="/admin-orders/{{ $order->id }}/edit">Редактировать</a></p>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin-orders.destroy',$order->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
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
    </div>
@endsection
