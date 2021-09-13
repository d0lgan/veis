@extends('layouts.site.app')
@include('site.technical_mode')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {!! Breadcrumbs::render('category', $category) !!}
            </div>
        </div>
            <site-category-component :translate="{{ json_encode($translate) }}" :prod="{{ json_encode($products) }}" :category="{{ json_encode($category) }}" :tags="{{ json_encode($tags) }}" :manufacturers="{{ json_encode($manufacturers) }}" :categories="{{ json_encode($categories) }}" :groups="{{ json_encode($groupsAttributes) }}" :locale="{{ json_encode($locale) }}" :settings="{{ json_encode($settings) }}" :count_p="{{ json_encode($count_p) }}"></site-category-component>

            {{--<div class="col-md-3">
                <div class="widget_category sidebar">
                    --}}{{--todo Category - Trable 2--}}{{--
                    @widget('tree_category')
                </div>
                <div class="widget_filter sidebar">
                    @if($products->isNotEmpty())
                        @include('site.filter.filter_category')
                    @endif
                </div>
                <div class="widget_category sidebar">
                    @widget('client_block')
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$category->title}}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row desc_up">
                            <div class="col-md-8">
                                {!! $category->description !!}
                            </div>
                            <div class="col-md-4">
                                <img class="im_page" src="{{URL::to('/public')}}/house/uploads/{{$category->image}}">
                            </div>
                        </div>
                        @foreach($products->chunk(3) as $productChunk)
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
                        @endforeach

                        {{$products->links()}}


                        <div class="col-xs-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                SEO Текст
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {!! $category->seo !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}

    </div>

@endsection