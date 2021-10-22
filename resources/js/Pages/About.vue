<template>
    <Layout>
        <Head title="About"></Head>
        <h1 v-text="judul"></h1>
    </Layout>
</template>

<style>

</style>

<script>
import Layout from '../Template/Layout.vue'
import { Head } from '@inertiajs/inertia-vue'

export default {
    components: {
        Layout,
        Head
    },
    props:['judul']
}
</script>
