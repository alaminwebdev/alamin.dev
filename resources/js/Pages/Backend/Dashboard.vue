<template >
    <Head title="Dashboard">
        <!-- <link rel="icon" type="image/svg+xml" href="/favicon.svg" /> -->
    </Head>
    <AdminLayouts>
        <template v-slot:headerTitle>
            <h1 class="m-0">Dashboard</h1>
        </template>

        <template v-slot:defautl>
            <p>Technology Used:</p>
        </template>
    </AdminLayouts>
</template>
<script>

import { Head } from '@inertiajs/vue3';
import AdminLayouts from './AdminLayouts.vue';

export default {
    components: {Head,AdminLayouts }
}
</script>
<style scoped></style>
