@extends('layouts.admin.app')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="w-100">
                        <div id="app">
                            <statistics-component></statistics-component>


                            <div class="col mb-4">
                                <h2 class="title-1">Брошенные <span style="text-transform: lowercase;">к</span>орзины
                                </h2>
                            </div>


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center mt-1 m-0">

                                </div>
                            </div>

                            <table class="table table-data2 border-0"
                                   style="border-collapse: separate; border-spacing: 0 5px">
                                <thead>
                                <tr>
                                    <th class="align-middle py-2 pr-3">№</th>
                                    <th class="align-middle py-2 pr-3">Имя</th>
                                    <th class="align-middle py-2 pr-3">Email</th>
                                    <th class="align-middle py-2 pr-3">Телефон</th>
                                    <th class="align-middle py-2 pr-3">Дата</th>
                                    <th class="align-middle py-2 pr-3">Товаров</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="align-middle py-2 pr-3">{{ $order->id }}</td>
                                        <td class="align-middle py-2 pr-3">{{ $order->name }}</td>
                                        <td class="align-middle py-2 pr-3">{{ $order->email }}</td>
                                        <td class="align-middle py-2 pr-3">{{ $order->phone }}</td>
                                        <td class="align-middle py-2 pr-3">{{ $order->created_at }}</td>
                                        <td class="align-middle py-1 pr-3" style="" title="@foreach ($order->products as $product){{ $product['name'] . "\n" }}@endforeach">{{ count($order->products) }}</td>
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
