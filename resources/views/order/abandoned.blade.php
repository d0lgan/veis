@extends('layouts.admin.app')
@section('content')
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Брошеные корзины</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Дата</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            @endforeach
                            {{--<tr>
                                <td>224</td>
                                <td>Вася</td>
                                <td></td>
                                <td>0944848464</td>
                                <td>Иванов Иван</td>
                                <td>20-01-2020 10:33:01</td>
                            </tr>
                            <tr>
                                <td>224</td>
                                <td></td>
                                <td>Email@email.email</td>
                                <td>0944848464</td>
                                <td>Иванов Иван</td>
                                <td>20-01-2020 10:33:01</td>
                            </tr>
                            <tr>
                                <td>224</td>
                                <td>Петя</td>
                                <td>0944848464</td>
                                <td></td>
                                <td>Иванов Иван</td>
                                <td>20-01-2020 10:33:01</td>
                            </tr>
                            <tr>
                                <td>224</td>
                                <td></td>
                                <td>Email@email.email</td>
                                <td>0944848464</td>
                                <td>Иванов Иван</td>
                                <td>20-01-2020 10:33:01</td>
                            </tr>
                            <tr>
                                <td>224</td>
                                <td>Email@email.email</td>
                                <td>Email@email.email</td>
                                <td>0944848464</td>
                                <td></td>
                                <td>20-01-2020 10:33:01</td>
                            </tr>
                            <tr>
                                <td>224</td>
                                <td></td>
                                <td></td>
                                <td>0944848464</td>
                                <td>Иванов Иван</td>
                                <td>20-01-2020 10:33:01</td>
                            </tr>--}}
                            {{--@foreach($slides as $slide)
                                <tr>
                                    <td>{{ $slide->title }}</td>
                                    <td>{{ $slide->sort }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin-slider.edit', $slide->id) }}">Редактировать</a>

                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin-slider.destroy',$slide->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

