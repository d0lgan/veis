@extends('layouts.admin.app')
@section('content')







    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">
                        <form method="post" action="{{ route('admin-group-attribute.update', $group_attribute->id) }}">
                                @method('put')
                                @csrf
                        
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование - {{$group_attribute->title_ru}}</strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-group-attribute-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div class="w-100 p-3" style="background-color: #fff">

                                <div class= "form-group">
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
                                        @include('admin.partials.title', ['item' => $group_attribute, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div id="app">
                                        <select-component :default="{{ json_encode($group_attribute->categories) }}"
                                                          :categories="{{ json_encode($categories) }}"
                                                          :title="{{ json_encode('Категории') }}"
                                                          :title-or-name="{{ json_encode('title') }}"></select-component>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="public" class="align-middle mt-2">Отображение</label>
                                    <select name="public" id="public" class="form-control ">
                                        <option value="1">Да</option>
                                        <option @if($group_attribute->public == 0) selected @endif value="0">Нет</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sort" class=" align-middle mt-2">Сортировка</label>
                                    <input type="text" value="{{ $group_attribute->sort }}" name="sort" class="form-control ">
                                </div>
                            
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>















    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Редактирование - {{$group_attribute->name}}</h1>
            <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('admin-group-attribute-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">



                        <form method="post" action="{{ route('admin-group-attribute.update', $group_attribute->id) }}">
                            @method('put')
                            @csrf

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
                                    @include('admin.partials.title', ['item' => $group_attribute, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                </div>
                            </div>

                            <div class="form-group">
                                <div id="app">
                                    <select-component :default="{{ json_encode($group_attribute->categories) }}" :categories="{{ json_encode($categories) }}"></select-component>
                                </div>
                            </div>
                            <div class="form-group col-md-3 row">
                                <label for="public" class="col-md-6 align-middle mt-2">Отображение</label>
                                <select name="public" id="public" class="form-control col-md-6">
                                    <option value="1">Да</option>
                                    <option @if($group_attribute->public == 0) selected @endif value="0">Нет</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 row">
                                <label for="sort" class="col-md-6 align-middle mt-2">Сортировка</label>
                                <input type="text" value="{{ $group_attribute->sort }}" name="sort" class="form-control col-md-6">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>






                        {{--<div class="table-responsive">
                            <div class="row">
                            {!! Form::model($group_attribute,['method' => 'PUT','route' =>
                           ['admin-group-attribute.update',$group_attribute->id]]) !!}
                            <div class="col-md-4 form-group">
                                {!! Form::label('name', 'Название',['class' => 'control-label']) !!}
                                {!! Form::text('name', $group_attribute->name, array_merge(['class' => 'form-control'])
                                ) !!}
                            </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {!!  Form::label('category_id', 'Категоря',['class' =>
                                        'control-label']) !!}
                                        {!!  Form::select('category_id', $categories, old('category_id'),
                                        array_merge(['class'=>'form-control'])) !!}
                                    </div>
                                </div>
                        </div>

                            <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                            </div>
                            {!! Form::close() !!}
                            </div>
                        </div>--}}
                    </div>
                    </div>
                </div>
            </div>
        </div> -->
@endsection
@section('js')
    <script type="text/javascript">
        function spoiler(id) {
            if   (  document.getElementById(id).style.display == "none" )
            {  document.getElementById(id).style.display = "";   }
            else {  document.getElementById(id).style.display = "none"; }
        }
    </script>
@endsection