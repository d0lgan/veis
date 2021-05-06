<template>
    <div class="root">
        <section class="product">
            <div class="mobile__product">
                <div class="media__foot_iteam">
                    <span>{{ translate.new }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/">{{ translate.gloves }}</a>
                    <a href="#/">{{ translate.sunglasses }}</a>
                    <a href="#/">{{ translate.bags }}</a>
                    <a href="#/">{{ translate.umbrellas }}</a>
                </div>

                <div class="media__foot_iteam">
                    <span>{{ translate.sale }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/">{{ translate.gloves }}</a>
                    <a href="#/">{{ translate.sunglasses }}</a>
                    <a href="#/">{{ translate.bags }}</a>
                    <a href="#/">{{ translate.umbrellas }}</a>
                </div>
            </div>
            <div class="conteiner">
                <div class="product__king first__kind xs-hidden">
                    <pre><span class="product__king_active" @click="productKingWindow = 'new'">{{ translate.new }}</span>  /  <span @click="productKingWindow = 'sail'">{{ translate.sale }}</span></pre>
                </div>

                <div class="king__window" v-if="productKingWindow == 'new'">
                    <div class="product__name">
                        <pre><span class="product__name_active" @click="productNameWindow = 'gloves'">{{ translate.gloves }}</span>   /   <span @click="productNameWindow = 'glasses'">{{ translate.sunglasses }}</span>   /   <span @click="productNameWindow = 'bags'">{{ translate.bags }}</span>   /   <span @click="productNameWindow = 'umbrellas'">{{ translate.umbrellas }}</span></pre>
                    </div>
                    <div class="product__block" v-if="productNameWindow == 'gloves'">
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Перчатки из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="product__block" v-if="productNameWindow == 'glasses'">
                        <div class="product__inner">
                            <div v-for="product in latestGlasses.slice(0, 4)">
                                    <!--<a :href="getLang ? '/produce/' + product.slug_ru : '/uk/produce/' + product.slug_uk" style="display: flex; align-items: center; flex-direction: column; text-decoration: none;">
                                        <img :src="'/house/uploads/' + product.image">

                                        <p class="product__text">{{ getLang ? product.title_ru : product.title_uk }}</p>
                                        <p class="product__number">{{ translate.color }} <span v-for="attr in product.attributes">
                                            <span v-if="attr.group_attribute_id == 25">{{ getLang ? attr.name_ru : attr.name_uk}} </span>
                                        </span></p>
                                        <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > date))">
                                            <p class="product__prise lowprise">{{ product.undiscounted }} грн</p>
                                            <p class="lowprise__number">{{ translate.price }} {{ product.price }} грн</p>
                                        </div>
                                        <p class="product__prise" v-else>{{ translate.price }} {{ product.price }} грн</p>

                                        <div class="product__foto_btn">New</div>

                                        <div class="product__hide">
                                            <div class="product__hide_inner">
                                                <div class="product__hide_colors">
                                                    <img class="product__hide_iteam" :src="'/house/uploads/' + img.name" alt="" v-for="img in product.galleries">
                                                    <div class="product__icon_box">
                                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > date))">
                                                <p class="product__hide_prise lowprise">{{ product.undiscounted }} грн</p>
                                                <div class="product__hide_prise lowprise__number">
                                                    {{ translate.price }} {{ product.price }} грн
                                                </div>
                                            </div>
                                            <div class="product__hide_prise" v-else>
                                                {{ translate.price }} {{ product.price }} грн
                                            </div>
                                            <div class="product__hide_box">
                                                <span>{{ translate.watch }}</span>
                                                <div class="product__cart_box">
                                                    <img src="/assets/front/img/cart.svg" alt="">
                                                    <a href="#/">{{ translate.buy }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                -->
                                    <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div v-for="product in latestGlasses.slice(4, 8)">
                                <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                            </div>
                        </div>
                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'bags'">
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'umbrellas'">
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Зонты из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="king__window" v-if="productKingWindow == 'sail'">
                    <div class="product__name">
                        <pre><span class="product__name_active" @click="productNameWindow = 'gloves'">{{ translate.gloves }}</span>   /   <span @click="productNameWindow = 'glasses'">{{ translate.sunglasses }}</span>   /   <span @click="productNameWindow = 'bags'">{{ translate.bags }}</span>   /   <span @click="productNameWindow = 'umbrellas'">{{ translate.umbrellas }}</span></pre>
                    </div>
                    <div class="product__block" v-if="productNameWindow == 'gloves'">
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Перчатки из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="product__block" v-if="productNameWindow == 'glasses'">
                        <!--<div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Очки из натуральной кожи (Распродажа)</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">Sail</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>-->
                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'bags'">
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'umbrellas'">
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto.png">

                                <p class="product__text">Зонты из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto2.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <div class="product__icon_box">
                                                <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto9.jpg">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto3.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto4.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise lowprise">
                                        1699 грн
                                    </div>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto5.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__number">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto7.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto8.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise">цена 1699 грн</p>
                                <div class="product__foto_btn">New</div>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <div class="product__hide_prise">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product__iteam">
                                <img src="/assets/front/img/product__foto6.png">
                                <p class="product__text">Сумка из натуральной кожи</p>
                                <p class="product__number">020265, цвет голубой</p>
                                <p class="product__prise lowprise">8699 грн</p>
                                <p class="lowprise__number">цена 1699 грн</p>

                                <div class="product__hide">
                                    <div class="product__hide_inner">
                                        <div class="product__hide_colors">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto2.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto3.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto4.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                            <img class="product__hide_iteam" src="/assets/front/img/hidden_foto5.jpg" alt="">
                                        </div>
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>
                                    <p class="product__hide_prise lowprise">8699 грн</p>
                                    <div class="product__hide_prise lowprise__hide">
                                        цена 1699 грн
                                    </div>
                                    <div class="product__hide_box">
                                        <a href="#/">посмотреть</a>

                                        <div class="product__cart_box">
                                            <img src="/assets/front/img/cart.svg" alt="">
                                            <a href="#/">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="product__btn_box">
                    <a class="intro__btn" href="#/">{{ translate.show_all }} <span>{{ translate.gloves }}</span></a>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "ProductsCard",
        props: [
            'locale',
            'translate',
            'latestGlasses'
        ],
        data() {
            return {
                productKingWindow: 'new',
                productNameWindow: 'gloves',
                date: '',
            }
        },
        methods: {
            zeroPadding: function (num, digit) {
                var zero = '';
                for (var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            },
        },
        computed: {
            getLang: function() {
                if (this.locale == 'ru') {
                    return true;
                } else if (this.locale == 'uk') {
                    return false;
                }
            }
        },
        mounted() {

            var cd = new Date();
            this.date = this.zeroPadding(cd.getFullYear(), 4) + '-' + this.zeroPadding(cd.getMonth()+1, 2) + '-' + this.zeroPadding(cd.getDate(), 2);
        }
    }
</script>

<style scoped>

</style>