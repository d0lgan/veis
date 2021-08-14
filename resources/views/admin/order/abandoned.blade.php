@extends('layouts.admin.app')
@section('content')






    <div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">
                        <h2 class="title-1 m-b-25">Брошенные <span style="text-transform: lowercase;">к</span>орзины</h2>








                        <table class="table table-data2 border-0" style="border-collapse: separate; border-spacing: 0 4px">
                            <thead>
                                <tr>
                                    <th class="align-middle py-1 pr-3">№</th>
                                    <th class="align-middle py-1 pr-3">Имя</th>
                                    <th class="align-middle py-1 pr-3">Email</th>
                                    <th class="align-middle py-1 pr-3">Телефон</th>
                                    <th class="align-middle py-1 pr-3">Дата</th>
                                    <th class="align-middle py-1 pr-3">Сумма</th>
                                    <th class="align-middle py-1 pr-3">Кол-во Товаров</th>
                                    <th class="align-middle py-1 pr-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="align-middle py-1 pr-3">{{ $order->id }}</td>
                                        <td class="align-middle py-1 pr-3">{{ $order->name }}</td>
                                        <td class="align-middle py-1 pr-3">{{ $order->email }}</td>
                                        <td class="align-middle py-1 pr-3">{{ $order->phone }}</td>
                                        <td class="align-middle py-1 pr-3">{{ $order->created_at }}</td>
                                        <td class="align-middle py-1 pr-3">{{ $order->total }}</td>
                                        <td class="align-middle py-1 pr-3" style="display: flex; justify-content: center;" title="@foreach ($order->products as $product){{ $product['name'] . "\n" }}@endforeach">{{ count($order->products) }}</td>
                                        <td class="align-middle py-1 pr-3">
                                            <div class="table-data-feature d-flex justify-content-center">

                                                <form method="post" action="{{route('admin-orders.destroy',$order->id)}}"
                                                      role="form">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="color: #808080; font-size: 15px"></i></button>
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














    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Брошенные корзины</h1>
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
                                <th></th>
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
                                    <td class="d-flex">
                                        <form method="post" action="{{route('admin-orders.destroy',$order->id)}}" role="form">
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

