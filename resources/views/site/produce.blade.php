@extends('layouts.site.layout_with_short_header')

@section('title', $locale == 'ru' ? $product->title_ru : $product->title_uk)

@section('content')

<site-produce-component :page="{{ json_encode($page) }}" :translate_watch="{{ json_encode($translate_watch) }}" :translate="{{ json_encode($translate) }}" :product="{{ json_encode($product) }}" :locale="{{ json_encode($locale) }}" :attributes="{{ json_encode($selected_attr) }}" :back="{{ json_encode(url()->previous()) }}" :settings="{{ json_encode($settings) }}"></site-produce-component>

<section class="about">
    <site-catalog-description-component :desc="{{ json_encode($desc) }}" :locale="{{ json_encode($locale) }}"></site-catalog-description-component>
</section>
@endsection

@section('js')

    <script>
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
    </script>
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
