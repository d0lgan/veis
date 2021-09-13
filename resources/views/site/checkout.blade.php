@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')


    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('checkout') !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">
                        @if($total > 0)

                            <form method="post" action="{{route('checkout')}}">
                                {{csrf_field()}}

                                @if(Auth::check())
                                    <div class="col-xs-9">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <colgroup>
                                                    <col class="col-xs-4">
                                                    <col class="col-xs-4">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <td>Имя и фамилия:*</td>
                                                    <td>
                                                        <input hidden type="text" name="name" class="form-control"
                                                               value="{{Auth::user()->name}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Телефон:*</td>
                                                    <td>
                                                        <input type="text" hidden name="phone" class="form-control"
                                                               value="{{Auth::user()->phone}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email: (не обязательно)</td>
                                                    <td>
                                                        <input type="email" hidden name="email" class="form-control"
                                                               value="{{Auth::user()->email}}">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{--<div class="col-xs-3">
                                        <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
                                            <a type="button" href="{{route('profile')}}"
                                               class="btn btn-primary btn-lg btn-block">Мои заказы</a>
                                            <a type="button" href="{{route('profile')}}"
                                               class="btn btn-default btn-lg btn-block">Данные</a>
                                        </div>
                                    </div>--}}
                                @else
                                    <div class="col-xs-9">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <colgroup>
                                                    <col class="col-xs-4">
                                                    <col class="col-xs-4">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <td>Имя и фамилия:*</td>
                                                    <td>
                                                        <input type="text" required name="name" class="form-control"
                                                               value="{{ old('name') }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Телефон:*</td>
                                                    <td>
                                                        <input type="text" required name="phone"
                                                               class="form-control" value="{{ old('phone') }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email: (не обязательно)</td>
                                                    <td>
                                                        <input type="email" name="email"
                                                               class="form-control" value="{{ old('email') }}">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{--<div class="col-xs-3">
                                        <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
                                            <a type="button" href="{{route('login')}}" class="btn
                                                                  btn-primary btn-lg btn-block">Войти</a>
                                            <a type="button" href="{{route('register')}}"
                                               class="btn btn-default btn-lg
                                                                   btn-block">Регистрация</a>
                                        </div>
                                    </div>--}}
                                @endif

                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                Выбор способов доставки и оплаты
                                            </h4>
                                        </div>
                                        <div id="collapseDelivery" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <!--выбор доставки-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Тип доставки:</label>
                                                        <select name="delivery_id" class="form-control delivery_id">
                                                            <option value="1">Новая Почта</option>
                                                            <option value="2">Самовывоз</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div id="1" class="delivery">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Город:</label>
                                                            <select class="itemCity form-control" required
                                                                    style="width:100%;" name="city"></select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Склад:</label>
                                                            <select name="stock"
                                                                    class="itemPointDelivеry js-states form-control"
                                                                    required style="width:100%;"></select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="2" class="delivery" style="display: none;">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Адрес:</label>
                                                            <input class="form-control" disabled
                                                                   value="Адрес вывоза...."/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>К оплате:</label>
                                                            <input class="form-control"
                                                                   value="{{$total}}" disabled
                                                                   name="total"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="panel-body">
                                                        <!--выбор оплаты-->
                                                        <div class="form-group">
                                                            <label>Способы оплаты:</label>
                                                            <select name="payment_id" class="form-control">
                                                                @foreach($payments as $payment)
                                                                    <option value="{{$payment->id}}">{{$payment->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="col-xs-12">
                                    @if(Auth::check())
                                        <div class="form-group">
                                            <label>Комментарий к заказу:</label>
                                            <textarea class="form-control" name="com_text" rows="3"
                                                      placeholder="{{ old('com_text') }}"></textarea>
                                        </div>
                                    @endif
                                    <button class="btn btn-success" type="submit">Подтвердить заказ</button>
                                    <input type="text" name="type" hidden/>
                                </div>
                            </form>
                        @else
                            <div class="col-xs-12">
                                @if(Auth::check())
                                    <p>Ваш заказ оформлен!</p>
                                    <p>Вы можете просмотреть свои заказы в <a href="{{route('profile')}}">Личном
                                            кабинете</a>.
                                    </p>
                                    <img class="im_cart" src="{{URL::to('/public')}}/images/bas_big.png">
                                    <a href="{{route('home')}}" type="button" class="btn
                                                btn-success">Продолжить покупки</a>
                                @else
                                    <p>Ваш заказ оформлен, спасибо, что остаетесь с нами!</p>
                                    <hr>
                                    <img class="im_cart" src="{{URL::to('/public')}}/images/bas_big.png">
                                    <a href="{{route('home')}}" type="button" class="btn
                                                btn-success">Продолжить покупки</a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $('.itemCity').select2({
            placeholder: 'Выбрать город...',
            language: {
                noResults: function () {
                    return 'Начните вводить...';
                },
            },
            theme: "classic",
            ajax: {
                url: '{{route('select2-cities-ajax')}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            // console.log(data);
                            return {
                                text: item.title,
                                id: item.ref,
                            }

                        })
                    };
                },
                cache: true,
            }
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#checkout_next_2').click(function (e) {
                let city = $('.itemCity').val();
                $.ajax({
                    url: '{{route('select2-np-delivery-points-ajax')}}',
                    type: 'post',
                    dataType: 'json',
                    data: {city: city},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        let whs = data;
                        $('.itemPointDelivеry').empty();
                        for (wh of whs) {
                            $('.itemPointDelivеry').append(new Option(wh));
                        }
                        $('.itemPointDelivеry').select2({
                            theme: "classic"
                        });
                    }
                });
                e.preventDefault();
            });
        })
    </script>

    <script>
        $(function () {
            $('.delivery_id').change(function () {
                $('.delivery').hide();
                $('#' + $(this).val()).show();
            });
        });
    </script>

@endsection