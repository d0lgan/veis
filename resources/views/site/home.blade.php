@extends('layouts.site.app')
@include('site.technical_mode')
@section('content')

    @if($settings->slide_home && count($slider) > 0)
        <div class="row">
            <div class="col-lg-12">
                <carousel-component :slides="{{ json_encode($slider) }}"></carousel-component>
            </div>
        </div>
    @endif

    @if($settings->brands)
        <div class="row col-md-12 mt-3" style="height: 50px;">
            <manufacturer-component :brands="{{ json_encode($brands) }}"></manufacturer-component>
        </div>
    @endif

    @if($settings->categories)
        <div class="col-md-12">
            <categories-component :locale="{{ json_encode($locale) }}" :categories="{{ json_encode($categories) }}"></categories-component>
        </div>

    @endif

    @if($settings->universal)
        <div class="row">
            <div class="col-md-12">
                <universal-component :translate="{{ json_encode($translate_universal) }}" :settings="{{ json_encode($settings) }}" :categories="{{ json_encode($new_categories) }}" :products="{{ json_encode($new_products) }}" :locale="{{ json_encode($locale) }}" :sell_products="{{ json_encode($sell_products) }}" :sell_categories="{{ json_encode($sell_categories) }}"></universal-component>
            </div>
        </div>
    @endif
{{--перенести в продукт--}}
    {{--@if($settings->viewed)
        <div class="row">
            <div class="col-md-12">
                <viewed-component :settings="{{ json_encode($settings) }}" :locale="{{ json_encode($locale) }}"></viewed-component>
            </div>
        </div>
    @endif--}}
    @if(count($blog_articles) > 0)
        <div class="row">
            <div class="col-md-12">
                <design-carousel-component :translate="{{ json_encode($translate_blog) }}" :articles="{{ json_encode($blog_articles) }}" :categories="{{ json_encode($blog_categories) }}"></design-carousel-component>
            </div>
        </div>
    @endif












    {{-- {!! Breadcrumbs::render('home') !!}--}}


    {{-- <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h1>{{$page->title}}</h1>
             </div>
             <div class="panel-body">

                 <div class="row">
                     <div class="col-xs-12">
                         <!--Слайдер портфолио-->
                         @widget('slider_home')
                     </div>
                 </div>

                --}}{{-- <div class="row">
                     <div class="col-xs-12">
                         <!--featured_product-->
                         @widget('featured_products')
                     </div>
                 </div>--}}{{--

                 <div class="row">
                     <div class="col-xs-12">
                         <!--new_products-->
                         @widget('new_products')
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-xs-12">
                         <!--bestseller_product-->
                         @widget('bestseller_products')
                     </div>
                 </div>
--}}
    {{-- <!-- Columns are always 50% wide, on mobile and desktop -->
     <div class="row">
         <div class="col-xs-6">
             <img class="im_page" src="{{URL::to('/public')}}/house/uploads/{{$page->image}}">
         </div>
         <div class="col-xs-6">
             {!! $page->description !!}<br>
         </div>
     </div>
     <div class="row">
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
                             {!! $page->seo !!}
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