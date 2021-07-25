<template>
    <div class="conteiner" v-if="desc.ru || desc.uk" style="padding: 30px 0;">
        <p class="about__text"
           v-if="locale == 'ru' && desc.ru"
           v-html="desc.ru"
        ></p>
        <p class="about__text"
           v-else-if="locale == 'uk' && desc.uk"
           v-html="desc.uk"
        ></p>

        
        <div class="about__view_more" v-if="(locale == 'ru' && desc.ru) || (locale == 'uk' && desc.uk)">
            <span>{{ this.locale == 'ru' ? "Читать далее" : "Читати далі" }}</span>
            <img :src="'/assets/front/img/down.svg'">
        </div>
    </div>
</template>

<script>
    export default {
        name: "CatalogDescription",
        props: {
            instantCategory: {
                required: false,
                default: 0,
            },
            desc: {
                required: true,
                default: [],
            },
            desctran: {
                required: false,
            },
            locale: {
                required: true,
            }
        },
        mounted() {
            const viewMore = (iteam, iteam2, btn = false) => {
                const pressBtn = document.querySelector(iteam),
                    textBox = document.querySelector(iteam2);

                pressBtn.addEventListener('click', open);

                function open() {
                    textBox.classList.toggle('open');
                    if (btn === false) {
                        if (pressBtn.querySelector('span').textContent === (this.locale == 'ru' ? "Читать далее" : "Читати далі")) {
                            pressBtn.querySelector('span').textContent = (this.locale == 'ru' ? "Скрыть" : "Приховати");
                            pressBtn.querySelector('img').style.transform = 'rotate(-180deg)';
                        } else {
                            pressBtn.querySelector('span').textContent = (this.locale == 'ru' ? "Читать далее" : "Читати далі");
                            pressBtn.querySelector('img').style.transform = 'rotate(0)';
                        }
                    }
                }
            };

            viewMore('.about__view_more', '.about__text');
        },
        data: function () {
            return {
                readmore: false,
            }
        }
    }
</script>

<style scoped>
    .about__text {
        position: relative;
    }

    .about__text:after {
        content: '';
        position: absolute;
        left: -100px;
        right: -100px;
        bottom: 0;
        height: 100px;
        box-shadow: inset 0px -39px 17px -11px #FFFFFF;
    }
</style>