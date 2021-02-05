
        <aside class="menu-sidebar d-none d-lg-block" style="background: transparent; height: 65px; z-index: 999;">
            <div style="width: 100%; height: 100%" class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('layouts/logo.png')); ?>" />
                </a>
            </div>
            
           

        </aside>
        <!-- END MENU SIDEBAR-->


        <nav class="navigation-bar d-flex flex-column">
            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Панель" href="<?php echo e(route('admin-home-index')); ?>"><i class="fas fa-table"></i></a>
            </div>


            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Каталог" href=""><i class="fas fa-list"></i></a>

                <ul class="list-unstyled">
                    <li><a href="<?php echo e(route('admin-products-index')); ?>">Товары</a></li>
                    <li><a href="<?php echo e(route('admin-categories-index')); ?>">Категории</a></li>
                    <li><a href="<?php echo e(route('admin-tags-index')); ?>">Теги</a></li>
                    <li><a href="<?php echo e(route('admin-group-attribute-index')); ?>">Группа Атрибутов</a></li>
                    <li><a href="<?php echo e(route('admin-attribute-index')); ?>">Атрибуты</a></li>
                    <li><a href="<?php echo e(route('admin-options-index')); ?>">Опции</a></li>
                    <li><a href="<?php echo e(route('admin-manufacturers-index')); ?>">Производители</a></li>
                    <li><a href="<?php echo e(route('admin-suppliers-index')); ?>">Поставщики</a></li>
                </ul>
            </div>
            

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Продажи" href=""><i class="fas fa-dollar-sign"></i></a>

                <ul class="list-unstyled">
                    <li><a href="<?php echo e(route('admin-orders-index')); ?>" >Заказы</a></li>
                    <li><a href="<?php echo e(route('admin-contacts-index')); ?>">Запросы с сайта</a></li>
                    <li><a href="<?php echo e(route('admin-status-index')); ?>">Статусы заказа</a></li>
                </ul>
            </div>

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Общее" href=""><i class="fas fa-cogs"></i></a>

                <ul class="list-unstyled">
                    <li><a class="nav-text" href="<?php echo e(route('admin-pages-index')); ?>">Страницы</a></li>
                    <li><a class="nav-text" href="<?php echo e(route('admin-settings-edit')); ?>">Настройки</a></li>
                    <li><a class="nav-text" href="<?php echo e(route('admin-languages-index')); ?>">Языки</a></li>
                    <li><a class="nav-text" href="<?php echo e(route('admin-currency-index')); ?>">Валюта</a></li>
                </ul>
            </div>
            

            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Маркетинг" href=""><i class="fas fa-bullhorn"></i></a>

                <ul class="list-unstyled">
                    <li><a href="<?php echo e(route('admin-slider-index')); ?>">Слайдер</a></li>
                    <li><a href="<?php echo e(route('admin-blog-index')); ?>">Блог</a></li>
                    <li><a href="<?php echo e(route('admin-stocks-index')); ?>">Акции</a></li>
                    <li><a href="<?php echo e(route('admin-orders-abandoned')); ?>">Корзины</a></li>
                    <li><a href="<?php echo e(route('admin-brands-index')); ?>">Бренды</a></li>
                    <li><a href="<?php echo e(route('admin-mailing-index')); ?>">Рассылка</a></li>
                </ul>
            </div>

            <hr>


            <div class="navigation-bar__submenu">
                <a class="nav-text d-flex justify-content-center align-items-center" title="Пользователи" href="<?php echo e(route('admin-users-index')); ?>"><i class="fas fa-users"></i></a>
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
                            <span class="quantity">1</span>
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
                            <i style="color: #a9b3c9; font-size: 25px; margin-bottom: 3px;" class="fas fa-shopping-cart"></i>
                            <span class="quantity"><?php echo e(\App\Order::where('new', 2)->where('confirm', 1)->count()); ?></span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey">
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey">
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey">
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity"><?php echo e($contacts_count); ?></span>
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
                    <div class="account-wrap">
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
                                    <a href="<?php echo e(route('logout')); ?>"
                               			onclick="event.preventDefault();
                                     	document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>Выход</a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
		                                  style="display: none;">
		                                <?php echo e(csrf_field()); ?>

		                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <p><?php echo e(explode(' ', \Illuminate\Support\Facades\Auth::user()->name)[0]); ?> <?php echo e(explode(' ', \Illuminate\Support\Facades\Auth::user()->name)[1]); ?></p>

                            <a href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                <?php echo app('translator')->getFromJson('navbar.logout'); ?>
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 --><?php /**PATH W:\domains\veisshop\resources\views/layouts/admin/nav.blade.php ENDPATH**/ ?>