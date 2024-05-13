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
                    <h4><i class="fa-solid fa-arrow-left me-3 text-white pt-3" @click="$router.go(-1);"></i>Funding</h4>
                    
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
                                <td class="text-white">{{ bnb }}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a href="javascipt:;" type="button" class="nav-link text-white me-2" data-bs-toggle="modal"
                                        :data-bs-target="'#sendModal'"
                                        @click="setSend('BNB')">Send</a> -->
                                    <a href="javascipt:;" type="button" class="nav-link text-white me-2" data-bs-toggle="modal"
                                        :data-bs-target="'#transferModal'"
                                        @click="setSend('BNB')">Transfer</a>
                                    <a href="javascipt:;" type="button" class="nav-link text-white" data-bs-toggle="modal"
                                        :data-bs-target="'#recieveModal'"
                                        @click="setRecieve('BNB')">Recieve</a>

                                        <router-link class="nav-link text-white" :to="{name:'funding_history',params:{name:'BNB'}}">History</router-link>

                                        <!-- transferModal -->
                                    <div class="modal fade" :id="'transferModal'" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog " style="margin-top:150px">
                                            <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white" :id="'transferModal'">Transfer (Spot to Funding)</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" @click="send.address='';send.amount='';"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form @submit.prevent="TransferToken">
                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label">Funding</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    :value="bnb"
                                                                   readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label">SPOT</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="input-group">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    v-model="send.amount"
                                                                   placeholder="0" required>
                                                                   <span class="input-group-text text-dark" >BNB</span>
                                                                </div>
                                                                <div class="text-danger text-start mt-3" v-if="errors?.amount">{{ errors?.amount }}
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <button class="btn cancel-btn text-dark" type="button"
                                                            data-bs-dismiss="modal" @click="send.address='';send.amount='';">Cancel</button>
                                                            <button class="btn confirm-btn" 
                                                                :disabled="disable" type="submit"><span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true" v-if="disable"></span>  Swap</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" :id="'sendModal'" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog " style="margin-top:150px">
                                            <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white" :id="'sendModal'">Send to</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" @click="send.address='';send.amount='';"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form @submit.prevent="sendToken">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" v-model="send.address"
                                                                placeholder="Enter Public Address (0x)" required >
                                                        </div>
                                                        <div class="text-danger text-start mt-3" v-if="errors?.address">{{ errors?.address }}
                                                        </div>

                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label">ASSET</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    :value=" 'BNB (Balance('+bnb+ ' BNB))'"
                                                                   readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label">Amount</label>
                                                            </div>
                                                            <div class="col-9">
                                                                
                                                                <div class="input-group">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    v-model="send.amount"
                                                                   placeholder="0" required>
                                                                   <span class="input-group-text text-dark" >BNB</span>
                                                                </div>
                                                                <div class="text-danger text-start mt-3" v-if="errors?.amount">{{ errors?.amount }}
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <!-- <div class="my-3" v-if="gasFees!=''">
                                                            <div class="row">
                                                                <div class="col"> <h5>Estimated Gas Fee</h5> </div>
                                                                <div class="col"> {{ gasFees }}</div>
                                                            </div>
                                                        </div> -->
                                                        <div class="mt-5">
                                                            <button class="btn cancel-btn text-dark" type="button"
                                                            data-bs-dismiss="modal" @click="send.address='';send.amount='';">Cancel</button>
                                                            <button class="btn confirm-btn" 
                                                                :disabled="disable" type="submit"><span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true" v-if="disable"></span>  Confirm</button>
                                                        </div>
                                                        

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade " :id="'recieveModal'" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog " style="margin-top:150px">
                                            <div class="modal-content bg-white">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" :id="'recieveModal'">Recieve Coin
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" ></button>
                                                </div>
                                                <div class="modal-body" >
                                                    <div class="d-flex justify-content-center">
                                                    <qr-code :text="'ethereum:'+wallet_address" ></qr-code>
                                                    </div>
                                                    <h6 class="mt-4">Wallet Address</h6>
                                                    <div><span class="pe-3">{{ wallet_address }}</span> <span class="fas fa-copy"  v-clipboard="value"></span></div>
                                                    <!-- <form @submit.prevent="recieveCoin">
                                                   <div class="form-group">
                                                    <label class="float-start py-2">Coin</label>
                                                        <input type="text" class="form-control" :value="recieve.coin" readonly>
                                                   </div>
                                                   <div class="form-group">
                                                    <label class="float-start py-2">Amount</label>
                                                        <input type="text" class="form-control" v-model="recieve.amount" placeholder="Enter Recieve Amount">
                                                   </div>
                                                   <div class="mt-3">
                                                        <button class="btn btn-light" type="submit" :disabled="disable">Submit</button>
                                                   </div>
                                                   </form> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr v-for="(coin, i) in coins">
                                <td class="text-white"><span class="me-2"><img :src="apiUrl + 'coins/' + coin.name + '.png'" alt=""
                                            width="30"></span>{{ coin.name }}</td>
                                <td class="text-white">{{ coin.balance?.token?.balance }}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a href="javascript:;" type="button" class="nav-link text-white me-2" data-bs-toggle="modal"
                                        :data-bs-target="'#sendModal_' + coin.id"
                                        @click="setSend(coin.name)">Send</a> -->
                                          <a href="javascript:;" type="button" class="nav-link text-white me-2" data-bs-toggle="modal"
                                        :data-bs-target="'#transferModal_' + coin.id"
                                        @click="setSend(coin.name)">Transfer</a>


                                    <a href="javascipt:;" type="button" class="nav-link text-white" data-bs-toggle="modal"
                                        :data-bs-target="'#recieveModal_' + coin.id"
                                        @click="setRecieve(coin.name)">Recieve</a>
                                        <router-link class="nav-link text-white" :to="{name:'funding_history',params:{name:coin.name}}">History</router-link>

                                        
                                    <!-- transfer modal -->
                                    <div class="modal fade  text-white" :id="'transferModal_' + coin.id" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog centered" style="margin-top:150px">
                                            <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white" :id="'transferModal_' + coin.id">Transfer (Funding to Spot)</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" @click="send.address='';send.amount='';"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form @submit.prevent="transferToken">
                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label text-white">Funding</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    :value="coin.balance?.token?.balance"
                                                                   readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label text-white">Spot</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="input-group">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    v-model="send.amount"
                                                                   placeholder="0" required>
                                                                   <span class="input-group-text text-dark" >{{ coin.name }}</span>
                                                                </div>
                                                                <div class="text-danger text-start mt-3" v-if="errors?.amount">{{ errors?.amount }}
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <!-- <div class="my-3" v-if="gasFees!=''">
                                                            <div class="row">
                                                                <div class="col"> <h5>Estimated Gas Fee</h5> </div>
                                                                <div class="col"> {{ gasFees }}</div>
                                                            </div>
                                                        </div> -->
                                                        <div class="mt-5">
                                                            <button class="btn cancel-btn" type="button"
                                                            data-bs-dismiss="modal" @click="send.address='';send.amount='';" :disabled="disable">Cancel</button>
                                                            <button class="btn confirm-btn" 
                                                                :disabled="disable" type="submit">  <span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true" v-if="disable"></span> Swap</button>
                                                        </div>
                                                        

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- send modal -->
                                    <div class="modal fade  text-white" :id="'sendModal_' + coin.id" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog centered" style="margin-top:150px">
                                            <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white" :id="'sendModal_' + coin.id">Send to</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" @click="send.address='';send.amount='';"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form @submit.prevent="sendToken">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" v-model="send.address"
                                                                placeholder="Enter Public Address (0x)" required >
                                                        </div>
                                                        <div class="text-danger text-start mt-3" v-if="errors?.address">{{ errors?.address }}
                                                        </div>

                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label text-white">ASSET</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    :value="coin.name + '  (Balance('+coin?.balance?.token?.balance+ ' '+ coin?.name+'))'"
                                                                   readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 mt-3 align-items-center">
                                                            <div class="col-3">
                                                                <label for=""
                                                                    class="col-form-label text-white">Amount</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="input-group">
                                                                <input type="text"
                                                                    class="form-control"
                                                                    v-model="send.amount"
                                                                   placeholder="0" required>
                                                                   <span class="input-group-text text-dark" >{{ coin.name }}</span>
                                                                </div>
                                                                <div class="text-danger text-start mt-3" v-if="errors?.amount">{{ errors?.amount }}
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <!-- <div class="my-3" v-if="gasFees!=''">
                                                            <div class="row">
                                                                <div class="col"> <h5>Estimated Gas Fee</h5> </div>
                                                                <div class="col"> {{ gasFees }}</div>
                                                            </div>
                                                        </div> -->
                                                        <div class="mt-5">
                                                            <button class="btn cancel-btn" type="button"
                                                            data-bs-dismiss="modal" @click="send.address='';send.amount='';" :disabled="disable">Cancel</button>
                                                            <button class="btn confirm-btn" 
                                                                :disabled="disable" type="submit">  <span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true" v-if="disable"></span> Confirm</button>
                                                        </div>
                                                        

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" :id="'recieveModal_' + coin.id" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog " style="margin-top:150px">
                                            <div class="modal-content bg-white">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" :id="'recieveModal_' + coin.id">Recieve Coin
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" ></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="d-flex justify-content-center">
                                                    <qr-code :text="'ethereum:'+wallet_address" ></qr-code>
                                                    </div>
                                                    <h6 class="mt-4">Wallet Address</h6>
                                                    <div>{{ wallet_address }} </div>
                                                    <!-- <form @submit.prevent="recieveCoin">
                                                   <div class="form-group">
                                                    <label class="float-start py-2">Coin</label>
                                                        <input type="text" class="form-control" :value="recieve.coin" readonly>
                                                   </div>
                                                   <div class="form-group">
                                                    <label class="float-start py-2">Amount</label>
                                                        <input type="text" class="form-control" v-model="recieve.amount" placeholder="Enter Recieve Amount">
                                                   </div>
                                                   <div class="mt-3">
                                                        <button class="btn btn-light" type="submit" :disabled="disable">Submit</button>
                                                   </div>
                                                   </form> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
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
        value() {
            this.$toaster.success("Link Copied");
            return this.wallet_address;
        },
        moment(date) {
            return moment(date);
        },
        getGasFees(){
            // axios.post(this.apiUrl+'api/getGasFee',this.send).then(res=>{
            //     console.log(res);
            //     this.gasFees = res.data.data;
            // }).catch(err=>{
            //     console.log(err);
            // });
        },
        transferToken(){
            this.disable = true;
            axios.post(this.apiUrl+'api/transferToken',this.send).then(res=>{
                this.disable = false;
                if(res.data.error){   this.$toaster.error(res.data.error);}
                else{
                    this.disable =false;
                    this.getCoins();
                    this.$toaster.success("Token Transfered!");
                    $(".btn-close").click();
                }
                console.log(res);
            }).catch(err=>{
                console.log(err);
                this.disable =false;
            });
        },

        sendToken(){
            this.disable = true;
            axios.post(this.apiUrl+'api/sendToken',this.send).then(res=>{
                this.disable = false;
                if(res.data.error){   this.$toaster.error(res.data.error);}
                else{
                    this.disable =false;
                    this.getCoins();
                    this.$toaster.success("Token Sent!");
                    $(".btn-close").click();
                }
                console.log(res);
            }).catch(err=>{
                console.log(err);
                this.disable =false;
            });
        },
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
        setSend(coin) {
            this.send.coin = coin;
        },
        
        setRecieve(coin) {
            this.recieve.coin = coin;
        },
        check_token() {
            axios.post(this.apiUrl + "api/check_token", {
                address: this.address
            }).then(res => {
                console.log(res);
                if (res.data.error) { this.error = res.data.error } else { this.error = false; }
            }).catch(err => {
                console.log(err);
                if (err.response.status === 422) {
                 this.errors = err.response.data.errors;
                 }
            });
        },
        recieveCoin() {
            // this.disable = true;
            $(".btn-close").click();
            this.$router.push({ name: 'recieve', query: { amount: this.recieve.amount, coin: this.recieve.coin } });
            // axios.post(this.apiUrl + "api/recieveCoin", this.recieve).then(res => {
            //     console.log(res);
            //     this.$router.push({name:'recieve',params:{data:JSON.stringify(res.data.data)}});
            // }).catch(err => {
            //     console.log(err);
            //     this.disable = false;
            // });
        }

    }


};
</script>