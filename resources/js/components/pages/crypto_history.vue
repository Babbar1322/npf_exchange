<template>
    <div>
        <Header />
        <div class="container mt-5 text-dark">
            <div class="d-flex align-items-center">

                <!-- <h2><a href="#" class="fa-solid fa-arrow-left me-3 text-white" @click="$router.go(-1);"></a>Funding</h2> -->
                <div class="ms-auto">
                    <!-- <a href="#" class="fs-6">
                              <i class="ri-external-link-fill"></i>
                              Export Transaction Records
                          </a> -->
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa-solid fa-arrow-left me-3 text-white pt-3" @click="$router.go(-1);"></i>Funding History <span v-if="$route.params.name">({{$route.params.name}})</span></h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover text-center shadow table-borderless">
                        <thead class="table-head rounded-top">
                            <tr>
                                <!-- <th scope="col" class="text-light">Coin</th>
                                <th scope="col" class="text-light">Coin Amount</th> -->
                                <th scope="col" class="text-light"> Amount</th>
                                <th scope="col" class="text-light">Type</th>
                                <th scope="col" class="text-light">Date</th>
                                <th scope="col" class="text-light">Action</th>
                            </tr>
                        </thead>
                        <tbody v-if="loading">
                            <tr>
                                <td colspan="4" class="text-center">
                                    <div class="spinner-border text-light" role="status">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-if="!loading && history.length == 0">
                            <tr>
                                <td colspan="4" class="text-center">
                                    <div>No Data Found</div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-if="history.length > 0">
                            <tr v-for="(his, i) in history">
                                <!-- <td>{{ his.symbol }}</td> -->
                                <td>
                                    <div>{{ his.send_amount }} {{ his.symbol }}</div>
                                    <div>${{ his.amount }} USD</div>
                                </td>
                                <td><div class="text-capitalize">{{ his.trans }}</div></td>
                                <td>{{ moment(his.created_at).format('DD-MM-YYYY, hh:mm:ss A') }}</td>
                                <td>
                                    <a class="btn btn-link text-white" :href="his.payment_link" target="_blank">View On Explorer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- nav tabs end -->
        </div>
    </div>
</template>
<script>
import moment  from "moment";

import QrcodeVue from 'qrcode.vue'
export default {
    components:{
        QrcodeVue
    },
    data() {
        return {
            apiUrl: process.env.mix_api_url,
            history: [],
            page:1,
            records:0,
            paginate:0
        };
    },
    created() {
        this.getHistory();
    },
    methods: {
        moment(date) {
            return moment(date);
        },
       
       
        getHistory() {
            this.history=[];
            this.loading = true;
            axios.post(this.apiUrl + "api/crypto_history", {
                token: localStorage.token,
                coin:this.$route.params.name
            }).then(res => {
                this.history = res.data.history.data;
                this.page = res.data.history.current_page;
                this.records = res.data.history.total;
                this.paginate = res.data.history;
                this.loading = false;
            }).catch(err => {
                console.log(err);
                this.loading = false;
            });
        },
       
       

    }


};
</script>