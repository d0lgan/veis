<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <?php $locale = $__env->yieldContent('locale') ?>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/front.css')); ?>">

</head>

<body>
<div id="app">

<div class="header">
    <header>
        <div class="conteiner">
            <div class="top__head">
                <nav>
                    <a href="<?php echo e(route('info', ['tab' => 'delivery'])); ?>"><?php echo e(__('site.menu.delivery')); ?></a>
                    <a href="<?php echo e(route('info', ['tab' => 'pay'])); ?>"><?php echo e(__('site.menu.pay')); ?></a>
                    <a href="<?php echo e(route('info', ['tab' => 'guarantee'])); ?>"><?php echo e(__('site.menu.guarantee')); ?></a>
                    <div class="head__contact">
                        <span><?php echo e(__('site.menu.contacts')); ?></span>
                        <img src="/assets/front/img/down_white.png" alt="down_white.png">
                    </div>
                    <div class="contact__hide">
                        <div class="contact__iteam">
                            <img src="/assets/front/img/kievstar_black.jpg">
                            <a href="tel:380672740200">
                                <?php echo e($phone_site_1); ?>

                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="/assets/front/img/vodafone_black.jpg">
                            <a href="tel:380952740200">
                                <?php echo e($phone_site_2); ?>

                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="/assets/front/img/life_black.jpg">
                            <a href="tel:380732740200">
                                <?php echo e($phone_site_3); ?>

                            </a>
                        </div>
                        <a href="mailto:dnepr.veis@gmail.com" class="contact__email"><?php echo e($receive_email); ?></a>
                        <div class="contact__iteam contact__margin">
                            <img  src="/assets/front/img/phone.jpg">
                            <div class="contact__content">
                                <p class="contact__title"><?php echo e(__('site.menu.call')); ?></p>
                                <p class="contact__text">с 08:00 до 21:00 (пн.-пт.)</p>
                                <p class="contact__text">и с 09.00 до 20:00 (сб,-вс.)</p>
                            </div>
                        </div>
                        <div class="contact__iteam2">
                            <img src="/assets/front/img/marker.jpg">
                            <div class="contact__content">
                                <p class="contact__title"><?php echo e(__('site.menu.geo')); ?></p>
                                <p class="contact__text"><?php echo e($locale == 'uk' ? $address_site_uk : $address_site_ru); ?></p>
                                <a href="<?php echo e(route('map')); ?>"><?php echo e(__('site.menu.map')); ?> » </a>
                            </div>
                        </div>
                    </div>
                    <a href="#/"><?php echo e(__('site.menu.blog')); ?></a>
                    <a href="#/"><?php echo e(__('site.menu.reviews')); ?></a>
                </nav>
                <div class="top__head_info">
                    <p class="work__info"><?php echo e(__('site.menu.schedule')); ?></p>

                    <site-basket-element-component :locale="<?php echo e(json_encode(App::getLocale())); ?>"></site-basket-element-component>

                    <p class="lang__info"><a href="<?php echo e(route('setlocale', ['lang' => 'uk'])); ?>">UA</a> | <a href="<?php echo e(route('setlocale', ['lang' => 'ru'])); ?>">RU</a></p>
                </div>
            </div>
            <div class="media__head">

                <site-basket-element-component :locale="<?php echo e(json_encode(App::getLocale())); ?>"></site-basket-element-component>

                <a href="<?php echo e(route('home')); ?>" class="logo media__head_logo">VEIS<br><span>COLLECTION</span></a>

                <div class="media__head_burger">
                    <span class="top"></span>
                    <span class="center"></span>
                    <span class="bottom"></span>
                    <img src="/assets/front/img/down.svg" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <div class="media__modal">
        <div class="conteiner">
            <div class="media__modal_iteam">
                <a href="<?php echo e(route('info', ['tab' => 'delivery'])); ?>"><?php echo e(__('site.menu.delivery')); ?></a>
                <a href="<?php echo e(route('info', ['tab' => 'pay'])); ?>"><?php echo e(__('site.menu.pay')); ?></a>
                <a href="<?php echo e(route('info', ['tab' => 'guarantee'])); ?>"><?php echo e(__('site.menu.guarantee')); ?></a>
                <div class="head__contact  modal__hide">
                    <span><?php echo e(__('site.menu.contacts')); ?></span>
                    <img src="/assets/front/img/down_white.png" alt="">
                    <div class="contact__hide">
                        <div class="contact__iteam">
                            <img src="/assets/front/img/kievstar_black.jpg">
                            <a href="tel:380672740200">
                                <?php echo e($phone_site_1); ?>

                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="/assets/front/img/vodafone_black.jpg">
                            <a href="tel:380952740200">
                                <?php echo e($phone_site_2); ?>

                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="/assets/front/img/life_black.jpg">
                            <a href="tel:380732740200">
                                <?php echo e($phone_site_3); ?>

                            </a>
                        </div>
                        <a href="mailto:dnepr.veis@gmail.com" class="contact__email"><?php echo e($receive_email); ?></a>
                        <div class="contact__iteam contact__margin">
                            <img src="/assets/front/img/phone.jpg">
                            <div class="contact__content">
                                <p class="contact__title"><?php echo e(__('site.menu.call')); ?></p>
                                <p class="contact__text">с 08:00 до 21:00 (пн.-пт.)</p>
                                <p class="contact__text">и с 09.00 до 20:00 (сб,-вс.)</p>
                            </div>
                        </div>
                        <div class="contact__iteam2">
                            <img src="/assets/front/img/marker.jpg">
                            <div class="contact__content">
                                <p class="contact__title"><?php echo e(__('site.menu.geo')); ?></p>
                                <div class="contact__desktop">
                                    <p class="contact__text"><?php echo e($locale == 'uk' ? $address_site_uk : $address_site_ru); ?></p>
                                    <a href="<?php echo e(route('map')); ?>"><?php echo e(__('site.menu.map')); ?> » </a>
                                </div>
                                <div class="contant__tablet">
                                    <a href="#/" class="contact__text"><?php echo e($locale == 'uk' ? $address_site_uk : $address_site_ru); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#/"><?php echo e(__('site.menu.blog')); ?></a>
            </div>
            <a href="#/" class="hide__btn"><?php echo e(__('site.menu.call_me')); ?></a>
        </div>
    </div>
    <div class="bottom__head">
        <div class="conteiner">
            <div class="bottom__block">
                
                <search-component :locale="<?php echo e(json_encode(App::getLocale())); ?>"></search-component>
                <a href="<?php echo e(route('home')); ?>" class="logo media__logo_hide">VEIS<br><span>COLLECTION</span></a>
                <div class="block__number">
                    <div class="head__box">
                        <img class="vodafone__icon" id='foto' src="/assets/front/img/kievstar.svg" alt="vodafone">
                        <p id="phone"><?php echo e($phone_site_1); ?></p>
                        <img class="rotate" src="/assets/front/img/down_white.png" alt="">
                    </div>
                    <div class="number__hide">
                        <div class="number__block">
                            <a href="tel:380672740200" class="number__iteam">
                                <img class="vodafone__icon" src="/assets/front/img/kievstar_black.jpg" alt="vodafone">
                                <p><?php echo e($phone_site_1); ?></p>
                            </a>
                            <img src="/assets/front/img/down.svg" title="Свернуть окно" class="down__icon">
                        </div>
                        <a href="tel:380952740200" class="number__iteam">
                            <img class="vodafone__icon" src="/assets/front/img/vodafone_black.jpg" alt="vodafone">
                            <p><?php echo e($phone_site_2); ?></p>
                        </a>
                        <a href="tel:380732740200" class="number__iteam">
                            <img class="vodafone__icon" src="/assets/front/img/life_black.jpg" alt="vodafone">
                            <p><?php echo e($phone_site_3); ?></p>
                        </a>
                        <a href="#" class="hide__btn"><?php echo e(__('site.menu.call_me')); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="head__lines">
            <div class="first__line"></div>
            <div class="second__line"></div>
        </div>
        <div class="head__tabs">
            <div class="first__tab  tab active__tab">
                <?php echo e(__('site.header.gloves')); ?>

                <img src="/assets/front/img/down_white.png">
            </div>

            <div class="second__tab tab">
                <?php echo e(__('site.header.glasses')); ?>

                <img style="fill: #fff;" src="/assets/front/img/down_white.png">
            </div>
        </div>
        <div class="tab__hide">
            <a href="#/" class="choose__bar_active"><?php echo e(__('site.header.sail')); ?></a>
            <a href="#/"><?php echo e(__('site.header.male')); ?></a>
            <a href="#/"><?php echo e(__('site.header.female')); ?></a>
            <a href="#/"><?php echo e(__('site.header.auto')); ?></a>
        </div>
        <div class="tab__hide">
            <a href="#/" class="choose__bar_active"><?php echo e(__('site.header.sail')); ?></a>
            <a href="#/"><?php echo e(__('site.header.male')); ?></a>
            <a href="#/"><?php echo e(__('site.header.female')); ?></a>
            <a href="#/"><?php echo e(__('site.header.sport')); ?></a>
        </div>
    </div>
    <div class="choose__bar">
        <div class="choose__content">
            <a href="#/" class="choose__bar_active"><?php echo e(__('site.header.sail')); ?></a>
            <a href="#/"><?php echo e(__('site.header.male')); ?></a>
            <a href="#/"><?php echo e(__('site.header.female')); ?></a>
            <a href="#/"><?php echo e(__('site.header.auto')); ?></a>
        </div>
        <div class="choose__content hide">
            <a href="#/" class="choose__bar_active"><?php echo e(__('site.header.sail')); ?></a>
            <a href="#/"><?php echo e(__('site.header.male')); ?></a>
            <a href="#/"><?php echo e(__('site.header.female')); ?></a>
            <a href="#/"><?php echo e(__('site.header.sport')); ?></a>
        </div>
    </div>
</div>



<?php echo $__env->yieldContent('content'); ?>



<footer>
    <div class="foot__inner">
        <div class="foot__iteam">
            <div class="foot__title"><?php echo e(__('site.footer.catalog')); ?></div>
            <a href="#/"><?php echo e(__('site.footer.female_gloves')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.male_gloves')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.female_bags')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.male_bags')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.accessories')); ?></a>
            <a href="<?php echo e(route('catalog', ['f' => $locale == 'ru' ? 'solntsezashchitnyye' : 'sontsezakhysni'])); ?>"><?php echo e(__('site.footer.sunglasses')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.sportglasses')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.sail')); ?></a>
        </div>
        <div class="foot__iteam2">
            <div class="foot__title"><?php echo e(__('site.footer.about_magazine')); ?></div>
            <a href="<?php echo e(route('info')); ?>"><?php echo e(__('site.footer.about_us')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.articles')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.replies')); ?></a>
            <a href="<?php echo e(route('map')); ?>"><?php echo e(__('site.footer.map')); ?></a>

            <div class="foot__subtitle"><?php echo e(__('site.menu.geo')); ?></div>
            <a href="#"><?php echo e($locale == 'uk' ? $address_site_uk : $address_site_ru); ?></a>
            <a href="<?php echo e(route('map')); ?>" class="show__map"><?php echo e(__('site.menu.map')); ?> » </a>
        </div>
        <div class="foot__iteam3">
            <div class="foot__title"><?php echo e(__('site.footer.buyers')); ?></div>
            <a href="<?php echo e(route('info', ['tab' => 'delivery'])); ?>"><?php echo e(__('site.menu.delivery')); ?></a>
            <a href="<?php echo e(route('info', ['tab' => 'pay'])); ?>"><?php echo e(__('site.menu.pay')); ?></a>
            <a href="<?php echo e(route('info', ['tab' => 'guarantee'])); ?>"><?php echo e(__('site.menu.guarantee')); ?></a>
            <a href="<?php echo e(route('info', ['tab' => 'return'])); ?>"><?php echo e(__('site.footer.return')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.accessories_lower')); ?></a>
        </div>
        <div class="foot__iteam4">
            <div class="foot__title"><?php echo e(__('site.footer.contacts')); ?></div>
            <div class="foot__iteam_box">
                <img src="/assets/front/img/kievstar.svg">
                <a href="tel:380672740200"><?php echo e($phone_site_1); ?></a>
            </div>
            <div class="foot__iteam_box">
                <img src="/assets/front/img/vodafone.svg">
                <a href="tel:380952740200"><?php echo e($phone_site_2); ?></a>
            </div>
            <div class="foot__iteam_box">
                <img src="/assets/front/img/life.svg">
                <a href="tel:380732740200"><?php echo e($phone_site_3); ?></a>
            </div>
            <div class="foot__iteam_block">
                <a href="mailto:<?php echo e($receive_email); ?>"><?php echo e($receive_email); ?></a>

                <div class="foot__subtitle2"><?php echo e(__('site.menu.call')); ?></div>
                <p>с 08:00 до 21:00 (пн.-пт.)</p>
                <p>с 09.00 до 20:00 (сб,-вс.)</p>
            </div>
        </div>
    </div>
    <div class="media__foot">
        <div class="media__foot_iteam">
            <span>КАТАЛОГ</span>
            <img src="/assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="#/"><?php echo e(__('site.footer.female_gloves')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.male_gloves')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.female_bags')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.male_bags')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.accessories')); ?></a>
            <a href="<?php echo e(route('catalog', ['f' => $locale == 'ru' ? 'solntsezashchitnyye' : 'sontsezakhysni'])); ?>"><?php echo e(__('site.footer.sunglasses')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.sportglasses')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.sail')); ?></a>
        </div>

        <div class="media__foot_iteam">
            <span><?php echo e(__('site.footer.about_magazine')); ?></span>
            <img src="/assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="<?php echo e(route('info')); ?>"><?php echo e(__('site.footer.about_us')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.articles')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.replies')); ?></a>
            <a href="<?php echo e(route('map')); ?>"><?php echo e(__('site.footer.map')); ?></a>
        </div>

        <div class="media__foot_iteam">
            <span><?php echo e(__('site.footer.buyers')); ?></span>
            <img src="/assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="<?php echo e(route('info', ['tab' => 'delivery'])); ?>"><?php echo e(__('site.menu.delivery')); ?></a>
            <a href="<?php echo e(route('info', ['tab' => 'pay'])); ?>"><?php echo e(__('site.menu.pay')); ?></a>
            <a href="<?php echo e(route('info', ['tab' => 'guarantee'])); ?>"><?php echo e(__('site.menu.guarantee')); ?></a>
            <a href="<?php echo e(route('info', ['tab' => 'return'])); ?>"><?php echo e(__('site.footer.return')); ?></a>
            <a href="#/"><?php echo e(__('site.footer.accessories_lower')); ?></a>
        </div>

        <div class="media__foot_iteam">
            <span><?php echo e(__('site.footer.contacts')); ?></span>
            <img src="/assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <div class="foot__iteam_box">
                <img src="/assets/front/img/kievstar.svg">
                <a href="tel:380672740200"><?php echo e($phone_site_1); ?></a>
            </div>
            <div class="foot__iteam_box">
                <img src="/assets/front/img/vodafone.svg">
                <a href="tel:380952740200"><?php echo e($phone_site_2); ?></a>
            </div>
            <div class="foot__iteam_box">
                <img src="/assets/front/img/life.svg">
                <a href="tel:380732740200"><?php echo e($phone_site_3); ?></a>
            </div>
            <div class="foot__iteam_box">
                <a href="mailto:dnepr.veis@gmail.com"><?php echo e($receive_email); ?></a>
            </div>
        </div>
    </div>
    <div class="foot__down">
        <div class="media__down">
            <div class="foot__logo">VEIS</div>
            <p>© 2017-2020 <?php echo e(__('site.footer.copyright')); ?></p>
            <p><?php echo e(__('site.footer.social')); ?> –</p>
        </div>
        <div class="media__social">
            <a href="#/">
                <img src="/assets/front/img/facebook.png">
            </a>
            <a href="#/">
                <img src="/assets/front/img/instagram.png">
            </a>
            <a href="#/">
                <img src="/assets/front/img/telegram.png">
            </a>
            <a href="#/">
                <img src="/assets/front/img/viber.png">
            </a>
        </div>
    </div>
    <div class="media__foot_info">
        <div class="media__info_iteam">
            <a href="<?php echo e(route('home')); ?>" class="logo media__logo">VEIS<br><span>COLLECTION</span></a>
        </div>
        <div class="media__info_iteam"><a href="#"><?php echo e($locale == 'uk' ? $address_site_uk : $address_site_ru); ?></a></div>

        <div class="media__info_iteam">
            © 2017-2020 <?php echo e(__('site.footer.copyright')); ?>

        </div>
    </div>
</footer>

<div class="black__over"></div>

</div>
<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
<!-- <script type="text/javascript" src="js/jquery.js" defer></script>
-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js?ver=5.5.3" id="range-js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/front/js/front.js')); ?>" defer></script>



</body>

</html><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/layouts/site/layout_with_long_header.blade.php ENDPATH**/ ?>