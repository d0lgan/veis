@extends('layouts.admin.app')
@section('content')








    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class=" w-100">

                    {!! Form::open(['method' => 'PUT','route' => ['admin-blog-category.update', $category->id],'files' => true,
                            'multiple' => 'multiple'])!!}
                        <div class=" d-flex mb-3 align-items-center justify-content-between">
                            <strong>Редактирование категории {{ $category->title }}</strong>

                            <div class="d-flex">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-blog-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="w-100 p-3" style="background-color: #fff">
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
        {{--                                    {{ $lang->native }}--}}
                                        </a></li>
                                @endforeach
                            </ul>

                            <div class="tab-content">
                                @include('admin.partials.title', ['item' => $category, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                            </div>

                            <label for="image">Изображение</label>
                            <input type="file" id="image" name="image" class="form-control">

                            @if($category->image)
                                <img class="col-md-2" src="{{ asset('/house/uploads/' . $category->image) }}" alt="">
                                <input type="checkbox" name="del_image" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Удалить изображение</label>
                            @endif
                        </div>

                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>












   <!--  <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Редактирование категории {{ $category->title }}</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('admin-blog-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            {!! Form::open(['method' => 'PUT','route' => ['admin-blog-category.update', $category->id],'files' => true,
                            'multiple' => 'multiple'])!!}
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
{{--                                    {{ $lang->native }}--}}
                                </a></li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @include('admin.partials.title', ['item' => $category, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label for="image">Изображение</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                </div>
                @if($category->image)
                    <div class="col-md-12">
                        <img class="col-md-2" src="{{ asset('/house/uploads/' . $category->image) }}" alt="">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="del_image" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Удалить изображение</label>
                    </div>
                @endif
                <div class="col-md-12">
                    <input class="btn btn-primary" type="submit" value="Сохранить">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div> -->
@endsection

