@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')


    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('tag', $tag) !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @foreach($tag->products->chunk(12) as $productChunk)
                        <div class="panel-heading">
                            <h1>Тег: {{$tag->title}}</h1>
                        </div>
                        <div class="panel-body">
                            <div class="row desc_up">
                                <div class="col-md-8">
                                    {!! $tag->description !!}
                                </div>
                                <div class="col-md-4">
                                    <img class="im_page" src="{{URL::to('/public')}}/house/uploads/{{$tag->image}}">
                                </div>
                            </div>

                            <div class="row">
                                @foreach($productChunk as $product)
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail">
                                            <a href="{!! route('product', $product->slug) !!}"><img class="im_page"
                                                                                                    src="{{URL::to('/public')}}/house/uploads/{{$product->image}}"></a>
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
                                                <a href="{!! route('product', $product->slug) !!}" type="button"
                                                   class="btn btn-default">Подробней</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="col-xs-12">
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
                                                {!! $tag->seo !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
