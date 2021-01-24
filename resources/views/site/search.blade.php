@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')

    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('search') !!}
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="">
                                    <form class="navbar-form" role="search" action="{{route('search')}}" method="get">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control"
                                                   placeholder="{{$search_text}}">
                                        </div>
                                        <button type="submit" class="btn btn-default">ОК</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <colgroup>
                                            <col class="col-xs-6">
                                            <col class="col-xs-6">
                                        </colgroup>
                                        <thead>
                                        <tr>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <h3>Результаты поиска:</h3>
                                        @foreach($result_search as $search)
                                            <tr>
                                                <td>
                                                    <a href="{!! route('product', $search->slug) !!}">{{$search->title}}</a>
                                                </td>
                                                <td>
                                                    <code>- содержит: {{$search_text}}</code>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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


@endsection
