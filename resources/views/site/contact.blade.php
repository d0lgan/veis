@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')
    {!! Breadcrumbs::render('order') !!}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="im_page" src="{{asset('house/uploads/' . $page->image)}}">
                                <div class="col-md-12">
                                    <ul>
                                        <li>{{$address_site}}</li>
                                        <li>{{$phone_site_1}}</li>
                                        <li>{{$phone_site_2}}</li>
                                        <li>{{$phone_site_3}}</li>
                                        <li>{{$phone_site_4}}</li>
                                        <li>{{$email_site}}</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--Контактная форма-->
                                @if($settings->contact_form)
                                    <site-contact-component></site-contact-component>
                                @endif
                                <!--@widget('contact_form')-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="h3 col-md-12">О сайте</div>
                            <div class="col-md-12">{!! $page->description !!}</div>
                        </div>
                        {{--<div class="row">
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
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
