@extends('layouts.admin.app')
@section('content')
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <div id="app">
                <div class="row">
                    <order-component :statuses="{{ json_encode($statuses) }}" :way-to-pays="{{ json_encode($wayToPays) }}" :ord="{{ json_encode($order)}}" :prod="{{ json_encode($products) }}" :regi="{{ json_encode($regions) }}" :cit="{{ json_encode($cities) }}" :warehouse="{{ json_encode($warehouses) }}"></order-component>
                </div>
            </div>
        </div>
    </div>
</div>












    {{--<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h2 class="sub-header">Редактирование</h2>
                        <div class="table-responsive">
                            {!! Form::model($order,['method' => 'PUT','files' => true, 'route' => ['admin-orders.update',$order->id]]) !!}
                            <script>
                                $(function () {
                                    $('#myTab a:last').tab('show')
                                })
                            </script>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#desc" data-toggle="tab">Информация</a></li>
                                <li><a href="#data" data-toggle="tab">Доставка и оплата</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane active" id="desc">
                                    <div class="col-md-6">
                                        @foreach($order->cart->items as $item)
                                            <li class="list-group-item">
                                                <span class="badge">{{$item['price']}} грн.</span>
                                                {{$item['item']['title']}} | {{$item['qty']}} шт.
                                            </li>
                                        @endforeach
                                        <div class="panel-footer"><h4>Итого: {{$order->cart->totalPrice}} грн
                                                .</h4></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <colgroup>
                                                    <col class="col-xs-1">
                                                    <col class="col-xs-7">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <td>Заказ №:</td>
                                                    <td>{{$order->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Тип заказа:</td>
                                                    <td>
                                                        @if($order->type == 'one_click')
                                                            Быстрый заказ
                                                        @elseif($order->type == 'checkout')
                                                            Корзина
                                                        @else
                                                            Система
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Дата:</td>
                                                    <td>{{$order->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Получатель:</td>
                                                    <td>{{$order->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Телефон:</td>
                                                    <td>{{$order->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email:</td>
                                                    @if($order->email)
                                                        <td>{{$order->email}}</td>
                                                    @else
                                                        <td>
                                                            {!! Form::text('email', $order->email, old('email'), array_merge
                                                        (['class' =>'form-control']))!!}
                                                        </td>
                                                    @endif
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="data">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <colgroup>
                                                    <col class="col-xs-1">
                                                    <col class="col-xs-6">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <td>{!! Form::label('status_id', 'status_id',['class' => 'control-label']) !!}</td>
                                                    <td>
                                                        {!! Form::select('status_id', $statuses, old('status_id'), ['class'
                                                                =>'form-control'])!!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{!! Form::label('delivery_id', 'Перевозчик',['class' => 'control-label']) !!}</td>
                                                    <td>
                                                        {!! Form::select('delivery_id', [1 => 'Новая Почта'], old
                                                        ('delivery_id'),array_merge(['class' =>'form-control'])) !!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{!! Form::label('city', 'Город',['class' => 'control-label'])!!}</td>
                                                    <td>
                                                            {!! Form::select('city', $cities, old('city'), ['class'
                                                                =>'form-control'])!!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{!! Form::label('stock', 'Склад',['class' => 'control-label'])!!}</td>
                                                    <td>
                                                        {!! Form::text('stock', $order->stock, array_merge(['class' =>'form-control']))!!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{!! Form::label('payment_id', 'Вид оплаты',['class' =>
                                                    'control-label']) !!}</td>
                                                    <td>
                                                        {!! Form::select('payment_id', $payments, old('payment_id'), ['class'
                                                                =>'form-control'])!!}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($order->comments as $comment)
                                            <li class="list-group-item">{{$comment->com_text}}<br> -- {{$comment->status['title']}} | {{$comment->name}} | {{$order->updated_at}}</li>
                                        @endforeach
                                    </div>
                                    <hr>
                                    <div class="col-md-6">
                                        {!! Form::textarea('com_text', old('com_text'), array_merge(['class' =>'form-control']))!!}

                                        <hr>
                                        <div class="col-md-12 form-group">
                                            {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>--}}
@endsection
