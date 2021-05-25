@extends('layouts.admin.app')
@section('content')





    <div class="main-content">

        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">
                    <div class="w-100">

                    {!! Form::open(['method' => 'put','route' => ['admin-stocks.update', $stock->id],'files' => true,
                            'multiple' => 'multiple'])!!}
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование {{ $stock->title_ru }}</strong>
                            <div class="m-0 p-0 d-flex align-items-center">
                                <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-stocks-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff;" class="w-100 p-3">
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

                                    <input required id="label" placeholder="Label" class="form-control" type="text" name="label" value="{{ $stock->label }}">
                                </div>

                                <div class="form-group">
                                    @if ($stock->public == 0)
                                        <label class="form-label w-100 d-flex justify-content-between" for="public">Статус: <p>(Текущий статус: <span style="color: red;">Не активная</span>)</p></label>
                                    @else
                                        <label class="form-label w-100 d-flex justify-content-between" for="public">Статус: <p>(Текущий статус: <span style="color: #3cc000;">Активная</span>)</p></label>
                                    @endif

                                    <select name="public" class="form-control">
                                        <option value="1" @if ($stock->public == 1) selected @endif>Активная</option>
                                        <option value="0" @if ($stock->public == 0) selected @endif>Не активная</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="side" class="form-label">Отображение</label>

                                    <select name="side" class="form-control">
                                        <option value="" @if ($stock->side == null) selected @endif>Отсутствует</option>
                                        <option value="left" @if ($stock->side == 'left') selected @endif>Левая сторона</option>
                                        <option value="right" @if ($stock->side == 'right') selected @endif>Правая сторона</option>
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
