@extends('layouts.admin.app')
@section('content')






    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">
                        <div id="app" class="w-100">
                            {!! Form::model($page,['method' => 'PUT', 'class' => 'form_submitting','files' => true, 'route' =>['admin-pages.update',$page->id]]) !!}

                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <strong>Редактирование - {{$page->title}}</strong>

                                <div class="d-flex">
                                    <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                    <a href="{{route('admin-pages-index')}}" class="btn back"><i class="fas fa-reply-all"></i></a>
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

                            <div style="background-color: #FFF; border-radius: 10px" class="tab-content" id="myTabContent">
                              <div style="background-color: #fff" class="tab-pane p-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <div class="form-group">
                                    <ul class="nav nav-tabs" id="language">
                                        @foreach($langs as $key => $lang)
                                            <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                        href="#language_main_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}"
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
                                        @include('admin.partials.url', ['item' => $page, 'title' => true, 'page_type' => '1', 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('public', 'Публичная',['class' => 'control-label']) !!}
                                    {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], old('public'), array_merge(['class'
                                    =>'form-control'])) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('image', 'Изображение',['class' => 'control-label']) !!}
                                    {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                </div>
                              </div>

                              <div style="background-color: #fff" class="tab-pane p-3 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                        @include('admin.partials.url', ['item' => $page, 'title' => false, 'page_url' => '1', 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                    </div>
                                </div>
                              </div>
                            </div>

                            <!-- <ul class="nav nav-tabs d-flex mb-1 justify-content-start" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation"><a role="tab" class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                                <li class="nav-item" role="presentation"><a role="tab" class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                            </ul> -->


                            


                            {!! Form::close() !!}









                            <!-- <div class="card w-100">
                                {!! Form::model($page,['method' => 'PUT','files' => true, 'route' =>['admin-pages.update',$page->id]]) !!}
                                
                                <div class="card-header d-flex align-items-center">
                                    <h2 class="title-3 col-5 m-0 p-0">Редактирование</h2>

                                    <div class="w-100 d-flex justify-content-end">
                                    	{!! Form::submit('',array_merge(['class' => 'my-2 mr-3 save'] )) !!}

		                                <a href="{{route('admin-pages-index')}}" class="btn btn-primary my-2">< Назад</a>
		                            </div>


                                </div>

                                <div class="card-body tab-content">
                                    <ul class="nav nav-tabs d-flex mb-1 justify-content-start" id="myTab">
                                        <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Основное</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                                	</ul>

                                    <div class="tab-pane active" id="main">
                                        <div class="form-group">
                                            <ul class="nav nav-tabs" id="language">
                                                @foreach($langs as $key => $lang)
                                                    <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                                href="#language_main_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}"
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
                                                @include('admin.partials.title', ['item' => $page, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('type', 'Type',['class' => 'control-label']) !!}
                                            {!! Form::text('type', $page->type, array_merge(['class' => 'form-control','disabled'
                                             => 'disabled']))!!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('public', 'Публичная',['class' => 'control-label']) !!}
                                            {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], old('public'), array_merge(['class'
                                            =>'form-control'])) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('image', 'Изображение',['class' => 'control-label']) !!}
                                            {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="seo">
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
                                                @include('admin.partials.title', ['item' => $page, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('slug', 'ЧПУ',['class' => 'control-label']) !!}
                                            {!! Form::text('slug', $page->slug,  array_merge(['class' =>
                                            'form-control','disabled' => 'disabled']))!!}
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div> -->
                        </div>
                    </div>

            </div>

    </div>







    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Редактирование - {{$page->title}}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <div class="table-responsive">
                            {!! Form::model($page,['method' => 'PUT','files' => true, 'route' =>['admin-pages.update',$page->id]]) !!}
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                                <li><a href="#seo" data-toggle="tab">SEO</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="main">
                                    <div class="col-md-12 form-group">
                                        <ul class="nav nav-tabs" id="language">
                                            @foreach($langs as $key => $lang)
                                                <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                            href="#language_main_{{ $lang->locate_code }}" class="nav-link {{ $key == 0 ? 'active' : null }}"
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

                                        <div class="tab-content">
                                            @include('admin.partials.title', ['item' => $page, 'title' => true, 'description' => true, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                        </div>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        {!! Form::label('type', 'Type',['class' => 'control-label']) !!}
                                        {!! Form::text('type', $page->type, array_merge(['class' => 'form-control','disabled'
                                         => 'disabled']))!!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label('public', 'Публичная',['class' => 'control-label']) !!}
                                        {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], old('public'), array_merge(['class'
                                        =>'form-control'])) !!}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        {!! Form::label('image', 'Изображение',['class' => 'control-label']) !!}
                                        {!! Form::file('image', array_merge(['class' => 'form-control'])) !!}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <img class="im_admin" src="{{asset('house/uploads/' . $page->image)}}">
                                    </div>
                                </div>
                                <div class="tab-pane" id="seo">
                                    <div class="col-md-12 form-group">
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

                                        <div class="tab-content">
                                            @include('admin.partials.title', ['item' => $page, 'title' => false, 'description' => false, 'meta' => true, 'seo' => true, 'id' => 'language', 'type' => 'seo'])
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        {!! Form::label('slug', 'ЧПУ',['class' => 'control-label']) !!}
                                        {!! Form::text('slug', $page->slug,  array_merge(['class' =>
                                        'form-control','disabled' => 'disabled']))!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'])) !!}
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> -->
@endsection
