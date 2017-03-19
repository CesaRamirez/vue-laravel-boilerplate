import router from './router'
import store from './vuex'
import './bootstrap';

import './components'

store.dispatch('auth/setToken').then(() => {
    store.dispatch('auth/fetchUser').catch(() => {
        store.dispatch('auth/clearAuth')
        router.replace({ name: 'login' })
    })
}).catch(() => {
    store.dispatch('auth/clearAuth')
})

const app = new Vue({
    el: '#app',
    router: router,
    store: store
});
