import auth from './auth/routes'
import home from './home/routes'
import users from './users/routes'

export default [...auth, ...home, ...users]
