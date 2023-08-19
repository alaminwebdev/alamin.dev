<template >
    <main>
        <Header></Header>
        <section class="container-fluid">
            <slot></slot>
        </section>
        <Footer></Footer>
    </main>
</template>

<script>

import Header from './Header.vue';
import Footer from './Footer.vue';

export default {
    components: { Header, Footer }
}
</script>


<style></style>