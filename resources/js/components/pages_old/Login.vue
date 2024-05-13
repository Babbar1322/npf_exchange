<template>
  <div class="col-md-5 mx-auto my-5 " style="min-height: 675px;">
    <div class="container py-5 bg-white">
      <div class="alert alert-info" v-if="message">{{ message }}</div>
      <form @submit.prevent="login" class="container">
        <div class="text-center  text-secondary">
          <!-- <img :src="apiUrl+'logo.png'" alt="" width="200" > -->
        <h5 class="pt-5 pb-3">Log In</h5>
      </div>
      <div class="input-group mb-3 cstm-form">
         
        <input type="text" v-model="email" placeholder="Email ID / User ID" class="form-control cstm-input"   >
      </div>
      <div class="input-group mb-3 cstm-form">
        <input type="password" v-model="password" placeholder="Password"  class="form-control cstm-input" />
      </div>
     
      <div class="form-group ml-auto py-2">
        <router-link to="" class="text-secondary">Forget Password</router-link>
      </div>
      <div class="form-group mx-auto">
        <button type="submit" class="btn btn-warning btn-block ">Login </button>
      </div>
      <div class="form-group text-center py-2">
        <router-link :to="{name:'index'}" class="text-warning">Back to Home Page</router-link>
      </div>
      <div class="pt-2 text-center">
          <strong class="text-secondary">Don't have an account?  </strong><span><router-link :to="{name:'Register'}" class="btn btn-link pl-2 text-warning" >Register</router-link></span>
      </div>
    </form>
    </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        email: '',
        password: '',
        message:false,
        url:process.env.mix_app_url,
        apiUrl:process.env.mix_api_url,
        spin:true,
      }
    },
   async created(){
   },
   mounted(){
  
   },
    methods: {
        login() {
        this.spin = false;
        // console.log(JSON.stringify({
        //         email: this.email,
        //       password: this.password
        //     }));
            axios.post(this.apiUrl+'api/userlogin',{
                  email: this.email,
                 password: this.password,
            }).then(res=>{
                console.log(res.data.token);
                   localStorage.setItem('token',res.data.token);
                  if(localStorage.token){
                      // this.$router.push({name:"home"});
                      this.$router.push({name:"trade"});
                  }
                  this.spin = true;
            }).catch(err=>{
                console.log(err);
                this.spin = true;
                var message = err.response.data.message;
                if(message.email){
                    this.$bvToast.toast(message.email, {
                      variant: 'danger',
                      solid: true
                    });
                }
                if(message.password){
                    this.$bvToast.toast(message.password, {
                      variant: 'danger',
                      solid: true
                    });
                }
                  this.$bvToast.toast(message, {
                      variant: 'danger',
                      solid: true
                    });
                    this.spin = true;

            });
          
            // try{

            //   let res= await fetch(this.apiUrl+'api/userlogin',{
            //     method:'POST',
            //     headers: {
            //         'Content-Type': 'application/json'
            //       },
            //       body: JSON.stringify({
            //         email: this.email,
            //         password: this.password
            //       })
            //    });
            //    let token = await res.json();
            //    console.log(token.message);
            //    if(token.message){
            //     if(token.message.email){
            //         this.$bvToast.toast(token.message.email, {
            //           variant: 'danger',
            //           solid: true
            //         });
            //     }
            //     if(token.message.password){
            //         this.$bvToast.toast(token.message.password, {
            //           variant: 'danger',
            //           solid: true
            //         });
            //     }

            //     this.$bvToast.toast(token.message, {
            //           variant: 'danger',
            //           solid: true
            //         });
                
            //     this.spin =true;
            //     this.disabled = false;
            //     return false;
            //    }
               
            //    token = token.token;
            //    localStorage.setItem('token',token);
            //    if(localStorage.token){
            //       this.$router.push('/home');
            //    }


      //   let response= await fetch(this.url+'/api/auth/login',{
      //       method:'POST',
      //       headers: {
      //            'Content-Type': 'application/json'
      //       },
      //       body: JSON.stringify({
      //           email: this.email,
      //         password: this.password
      //       })
      //   });

      //   const data = await response.json();
      //   this.spin = true;
      //   if(data.status == 500){
      //     this.message = data.message;
      //     return false;
          
      //   }
      //   localStorage.setItem("token",data.token);
        
      //   // console.log(this.$store);
      // //  this.$store.commit('SET_TOKEN', true);
      //   this.$router.push('/home');
      // }
      // catch(err){
      //   console.log(err);
      //   this.spin = true;
        
      // }
        // this.$router.push('/');
        // try {
        //    await this.$auth.loginWith('local', {
        //     data: {
        //       email: this.email,
        //       password: this.password
        //     },
        //   }).then(() => this.$toast.success('Logged In!'));
        //   // this.$router.push('/');
        // } catch (error) {
        //   console.error(error)
        // }
      }
    }
  }
  </script>
  