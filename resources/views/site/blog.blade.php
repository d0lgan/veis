@extends('layouts.site.layout_with_long_header')



@section('content')

    <div class="breadcrumbs">
        <div class="holder">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">ИНТЕРНЕТ МАГАЗИН</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">ПЕРЧАТКИ </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">АВТОМОБИЛЬНЫЕ </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">МУЖСКИЕ</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="catalog__btns">
        <button class="catalog__btns-item mob-select-btn blog-select-btn" data-filters-opener>
            <select>
                <option value="" hidden selected>НОВОСТИ</option>
                <option value="">
                    НОВОСТИ 1
                </option>
                <option value="">
                    НОВОСТИ 2
                </option>
                <option value="">
                    НОВОСТИ 3
                </option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"></path></g></g></svg>
        </button>
        <div class="catalog__btns-item mob-select-btn blog-select-btn">
            <select>
                <option value="" hidden selected>СТАТЬИ</option>
                <option value="">
                    СТАТЬИ 1
                </option>
                <option value="">
                    СТАТЬИ 2
                </option>
                <option value="">
                    СТАТЬИ 3
                </option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"></path></g></g></svg>

        </div>
    </div>
    <section class="blog">
        <div class="blog__img">
            <img src="/assets/front/img/slider.jpg" alt="">
        </div>
        <div class="holder blog__holder">
            <div class="catalog-filters sticky-box">

                <div class="catalog-filters__box">
                    <h2 class="blog__title">
                        БЛОГ
                    </h2>
                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>НОВОСТИ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body" style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">АВТОМОБИЛЬНЫЕ</span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ДЛИННЫЕ </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">КЛАССИЧЕСКИЕ </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">АВМИТЕНКИ ТОМОБИЛЬНЫЕ</span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>

                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>СТАТЬИ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body" style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">МУЖСКИЕ </span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ЖЕНСКИЕ </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">УНИСЕКС  </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ДЕТСКИЕ </span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>

                </div>
            </div>

            <div class="blog__post editor">
                <h3>
                    КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>

                <img class="left" src="/assets/front/img/blog__main_foto.jpg" alt="">
                <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <img class="right" src="/assets/front/img/blog__main_foto2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <img class="left" src="/assets/front/img/blog__main_foto3.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <img class="right" src="/assets/front/img/blog__main_foto4.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
        </div>
    </section>

    <section class="consul">
        <img src="/assets/front/img/consul.png" class="consul__foto">
        <div class="consul__block">
            <h2>ХОЧЕШЬ ПОЛУЧИТЬ ПОЛНУЮ<br> КОНСУЛЬТАЦИЮ О ТОВАРЕ И НОВИНКАХ?</h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="Отправить" name="">
            </form>
        </div>
        <img src="/assets/front/img/consul2.png" class="consul__foto2">
    </section>
    <section class="about">
        <div class="conteiner">
            <h2 class="about__title">ИНТЕРНЕТ МАГАЗИН АКСЕССУАРОВ В УКРАИНЕ – VEIS</h2>
            <p class="about__text">Мы – интернет магазин качественных перчаток и брендовых аксессуаров «Veis» предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные перчатки для женщин и мужчин на любую погоду, автомобильные перчатки, очки, зонты.</p>
            <div class="about__view_more">
                <span>Читать далее</span>
                <img src="/assets/front/img/down.svg">
            </div>
        </div>
    </section>

@endsection
