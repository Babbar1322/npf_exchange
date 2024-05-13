<template>
    <div>
        <Header />
        <!-- login start -->
        <!-- <nav class="pt-2 px-5 bg-black border-bottom border-light">
            <router-link :to="{ name: 'index' }" class="text-white">
                <img :src="apiUrl + 'logo.png'" alt="" width="100"><span class="gradient-text-primary-secondary ms-2">
                </span>
            </router-link>
        </nav> -->
        <div class="container my-5 text-dark col-md-6 login_container card ">
            <div class="row card-body">
                <div class="col-md-6">
                    <div v-if="loginForm">
                        <form class="mt-3" @submit.prevent="login('pre_login')">
                            <h2 class="text-white mb-3">Log In</h2>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" v-model="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label text-white">Password</label>
                                <div class="position-relative">
                                    <input :class="[{ 'pe-5': type === 'password' }, 'form-control p-2 rounded-5']"
                                        :type="inputType" v-model="password" required />
                                    <button type="button" class="position-absolute cstm-position bg-transparent btn "
                                        v-if="type === 'password'" @click="togglePasswordVisibility">
                                        <i :class="showPassword ? 'fa fa-eye' : 'fa fa-eye-slash'"
                                            class="text-white"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4 d-flex">
                                <router-link :to="{ name: 'forget_password' }" class="text-white">
                                    Forget Password
                                </router-link>
                                <router-link :to="{ name: 'Register' }" class="ms-auto text-white">
                                    Don't have an account? <span class="text-white">Sign up</span>
                                </router-link>
                            </div>
                            <button type="submit" class="btn w-100 confirm-btn" :disabled="disable">Next
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"
                                    v-if="disable"></span>
                            </button>
                        </form>
                    </div>
                    <div v-if="securityForm">
                        <form class="mt-3" @submit.prevent="login('post_login')">
                            <h2 class="text-white mb-3">Security Verification</h2>
                            <!-- <div class="mb-4">
                                <label  class="form-label text-white">Email Verification Code</label>
                                <input type="number" class="form-control"  v-model="otp" required>
                            </div> -->
                            <label for="exampleInputcode" class="form-label text-white">Email Verification Code</label>
                            <div class="mb-4">
                                <label for="exampleInputcode" class="form-label text-white">Email Verification
                                    Code</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" v-model="otp" required>
                                    <button class="btn button" type="button" id="button-addon2" data-mdb-ripple-init
                                        data-mdb-ripple-color="dark" :disabled="disable" @click="login('pre_login')">
                                        resend code
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn w-100 btn-default active" :disabled="disable">Submit
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"
                                    v-if="disable"></span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 my-auto d-none d-md-block">
                    <img :src="apiUrl + 'login.png'" alt="" class="w-100">
                </div>
            </div>
        </div>
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

        <Footer />
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            message: false,
            url: process.env.mix_app_url,
            apiUrl: process.env.mix_api_url,
            spin: true,
            text: "",
            message: "",
            toast: "",
            type: "password",
            showPassword: false,
            securityForm: false,
            loginForm: true,
            disable: false,
            otp: ""
        }
    },
    created() {
    },
    computed: {
        inputType() {
            return this.showPassword ? 'text' : this.type;
        },
    },
    methods: {
        nextForm() {
            this.loginForm = false;
            this.securityForm = true;
        },
        togglePasswordVisibility() {
            this.showPassword = !this.showPassword;
        },
        login(type) {
            this.disable = true;
            axios.post(this.apiUrl + 'api/userlogin', {
                email: this.email,
                password: this.password,
                type: type,
                otp: this.otp
            }).then(res => {
                if (type == "pre_login") {
                    console.log(res);
                    this.nextForm();
                    this.disable = false;
                    return false;
                }
                console.log(res.data.token);
                localStorage.setItem('token', res.data.token);
                if (localStorage.token) {
                    this.$router.push({ name: "home" });
                }
                this.disable = false;
            }).catch(err => {
                console.log(err);
                this.disable = false;
                var message = err.response.data.message;
                this.message = message;
                this.text = "Error";
                this.toast = "show bg-danger text-white";
            });
        },
    }
}
</script>