import {createRouter, createWebHistory} from "vue-router";
import Login from "../components/Login.vue";
import Register from "../components/Register.vue";
import ForgotPassword from "../components/ForgotPassword.vue";
import Home from "../components/Home.vue";

const routes = [
    {
        path: '/signin',
        name: 'SignIn',
        component: Login
    },
    {
        path: '/signup',
        name: 'SignUp',
        component: Register
    },
    {
        path: '/forgot',
        name: 'ForgotPassword',
        component: ForgotPassword
    },
    {
        path: '/',
        name: 'Home',
        component: Home
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;