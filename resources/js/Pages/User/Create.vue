<template>
    <div>
        <form @submit.prevent="register">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" v-model="form.name">
                <p v-if="errors.name" class="errors">{{errors.name}}</p>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" v-model="form.email">
                <p v-if="errors.email" class="errors">{{errors.email}}</p>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" v-model="form.password">
                <p v-if="errors.password" class="errors">{{errors.password}}</p>
            </div>

            <button type="submit">Create</button>
        </form>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'

export default {
    components: {
        Link
    },

    props: {
        errors: Object
    },

    data() {
        return {
            form : {
                name : '',
                email : '',
                password: ''
            }
        }
    },

    methods : {
        register() {
            // console.log(this.form);
            // ini untuk lempar data ke controller
            this.$inertia.post('/user', this.form)
        }
    }

}
</script>

<style scoped>
.errors {
    color: red;
}
</style>

