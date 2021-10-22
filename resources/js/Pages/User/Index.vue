<template>
    <Layout>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>

        <!-- <div v-if="$page.props.flash.delete_message" class="alert">
            {{ $page.props.flash.delete_message }}
        </div>

         <div v-if="$page.props.flash.edit_message" class="alert">
            {{ $page.props.flash.edit_message }}
        </div> -->

        <Head title="Daftar User"></Head>
        <!-- <h1 v-text="data"></h1> -->
        <ul v-for="user in users" :key="user.id">
            <li>{{user.name}}</li>
            <Link :href="`/user/${user.id}`" as="button">Detail</Link>
            <Link :href="`/user/${user.id}`" method="delete" as="button">Delete</Link>
            <Link :href="`/user/${user.id}/edit`" as="button">Edit</Link>
        </ul>
    </Layout>
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
        users: Array
    }
}
</script>

<style scoped>
 .alert {
     color: red;
 }
</style>
