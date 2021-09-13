@extends('layouts.site.app')

@include('site.technical_mode')

@section('content')
    {!! Breadcrumbs::render('order') !!}
    <site-order-component :locate="{{ json_encode($locale) }}" :translate="{{ json_encode($translate) }}" :settings="{{ json_encode($settings) }}" :regi="{{ json_encode($regions)}}"></site-order-component>

@endsection
