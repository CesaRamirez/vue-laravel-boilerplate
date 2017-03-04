import { Users } from '../components'

export default [
    {
        path: '/users',
        component: Users,
        name: 'users',
        meta: {
            needsAuth: true
        }
    }
]
