@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')
    {!! Breadcrumbs::render('shopping-cart') !!}
    <site-cart-component :settings="{{ json_encode($settings) }}"></site-cart-component>
    {{--<div class="container">
        <div class="row">
            {!! Breadcrumbs::render('shopping-cart') !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">

                        @if(Session::has('cart'))
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="bs-example">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Название</th>
                                                <th>Цена</th>
                                                <th>Кол.</th>
                                                <th>Сумма</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td><img class="im_cart" src="{{URL::to('/public')
                                                    }}/house/uploads/{{$product['item']['image']}}"></td>
                                                    <td>{{$product['item']['title']}}</td>
                                                    <td>{{$product['item']['price']}}</td>
                                                    <td>{{$product['qty']}}</td>
                                                    <td>{{$product['item']['price']*$product['qty']}}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="{{route('reduceByOne',['id' => $product['item']['id']])}}"
                                                               type="button" class="btn btn-default"><i
                                                                        class="fa fa-minus"></i>
                                                            </a>
                                                            <a href="{{route('addByOne',['id' => $product['item']['id']])}}"
                                                               type="button" class="btn btn-default"><i
                                                                        class="fa fa-plus"></i>
                                                            </a>
                                                            <a href="{{route('remove',['id' => $product['item']['id']])}}"
                                                               type="button" class="btn btn-default"><i
                                                                        class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong>Итого: {{$totalPrice}} грн.</strong>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="{{route('home')}}" type="button" class="btn
                                                btn-default">Продолжить покупки</a>
                                    <a href="{{route('checkout')}}" type="button" class="btn
                                                btn-success">Оформить</a>
                                </div>
                            </div>

                        @else
                            <div class="row">
                                <div class="col-xs-6">
                                    <h4>У Вас нет товаров к корзине!</h4>
                                    <a href="{{route('home')}}" type="button" class="btn
                                                btn-primary">Продолжить покупки</a>
                                </div>
                                <div class="col-xs-6">
                                    <img class="im_cart" src="{{URL::to('/public')}}/images/bas_big.png">
                                </div>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

@endsection
