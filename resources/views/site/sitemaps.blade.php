@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')

    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('sitemaps') !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <ul id="tree2">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{URL('category',$category->slug)}}">{{$category->title}}</a>
                                        @if(count($category->childs))
                                            @include('site.category_child',['childs' =>
                                            $category->childs])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <br>
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
        </div>
    </div>


@endsection
