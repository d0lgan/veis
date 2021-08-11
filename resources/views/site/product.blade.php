@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')
    {!! Breadcrumbs::render('product', $product) !!}

    <site-product-component :page="{{ json_encode($page) }}" :translate_watch="{{ json_encode($translate_watch) }}" :translate="{{ json_encode($translate) }}" :product="{{ json_encode($product) }}" :locale="{{ json_encode($locale) }}" :attributes="{{ json_encode($selected_attr) }}" :back="{{ json_encode(Redirect::back()->getTargetUrl()) }}" :settings="{{ json_encode($settings) }}"></site-product-component>
{{--

    <div class="container">
        <div class="row">

            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$product->title}}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <section class="col-md-6" data-featherlight-gallery data-featherlight-filter="a">
                                <div class="col-md-6 im_prod_box">

                                    <a class="rk-item gallery"
                                       data-featherlight="#mylightbox-{{$product->id}}" href="#{{$product->id}}">
                                        <img class="im_page"
                                             src="{{asset('/house/uploads/' . $product->image)}}">
                                    </a>
                                    <div id="mylightbox-{{$product->id}}" tabindex="-1" role="dialog" hidden="true">
                                        <img alt="{{$product->title}}-{{$product->id}}"
                                             src="{{asset('/house/uploads/' . $product->image)}}">
                                    </div>


                                    <div class="product_gallery">
                                        @foreach($product->galleries as $gallery)

                                            <ul class="hor_nav">
                                                <li>

                                                    <a class="rk-item gallery"
                                                       data-featherlight="#mylightbox-{{$gallery->id}}"
                                                       href="#{{$gallery->id}}">
                                                        <img class="im_prod_gal" src="{{asset('/house/uploads/' . $gallery->name)}}">
                                                    </a>
                                                </li>
                                            </ul>

                                            <div id="mylightbox-{{$gallery->id}}" tabindex="-1" role="dialog"
                                                 hidden="true">
                                                <img alt="{{$product->title}}-{{$gallery->id}}"
                                                     src="{{asset('/house/uploads/' . $gallery->name)}}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>

                            <div class="col-md-6">

                                <a class="prod favorite_star" href="{{route('favorite_add_del',[ 'id' =>
                                        $product->id ])}}">
                                    @if(in_array($product->id, Session::get('favorites') ?? []))
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                </a>

                                <p>Категория: <a
                                            href="{!! route('category', $product->category->slug) !!}">{{$product->category->title}}</a>
                                </p>
                                <p>Производитель: <a
                                            href="{!! route('manufacturer', $product->manufacturer->slug) !!}">{{$product->manufacturer->title}}</a>
                                </p>
                                <hr>
                                <div class="product_price_block">
                                    @if($product->new_price)
                                        <strong class="prod_price_new">
                                            Цена: {{$product->new_price}} грн.
                                        </strong>
                                        <strong class="prod_price_old">
                                            <strike>{{$product->price}}грн.</strike>
                                        </strong>
                                    @else
                                        <strong class="prod_price_old">
                                            Цена: {{$product->price}}грн.
                                        </strong>
                                    @endif
                                </div>
                                <hr>
                                @if($shop_buy)
                                    <div class="prod_butt_buy">
                                        <a class="btn btn-success" id="add_cart" role="button">В корзину</a>
                                        <a type="button" id="prod_minus" class="btn btn-default">-</a>
                                        <a type="button" id="prod_plus" class="btn btn-default">+</a>
                                        <!-- Button trigger modal -->
                                        <button class="btn btn-info" data-toggle="modal"
                                                data-target="#myModal_one_click">
                                            Купить в 1 клик
                                        </button>
                                    </div>
                                @endif
                                <hr>
                                <div class="phone-once-click">
                                    <form role="form" action="{{route('contact-form.store')}}" method="post"
                                          class="form-inline">
                                        {{csrf_field()}}
                                        <input hidden name="pages" value="{{$_SERVER['REQUEST_URI']}}"/>
                                        <input hidden name="type" value="product-call-form"/>
                                        <input hidden type="text" name="name" value="unknown">
                                        <div class="form-group">
                                            <label class="sr-only">Email</label>
                                            <input type="text" name="phone" class="form-control"
                                                   placeholder="+38(099)999 99 99">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Перезвонить</button>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="block_tag_prod_card">
                                    <ul>
                                        @foreach($product->tags as $tag)
                                            <li class="tag_prod_list"><a
                                                        href="{!! route('tag', $tag->slug) !!}"><span
                                                            class="label label-info">{{$tag->title}}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(function () {
                                $('#myTab a:last').tab('show')
                            })
                        </script>
                        <div class="row">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#desc" data-toggle="tab">Описание</a></li>
                                <li><a href="#сharacteristic" data-toggle="tab">Характеристика</a></li>
--}}{{--                                <li><a href="#comments" data-toggle="tab">Отзывы</a></li>--}}{{--
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="desc">
                                    <hr>
                                    <div class="col-md-12">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <div class="tab-pane" id="сharacteristic">
                                    <hr>
                                    <div class="col-md-12">
                                        <h4>Характеристики</h4>
                                        <div class="table-responsive">
                                            @if($product->attributes)
                                                <table class="table table-bordered table-striped">
                                                    <colgroup>
                                                        <col class="col-xs-3">
                                                        <col class="col-xs-9">
                                                    </colgroup>
                                                    <thead>
                                                    <tr>
                                                        <th>Название</th>
                                                        <th>Значение</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($product->attributes as $attribute)
                                                        <tr>
                                                            <td>{{$attribute->group_attribute->name}}</td>
                                                            <td>{{$attribute->name}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="comments">
                                    <hr>
                                    <div class="col-md-12">
                                        @foreach($product->comments as $comment)
                                            <blockquote>
                                                <p>
                                                    @if(Auth::check())
                                                        {{Auth::user()->name}}
                                                    @else
                                                        {{$comment->name}}
                                                    @endif
                                                </p>
                                                <footer>{{$comment->com_text}}</footer>
                                            </blockquote>
                                            <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseThree">
                                                SEO Текст
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {!! $product->seo !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
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

            $('#prod_plus').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '{{route('addByOneCardProduct',['id' => $product->id])}}',
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
                            if (count === 0) {
                                alert(data['info_messages']);
                            }
                            alert(data['info_messages']);
                        });
                    },
                });
            });

            $('#prod_minus').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '{{route('reduceByOneCardProduct',['id' => $product->id])}}',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] + 1;
                        $(function () {
                            count--;
                            $("CART").text(count);
                            if (count === 0) {
                                alert(data['info_messages']);
                            }
                            alert(data['info_messages']);
                        });

                    },
                });
            });
        });
        $('a.gallery').featherlightGallery({
            // previousIcon: '&#9664;',     /* Code that is used as previous icon */
            // nextIcon: '&#9654;',         /* Code that is used as next icon */
            previousIcon: '«',
            nextIcon: '»',
            galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300,          /* fadeOut speed before slide is loaded */
            openSpeed: 300
        });
    </script>
{{--

    <script>
        $('a.gallery').featherlightGallery({
            // previousIcon: '&#9664;',     /* Code that is used as previous icon */
            // nextIcon: '&#9654;',         /* Code that is used as next icon */
            previousIcon: '«',
            nextIcon: '»',
            galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300,          /* fadeOut speed before slide is loaded */
            openSpeed: 300
        });
    </script>
--}}

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


    <!-- Modal -->
    <div class="modal fade" id="myModal_one_click" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="im_page" src="{{URL::to('/public')}}/house/uploads/{{$product->image}}">
                        </div>
                        <div class="col-md-6">
                            <h3>{{$product->title}}</h3>
                            @if($product->new_price)
                                <strong class="prod_price_new">
                                    Цена: {{$product->new_price}} грн.
                                </strong>
                                <strong class="prod_price_old">
                                    <strike>{{$product->price}}грн.</strike>
                                </strong>
                            @else
                                <strong class="prod_price_old">
                                    Цена: {{$product->price}}грн.
                                </strong>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-inline" role="form" action="{{route('orderQuick',$product->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="sr-only">Имя</label>
                            @if(Auth::check())
                                <input required type="text" name="name" class="form-control"
                                       value="{{Auth::user()->name}}">
                            @else
                                <input required type="text" name="name" class="form-control" placeholder="Ваше имя">
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Телефон</label>
                            @if(Auth::check())
                                <input required type="text" name="phone" class="form-control"
                                       value="{{Auth::user()->phone}}">
                            @else
                                <input required type="text" name="phone" class="form-control" placeholder="Телефон">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Заказать</button>
                        <input type="text" name="type" hidden/>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

@endsection