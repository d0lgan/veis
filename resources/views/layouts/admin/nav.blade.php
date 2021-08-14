
        <aside class="menu-sidebar d-none d-lg-block" style="background: transparent; height: 65px; z-index: 999;">
            <div style="width: 100%; height: 100%" class="logo">
                <a href="#">
                    <img src="{{ asset('layouts/logo.png') }}" />
                </a>
            </div>
            
           

        </aside>
        <!-- END MENU SIDEBAR-->


        <nav class="navigation-bar d-flex flex-column">
            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Панель" href="{{route('admin-home-index')}}"><i class="fas fa-table"></i></a>
            </div>


            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Каталог" href=""><i class="fas fa-list"></i></a>

                <ul class="list-unstyled">
                    <li><a href="{{route('admin-products-index')}}">Товары</a></li>
                    <li><a href="{{route('admin-categories-index')}}">Категории</a></li>
                    <li><a href="{{route('admin-tags-index')}}">Теги</a></li>
                    <li><a href="{{route('admin-group-attribute-index')}}">Группа Атрибутов</a></li>
                    <li><a href="{{route('admin-attribute-index')}}">Атрибуты</a></li>
                    <li><a href="{{route('admin-options-index')}}">Опции</a></li>
                    <li><a href="{{route('admin-manufacturers-index')}}">Производители</a></li>
                    <li><a href="{{route('admin-suppliers-index')}}">Поставщики</a></li>
                </ul>
            </div>
            

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Продажи" href=""><i class="fas fa-dollar-sign"></i></a>

                <ul class="list-unstyled">
                    <li><a href="{{route('admin-orders-index')}}" >Заказы</a></li>
                    <li><a href="{{route('admin-contacts-index')}}">Запросы с сайта</a></li>
                    <li><a href="{{route('admin-status-index')}}">Статусы заказа</a></li>
                    <li><a href="{{route('admin-way-to-pays-index')}}">Способы оплаты</a></li>
                </ul>
            </div>

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Общее" href=""><i class="fas fa-cogs"></i></a>

                <ul class="list-unstyled">
                    <li><a class="nav-text" href="{{route('admin-pages-index')}}">Страницы</a></li>
                    <li><a class="nav-text" href="{{route('admin-redirects-index')}}">Редиректы</a></li>
                    <li><a class="nav-text" href="{{route('admin-settings-edit')}}">Настройки</a></li>
                    <li><a class="nav-text" href="{{route('admin-languages-index')}}">Языки</a></li>
                    <li><a class="nav-text" href="{{route('admin-currency-index')}}">Валюта</a></li>
                </ul>
            </div>
            

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Маркетинг" href=""><i class="fas fa-bullhorn"></i></a>

                <ul class="list-unstyled">
                    <li><a href="{{route('admin-slider-index')}}">Слайдер</a></li>
                    <li><a href="{{route('admin-blog-index')}}">Блог</a></li>
                    <li><a href="{{route('admin-stocks-index')}}">Акции</a></li>
                    <li><a href="{{route('admin-orders-abandoned')}}">Корзины</a></li>
                    <li><a href="{{route('admin-brands-index')}}">Бренды</a></li>
                    <li><a href="{{route('admin-mailing-index')}}">Рассылка</a></li>
                </ul>
            </div>
            
    <script type="text/javascript">
        function Copy(t) {
            // $(t).attr('href')
            let text = $(t).find('#textid');
            text.show();
            text.select();
            document.execCommand("copy");
            text.hide();

            let copy = $(t).find('#copyid');
            copy.css('color', 'green');
        }
    </script>
    <div class="navigation-bar__submenu">
        <a class="nav-text d-flex justify-content-center align-items-center" title="Экспорт в XML" href="#"><i
                    class="fas fa-download"></i></a>

        <ul class="list-unstyled">
            <li>Русский:
                <button id="CopyUserButton" onclick="Copy(this)">
                    <i id="copyid" class="fas fa-copy"></i>
                    <textarea style="display: none;" id="textid">{{route('products-export')}}?lang=ru&display=xml</textarea>
                </button>
                <button><a href="{{route('admin-products-export')}}?lang=ru"><i class="fas fa-download"></i></a>
                </button>
            </li>
            <li>Украинский:
                <button id="CopyUserButton" onclick="Copy(this)">
                    <i id="copyid" class="fas fa-copy"></i>
                    <textarea style="display: none;" id="textid">{{route('products-export')}}?lang=uk&display=xml</textarea>
                </button>
                <button><a href="{{route('admin-products-export')}}?lang=uk"><i class="fas fa-download"></i></a>
                </button>
            </li>
        </ul>
    </div>
    
            <hr>


            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Пользователи" href="{{route('admin-users-index')}}"><i class="fas fa-users"></i></a>
            </div>

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Перейти на сайт" href="/"><i class="fas fa-desktop"></i></a>
            </div>
        </nav>





         












<header style="height: 65px;" class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Найти данные и отчеты...">
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                	<div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">0</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno">
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Have sent a photo</p>
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Diane Myers">
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>You are now connected on message</p>
                                        <span class="time">Yesterday</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <fa-shopping-cart-component></fa-shopping-cart-component>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">{{ $contacts_count }}</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="content">
                                <a class="js-acc-btn" href="#">Михаил</a>
                            </div>
                            <div class="account-dropdown js-dropdown rounded">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">Михаил</a>
                                        </h5>
                                        <span class="email">dnepr.veis@gmail.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Аккаунт</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Настройки пользователя</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('logout') }}"
                               			onclick="event.preventDefault();
                                     	document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>Выход</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
		                                  style="display: none;">
		                                {{ csrf_field() }}
		                            </form>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</header>














<!-- <header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap d-flex justify-content-end">
                <div class="header-button">
                    
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <p>{{ explode(' ', \Illuminate\Support\Facades\Auth::user()->name)[0] }} {{ explode(' ', \Illuminate\Support\Facades\Auth::user()->name)[1] }}</p>

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                @lang('navbar.logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 -->