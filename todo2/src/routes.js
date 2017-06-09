

import Header from './components/Header.vue'
import Menu from './components/Menu.vue'
import Contents from './components/Contents.vue'
import Login from './components/Login.vue'
import Signup from './components/Signup.vue'

const Inbox = resolve => require(['./components/contents/Inbox.vue'], resolve);
const NextWeek = resolve => require(['./components/contents/NextWeek.vue'], resolve);
const Today = resolve => require(['./components/contents/Today.vue'], resolve);


export const routes = [
    {path:'/',
        components:{
            default:Contents,
            Header:Header,
            Menu:Menu
            }
        },

    {path:'/login', component: Login},

    {path:'/signup', component: Signup},

    {path:'/menu',
        components:{
            default:Contents,
            Header:Header,
            Menu:Menu
        },

        children:[
            {path:'', component:Inbox},
            {path:'inbox', component:Inbox},
            {path:'NextWeek', component:NextWeek},
            {path:'Today', component:Today}
        ]

    }

];
