@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#orders" data-toggle="tab">Заказы</a></li>
                            <li><a href="#profile" data-toggle="tab">Мои данные</a></li>
                            <li><a href="#comments" data-toggle="tab">Мои отзывы</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="orders">
                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach($orders as $order)

                                            <blockquote>
                                                <p>@if($order->type == 'one_click')
                                                        Тип: Быстрый заказ
                                                    @elseif($order->type == 'checkout')
                                                        Тип: Корзина
                                                    @else
                                                        Тип: Система
                                                    @endif
                                                    - Заказ №:{{$order->id}} - Дата:{{$order->created_at}}
                                                </p>
                                            </blockquote>

                                            @if($order->cart)
                                                <ul class="list-group">
                                                    @foreach($order->cart->items as $item)
                                                        <li class="list-group-item">
                                                            <span class="badge">{{$item['price']}} грн.</span>
                                                            {{$item['item']['title']}} | {{$item['qty']}} шт.
                                                        </li>
                                                    @endforeach
                                                    <div class="panel-footer">Итого: {{$order->cart->totalPrice}}грн.
                                                    </div>

                                                    <blockquote>
                                                        @foreach($order->comments as $comment)
                                                            <footer>
                                                                <b>{{$comment->name}}
                                                                </b>: {{$comment->com_text}} |
                                                                Статус:{{$comment->status['title']}}
                                                            </footer>
                                                        @endforeach
                                                    </blockquote>
                                                    <hr>
                                                </ul>
                                            @endif

                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="list-group">
                                            <li class="list-group-item">{{$user->name}}</li>
                                            <li class="list-group-item">{{$user->email}}</li>
                                            <li class="list-group-item">{{$user->phone}}</li>
                                        </ul>

                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Редактировать данные
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                             aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">&times;
                                                        </button>
                                                        <h4 class="modal-title"
                                                            id="myModalLabel">Редактирование личных данных</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form role="form"
                                                              action="{{route('admin-users.update',$user->id)}}"
                                                              method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            {{method_field('PATCH')}}

                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif


                                                            <input hidden name="blocked" value="0"/>
                                                            <div class="form-group">
                                                                <label>Имя</label>
                                                                <input required type="text" name="name"
                                                                       class="form-control" value="{{$user->name}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input required type="text" name="email"
                                                                       class="form-control" value="{{$user->email}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Телефон</label>
                                                                <input required type="text" name="phone"
                                                                       class="form-control" value="{{$user->phone}}">
                                                            </div>
                                                            <button type="submit" class="btn btn-default">Обновить
                                                            </button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="comments">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($comment_user as $comment)
                                            <blockquote>
                                                <footer>
                                                    {{$comment->created_at}}
                                                </footer>
                                                <p> {{$comment->com_text}}</p>
                                            </blockquote>
                                        @endforeach
                                        {{ $comment_user->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(function () {
                                $('#myTab a:last').tab('show')
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

