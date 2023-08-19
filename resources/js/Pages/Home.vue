<template >
    <Head title="Home">
        <!-- <link rel="icon" type="image/svg+xml" href="/favicon.svg" /> -->
    </Head>
    <Layouts>
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-8 mt-5">
                <div class="carousel-container">
                    <Carousel :itemsToShow="4.00" :wrapAround="true" :transition="500">
                        <Slide v-for="slide in 10" :key="slide">
                            <div class="carousel__item">{{ slide }}</div>
                        </Slide>
                        <template #addons="{ slidesCount }">
                            <Navigation v-if="slidesCount > 1" />
                            <Pagination v-if="slidesCount > 1" />
                        </template>
                    </Carousel>
                </div>
            </div>
        </div>
    </Layouts>
</template>
<script>

import Layouts from './Layouts/Layouts.vue';
import { Head } from '@inertiajs/vue3';

import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

export default {
    props: {
        'frameworks': Object
    },
    data() {
        return {

        }
    },
    components: {
        Layouts,
        Head,
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    methods: {
    }
}
</script>
<style >
.carousel-container {
    position: relative;
}

.carousel__slide {
    padding: 15px 0;
}

.carousel__item {
    min-height: 200px;
    width: 100%;
    background-color: #10b981;
    color: #fff;
    font-size: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__viewport {
    perspective: 2000px;
}

.carousel__track {
    transform-style: preserve-3d;
}

.carousel__slide--sliding {
    transition: 0.5s;
}

.carousel__slide {
    opacity: 0.9;
    transform: rotateY(-20deg) scale(0.9);
}

.carousel__slide--active~.carousel__slide {
    transform: rotateY(20deg) scale(0.9);
}

.carousel__slide--prev {
    opacity: 1;
    transform: rotateY(-20deg) scale(0.90);
}

.carousel__slide--next {
    opacity: 1;
    transform: rotateY(10deg) scale(0.95);
}

.carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.1);
}
</style>
