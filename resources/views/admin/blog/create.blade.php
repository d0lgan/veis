@extends('layouts.admin.app')
@section('content')




    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">

                    {!! Form::open(['method' => 'post','route' => ['admin-blog.store'],'files' => true,
                            'multiple' => 'multiple'])!!}
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Новая статья</strong>

                            <div class="d-flex">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-blog-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <ul class="nav nav-tabs px-4" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Основное</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SEO</a>
                          </li>
                        </ul>

                        <div class="tab-content p-3" style="background-color: #fff">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
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

                                <div class="tab-content mt-2">
                                    @include('admin.partials.title', ['item' => $article, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                </div>

                                <label for="category">Категория</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">-- Выберите категорию --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach

                                </select>

                                <label for="title" class="mt-3">Изображение</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        @foreach($langs as $key => $lang)
                                            <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                        href="#language_seo_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}"
                                                        data-toggle="tab"
                                                        >
                                                    @if($lang->locate_code == 'ru')
                                                        <img style="height: 25px;" src="{{ asset('/images/russia.svg') }}" alt="">
                                                    @elseif($lang->locate_code == 'uk')
                                                        <img style="height: 25px;" src="{{ asset('/images/ukraine.svg') }}" alt="">
                                                    @endif
                                                </a></li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content mt-2">
                                        <div class="form-group">
                                            <label for="" class="form-label">Meta Заголовок:</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Url:</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">SEO описание:</label>
                                            <div id="app">
                                                <editor-component :name="Seo" :v="test"></editor-component>
                                            </div>
                                        </div>
                                    </div>
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
            <h1>Новая статья</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('admin-blog-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            {!! Form::open(['method' => 'post','route' => ['admin-blog.store'],'files' => true,
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
                            @include('admin.partials.title', ['item' => $article, 'title' => true, 'short_description' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="category">Категория</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">-- Выберите категорию --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach

                        </select>
                    </div>
                    {{--<div class="form-group col-md-12">
                        <label for="short_desc">Краткое описание</label>
                        <textarea name="short_desc" id="short_desc" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Описание</label>
                        <editor-component :name="{{ json_encode('full_desc') }}"></editor-component>
                    </div>--}}
                    <div class="form-group col-md-12">
                        <label for="title">Изображение</label>
                        <input type="file" name="image" class="form-control">
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

