@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')

    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('service') !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">

                        <!-- Columns are always 50% wide, on mobile and desktop -->
                        <div class="row">
                            <div class="col-xs-6">
                                <img class="im_page" src="{{URL::to('/public')}}/house/uploads/{{$page->image}}">
                            </div>

                            <div class="call_button_service">
                                <!--Обратный звонок-->
                                @widget('call_form')
                            </div>

                            <div class="col-xs-6">
                                {!! $page->description !!}<br>
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
        </div>
    </div>


@endsection
