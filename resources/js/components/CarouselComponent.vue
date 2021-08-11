<template>
    <div>
        <div class="uk-position-relative uk-visible-toggle uk-light slideshow" tabindex="-1" uk-slideshow>

            <ul class="uk-slideshow-items">
                <li v-for="slide in slides" :style="{background: slide.color}">
                    <div class="slide" uk-cover></div>
                    <div class="col-md-12 d-flex flex-column h-100">

                        <div class="col-md-8 offset-2 d-flex justify-content-center align-items-center">
                            <img :src="'/house/uploads/' + slide.image" alt="" class="col-md-6">
                        </div>

                        <div class="text-center h2">{{ slide.title }}</div>
                        <div class="h5">{{ slide.description }}</div>
                        <div class="row">
                            <a :href="slide.link" class="btn btn-primary" :class="{'col-6': slide.additional_button !== false && slide.additional_link !== null, 'col-12': slide.additional_button === false && slide.additional_link === null}">{{ slide.button }}</a>
                            <a v-if="slide.additional_button !== false || slide.additional_link !== null" :href="slide.additional_link" class="btn btn-primary col-6">{{ slide.additional_button }}</a>
                        </div>

                    </div>

                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>
    </div>
</template>

<script>
    import VueCarousel from '@chenfengyuan/vue-carousel';

    export default {
        props:[
            'slides'
        ],
        data() {
          return {

          }
        },
        comments: {
            VueCarousel
        },
        mounted() {
            console.log(this.slides[1].additional_button);
        }
    }

</script>

<style>
    .slideshow .slide {
        align-items: center;
        color: #666;
        display: flex;
        font-size: 1.5rem;
        justify-content: center;
        min-height: 25rem;
    }
</style>
