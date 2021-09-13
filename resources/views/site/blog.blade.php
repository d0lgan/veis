@extends('layouts.site.app')
@include('site.technical_mode')
@section('content')

    <div class="row">
        <div class="col-md-12">
            {!! Breadcrumbs::render('blog', $article) !!}
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
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('house/uploads/' . $article->image) }}" alt="">
                </div>
                <div class="col-md-9 h3">
                    {{ $article->title }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!! $article->description !!}
                </div>
            </div>
        </div>
    </div>

@endsection