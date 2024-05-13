<template>
    <div>
        <Header />
        <div class="container my-5 text-dark">
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
                    <h4><i class="fa-solid fa-arrow-left me-3 text-white pt-3" @click="$router.go(-1);"></i>Spot</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover text-center shadow table-borderless">
                        <thead class="table-head rounded-top">
                            <tr>
                                <th scope="col" class="text-light">Coin</th>
                                <th scope="col" class="text-light">Amount</th>
                                <th scope="col" class="text-light">Action</th>
                            </tr>
                        </thead>
                        <tbody v-if="loading">
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="spinner-border text-light" role="status">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-if="!loading && coins.length == 0">
                            <tr>
                                <td colspan="4" class="text-center">
                                    <div>No Data Found</div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-if="coins.length > 0">
                            <tr>
                                <td class="text-white"><span class="me-2"><img :src="apiUrl + 'coins/BNB.png'" alt=""
                                            width="30"></span>BNB</td>
                                <td class="text-white">0</td>
                            </tr>
                            <tr v-for="(coin, i) in coins">
                                <td class="text-white"><span class="me-2"><img :src="apiUrl + 'coins/' + coin.name + '.png'" alt=""
                                            width="30"></span>{{ coin.name }}</td>
                                <td class="text-white">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- nav tabs end -->
        </div>
        <Footer />
    </div>
</template>
<script>
import QrcodeVue from 'qrcode.vue'
export default {
    components:{
        QrcodeVue
    },
    data() {
        return {
            apiUrl: process.env.mix_api_url,
            coins: [],
            send: {
                token: localStorage.token,
                coin: "",
                amount: "",
                address:""
            },
            disable: false,
            address: "",
            loading: false,
            isValid: false,
            error: false,
            recieve:{
                coin:""
            },
            errors:{},
            gasFees:"",
            bnb:0,
            wallet_address:"",
            size:300

        };
    },
    created() {
        this.getCoins();
    },
    methods: {
        moment(date) {
            return moment(date);
        },
      
        // transferToken(){
        //     this.disable = true;
        //     axios.post(this.apiUrl+'api/transferToken',this.send).then(res=>{
        //         this.disable = false;
        //         if(res.data.error){   this.$toaster.error(res.data.error);}
        //         else{
        //             this.disable =false;
        //             this.getCoins();
        //             this.$toaster.success("Token Transfered!");
        //             $(".btn-close").click();
        //         }
        //         console.log(res);
        //     }).catch(err=>{
        //         console.log(err);
        //         this.disable =false;
        //     });
        // },

        // sendToken(){
        //     this.disable = true;
        //     axios.post(this.apiUrl+'api/sendToken',this.send).then(res=>{
        //         this.disable = false;
        //         if(res.data.error){   this.$toaster.error(res.data.error);}
        //         else{
        //             this.disable =false;
        //             this.getCoins();
        //             this.$toaster.success("Token Sent!");
        //             $(".btn-close").click();
        //         }
        //         console.log(res);
        //     }).catch(err=>{
        //         console.log(err);
        //         this.disable =false;
        //     });
        // },
        getCoins() {
            this.coins=[];
            this.loading = true;
            axios.post(this.apiUrl + "api/getAssets", {
                token: localStorage.token,
                coin: this.recieve.coin,
            }).then(res => {
                console.log(res);
                this.coins = res.data.coins;
                this.bnb= res.data?.coins[0]?.balance?.bnb;
                this.wallet_address = res.data?.wallet_address;
                this.loading = false;
            }).catch(err => {
                console.log(err);
                this.loading = false;
            });
        },
        // setSend(coin) {
        //     this.send.coin = coin;
        // },
        
        // setRecieve(coin) {
        //     this.recieve.coin = coin;
        // },
        // check_token() {
        //     axios.post(this.apiUrl + "api/check_token", {
        //         address: this.address
        //     }).then(res => {
        //         console.log(res);
        //         if (res.data.error) { this.error = res.data.error } else { this.error = false; }
        //     }).catch(err => {
        //         console.log(err);
        //         if (err.response.status === 422) {
        //          this.errors = err.response.data.errors;
        //          }
        //     });
        // },
        // recieveCoin() {
        //     // this.disable = true;
        //     $(".btn-close").click();
        //     this.$router.push({ name: 'recieve', query: { amount: this.recieve.amount, coin: this.recieve.coin } });
        //     // axios.post(this.apiUrl + "api/recieveCoin", this.recieve).then(res => {
        //     //     console.log(res);
        //     //     this.$router.push({name:'recieve',params:{data:JSON.stringify(res.data.data)}});
        //     // }).catch(err => {
        //     //     console.log(err);
        //     //     this.disable = false;
        //     // });
        // }

    }


};
</script>