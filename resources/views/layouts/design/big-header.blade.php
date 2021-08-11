@section('header')
    <div id="big-header-wrap" class="big-header-wrap"></div>
    <nav>
        <div class="top-nav row col-12 px-5 d-flex align-items-center ml-0">
            <ul class="col-md-6 left">
                <li><a class="px-md-1 py-md-2 p-xl-3" href="#">Доставка</a></li>
                <li><a class="px-md-1 py-md-2 p-xl-3" href="#">Оплата</a></li>
                <li><a class="px-md-1 py-md-2 p-xl-3" href="#">Гарантия и возврат</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="contacts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Контакты
                        <img class="ml-2" id="contact-arrow-down" style="width: 12px;" src="{{ asset('/images/arrow_down.svg') }}" alt=""><img class="ml-2" id="contact-arrow-up" style="width: 12px;" src="{{ asset('/images/arrow_up.svg') }}" alt="">
                    </a>
                    <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="contacts">
                        <a class="dropdown-item d-flex" href="#"><img class="" src="{{ asset('/images/vodafone.svg') }}" alt=""><span class="ml-2">+38(095) 27-40-200</span></a>
                        <a class="dropdown-item d-flex" href="#"><img class="" src="{{ asset('/images/kyivstar.svg') }}" alt=""><span class="ml-2">+38(095) 27-40-200</span></a>
                        <a class="dropdown-item d-flex" href="#"><img class="" src="{{ asset('/images/life.svg') }}" alt=""><span class="ml-2">+38(095) 27-40-200</span></a>
                        <a class="dropdown-item d-flex" href="#"><img class="" src="" alt=""><span class="ml-2">dnepr.veis@gmail.com</span></a>
                        <a class="dropdown-item d-flex"><img class="" src="" alt=""><span class="ml-2 title nounder">Звоните нам</span></a>
                        <a class="dropdown-item d-flex"><img class="call" src="{{ asset('/images/phone.svg') }}" alt=""><span class="ml-2 nounder">с 08:00 до 21:00 (пн.-пт.)<br>
и с 09.00 до 20:00 (сб,-вс.)</span></a>
                        <a class="dropdown-item d-flex"><img class="" src="" alt=""><span class="ml-2 title nounder">Мы находимся:</span></a>
                        <a class="dropdown-item d-flex" href="#"><img src="{{ asset('/images/marker.svg') }}" alt=""><span class="ml-2">г. Днепро 49000 ул. Солидарная 2</span></a>
                        <a class="dropdown-item d-flex" href="#map"><img class="" src="" alt=""><span id="show-on-map"  class="ml-2 show-on-map">Показать на карте<img style="width: 7px" class="ml-1" src="{{ asset('images/double_next_dark.svg') }}" alt=""></span></a>
                    </div>
                </li>
                <li><a class="px-md-1 py-md-2 p-xl-3" href="#">Блог</a></li>
            </ul>
            <ul class="offset-md-2 col-md-5 offset-xl-0 col-xl-6 d-flex justify-content-end align-items-center right">
                <li>График работы с 08 – 21 (пн.-пт.) и с 09 – 20 (сб.-вс.)</li>
                <li class="px-xl-5 px-md-2 d-flex align-items-center" style="font-size: 15px;"><a href="/design/order"><img class="shopping-bag" src="{{asset('/images/shopping-bag.svg')}}" alt=""></a><span class="ml-2">5</span></li>
                <li>
                    <a href="#">UA</a> | <a href="#">RU</a>
                </li>
            </ul>
        </div>
        <div class="mid-nav row col-12 align-items-start ml-0 p-0">
            <div class="col-md-4 left pl-5">
                <div class="col-md-12 col-xl-9 pl-4">
                    <div class="search search-not-border d-flex justify-content-between row m-0">
                        <div class="col-12 p-0 row m-0">
                            <input id="search-input" type="text" class="col-11 pl-2" placeholder="Введите ваш запрос"><span id="search-icon" class="search-icon col-1"><i class="fas fa-search"></i></span><span id="delete-icon" class="delete-icon col-1"><i class="fas fa-times-circle"></i></span>
                        </div>
                        <div class="col-12 position-relative p-0 row m-0">
                            <div id="results" class="results row m-0 w-100">
                                <div class="item col-12 p-2">
                                    САПОГИ ЗИМНИЕ НА КАБЛУКЕ
                                </div>
                                <div class="item col-12 p-2">
                                    БОТИНКИ ЗИМНИЕ НА НИЗКОМ ХОДУ
                                </div>
                                <div class="item col-12 p-2">
                                    ТУФЛИ НА КАБЛУКЕ
                                </div>
                                <div class="item col-12 p-2">
                                    ТУФЛИ НА КАБЛУКЕ ВЫСОКОМ
                                </div>
                                <div class="item col-12 p-2">
                                    <div class="all text-center p-2" >ПОСМОТРЕТЬ ВСЕ РЕЗУЛЬТАТЫ 987</div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mid d-flex justify-content-center align-items-center flex-column py-4">
                <a href="/" class="veis col-12 text-center w-auto">VEIS</a>
                <a href="/" class="collect col-12 text-center w-auto">COLLECTION</a>
            </div>
            <div class="col-md-4 right d-flex justify-content-end pr-4">
                <div class="pr-4 col-7 d-flex justify-content-end">
                    <div class="phones">
                        <div id="main-number" class="main row m-0 d-flex align-items-center p-2 pb-0">
                            <div class="col-2 p-0 image"><img id="light" class="mr-1" src="{{ asset('/images/kyivstar-light.svg') }}" alt=""><img id="dark" class="dark mr-1" src="{{ asset('/images/kyivstar.svg') }}" alt=""></div>
                            <div class="col-10 px-1 p-0 d-flex align-items-center justify-content-between"><span class="number">+38(095) 27-40-200</span> <i id="number-arrow-up" style="font-size: 18px;" class="fas fa-angle-up ml-1"></i><i id="number-arrow-down" style="font-size: 18px;" class="fas fa-angle-down ml-1"></i></div>
                        </div>
                        <div class="other">
                            <div id="drop" class="drop w-100 px-2 pb-2">
                                <div class="row m-0 ">
                                    <div class="col-2 p-0 mb-2 image"><img class="" src="{{ asset('/images/vodafone.svg') }}" alt=""></div>
                                    <div class="col-10 pl-1 mb-2 d-flex align-items-center number">+38(095) 27-40-200</div>
                                    <div class="col-2 p-0 image"><img class="" src="{{ asset('/images/life.svg') }}" alt=""></div>
                                    <div class="col-10 pl-1 d-flex align-items-center number">+38(095) 27-40-200</div>
                                    <div class="col-12 call-back text-center p-2 mt-3">ПЕРЕЗВОНИТЕ МНЕ</div>
                                </div>

                            </div>

                        </div>
                    </div>
                    {{--<div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle number-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="mr-1" src="{{ asset('/images/vodafone-light.svg') }}" alt="">
                            +38(095) 27-40-200<i style="font-size: 18px;" class="fas fa-angle-down ml-2"></i>
                        </a>
                        <div class="dropdown-menu mr-2" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><img src="{{ asset('/images/kyivstar.svg') }}" alt="">+38(095) 27-40-200</a>
                            <a class="dropdown-item my-2" href="#"><img class="life" src="{{ asset('/images/life.svg') }}" alt="">+38(095) 27-40-200</a>
                            <a class="dropdown-item call py-2 text-center" href="#">ПЕРЕЗВОНИТЕ МНЕ</a>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ПЕРЧАТКИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ОЧКИ</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <ul class="d-flex justify-content-center flex-column flex-xl-row">
                        <li><a class="text-center" href="#">АКЦИЯ</a></li>
                        <li><a class="text-center" href="#">Без подкладки</a></li>
                        <li><a class="text-center" href="#">На подкладке</a></li>
                        <li><a class="text-center" href="#">Длинные</a></li>
                        <li><a class="text-center" href="#">Автомобильные</a></li>
                        <li><a class="text-center" href="#">Митенки</a></li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul class="d-flex justify-content-center flex-column flex-xl-row">
                        <li><a class="text-center" href="#">АКЦИЯ</a></li>
                        <li><a class="text-center" href="#">Без подкладки</a></li>
                        <li><a class="text-center" href="#">На подкладке</a></li>
                        <li><a class="text-center" href="#">Длинные</a></li>
                        <li><a class="text-center" href="#">Автомобильные</a></li>
                        <li><a class="text-center" href="#">Митенки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endsection
