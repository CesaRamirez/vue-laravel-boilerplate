<template lang="html">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" @submit.prevent="submit" novalidate>
                            <div class="form-group" :class="{ 'has-error' : errors.name }" @keyup="errors.name = null">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" autofocus v-model="name">

                                    <span class="help-block" v-if="errors.name">
                                        {{ errors.name[0] }}
                                    </span>
                                </div>
                            </div>

                            <div class="form-group" :class="{ 'has-error' : errors.email }" @keyup="errors.name = null">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" v-model="email">

                                    <span class="help-block" v-if="errors.email">
                                        {{ errors.email[0] }}
                                    </span>
                                </div>
                            </div>

                            <div class="form-group" :class="{ 'has-error' : errors.password }" @keyup="errors.name = null">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" v-model="password">

                                    <span class="help-block" v-if="errors.password">
                                        {{ errors.password[0] }}
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions } from 'vuex'

    export default {
        data() {
            return {
                name: null,
                email: null,
                password: null,
                errors: []
            }
        },
        methods: {
            ...mapActions({
                register: 'auth/register'
            }),
            submit() {
                this.register({
                    payload: {
                        name: this.name,
                        email: this.email,
                        password: this.password
                    },
                    context: this
                }).then( () => {
                    this.$router.replace({ name: 'home' })
                }).catch( () => {})
            }
        }
    }
</script>
