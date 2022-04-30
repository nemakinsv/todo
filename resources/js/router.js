import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import Index from "./views/Index";
// import Blog from "./views/Blog";
// import Post from "./views/Post";
// import CreatePost from "./views/CreatePost";

const routes = [
    {
        path: "/",
        component: Index
    }
    //,
    // {
    //     path: "/feedback",
    //     component: feedbac
    // },
    // {
    //     path: "/feedback/:id",
    //     component: Feedback
    // },
    // {
    //     path: "/create",
    //     component: CreateFeedback
    // }
];

export default new vueRouter({
    mode: "history",
    routes
});
