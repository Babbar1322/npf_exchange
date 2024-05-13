<template>
  <div>
    <!-- <nav class="pt-2 px-5 bg-black border-bottom border-light">
        <router-link :to="{name:'index'}">
          <img :src="apiUrl+'logo.png'" alt="" width="100"><span class="gradient-text-primary-secondary ms-2"> </span>
        </router-link>
    </nav> -->
    <Header />
    <div class="d-flex align-items-center justify-content-center min-vh-100">
      <!-- login start -->
      <div class=" my-5 col-md-5 card mx-auto ">
        <div class="card-body p-5">
          <h2 class="text-light text-center">Sign Up</h2>
          <form class="mt-5" @submit.prevent="registerUser">
            <div class="mb-4">
              <label for="name" class="form-label text-white">Name</label>
              <input type="text" class="form-control" id="name" v-model="name">
            </div>
            <div class="mb-4">
              <label for="refer_id" class="form-label text-white">Refer Id</label>
              <input type="text" class="form-control" id="refer_id" v-model="spid" @input="getSponser">
              <div class="text-danger" v-if="error">{{ error }}</div>
              <div class="text-success" v-if="success">{{ success }}</div>
            </div>
            <div class="mb-4">
              <label for="" class="form-label text-white">Email address</label>
              <input type="email" class="form-control" id="" v-model="email">
            </div>
            <div class="mb-4">
              <label for="" class="form-label text-white">Phone</label>
              <input type="number" class="form-control" id="" v-model="phone">
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-white">Password</label>
                <!-- <input type="password" class="form-control" v-model="password"> -->
                <div class="position-relative">
                <input :class="[{ 'pe-5': type === 'password' }, 'form-control p-2 rounded-5']" :type="inputType" v-model="password" />
                <button type="button"  class="position-absolute cstm-position bg-transparent btn "
                  v-if="type === 'password'" @click="togglePasswordVisibility">
                  <i :class="showPassword ? 'fa fa-eye' : 'fa fa-eye-slash'" class="text-white" ></i>
                </button>
                </div>
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-white">Confirm Password</label>
              <input type="password" class="form-control" id="" v-model="confirm_password">
            </div>
            <div class="mb-4">
              <router-link :to="{ name: 'Login' }" class="text-white">
                Already have an account? <span class="" style="color: white;">Login</span>
              </router-link>
            </div>
            <button type="submit" class="btn w-100 text-white"
              style="background-color: white; color: black !important;">Sign Up</button>
          </form>
        </div>
      </div>
      <!-- login end -->

      <!-- toaster -->
      <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" :class="toast">
          <div class="toast-header text-white" :class='text == "Success" ? "bg-success" : "bg-danger"'>
            <strong class="me-auto">{{ text }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ message }}
          </div>
        </div>
      </div>
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
      phone: '',
      confirm_password: '',
      spid: '',
      message: "",
      url: process.env.mix_app_url,
      apiUrl: process.env.mix_api_url,
      spin: true,
      disabled: false,
      success: false,
      error: false,
      type:"password",
      showPassword:false
    }
  },
  created() {
    if (this.$route.query.uid) {
      this.spid = this.$route.query.uid;
    }
  },
  computed: {
    inputType() {
      return this.showPassword ? 'text' : this.type;
    },
  },
  methods: {
    togglePasswordVisibility() {
      this.showPassword = !this.showPassword;
    },
    registerUser() {
      this.disabled = true;
      this.spin = false;
      axios.post(this.apiUrl + 'api/user_register', {
        name: this.name,
        email: this.email,
        password: this.password,
        confirm_password: this.confirm_password,
        spid: this.spid
      }).then(res => {
        console.log(res);
        this.message = res.data.message;
        this.$toaster.success(res.data.message);
        // this.text = "Success";
        // this.toast = "show bg-success text-white";
        this.name = "";
        this.email = "";
        this.password = "";
        this.spin = true;
        this.disabled = false;
      }).catch(err => {
        console.log(err);
        this.$toaster.error(err.response.data.message);
        this.message = err.response.data.message;
        // this.text = "Error";
        // this.toast = "show bg-danger text-white";
        this.name = "";
        this.email = "";
        this.password = "";
        this.spin = true;
        this.disabled = false;
      });
    },
    async getSponser() {
      try {
        const response = await fetch(this.apiUrl + 'api/getSponser', {
          method: "POST",
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            spid: this.spid
          })
        });

        var data = await response.json();
        console.log(data);
        if (data.error) {
          this.error = data.error;
          this.success = false
        }
        if (data.sp_name) {
          this.error = "";
          this.success = data.sp_name;
        }
      } catch (error) {
        console.log(error);

      }
    }
  }
}
</script>