<template>
    <div>
        <!-- login start -->
        <nav class="pt-2 px-5 bg-black border-bottom border-light">
            <router-link :to="{ name: 'index' }" class="text-white">
                <img :src="apiUrl + 'logo.png'" alt="" width="100"><span class="gradient-text-primary-secondary ms-2">
                </span>
            </router-link>
        </nav>
        <div class="my-5 col-md-4 card mx-auto px-3">
            <div class="row card-body">
                <div class="">
                        <div v-if="forget">
                            <form class="mt-3" @submit.prevent="forgetPassword">
                            <h3 class="text-white mb-3 text-center">Forget Password</h3>
                            <div class="mb-4">
                                <label  class="form-label text-white">Email</label>
                                <input type="email" class="form-control"  v-model="email" required>
                            </div>
                            <button type="submit" class="btn w-100 btn-default active" :disabled="disable">Next
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" v-if="disable"></span>
                            </button>
                            </form>
                        </div>
                        <div v-if="verify">
                            <form class="mt-3" @submit.prevent="verfiyOtp">
                            <h3 class="text-white mb-3 text-center">Security Verification</h3>
                            <div class="mb-4">
                            <label for="exampleInputcode" class="form-label text-white">Email Verification Code</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control"  v-model="otp" required>
                            <button class="btn button" type="button" id="button-addon2" data-mdb-ripple-init
                                data-mdb-ripple-color="dark" :disabled="resend_disable" @click="forgetPassword">
                                resend code
                            </button>
                            </div>
                            </div>
                                        
                            <button type="submit" class="btn w-100 btn-default active" :disabled="disable">Submit
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" v-if="disable"></span>
                            </button>
                            </form>
                        </div>
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            message: false,
            url: process.env.mix_app_url,
            apiUrl: process.env.mix_api_url,
            text: "",
            message: "",
            toast: "",
            disable:false,
            otp:"",
            forget:true,
            verify:false,
            resend_disable:false
        }
    },
    created() {
    },
 
    methods: {
        forgetPassword(){
            this.disable = true;
            this.resend_disable = true;
            axios.post(this.apiUrl + 'api/forgetPassword', {
                email: this.email,
            }).then(res => {
                   this.forget = false;
                   this.verify = true;
                this.disable = false;
                this.resend_disable = false;
            }).catch(err => {
                console.log(err);
                this.disable = false;
                this.resend_disable = false;
                this.$toaster.error(err.response.data.message, {timeout: 8000});
                // var message = err.response.data.message;
                // this.message = message;
                // this.text = "Error";
                // this.toast = "show bg-danger text-white";
            });
        },
        verfiyOtp() {
            this.disable = true;
            axios.post(this.apiUrl + 'api/verfiyOtp', {
                email: this.email,
                otp: this.otp,
            }).then(res => {
                this.$toaster.success(res.data.message, {timeout: 8000});
                this.otp = "";
                this.disable = false;
            }).catch(err => {
                console.log(err);
                this.disable = false;
                this.$toaster.error(err.response.data.message, {timeout: 8000});
                // var message = err.response.data.message;
                // this.message = message;
                // this.text = "Error";
                // this.toast = "show bg-danger text-white";
            });
        }
    }
}
</script>