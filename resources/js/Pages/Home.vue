<template >
    <Head title="Home">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    </Head>
    <Layouts>
        <div>
            <h1 class="text-3xl font-bold underline">Hello Vue with Inhetia !</h1>
            <p>Technology Used:</p>
            <ul>
                <li>{{ frameworks.server_side }}</li>
                <li>{{ frameworks.client_side }}</li>
            </ul>
        </div>

    </Layouts>
</template>
<script>

import Layouts from './Layouts/Layouts.vue';
import { Head } from '@inertiajs/vue3'

export default {
    props: {
        'frameworks': Object
    },
    components: { Layouts, Head }
}
</script>
