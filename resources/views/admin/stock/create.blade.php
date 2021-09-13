@extends('layouts.admin.app')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">

                    {!! Form::open(['method' => 'post','route' => ['admin-stocks.store'],'files' => true,
                            'multiple' => 'multiple'])!!}
                        <div class="my-3 d-flex align-items-center justify-content-between">
                            <strong>Новая акция</strong>
                            <div class="m-0 p-0 d-flex justify-content-end align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-stocks-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
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
	                            @include('admin.partials.title', ['item' => $stock, 'title' => true, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'main'])

                                <div class="form-group">
                                    <label for="label">Ярлык:</label>

                                    <input id="label" required class="form-control" placeholder="Label" type="text" name="label" value="">
                                </div>


                                <div class="form-group">
                                    <label class="form-label" for="public">Статус:</label>

                                    <select name="public" class="form-control">
                                        <option value="1">Активная</option>
                                        <option value="0">Не активная</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="side" class="form-label">Отображение</label>

                                    <select name="side" class="form-control">
                                        <option value="">Отсутствует</option>
                                        <option value="left">Левая сторона</option>
                                        <option value="right">Правая сторона</option>
                                    </select>
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

