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
                            <div class="col-4">Email</div>

                            <div class="col-8">
                                <input type="text" value="{{ $setting->receive_email }}" name="receive_email" class="form-control">
                            </div>
                        </div>

                        {{--<div class="row form-group d-flex align-items-center">
                            <div class="col-5">Телефон 4</div>

                            <div class="col-7">
                                <input type="text" value="{{ $phone_site_4 }}" name="phone_site_4" class="form-control">
                            </div>
                        </div>--}}

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








@endsection

