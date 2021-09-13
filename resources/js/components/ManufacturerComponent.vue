<template>
    <div class="uk-position-relative uk-width-1-1 uk-visible-toggle uk-light" uk-slider="center: true" tabindex="-1">
        <ul class="uk-slider-items uk-grid">
            <li v-for="brand in brands">
                <div class="uk-panel" >
                    <a style="color: black" :href="brand.link">
                        <span class="unselectable">{{ brand.title }}</span>
                    </a>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
</template>

<script>
    export default {
        name: "ManufacturerComponent",
        props:[
            'brands'
        ]
    }
</script>

<style scoped>
    .unselectable {
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none;   /* Chrome/Safari/Opera */
        -khtml-user-select: none;    /* Konqueror */
        -moz-user-select: none;      /* Firefox */
        -ms-user-select: none;       /* Internet Explorer/Edge */
        user-select: none;           /* Non-prefixed version, currently
                                  not supported by any browser */
    }
</style>