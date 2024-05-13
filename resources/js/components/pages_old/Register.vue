<template>
<div class="col-md-5 mx-auto  my-5" style="min-height: 675px;">
  <div class="container bg-white py-5">
    <div class="alert alert-info" v-if="message">{{ message }}</div>
  <form @submit.prevent="registerUser" class="container">
    <div class="text-center text-secondary">
      <!-- <img :src="apiUrl+'logo.png'" alt="" width="200" > -->
      <h5 class="pt-5 pb-3">Register</h5>
    </div>
    <div class="form-group">
      <input type="text" v-model="spid" class="form-control" required @change="getSponser" placeholder="Sponser Id">
      <div class="text-danger" v-if="error">{{ error }}</div>
      <div class="text-success" v-if="success">{{ success }}</div>
      </div>
    <div class="form-group py-2">
      <input type="text" v-model="name" class="form-control" required placeholder="Name">
      </div>
      <div class="form-group py-2">
      <input type="email" v-model="email" class="form-control" required placeholder="Email">
      </div>
      <div class="form-group py-2">
      <input type="password" v-model="password" class="form-control" required placeholder="Password">
      </div>
      <div class="form-group py-2">
      <input type="password" v-model="cpwd" class="form-control" required placeholder="Confirm Password">
      </div>
      <div class="form-group  mx-auto py-2">
      
      <button type="submit" class="btn btn-warning btn-block rounded-pill" :disabled="disabled">Register </button>
      </div>
      <div class="pt-2 text-center">
          <strong class="text-secondary">Already have an account?  </strong><span><router-link :to="{name:'Login'}" class="btn btn-link pl-2 text-warning">Login</router-link></span>
      </div>
    </form>
    </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        name: '',
        email: '',
        password: '',
        confirm_password: '',
        spid:'',
        message:false,
        url:process.env.mix_app_url,
        apiUrl:process.env.mix_api_url,
        spin:true,
        disabled:false,
        success:false,
        error:false
      }
    },
    created(){
      if(this.$route.query.uid){
        this.spid = this.$route.query.uid;
      }
    },
    methods: {
       async registerUser() {
        this.disabled = true;
        this.spin = false;
        try {
          const response = await fetch(this.apiUrl+'api/user_register', {
            method:"POST",
            headers: {
                 'Content-Type': 'application/json'
            },
            body:JSON.stringify({
            name: this.name,
            email: this.email,
            password: this.password,
            confirm_password: this.confirm_password,
            spid:this.spid
            })
          });

          var data = await response.json();
          console.log(data);
          this.message = data.message;
          this.$bvToast.toast(this.message, {
            variant: 'info',
            solid: true
          });
          this.name = "";
          this.email = "";
          this.password = "";
          this.spin = true;
          this.disabled = false;

          // Handle successful registration (e.g., redirect to login page)
        } catch (error) {
          this.$bvToast.toast(error.message, {
            variant: 'danger',
            solid: true
          });
          console.log(error.message);
          this.spin = true;
          this.disabled = false;
          // Handle registration error (e.g., display error message)
        }
      },
      async getSponser(){
        try {
          const response = await fetch(this.apiUrl+'api/getSponser', {
            method:"POST",
            headers: {
                 'Content-Type': 'application/json'
            },
            body:JSON.stringify({
              spid:this.spid
            })
          });

          var data = await response.json();
          console.log(data);
          if( data.error){
            this.error = data.error;
            this.success = false
          }
          if(data.sp_name){
            this.error ="";
            this.success = data.sp_name;
          }
         
          // Handle successful registration (e.g., redirect to login page)
        } catch (error) {
          console.log(error);
          // this.error = error.message;
          // this.success = false;
          // console.log(error.message);
          // Handle registration error (e.g., display error message)
        }
      }
    }
  }
  </script>
  