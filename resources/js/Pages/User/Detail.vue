<template>
    <div>
        <Head title="Detail User"></Head>
        <h3>Profile</h3>
        <ul>
            <li>Nama : {{data.name}}</li>
            <li>Email : {{data.email}}</li>
        </ul>

        <Link href="/user">Kembali</Link>
    </div>
</template>

<style>

</style>

<script>
import Layout from '../../Template/Layout.vue'
import { Head } from '@inertiajs/inertia-vue'
import { Link } from '@inertiajs/inertia-vue'

export default {
    components: {
        Layout,
        Head,
        Link
    },
    props: {
        data: Object
    }
}
</script>
