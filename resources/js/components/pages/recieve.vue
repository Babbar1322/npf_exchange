<template>
    <div>
        <Header />
        <div class="container mt-5 text-dark">
            <h4 class="text-white"><i class="fa-solid fa-arrow-left me-3 text-white pt-3" @click="$router.go(-1);"></i>Recieve</h4>
            <div  v-if="imgUrl!=''">
            <div class="d-flex justify-content-center ">
            <div class="card p-5">
                <h6 class="text-center pb-4">Scan via the Binance App to send</h6>
                <div class="" >
                    <div class="">
                        <img :src="imgUrl" alt=""  width="230">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 d-flex mx-auto">
            <div>
                dsfdf
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
            apiUrl:process.env.mix_api_url,
            recieve:{
                amount:"",
                coin:"",
                token:localStorage.token,
            },
            imgUrl:""
        }      
    },
    created(){
       this.recieve.amount = this.$route.query.amount;
       this.recieve.coin = this.$route.query.coin;
       this.recieveCoin();
    },
    methods:{
        recieveCoin(){
            this.disable = true;
            axios.post(this.apiUrl + "api/recieveCoin", this.recieve).then(res => {
               this.imgUrl = res.data.data.qrcodeLink;
            }).catch(err => {
                console.log(err);
                this.disable = false;
            });
        }
    }
   
}
</script>