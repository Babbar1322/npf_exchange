<template>
    <div>
        <Header @authUser="details" />

        <div class="container-fluid mt-5">
                <!-- Body: Titel Header -->
                <div class="p-3">
                    <h3 >Refer Friends</h3>
                </div>

                <!-- Body: Body -->
                <div class="py-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="">
                                <!-- <div class="card refer-card">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom align-items-center flex-wrap">
                                        <h5 class="text-white">Refer Info</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-pane fade show active" id="All">
                                            <div class="row text-center">
                                                <div class="col-lg-6">
                                                    <p class="mb-0 fs-5">Account balance:</p>
                                                    <p class="mb-0 fs-6">30.18005388 BTC</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="mb-0 fs-5">ID</p>
                                                    <p class="fs-6 mb-0">{{ user.uid }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row mt-4 mb-3 mx-auto">
                                <div class="col-lg-6 mb-lg-0 mb-5">
                                    <div>
                                        <div class="card shadow">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent">
                                                <h5>Default Referral</h5>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label">Referral ID</label>
                                                        <input type="text" class="form-control" v-model="user.uid" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Referral Link</label>
                                                        <input type="text" class="form-control" :value="link" readonly>
                                                    </div>
                                                    <a href="javascript:;" class="btn text-white"  style="background-color: #7258db;" v-clipboard="value">Click to
                                                        Copy Link</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- toaster -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"  :class="toast">
            <div class="toast-header text-white" :class='text== "Success"?"bg-success":"bg-danger"'>
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
import pagination from "vue-pagination-2";

export default {
    name: "refer",
    components: {
        pagination,
    },
    data() {
        return {
            apiUrl:process.env.mix_api_url,
            user:{},
            link:"",
            message:"",
            text:"",
            toast:"hide",
        };
    },
    created() {
        this.details();
    },
    methods:{
        details(user){
            this.link = this.apiUrl + "Register?uid="+user.uid;
             this.user = user;
        },
        value() {
            this.toast="show bg-success text-white";
            this.text="Success";
            this.message = "Link Copied!";
            return this.link;
        },
    }

    
};
</script>