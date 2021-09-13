@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')

    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('favorites') !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bs-example">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Название</th>
                                            <th>Цена</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <img class="im_cart" src="{{URL::to('/public')
                                                    }}/house/uploads/{{$product->image}}">
                                                </td>
                                                <td>{{$product->title}}</td>
                                                <td>
                                                    <div class="favorite_price_block">
                                                        @if($product->new_price)
                                                            <strong class="favorite_price_new">
                                                                Цена: {{$product->new_price}} грн.
                                                            </strong>
                                                            <strong class="favorite_price_old">
                                                                <strike>{{$product->price}}грн.</strike>
                                                            </strong>
                                                        @else
                                                            <strong class="favorite_price_old">
                                                                Цена: {{$product->price}}грн.
                                                            </strong>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-8">
                                                        @if($shop_buy)
                                                            <div class="favor prod_butt_buy">
                                                                <a class="btn btn-success" id="add_cart" role="button">В
                                                                    корзину</a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="btn-group btn-group-sm">
                                                            <a class="favor favorite_star" href="{{route
                                                                    ('favorite_add_del',[ 'id' => $product->id ])}}">
                                                                @if(in_array($product->id, Session::get('favorites') ?? []))
                                                                    <i class="fa fa-star"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            </a>
                                                        </div>
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
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script>
        $(function () {
            $('#add_cart').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '{{route('productAddToCart',['id' => $product->id])}}',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] - 1;
                        $(function () {
                            count++;
                            $("CART").text(count);
                            $("#myModal_add_cart").modal();
                        });
                    },
                    // error: function (msg) {
                    //     alert('Не добавлен!');
                    // }
                });
            });
        });
    </script>

@endsection
@section('modal')
    <!-- Modal -->
    <div class="modal fade bd-example-modal-sm" role="dialog" id="myModal_add_cart">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4>{{$product->title}} добавлен в корзину!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                    <a href="{{route('shopping-cart')}}" type="button" class="btn btn-primary">Перейти в корзину</a>
                </div>
            </div>
        </div>
    </div>
@endsection