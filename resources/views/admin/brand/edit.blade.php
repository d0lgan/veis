@extends('layouts.admin.app')
@section('content')






    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">


                    <div class="w-100">

                    {!! Form::open(['method' => 'PUT','route' => ['admin-brands.update', $brand->id],'files' => true,
                    'multiple' => 'multiple'])!!}

                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование {{ $brand->title }}</strong>
                            <div class="m-0 p-0 d-flex align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-brands-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
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
                                @include('admin.partials.title', ['item' => $brand, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                            </div>

                            <div class="form-group">
                                <label for="link" class="mb-3">Ссылка</label>
                                <input value="{{ $brand->link }}" type="text" required id="link" name="link" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Сортировка</label>
                                <input type="text" class="form-control">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Новый бренд</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-brands-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            {!! Form::open(['method' => 'PUT','route' => ['admin-brands.update', $brand->id],'files' => true,
                            'multiple' => 'multiple'])!!}
                            <div class="col-md-12">
                                <div class="row">
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
                                            @include('admin.partials.title', ['item' => $brand, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="link">Ссылка</label>
                                        <input value="{{ $brand->link }}" type="text" id="link" name="link" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 ">
                                    {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'])) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection