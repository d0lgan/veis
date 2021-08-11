@extends('layouts.design.app')
@include('layouts.design.big-header')
@section('content')

    <div class="blog">
        @yield('header')
        <div class="breadcrumbs d-flex px-5 py-3 flex-column flex-sm-row">
            <div>
                <a class="step px-3 pl-xl-4">ИНТЕРНЕТ МАГАЗИН</a>/
            </div>
            <div>
                <a class="step px-3">БЛОГ</a>/
            </div>
            <div>
                <a class="step px-3">НОВОСТИ</a>/
            </div>
            <div>
                <a class="step px-3">КАЧЕСТВЕННЫЕ ПЕРЧАТКИ</a>
            </div>
        </div>
        <div class="all row m-0 d-flex align-items-start">
            <div class="px-5 top row m-0 d-flex align-items-start">

            </div>
            <div class="categories offset-1 col-sm-4 col-md-3 py-4 px-0">
                <div class="title pl-4">БЛОГ</div>
                <div class="category mt-3 px-4">
                    <div class="top more-arrow d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#cat1" aria-expanded="false" aria-controls="cat1">
                        <div class="title py-1">НОВОСТИ</div>
                        <img src="{{asset('/images/download.svg')}}" alt="">
                    </div>
                    <div class="articles collapse multi-collapse" id="cat1">
                        <div class="title select">АВТОМОБИЛЬНЫЕ</div>
                        <div class="title">ДЛИННЫЕ</div>
                        <div class="title">КЛАСИЧЕСКИЕ</div>
                        <div class="title">МИТЕКИ</div>
                    </div>
                </div>
                <div class="category mt-3 px-4">
                    <div class="top more-arrow d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#cat2" aria-expanded="false" aria-controls="cat2">
                        <div class="title py-1">СТАТЬИ</div>
                        <img src="{{asset('/images/download.svg')}}" alt="">
                    </div>
                    <div class="articles collapse multi-collapse" id="cat2">
                        <div class="title select">МУЖСКИЕ</div>
                        <div class="title">ЖЕНСКИЕ</div>
                        <div class="title">УНИСЕКС</div>
                        <div class="title">ДЕТСКИЕ</div>
                    </div>
                </div>
            </div>
            <div class="main px-5 row mx-0 mb-4 offset-md-4 col-md-8 offset-sm-5 col-sm-7">
                <div class="title">КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ</div>
                <div class="text row p-0 mt-2">
                    <div class="col-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at dolore enim eos incidunt magni modi nam, nemo odio quia recusandae, similique sit soluta tempore unde vel veniam voluptatibus. Cumque, in, minima modi nam numquam odio quisquam recusandae reprehenderit suscipit, tempore temporibus veniam voluptate voluptatibus. Accusamus asperiores assumenda atque libero quas quos sit tempore temporibus vitae! Accusantium adipisci delectus dicta hic, iste laudantium rerum sapiente. Beatae commodi dolore enim et ex facere nam omnis saepe similique voluptatum. Animi dolorum hic id labore, mollitia nisi veritatis. Aliquam beatae consequatur, culpa dolorem doloribus, in labore, maiores natus nesciunt nihil quis rem ullam?</div>
                    <div class="col-12 col-md-4 p-4 mt-3 d-flex justify-content-center align-items-center"><img src="{{asset('/images/logo.jpg')}}" alt=""></div>
                    <div class="col-12 col-md-4 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium at eaque eveniet explicabo fugit labore, natus necessitatibus nobis numquam perferendis perspiciatis, provident quae quidem quisquam recusandae similique soluta voluptas voluptate.</div>
                    <div class="col-12 col-md-4 mt-3 d-flex justify-content-center align-items-center"><img src="{{asset('/images/2.jfif')}}" alt=""></div>
                    <div class="col-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at dolore enim eos incidunt magni modi nam, nemo odio quia recusandae, similique sit soluta tempore unde vel veniam voluptatibus. Cumque, in, minima modi nam numquam odio quisquam recusandae reprehenderit suscipit, tempore temporibus veniam voluptate voluptatibus. Accusamus asperiores assumenda atque libero quas quos sit tempore temporibus vitae! Accusantium adipisci delectus dicta hic, iste laudantium rerum sapiente. Beatae commodi dolore enim et ex facere nam omnis saepe similique voluptatum. Animi dolorum hic id labore, mollitia nisi veritatis. Aliquam beatae consequatur, culpa dolorem doloribus, in labore, maiores natus nesciunt nihil quis rem ullam?</div>
                    <div class="col-12 col-md-6 mt-3 d-flex justify-content-center align-items-center"><img src="{{asset('/images/3.jpg')}}" alt=""></div>
                    <div class="col-12 col-md-6 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque deserunt dolores explicabo hic laborum, officia sequi veniam. Deleniti et fugit inventore laborum maiores minima modi, natus, neque numquam omnis rem repudiandae ullam. Alias earum laborum placeat praesentium saepe sint vitae. Alias, aliquam asperiores blanditiis dolor dolore repellendus sapiente suscipit tempore. A animi, aperiam autem cum cumque deleniti dicta dolorum esse eum exercitationem hic impedit incidunt itaque libero natus nisi odio omnis pariatur, perferendis quas quos reprehenderit rerum sequi suscipit vitae voluptatem voluptatibus! Atque cupiditate earum ex, fuga fugit inventore nisi odit, praesentium, quia quos recusandae reprehenderit saepe sapiente velit!</div>
                    <div class="col-12 col-md-6 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ea fugit incidunt magnam nam nihil quia sunt totam. Aperiam consequatur eligendi ex fugit molestias odio quaerat sint tempora. Adipisci blanditiis, consectetur corporis error eveniet ex, incidunt ipsa iure necessitatibus nesciunt nisi, nobis provident quia quis quos repellendus sequi totam ut veniam voluptatem? Dicta facilis hic mollitia possimus similique sunt. A accusamus ad aliquid corporis debitis dicta enim excepturi exercitationem fuga impedit laboriosam laudantium magnam magni, maxime mollitia odio odit, perferendis quis quod ratione repudiandae sapiente sequi soluta temporibus tenetur unde, velit! Aspernatur atque fugiat quia! Iste necessitatibus officia quo similique?</div>
                    <div class="col-12 col-md-6 mt-3 d-flex justify-content-center align-items-center"><img src="{{asset('/images/1.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>


        <div class="form d-flex justify-content-center align-items-start pt-5">
            <img class="glaves" src="{{ asset('images/glaves.png') }}" alt="">
            <img class="glasses" src="{{ asset('images/sun_glasses.png') }}" alt="">
            <div class="mailing">
                <div class="title mb-4">ХОЧЕШЬ ПОЛУЧИТЬ ПОЛНУЮ КОНСУЛЬТАЦИЮ О ТОВАРЕ И НОВИНКАХ?</div>
                <div class="input d-flex justify-content-center align-items-center">
                    <input type="text" class="py-2 pl-4" placeholder="Ваш E-Mail">
                    <a class="button px-4 py-2 pr-5">Отправить<img src="{{ asset('/images/white_next.svg') }}" alt="" class="mt-1 ml-3"></a>
                </div>
            </div>

        </div>
        <div class="description row m-0 pt-3">
            <div class="title col-12 px-5 py-4">СТАТЬЯ ДЛЯ ЭТОЙ СТРАНИЦЫ</div>
            <div class="desc col-12 px-5">Мы – интернет магазин качественных перчаток и брендовых аксессуаров "Veis" предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные</div>
            <div class="desc col-12 px-5 collapse multi-collapse" id="more">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur, deleniti dolorum, eveniet ex iure non officia optio placeat quae quam vitae, voluptate. Cumque, repellendus sunt. Aliquid culpa dignissimos doloremque, doloribus enim est hic laborum magnam obcaecati omnis quis quod quos sequi! Commodi doloremque fugiat quod. Consequuntur quod repellat sunt.</div>
            <div class="more-arrow more d-flex justify-content-center col-12" data-toggle="collapse" data-target="#more" aria-expanded="false" aria-controls="more">Читать далее <img src="{{ asset('images/download.svg') }}" alt="" class="ml-1"></div>
        </div>
        @include('layouts.design.footer')
    </div>
@endsection
