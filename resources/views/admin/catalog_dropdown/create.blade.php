@extends('layouts.admin.app')
@section('content')
    <div class="main-content">
            <div class="section__content section__content--p30">
                    <div class="row">
                        <div id="app" class="w-100">
                            <div class="w-100">
                                {!! Form::open(['method' => 'post','route' => ['admin-catalog-dropdown.store'],'files' => true])
                           !!}
                                
                                <div class="my-3 d-flex align-items-center">
                                    <h2 class="title-3 col-7 m-0 p-0">Новый элемент</h2>

                                    <div class="d-flex w-100 justify-content-end">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="{{route('admin-catalog-dropdown-index')}}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>

                                </div>

                                <ul class="nav nav-tabs px-3" id="myTab">
                                    <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                                </ul>

                                <div style="background-color: #fff" class="tab-content p-3">
                                    <div style="background-color: #fff" class="tab-pane active" id="main">
                                        <div class="col-md-12 form-group">
                                        <ul class="nav nav-tabs" id="language">
                                            @foreach($langs as $key => $lang)
                                                <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                            href="#language_main_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}" data-toggle="tab" class="nav-link {{ $key == 0 ? 'active' : null }}"
                                                            >
                                                        @if($lang->locate_code == 'ru')
                                                            <img style="height: 25px;" src="{{ asset('/images/russia.svg') }}" alt="">
                                                        @elseif($lang->locate_code == 'uk')
                                                            <img style="height: 25px;" src="{{ asset('/images/ukraine.svg') }}" alt="">
                                                        @endif
                                                    </a></li>
                                            @endforeach
                                        </ul>

                                        <div class="tab-content">
                                            @include('admin.partials.title', ['item' => $elem, 'title' => true, 'link' => true,'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                        </div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            {!! Form::label('sort', 'Сортировка',['class' => 'control-label']) !!}
                                            {!! Form::text('sort','', array_merge(['class' => 'form-control', 'required' => 'required'])) !!}
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
            </div>
    </div>
@endsection