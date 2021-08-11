@section('footer')


        <div class="footer row m-0 mt-5">
            <div id="map" class="map">
                {{--        <img src="{{asset('/images/map.png')}}" alt="">--}}
            </div>
            <div class="links row col-12 py-5">
                <div class="col-12 col-md-4 col-xl-3 catalog">
                    <div class="title">КАТАЛОГ</div>
                    <a href="#" class="item">ЖЕНСКИЕ ПЕРЧАТКИ</a>
                    <a href="#" class="item">МУЖСКИЕ ПЕРЧАТКИ</a>
                    <a href="#" class="item">СУМКИ ЖЕНСКИЕ</a>
                    <a href="#" class="item">СУМКИ МУЖСКИЕ</a>
                    <a href="#" class="item">АКСУССУАРЫ</a>
                    <a href="#" class="item">ОЧКИ СОЛНЦЕЗАЩИТНЫЕ</a>
                    <a href="#" class="item">ОЧКИ СПОРТИВНЫЕ</a>
                    <a href="#" class="item">АКЦИЯ</a>
                </div>
                <div class="col-12 col-md-4 col-xl-3 about">
                    <div class="title">О МАГАЗИНЕ</div>
                    <a href="#" class="item">О нас</a>
                    <a href="#" class="item">Статьи</a>
                    <a href="#" class="item">Карта сайта</a>
                    <div class="mt-5 place">Мы находимся:</div>
                    <div class="item">г.Днепро 49000 ул.Солидарная 2</div>
                    <a id="show-on-map-footer" class="underitem" href="#map">Показать на карте <img src="{{ asset('images/double_next.svg') }}" alt=""></a>
                </div>
                <div class="col-12 col-md-4 col-xl-3 clients">
                    <div class="title">ПОКУПАТЕЛЯМ</div>
                    <a href="#" class="item">Доставка</a>
                    <a href="#" class="item">Оплата</a>
                    <a href="#" class="item">Гарантия</a>
                    <a href="#" class="item">Возврат</a>
                    <a href="#" class="item">Акссесуары</a>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-2 mt-xl-0 contacts row m-0">
                    <div class="title offset-2 col-10 p-0">КОНТАКТЫ</div>
                    <span class="d-flex align-items-center"><img class="col-2 p-0 kyivstar" src="{{ asset('/images/kyivstar-light.svg') }}" alt=""><a href="#" class="col-10 p-0 item">+38 (067) 27-40-200</a></span>
                    <span class="d-flex align-items-center justify-content-start"><img class="col-2 p-0 pr-1" src="{{ asset('/images/vodafone-light.svg') }}" alt=""><a href="#" class="col-10 p-0 item">+38 (067) 27-40-200</a></span>
                    <span class="d-flex align-items-center"><img class="col-2 p-0 pr-1 life" src="{{ asset('/images/life-light.svg') }}" alt=""><a href="#" class="col-10 p-0 item">+38 (067) 27-40-200</a></span>
                    <a href="#" class="offset-2 col-10 p-0 item">dnepr.veis@gmail.com</a>
                    <div class="offset-2 col-10 p-0 place mt-2">Звоните нам</div>
                    <div class="offset-2 col-10 p-0 item">с 08:00 до 21:00 (пн.-пт.)</div>
                    <div class="offset-2 col-10 p-0 item">и с 09:00 до 20:00 (сб.-вс.)</div>
                </div>
            </div>
            <div class="line row col-12 m-0 py-1 mb-4 d-md-flex justify-content-md-center">
                <div class="veis col-md-3 col-xl-1 p-0 text-center">VEIS</div>
                <div class="copy col-md-9 col-xl-6 d-flex align-items-center pl-5"><i class="far fa-copyright mr-1"></i>2017-2020 ИНТЕРНЕТ МАГАЗИН VEIS ВСЕ ПРАВА ЗАЩИЩЕНЫ</div>
                <div class="social mt-md-2 mt-xl-0 col-md-12 col-xl-5 d-flex justify-content-center">Мы в социальных сетях- <i class="fab fa-facebook-square"></i> <i class="fab fa-instagram"></i><i class="fab fa-telegram-plane"></i><i class="fab fa-viber"></i></div>
            </div>
        </div>


@endsection
