@extends('layouts.site.layout_without_anything')

@section('title', $locale == 'ru' ? $page->meta_h1_ru : $page->meta_h1_uk)
@section('meta', $locale == 'ru' ? $page->seo_ru : $page->seo_uk)

@section('h1', $locale == 'ru' ? $page->title_ru : $page->title_uk)

@section('content')
<site-basket-component :locale="{{ json_encode($locale) }}" :way-to-pays="{{ json_encode($wayToPays) }}" :translate="{{ json_encode($translate) }}" :settings="{{ json_encode($settings) }}"></site-basket-component>

<section class="work">
    <h2 class="work__title">{{ __('site.howWeDoing.how') }}</h2>
    <p class="work__subtitle">{{ __('site.howWeDoing.schema') }}</p>
    <div class="work__inner">
        <div class="work__iteam">
            <img src="/assets/front/img/list-alt.svg">
            <p>{{ __('site.howWeDoing.leave') }}</p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/phone-volume.svg">
            <p>{{ __('site.howWeDoing.call_back') }}</p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/check-double.svg">
            <p>{{ __('site.howWeDoing.clarify') }}</p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/box-open.svg">
            <p>{{ __('site.howWeDoing.form') }}</p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/truck-loading.svg">
            <p>{{ __('site.howWeDoing.send') }}</p>
        </div>
        <div class="work__iteam">
            <img src="/assets/front/img/child.svg">
            <p>{{ __('site.howWeDoing.receive') }}</p>
        </div>
    </div>
</section>

@endsection

@section('js')

    {{--<script>
        $(function () {
            $('#add_cart').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '{{route('productAddToCart',['id' => $product->id])}}',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] - 1;
                        $(function () {
                            count++;
                            $("CART").text(count);
                            $("#myModal_add_cart").modal();
                        });
                    },
                    // error: function (msg) {
                    //     alert('Не добавлен!');
                    // }
                });
            });

            $('#prod_plus').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '{{route('addByOneCardProduct',['id' => $product->id])}}',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] - 1;
                        $(function () {
                            count++;
                            $("CART").text(count);
                            if (count === 0) {
                                alert(data['info_messages']);
                            }
                            alert(data['info_messages']);
                        });
                    },
                });
            });

            $('#prod_minus').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '{{route('reduceByOneCardProduct',['id' => $product->id])}}',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] + 1;
                        $(function () {
                            count--;
                            $("CART").text(count);
                            if (count === 0) {
                                alert(data['info_messages']);
                            }
                            alert(data['info_messages']);
                        });

                    },
                });
            });
        });
        $('a.gallery').featherlightGallery({
            // previousIcon: '&#9664;',     /* Code that is used as previous icon */
            // nextIcon: '&#9654;',         /* Code that is used as next icon */
            previousIcon: '«',
            nextIcon: '»',
            galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300,          /* fadeOut speed before slide is loaded */
            openSpeed: 300
        });
    </script>--}}
    {{--

        <script>
            $('a.gallery').featherlightGallery({
                // previousIcon: '&#9664;',     /* Code that is used as previous icon */
                // nextIcon: '&#9654;',         /* Code that is used as next icon */
                previousIcon: '«',
                nextIcon: '»',
                galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
                galleryFadeOut: 300,          /* fadeOut speed before slide is loaded */
                openSpeed: 300
            });
        </script>
    --}}

@endsection
@section('css')

    <style>
        @media screen and (max-width: 640px) {
            body {
                padding-top: 15px !important;
            }

            .cart {
                padding-top: 0px !important;
            }
        }
    </style>

@endsection
