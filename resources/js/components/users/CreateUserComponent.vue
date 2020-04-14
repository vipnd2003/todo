<template>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Register Form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" v-model="name" v-bind:class="['form-control', errors.name ? 'is-invalid' : '']" id="name" placeholder="Name">
                    <div v-if="errors.name" v-for="(value, key, index) in errors.name" class="invalid-feedback">{{ value }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" v-model="email" v-bind:class="['form-control', errors.email ? 'is-invalid' : '']" id="email" placeholder="you@example.com">
                    <div v-if="errors.email" v-for="(value, key, index) in errors.email" class="invalid-feedback">{{ value }}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="birthday">Birthday</label>
                    <input type="text" name="birthday" v-model="birthday" v-bind:class="['form-control', errors.birthday ? 'is-invalid' : '']" id="birthday" placeholder="yyyy-mm-dd">
                    <div v-if="errors.birthday" v-for="(value, key, index) in errors.birthday" class="invalid-feedback">{{ value }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" v-model="description" class="form-control" id="description" placeholder="Description">
                </div>
            </div>
        </div>

        <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: this.old.name ? this.old.name : '',
            email: this.old.email ? this.old.email : '',
            birthday: this.old.birthday ? this.old.birthday : '',
            description: this.old.description ? this.old.description : '',
        }
    },
    props: ['errors', 'old']
}
</script>
