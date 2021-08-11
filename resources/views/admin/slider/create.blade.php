@extends('layouts.admin.app')
@section('content')







    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">

                    {!! Form::open(['method' => 'post','route' => ['admin-slider.store'],'files' => true,
                            'multiple' => 'multiple'])!!}
                        <div class="d-flex align-items-center justify-content-between my-3">
                            <strong>Новый слайд</strong>
                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-slider-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="w-100 p-3">
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
                                @include('admin.partials.title', ['item' => $slider, 'title' => true, 'description' => true, 'slider' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                <div class="form-group">
                                    <label class="form-label" for="link">Ссылка</label>
                                    <input type="text" name="link" id="link" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="additional_link">Дополнительная ссылка</label>
                                    <input type="text" name="additional_link" id="additional_link" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="color">Фон слайдера</label>
                                    <color-component></color-component>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="image">Изображение</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="sort">Сортировка</label>
                                    <input required type="text" name="sort" id="sort" class="form-control">
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Новый слайд</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('admin-slider-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            {!! Form::open(['method' => 'post','route' => ['admin-slider.store'],'files' => true,
                            'multiple' => 'multiple'])!!}
            <div class="row">
                <div class="col-md-12">
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
                            @include('admin.partials.title', ['item' => $slider, 'title' => true, 'description' => true, 'slider' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                            <div class="form-group col-md-6">
                                <label for="link">Ссылка</label>
                                <input type="text" name="link" id="link" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="additional_link">Дополнительная ссылка</label>
                                <input type="text" name="additional_link" id="additional_link" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="color">Фон слайдера</label>
{{--                        <input type="color" name="color" id="color" class="form-control">--}}
                        <color-component></color-component>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Изображение</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sort">Сортировка</label>
                        <input type="text" name="sort" id="sort" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input class="btn btn-primary" type="submit" value="Сохранить">
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div> -->
@endsection

