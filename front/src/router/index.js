import Vue from 'vue'
import Router from 'vue-router'
import Content from '../components/home/Home'
import CategoryBlog from '../components/category/CategoryBlog'
import Service from '../components/service/Service'
import BlogDetails from '../components/blog/BlogDetails'

Vue.use(Router)

export default new Router({
  routes: [
  {
    path: '/',
    name: 'HelloWorld',
    component: Content
  },
  {
    path: '/category-blog/:id',
    name: 'category-blog',
    component: CategoryBlog
  },

  {
   path:'/service',
   name:'service',
   component: Service
 },

   {
   path:'/blog-details/:id',
   name:'blog-details',
   component: BlogDetails
 },

 ],
 mode:'history'
})
