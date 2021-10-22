<template>
    <Layout>
        <Head title="Home"></Head>
        <h1>Helo, {{judul}}</h1>
    </Layout>
</template>

<style>

</style>

<script>
import { Link } from '@inertiajs/inertia-vue'
import Layout from '../Template/Layout.vue'
import { Head } from '@inertiajs/inertia-vue'

export default {
    components: {
        Link,
        Layout,
        Head
    }, 

    props: ['judul']
}
</script>
