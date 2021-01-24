@extends('layouts.design.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-primary w-100" href="{{route('design-main')}}">Главная</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary w-100" href="{{route('design-product')}}">Товар</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary w-100" href="{{route('design-filter')}}">Фильтр</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary w-100" href="{{route('design-info')}}">Инфо</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary w-100 mt-3" href="{{route('design-search')}}">Поиск</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary w-100 mt-3" href="{{route('design-order')}}">Заказ</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary w-100 mt-3" href="{{route('design-blog')}}">Блог</a>
            </div>
        </div>
    </div>
@endsection