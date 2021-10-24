@extends('layouts.site.layout_with_short_header')

@section('title', $locale == 'ru' ? $product->meta_h1_ru : $product->meta_h1_uk)
@section('meta', $locale == 'ru' ? $product->seo_ru : $product->seo_uk)

@section('locale', $locale)

@section('content')

<site-produce-component :page="{{ json_encode($page) }}" :translate_watch="{{ json_encode($translate_watch) }}" :translate="{{ json_encode($translate) }}" :product="{{ json_encode($product) }}" :additional="{{ json_encode($product->data) }}" :locale="{{ json_encode($locale) }}" :attributes="{{ json_encode($selected_attr) }}" :back="{{ json_encode(url()->previous()) }}" :settings="{{ json_encode($settings) }}"></site-produce-component>

<section class="about">
    <site-catalog-description-component :desc="{{ json_encode($desc) }}" :locale="{{ json_encode($locale) }}"></site-catalog-description-component>
</section>
@endsection

@section('js')

    <script>

        !function (e) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
        }(function (p) {
            "use strict";
            var t = window.Select;
            (t = function (e, t) {
                this.defaults = {
                    activeClass: "item-active",
                    disabledClass: "select-disabled",
                    itemDisabledClass: "item-disabled",
                    openClass: "select-open",
                    gutter: 2,
                    placeholder: "Выберите"
                }, this.trigger = p(e), this.opts = p.extend({}, this.defaults, t), this.init()
            }).prototype = {
                constructor: t, init: function () {
                    var s = this, e = this.trigger;
                    p.each(e, function (e, t) {
                        p(t).attr("data-select", e), s.setActive(t, p(t).find("select"), 0)
                    }), s.bindEvents()
                }, bindEvents: function () {
                    var n = this;
                    n.trigger.on("click", function (e) {
                        e.stopPropagation();
                        var t = p(this), s = t.find("select"), i = n.getData(s);
                        n.trigger.not(this).removeClass(n.opts.openClass), t.hasClass(n.opts.disabledClass) || t.hasClass(n.opts.openClass) ? n.destroy() : (n.render(t, i), t.addClass(n.opts.openClass))
                    }), n.trigger.find("select").on("change", function (e, t) {
                        n.setActive(p(this).parent(), this, t)
                    }), p(document).on("click", ".select-option-item", function () {
                        var e = p(this).index(), t = p(this).parents(".select-wrapper").attr("data-select");
                        n.trigger.filter('[data-select="' + t + '"]').find("select").trigger("change", e)
                    }), p(document).click(function () {
                        n.destroy()
                    })
                }, getData: function (e) {
                    for (var t = [], s = !1, i = e.find("option"), n = 0; n < i.length; n++) s = e.get(0).selectedIndex === n, t.push({
                        name: p(i[n]).text(),
                        value: p(i[n]).val(),
                        disabled: void 0 !== p(i[n]).attr("disabled"),
                        active: s
                    });
                    return t
                }, setActive: function (e, t, s) {
                    var i = parseInt(s), n = p(t).find("option");
                    0 < n.length ? ((i >= n.length || i < 0) && (i = 0), p(t).get(0).selectedIndex = i, p(e).find(".select-inner").text(p(n[i]).text())) : p(e).find(".select-inner").text(this.opts.placeholder)
                }, render: function (e, t) {
                    var s = this, i = e, n = "", a = t;
                    n += '<div class="select-wrapper" data-select="' + i.attr("data-select") + '"><div class="select-content"><ul class="select-options">';
                    for (var l = 0; l < a.length; l++) a[l].disabled ? n += '<li class="select-option-item ' + s.opts.itemDisabledClass + '" data-value="' + a[l].value + '">' + a[l].name + "</li>" : a[l].active ? n += '<li class="select-option-item ' + s.opts.activeClass + '" data-value="' + a[l].value + '">' + a[l].name + "</li>" : n += '<li class="select-option-item" data-value="' + a[l].value + '">' + a[l].name + "</li>";
                    n += "</ul></div></div>", p(".select-wrapper").remove(), p("body").append(n);
                    var o = i.outerWidth(!0), r = i.outerHeight(!0), c = i.offset().left, d = i.offset().top;
                    p(".select-wrapper").css({width: o + "px", top: d + r + s.opts.gutter + "px", left: c + "px"})
                }, destroy: function () {
                    this.trigger.removeClass(this.opts.openClass), p(".select-wrapper").remove()
                }
            }, p.fn.select = function (e) {
                return new t(this, e)
            }, p.fn.select.Constructor = t
        });


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
