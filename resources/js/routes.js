//vue router
import Vue from 'vue';

import Router from 'vue-router';


 import examplecomponent from './components/ExampleComponent.vue'; 

let routes = [

     {
        path: '/examplecomponent',
        name: 'examplecomponent',
        component: examplecomponent,
      },
 
      
];


Vue.use(Router)

const router = new Router({
    mode: 'history',
    // base: 'orange',
    routes,
    // linkActiveClass: "active",
  })


export default router;
