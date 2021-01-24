<h2>Рекомендуемые товары</h2>
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
@endforeach
