import store from '../vuex'
import localforage from 'localforage'

const beforeEach = ((to, from, next) => {
    store.dispatch('auth/checkTokenExists').then(() => {
        if (to.meta.guest) {
            next({ name: 'home' })
            return
            console.log('dont')
        }

        next()
    }).catch(() => {
        if (to.meta.needsAuth) {
            localforage.setItem('intended', to.name)
            next({ name: 'login' })
            return
        }
        
        next()
    })
})

export default beforeEach
