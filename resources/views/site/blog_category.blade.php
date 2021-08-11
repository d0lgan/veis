@extends('layouts.site.app')
@include('site.technical_mode')
@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Breadcrumbs::render('blog-category', $category) !!}
        </div>
    </div>
<div class="row">
    <div class="col-md-2 my-3">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item"><a href="{{route('blog-category', $category->id)}}">{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-10">
        @foreach($articles as $article)
            <div class="col-md-12 border border-dark my-3 p-4">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('house/uploads/' . $article->image)}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('blog-index', $article->id) }}" class="col-md-12 h3">{{ $article->title }}</a>
                        <div class="col-md-12">{{ $article->short_description }}</div>
                        <a href="{{route('blog-index', $article->id)}}" class="btn btn-primary">@lang('blog.more')</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection
