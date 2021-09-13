
<div class="h2 col-md-12">Новинки</div>
@foreach($products as $product)

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <a href="{!! route('product', $product->slug) !!}">
                <img class="mx-auto d-block" style="max-width: 200px !important;" src="{{ asset('house/uploads/' . $product->image) }}" alt="{{ $product->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{!! route('product', $product->slug) !!}">{{ $product->title }}</a>
                </h4>

                {{$product->price}}
{{--                <h5>{{ $product->new_price ? $product->new_price . 'грн.' : null}}</h5>--}}

{{--                <h5>{{ currency($product->new_price ) }}</h5>--}}

                <p class="card-text">Краткое описание товара, какой-то текст...</p>
            </div>
            <div class="card-footer">
                <div class="clearfix">
                    <small class="text-muted float-left">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    {{--<small class="text-muted float-right">&#9733; &#9733; &#9733; &#9733; &#9734;</small>--}}
                </div>
            </div>
        </div>
    </div>

@endforeach
{{--
@foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="{!! route('product', $product->slug) !!}"><img class="im_page" src="{{URL::to('/public')}}/house/uploads/{{$product->image}}"></a>
                    <div class="caption">
                        <h4 class="prod_title">{{$product->title}}</h4>
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
                    <div class="prod_butt_buy">
                        <a href="{!! route('product', $product->slug) !!}" type="button" class="btn btn-default">Подробней</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach--}}
