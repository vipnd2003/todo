<template>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Confirmation Form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <input type="hidden" name="password" v-model="password" v-bind:class="['form-control', errors.password ? 'is-invalid' : '']" id="password" placeholder="Password" autocomplete="new-password">
        <div v-if="errors.password" v-for="(value, key, index) in errors.password" class="invalid-feedback">{{ value }}</div>
        <input type="hidden" name="password_confirmation" v-model="password_confirmation " v-bind:class="['form-control', errors.password_confirmation ? 'is-invalid' : '']"
               id="password-confirm" placeholder="Password Confirmation">
        <div v-if="errors.password_confirmation " v-for="(value, key, index) in errors.password_confirmation " class="invalid-feedback">{{ value }}</div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <div>{{ name }}</div>
                    <input type="hidden" name="name" v-model="name" v-bind:class="['form-control', errors.name ? 'is-invalid' : '']" id="name" placeholder="Name">
                    <div v-if="errors.name" v-for="(value, key, index) in errors.name" class="invalid-feedback">{{ value }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <div>{{ email }}</div>
                    <input type="hidden" name="email" v-model="email" v-bind:class="['form-control', errors.email ? 'is-invalid' : '']" id="email" placeholder="you@example.com" autocomplete="new-email">
                    <div v-if="errors.email" v-for="(value, key, index) in errors.email" class="invalid-feedback">{{ value }}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="birthday">Birthday</label>
                    <div>{{ birthday }}</div>
                    <input type="hidden" name="birthday" v-model="birthday" v-bind:class="['form-control', errors.birthday ? 'is-invalid' : '']" id="birthday" placeholder="yyyy-mm-dd">
                    <div v-if="errors.birthday" v-for="(value, key, index) in errors.birthday" class="invalid-feedback">{{ value }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description">Description</label>
                    <div>{{ description }}</div>
                    <input type="hidden" name="description" v-model="description" class="form-control" id="description" placeholder="Description">
                </div>
            </div>
        </div>

        <hr class="mb-4">

        <a class="btn btn-secondary btn-lg btn-block" id="btn-back" href="#">Back</a>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: this.old.name ? this.old.name : '',
                email: this.old.email ? this.old.email : '',
                password: this.old.password ? this.old.password : '',
                password_confirmation : this.old.password_confirmation ? this.old.password_confirmation : '',
                birthday: this.old.birthday ? this.old.birthday : '',
                description: this.old.description ? this.old.description : '',
            }
        },
        props: ['errors', 'old']
    }
</script>
