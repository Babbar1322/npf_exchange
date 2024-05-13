
import forget_password from './components/pages/forget_password.vue'
import Vue from 'vue';
import Router from 'vue-router';

import home from './components/pages/dashboard.vue';
import index from './components/pages/index.vue';
import deposit from './components/pages/deposit.vue';
import feed from './components/pages/feed.vue';
import refer from './components/pages/refer.vue';
import deposit_history from './components/pages/deposit_history.vue';

import Login from './components/pages/login.vue';
import Register from './components/pages/register.vue';
import trade from './components/pages/trade.vue';
import market from './components/pages_old/markets.vue';

import funding from './components/pages/funding.vue';
import spot from './components/pages/spot.vue';

import funding_history from './components/pages/crypto_history.vue';
import recieve from './components/pages/recieve.vue';
import phone_verification from './components/pages/phone_verification.vue';
import p2p from './components/pages/p2p.vue';


var prefix = "";

Vue.use(Router);
const routes = [
    {
      path: prefix+'/phone_verification',
      component:phone_verification,
      name:"phone_verification",
      meta: {
        requiresAuth: true
      },
  },
  {
    path: prefix+'/p2p',
    component:p2p,
    name:"p2p",
    meta: {
      requiresAuth: true
    },
},
  { 
      path: prefix+'/spot',
      component:spot,
      name:"spot",
      meta: {
        requiresAuth: true
      },
    },
    {
      path: prefix+'/funding',
      component:funding,
      name:"funding",
      meta: {
        requiresAuth: true
      },
      props: true,
      beforeenter(to, from, next) {
          if (!to.params.data) {
              return next({
                  name: 'recieve',
                  params: {
                      locale: from.params.locale ? from.params.locale : 'en',
                  },
              });
          }

          return next();
      },
  },
    {
      path: prefix+'/funding_history/:name',
      component:funding_history,
      name:"funding_history",
      meta: {
        requiresAuth: true
      },
  },
    {
      path: prefix+'/recieve',
      component:recieve,
      name:"recieve",
      meta: {
        requiresAuth: true
      }
  },
    {
      path: prefix+'/deposit_history',
      component:deposit_history,
      name:"deposit_history",
      meta: {
        requiresAuth: true
      }
  },
    {
      path: prefix+'/deposit',
      component:deposit,
      name:"deposit",
      meta: {
        requiresAuth: true
      }
  },
    {
      path: prefix+'/refer',
      component:refer,
      name:"refer",
      meta: {
        requiresAuth: true
      }
  },
    {
      path: prefix+'/feed',
      component:feed,
      name:"feed",
      meta: {
        requiresAuth: false
      }
  },
    {
      path: prefix+'/market',
      component:market,
      name:"market",
      meta: {
        requiresAuth: false
      }
  },
    {
      path: prefix+'/trade',
      component:trade,
      name:"trade",
      meta: {
        requiresAuth: true
      }
  },
    
    {
      path: prefix+'/home',
      component:home,
      name:"home",
      meta: {
        requiresAuth: true
      }
  
    },
    {
      path: prefix+'/',
      component:index,
      name:"index"
  
    },
   
    {
      path: prefix+'/Login',
      component:Login,
      name:"Login",
    },
   
    {
      path: prefix+'/Register',
      component:Register,
      name:"Register",
      meta: {
        requiresAuth: false
      }
    },
    {
      path: prefix+'/forget_password',
      component:forget_password,
      name:"forget_password",
      meta: {
        requiresAuth: false
      }
  },
    

];

const router = new Router({
        mode:'history',
        routes
});

router.beforeEach((to, from, next) => {
	if (to.matched.some(record => record.meta.requiresAuth)) {
	  if (!localStorage.getItem('token')) {
		next({
		  name: 'Login'
		});
	  } else {
		next();
	  }
	} else {
	  next();
	}
  });

export default router;
