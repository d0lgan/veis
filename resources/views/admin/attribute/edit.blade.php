@extends('layouts.admin.app')
@section('content')








     <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        <form method="post" action="{{ route('admin-attribute.update', $attribute->id) }}">
                                @method('put')
                                @csrf
                        
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование - {{$attribute->name_ru}}</strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-attribute-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="w-100 p-3">
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
                                            @include('admin.partials.title', ['item' => $attribute, 'title_name' => 'Значение (для фильтра)', 'title' => false, 'name' => true, 'long_title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                        </div>
                                    </div>

                                    <div class="form-group w-100 d-flex align-items-center justify-content-between">
                                        <div class="form-group col-6">
                                            <label class="control-label" for="group_attribute_id">Группа аттрибутов:</label>
                                            <group-attributes-component :group="{{ json_encode($group_attributes) }}" :s="{{ json_encode($attribute->group_attribute_id) }}"></group-attributes-component>
                                            {{--<select id="group_attribute_id" name="group_attribute_id" class="form-control">

                                                @foreach($group_attributes as $id => $name)
                                                    <option @if($attribute->group_attribute_id == $id) selected @endif value="{{ $id }}">{{ $name }}</option>
                                                @endforeach

                                            </select>--}}
                                        </div>

                                        <div class="form-group col-6">
                                            <label class="control-label" for="name">Сортировка:</label>
                                            <input class="form-control" type="text" name="sort" value="{{ $attribute->sort ?? '' }}">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>












    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Редактирование - {{$attribute->title}}</h1>
            <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('admin-attribute-index') }}" class="btn btn-primary my-2">< Назад</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">

                        <form method="post" action="{{ route('admin-attribute.update', $attribute->id) }}">
                            @method('put')
                            @csrf
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
                                        @include('admin.partials.title', ['item' => $attribute, 'title' => true, 'title_name' => 'Значение (для фильтра):', 'long_title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])
                                    </div>
                                </div>

                                <div class="form-group col-6 col-md-5">
                                    <label class="control-label" for="group_attribute_id">Группа аттрибутов:</label>
                                    <group-attributes-component :group="{{ json_encode($group_attributes) }}" :s="{{ json_encode($attribute->group_attribute_id) }}"></group-attributes-component>
                                    {{--<select id="group_attribute_id" name="group_attribute_id" class="form-control">

                                        @foreach($group_attributes as $id => $name)
                                            <option @if($attribute->group_attribute_id == $id) selected @endif value="{{ $id }}">{{ $name }}</option>
                                        @endforeach

                                    </select>--}}
                                </div>

                                <div class="form-group col-6 col-md-3">
                                    <label class="control-label" for="name">Сортировка:</label>
                                    <input class="form-control" type="text" name="sort" value="{{ $attribute->sort ?? '' }}">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <input class="btn btn-primary" type="submit" value="Сохранить">
                                </div>

                            </div>
                        </form>


                        {{--<div class="table-responsive">
                            <div class="row">
                            {!! Form::model($attribute,['method' => 'PUT','route' =>
                           ['admin-attribute.update',$attribute->id]]) !!}
                            <div class="col-md-4 form-group">
                                {!! Form::label('name', 'Название',['class' => 'control-label']) !!}
                                {!! Form::text('name', $attribute->name, array_merge(['class' => 'form-control'])
                                ) !!}
                            </div>
                                <div class="form-group col-md-4">
                                    {!!  Form::label('group_attribute_id', 'Группа',['class' =>
                                    'control-label']) !!}
                                    {!!  Form::select('group_attribute_id', $group_attributes, old('group_attribute_id'),
                                    array_merge(['class'=>'form-control'])) !!}
                                </div>
                                <div class="col-md-4 form-group">
                                    {!! Form::label('sort', 'Сортировка',['class' => 'control-label']) !!}
                                    {!! Form::text('sort', $attribute->sort, array_merge(['class' => 'form-control'])
                                    ) !!}
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
            if (document.getElementById(id).style.display == "none") {
                document.getElementById(id).style.display = "";
            } else {
                document.getElementById(id).style.display = "none";
            }
        }
    </script>
@endsection