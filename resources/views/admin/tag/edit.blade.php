@extends('layouts.admin.app')
@section('content')









    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        {!! Form::open(['method' => 'PUT','route' => ['admin-tags.update', $tag->id],'files' => true,
                            'multiple' => 'multiple'])!!}

                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <strong>Редактирование {{ $tag->name_ru }}</strong>

                            <div class="m-0 p-0 d-flex align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-tags-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <ul class="nav nav-tabs d-flex justify-content-start px-3" id="myTab">
                            <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab"><strong>Основное</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab"><strong>SEO</strong></a></li>
                        </ul>


                        <div style="background-color: #fff" class="tab-content">
                            <div style="background-color: #fff" class="tab-pane p-3 active" id="main">
                                <div class="form-group">
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
                                        @include('admin.partials.title', ['item' => $tag, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])

                                        <!-- <label for="description">Описание</label>
                                        <editor-component :name="'description'" :v="{{ json_encode($tag->description) }}"></editor-component> -->
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #fff" class="tab-pane p-3" id="seo">
                                <div class="form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        @foreach($langs as $key => $lang)
                                            <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                        href="#language_seo_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}" data-toggle="tab"
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
                                        @include('admin.partials.url', ['item' => $tag, 'title' => false, 'tag_url' => '1','description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
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
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Редактирование {{ $tag->name }}</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-tags-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            {!! Form::open(['method' => 'PUT','route' => ['admin-tags.update', $tag->id],'files' => true,
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
                                                </a></li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content">
                                        @include('admin.partials.title', ['item' => $tag, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Сохранить" class="btn btn-primary">
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    {{--<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2 class="sub-header">Редактирование - {{$tag->title}}</h2>
                        <div class="table-responsive">
                                {!! Form::model($tag,['method' => 'PUT','files' => true, 'route' =>['admin-tags.update',$tag->id]]) !!}
                                <div class="tab-content">
                                        <div class="col-md-6">
                                            <ul class="nav nav-tabs" id="language">
                                                @foreach($langs as $key => $lang)
                                                    <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                                href="#language{{ $lang->locate_code }}" data-toggle="tab"
                                                                >
                                                            {{ $lang->native }}
                                                        </a></li>
                                                @endforeach
                                            </ul>

                                            <div class="tab-content">
                                                @include('admin.partials.title', ['item' => $tag, 'description' => true, 'meta' => true, 'seo' => true])
                                            </div>
                                            --}}{{--<div class="form-group">
                                                --}}{{----}}{{--{!! Form::label('title', 'Title',['class' => 'control-label']) !!}
                                                {!! Form::text('title', $tag->title, array_merge(['class' =>
                                                'form-control'])) !!}--}}{{----}}{{--


                                            </div>--}}{{--
                                            --}}{{--<div class="form-group">
                                                {!! Form::label('meta_h1', 'Meta_h1',['class' => 'control-label']) !!}
                                                {!! Form::text('meta_h1', $tag->meta_h1, array_merge(['class' =>
                                                'form-control'])) !!}
                                            </div>--}}{{--
                                            <div class="form-group">
                                                {!! Form::label('slug', 'Slug',['class' => 'control-label']) !!}
                                                {!! Form::text('slug', $tag->slug, array_merge(['class' =>
                                                'form-control','disabled' => 'disabled'])) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('image', 'Image',['class' => 'control-label']) !!}
                                                <img class="im_admin" src="{{URL::to('/public')}}/house/uploads/{{$tag->image}}">
                                            </div>
                                            <div class="form-group">
                                                {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                            </div>
                                        </div>
                                       <div class="col-md-6">
                                            --}}{{--<div class="form-group">
                                                {!! Form::label('seo', 'Seo',['class' => 'control-label']) !!}
                                                {!! Form::textarea('seo',$tag->seo , array_merge(['class' =>
                                                'form-control'])) !!}
                                            </div>--}}{{--
                                                --}}{{--<div class="form-group">
                                                    {!! Form::label('description', 'Description',['class' => 'control-label']) !!}
                                                    {!! Form::textarea('description', $tag->description, array_merge
                                                    (['class' =>'form-control','id' => 'editor1'])) !!}
                                                </div>--}}{{--
                                       </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                                {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                                            </div>
                                        </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>--}}
@endsection
