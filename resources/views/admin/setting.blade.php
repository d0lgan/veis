@extends('layouts.admin.app')
@section('content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <h1 class="title-2 mb-4">Настройки</h1>
            <div class="row no-gutters d-flex justify-content-between">

                <div class="card col-4">
                    <div class="card-header"><strong>Модули</strong></div>

                    <div class="card-body card-block">
                        {!! Form::model($setting,['method' => 'post', 'class' => 'h-100 d-flex flex-column justify-content-between','files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Слайдер на главной</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->slide_home == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="slide_home" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="slide_home" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Универсальный</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->universal == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="universal" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="universal" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Бренды</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->brands == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="brands" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="brands" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Просмотренные</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->viewed == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="viewed" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="viewed" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <button name="module_save" value="1" type="submit" class="btn btn-info btn-block m-0 d-flex justify-content-center align-items-center">
                            <i style="font-size: 16px" class="fa fa-lock fa-lg mr-2"></i><span>Сохранить</span>
                        </button>

                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="card col-4">
                    <div class="card-header"><strong>Доставка</strong></div>

                    <div class="card-body card-block">
                        {!! Form::model($setting,['method' => 'post', 'class' => 'h-100 d-flex flex-column justify-content-between', 'files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Новая почта</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->point_deliveries == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="point_deliveries" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="point_deliveries" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Разрешить покупку</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->shop_buy == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="shop_buy" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="shop_buy" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Бесплатная доставка</div>
                            
                            <div class="col-4 d-flex">
                                <input class="form-control" type="text" value="{{ $free_shipping }}" name="free_shipping">
                            </div>
                        </div>

                        <button name="shipping" value="1" type="submit" class="btn btn-info btn-block m-0 d-flex justify-content-center align-items-center">
                            <i style="font-size: 16px" class="fa fa-lock fa-lg mr-2"></i><span>Сохранить</span>
                        </button>

                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="card col-3">
                    <div class="card-header"><strong>Связь</strong></div>

                    <div class="card-body card-block">
                        {!! Form::model($setting,['method' => 'post', 'class' => 'h-100 d-flex flex-column justify-content-between', 'files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Технический режим</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->site_on_of == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="site_on_of" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="site_on_of" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Контактная форма</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->contact_form == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="contact_form" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="contact_form" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-8">Обратный звонок</div>
                            
                            <div class="col-4 d-flex">
                                @if ($setting->call_form == 1)
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="call_form" checked type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @else
                                    <label class="switch switch-3d switch-success m-0 mx-auto">
                                        <input value="1" name="call_form" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <button name="communication" value="1" type="submit" class="btn btn-info btn-block m-0 d-flex justify-content-center align-items-center">
                            <i style="font-size: 16px" class="fa fa-lock fa-lg mr-2"></i><span>Сохранить</span>
                        </button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="row no-gutters d-flex justify-content-between">
                <div class="card col-5">
                    <div class="card-header"><strong>Контактная информация</strong></div>

                    <div class="card-body card-block">
                        {!! Form::model($setting,['method' => 'post', 'class' => 'h-100 d-flex flex-column justify-content-between', 'files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-5">Телефон 1</div>

                            <div class="col-7">
                                <input type="text" value="{{ $phone_site_1 }}" name="phone_site_1" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-5">Телефон 2</div>

                            <div class="col-7">
                                <input type="text" value="{{ $phone_site_2 }}" name="phone_site_2" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-5">Телефон 3</div>

                            <div class="col-7">
                                <input type="text" value="{{ $phone_site_3 }}" name="phone_site_3" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group d-flex align-items-center">
                            <div class="col-5">Телефон 4</div>

                            <div class="col-7">
                                <input type="text" value="{{ $phone_site_4 }}" name="phone_site_4" class="form-control">
                            </div>
                        </div>

                        <button name="contacts" value="1" type="submit" class="btn btn-info btn-block m-0 d-flex justify-content-center align-items-center">
                            <i style="font-size: 16px" class="fa fa-lock fa-lg mr-2"></i><span>Сохранить</span>
                        </button>

                        {!! Form::close() !!}
                    </div>
                </div>



                <div class="card col-6">
                    {!! Form::model($setting,['method' => 'post', 'class' => 'h-100 d-flex flex-column justify-content-between', 'files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <strong>Адрес магазина</strong>

                        <div class="langs d-flex">
                            <div data-id="lang_ru" style="cursor: pointer; border-bottom: 3px solid transparent; transition: all 0.1s ease-in-out;" class="ru mx-2 active"><img style="height: 20px;" src="{{ asset('/images/russia.svg') }}"></div>

                            <div data-id="lang_uk" style="cursor: pointer; border-bottom: 3px solid transparent; transition: all 0.1s ease-in-out;" class="uk mx-2"><img style="height: 20px;" src="{{ asset('/images/ukraine.svg') }}"></div>
                        </div>
                    </div>

                    <div class="card-body card-block d-flex flex-column tabs">
                        <div id="lang_ru" class="d-flex flex-column justify-content-between tab active">
                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Адрес</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->address_site_ru }}" name="address_site_ru" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Email</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->email_site_ru }}" name="email_site_ru" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Название</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->name_company_ru }}" name="name_company_ru" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Страна</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->country_ru }}" name="country_ru" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div id="lang_uk" class="d-flex flex-column justify-content-between tab">
                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Адрес</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->address_site_uk }}" name="address_site_uk" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Email</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->email_site_uk }}" name="email_site_uk" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Название</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->name_company_uk }}" name="name_company_uk" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group d-flex align-items-center">
                                <div class="col-4">Страна</div>

                                <div class="col-8">
                                    <input type="text" value="{{ $setting->country_uk }}" name="country_uk" class="form-control">
                                </div>
                            </div>
                        </div>


                        <button name="address" value="1" type="submit" class="btn btn-info btn-block m-0 d-flex justify-content-center align-items-center">
                            <i style="font-size: 16px" class="fa fa-lock fa-lg mr-2"></i><span>Сохранить</span>
                        </button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>






    <!-- <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">

                            <div class="card w-100">
                                {!! Form::model($setting,['method' => 'post','files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}
                                <div class="card-header d-flex align-items-center">
                                    <h2 class="title-1">Настройки</h2>

                                    <div class="d-flex m-l-40 w-100 justify-content-end">
                                        <ul class="nav b-0" id="myTab">
                                            <li class="active h5 m-0 p-r-20"><a href="#main" data-toggle="tab">Основное</a></li>
                                            <li class="h5 m-0"><a href="#set" data-toggle="tab">Доп</a></li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="card-body tab-content">
                                    <div class="tab-pane active" id="main">
                                        <div class="d-flex">
                                            <div class="form-group m-r-55">
                                                {!!  Form::label('site_on_of', 'Техничесткий режим',['class'=>'control-label']) !!}
                                                {!! Form::select('site_on_of', [1 => 'Да', 0 => 'Нет'], $setting->site_on_of,array_merge(['class'=>'form-control'])) !!}

                                            </div>

                                            <div class="form-group m-r-55">
                                                {!!  Form::label('contact_form', 'Контактная форма',['class' =>'control-label']) !!}
                                                {!! Form::select('contact_form', [1 => 'Да', 0 => 'Нет'], $setting->contact_form,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group">
                                                {!!  Form::label('call_form', 'Обратный звонок',['class' =>'control-label']) !!}
                                                {!! Form::select('call_form', [1 => 'Да', 0 => 'Нет'], $setting->call_form,array_merge(['class'=>'form-control'])) !!}
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="d-flex">
                                            <div class="form-group m-r-55">
                                                {!!  Form::label('point_deliveries', 'Новая Почта',['class' =>'control-label'])!!}
                                                        {!! Form::select('point_deliveries', [1 => 'Да', 0 => 'Нет'], $setting->point_deliveries,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!!  Form::label('shop_buy', 'Разрешить покупку',['class' =>'control-label']) !!}
                                                        {!! Form::select('shop_buy', [1 => 'Да', 0 => 'Нет'], $setting->shop_buy,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('free_shipping', 'Бесплатная доставка',['class' => 'control-label']) !!}
                                                        {!! Form::text('free_shipping', $free_shipping, array_merge(['class' =>'form-control'])) !!}
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-4 m-t-50">
                                            <span class="m-0 h3">Модули</span>
                                            <hr class="m-l-50 col border-grey">
                                        </div>

                                        <div class="d-flex">
                                            <div class="form-group m-r-55">
                                                {!!  Form::label('slide_home', 'Слайдер на главной',['class' =>'control-label']) !!}
                                                {!! Form::select('slide_home', [1 => 'Да', 0 => 'Нет'], $slide_home,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!!  Form::label('universal', 'Универсальный',['class' =>'control-label']) !!}
                                                {!! Form::select('universal', [1 => 'Да', 0 => 'Нет'], $universal,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!!  Form::label('categories', 'Категории',['class' =>'control-label']) !!}
                                                {!! Form::select('categories', [1 => 'Да', 0 => 'Нет'], $categories,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!!  Form::label('brands', 'Бренды',['class' =>'control-label']) !!}
                                                {!! Form::select('brands', [1 => 'Да', 0 => 'Нет'], $brands,array_merge(['class'=>'form-control'])) !!}
                                            </div>

                                            <div class="form-group">
                                                {!!  Form::label('viewed', 'Просмотренные',['class' =>'control-label']) !!}
                                                {!! Form::select('viewed', [1 => 'Да', 0 => 'Нет'], $viewed,array_merge(['class'=>'form-control'])) !!}
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-4 m-t-50">
                                            <span class="m-0 h3">Контакты</span>
                                            <hr class="m-l-50 col border-grey">
                                        </div>

                                        <div class="d-flex">
                                            <div class="form-group m-r-55">
                                                {!! Form::label('phone_site_1', 'Телефон 1',['class' => 'control-label']) !!}
                                                {!! Form::text('phone_site_1', $phone_site_1, array_merge(['class' => 'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!! Form::label('phone_site_2', 'Телефон 2',['class' => 'control-label']) !!}
                                                {!! Form::text('phone_site_2', $phone_site_2, array_merge(['class' => 'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!! Form::label('phone_site_3', 'Телефон 3',['class' => 'control-label']) !!}
                                                {!! Form::text('phone_site_3', $phone_site_3, array_merge(['class' => 'form-control'])) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('phone_site_4', 'Телефон 4',['class' => 'control-label']) !!}
                                                {!! Form::text('phone_site_4', $phone_site_4, array_merge(['class' => 'form-control'])) !!}
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="form-group m-r-55">
                                                {!! Form::label('address_site', 'Адрес магазина',['class' => 'control-label']) !!}
                                                {!! Form::textarea('address_site', $address_site, array_merge(['class' => 'form-control', 'style' => 'min-height: 40px;', 'cols' => '19', 'rows' => '5'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!! Form::label('email_site', 'Email',['class' => 'control-label']) !!}
                                                {!! Form::text('email_site', $email_site, array_merge(['class' =>'form-control'])) !!}
                                            </div>

                                            <div class="form-group m-r-55">
                                                {!! Form::label('name_company', 'Название компании',['class' => 'control-label']) !!}
                                                {!! Form::text('name_company', $name_company, array_merge(['class' =>'form-control'])) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('country', 'Страна',['class' => 'control-label']) !!}
                                                {!! Form::text('country', $country, array_merge(['class' =>'form-control'])) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="set">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <ul class="nav nav-tabs" id="language">
                                                    @foreach($langs as $key => $lang)
                                                        <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                                    href="#language_add_{{ $lang->locate_code }}" data-toggle="tab"
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
                                                    @include('admin.partials.title', ['item' => $setting, 'setting' => true, 'title' => false, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'add'])
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex justify-content-end">
                                    <div class="form-group">
                                        {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-outline-primary btn-lg'] )) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div> -->









                        <!-- <div class="table-responsive">
                            <div class="table-responsive">
                                {!! Form::model($setting,['method' => 'post','files' => true, 'route'=>['admin-settings-update',$setting->id]]) !!}
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                                    <li><a href="#set" data-toggle="tab">Доп</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="main">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    {!!  Form::label('site_on_of', 'Техничесткий режим',['class'=>'control-label']) !!}
                                                    {!! Form::select('site_on_of', [1 => 'Да', 0 => 'Нет'], $setting->site_on_of,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    {!!  Form::label('contact_form', 'Контактная форма',['class' =>'control-label']) !!}
                                                    {!! Form::select('contact_form', [1 => 'Да', 0 => 'Нет'], $setting->contact_form,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    {!!  Form::label('call_form', 'Обратный звонок',['class' =>'control-label']) !!}
                                                    {!! Form::select('call_form', [1 => 'Да', 0 => 'Нет'], $setting->call_form,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    {!!  Form::label('point_deliveries', 'Новая Почта',['class' =>'control-label'])!!}
                                                    {!! Form::select('point_deliveries', [1 => 'Да', 0 => 'Нет'], $setting->point_deliveries,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    {!!  Form::label('shop_buy', 'Разрешить покупку',['class' =>'control-label']) !!}
                                                    {!! Form::select('shop_buy', [1 => 'Да', 0 => 'Нет'], $setting->shop_buy,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    {!! Form::label('free_shipping', 'Бесплатная доставка',['class' => 'control-label']) !!}
                                                    {!! Form::text('free_shipping', $free_shipping, array_merge(['class' =>'form-control'])) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex align-items-center pb-4">
                                            <span class="col-2 m-0 h3">Модули</span>
                                            <hr class="col border-dark">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    {!!  Form::label('slide_home', 'Слайдер на главной',['class' =>'control-label']) !!}
                                                    {!! Form::select('slide_home', [1 => 'Да', 0 => 'Нет'], $slide_home,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!!  Form::label('universal', 'Универсальный',['class' =>'control-label']) !!}
                                                    {!! Form::select('universal', [1 => 'Да', 0 => 'Нет'], $universal,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!!  Form::label('categories', 'Категории',['class' =>'control-label']) !!}
                                                    {!! Form::select('categories', [1 => 'Да', 0 => 'Нет'], $categories,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!!  Form::label('brands', 'Бренды',['class' =>'control-label']) !!}
                                                    {!! Form::select('brands', [1 => 'Да', 0 => 'Нет'], $brands,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!!  Form::label('viewed', 'Просмотренные',['class' =>'control-label']) !!}
                                                    {!! Form::select('viewed', [1 => 'Да', 0 => 'Нет'], $viewed,array_merge(['class'=>'form-control'])) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex align-items-center pb-4">
                                            <span class="col-2 m-0 h3">Контакты</span>
                                            <hr class="col border-dark">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('phone_site_1', 'Телефон 1',['class' => 'control-label']) !!}
                                                    {!! Form::text('phone_site_1', $phone_site_1, array_merge(['class' => 'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('phone_site_2', 'Телефон 2',['class' => 'control-label']) !!}
                                                    {!! Form::text('phone_site_2', $phone_site_2, array_merge(['class' => 'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('phone_site_3', 'Телефон 3',['class' => 'control-label']) !!}
                                                    {!! Form::text('phone_site_3', $phone_site_3, array_merge(['class' => 'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('phone_site_4', 'Телефон 4',['class' => 'control-label']) !!}
                                                    {!! Form::text('phone_site_4', $phone_site_4, array_merge(['class' => 'form-control'])) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('address_site', 'Адрес магазина',['class' => 'control-label']) !!}
                                                    {!! Form::textarea('address_site', $address_site, array_merge(['class' => 'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('email_site', 'Email',['class' => 'control-label']) !!}
                                                    {!! Form::text('email_site', $email_site, array_merge(['class' =>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('name_company', 'Название компании',['class' => 'control-label']) !!}
                                                    {!! Form::text('name_company', $name_company, array_merge(['class' =>'form-control'])) !!}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {!! Form::label('country', 'Страна',['class' => 'control-label']) !!}
                                                    {!! Form::text('country', $country, array_merge(['class' =>'form-control'])) !!}
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane" id="set">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <ul class="nav nav-tabs" id="language">
                                                    @foreach($langs as $key => $lang)
                                                        <li class="nav-item {{ $key == 0 ? 'active' : null }}"><a
                                                                    href="#language_add_{{ $lang->locate_code }}" data-toggle="tab"
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
                                                    @include('admin.partials.title', ['item' => $setting, 'setting' => true, 'title' => false, 'description' => false, 'meta' => false, 'seo' => false, 'id' => 'language', 'type' => 'add'])
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div> -->

                    </div>

            </div>

    </div>

@endsection

