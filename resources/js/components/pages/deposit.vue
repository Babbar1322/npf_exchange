<template>
    <div>
        <Header />
        <div class="container-fluid mt-5 px-4 card">
                <div class="mx-5 deposit_form card-body">
                    <div class="d-flex">
                        <h3 class="text-light">Deposit</h3>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-7">
                            <!-- <form class="mt-4" @submit.prevent="deposit">
                                <div class="mb-4">
                                    <label for="readonly" class="form-label text-dark">Deposit USDT Address</label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="text" value="987654321" aria-label="readonly input example" readonly>
                                        <a href="#">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="ri-file-copy-line"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="address" class="form-label text-dark">USDT Address</label>
                                    <input type="text" class="form-control" id="address" v-model="address">
                                </div>
                                <div class="mb-4">
                                    <label for="amount" class="form-label text-dark">Amount</label>
                                    <input type="text" class="form-control" id="amount" v-model="amount">
                                </div>
                                <div class="mb-4">
                                    <label for="screenshot" class="form-label text-dark">Screenshot</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" @change="uploadFile">
                                    </div>
                                </div>
                                <button class="btn btn-warning px-4 py-2 text-dark mb-4" type="submit">Continue</button>
                            </form> -->
                            <form class="mt-4" @submit.prevent="deposit_live" :class="{'d-none':is_deposit}">
                                <div class="mb-4">
                                    <label for="amount" class="form-label ">Amount</label>
                                    <input type="text" class="form-control" id="amount" v-model="form.amount">
                                </div>
                                <button class="btn btn-cstm px-4 py-2  mb-4" type="submit" style="background-color: #7258db;">Continue</button>
                            </form>

                            <div :class="{'d-none':form_pending}" v-if="payments != false">
                                <div class="text-center">
                                    <img :src="payments.data.qrcodeLink" width="200" />
                                    <div class="my-3">
                                        <h5>PrepayId: {{ payments.data.prepayId }}</h5>
                                        <h5>Currency: {{ payments.data.currency }}</h5>
                                        <h5>Amount: {{ payments.data.totalFee }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img :src="apiUrl+'assets/images/tree_deposite.png'" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>


<script>
 import pagination from 'vue-pagination-2';
export default {
  name: 'deposit',
  components:{
        pagination
     },
  data(){
    return {
        apiUrl:process.env.mix_api_url,
        form:{
            amount:"",
            upi_id:""
        },
        image:"",
        error:false,
        success:false,
        balance:0,
        usdt:0,
        message:"",
        is_deposit:false,
        form_pending:true,
        payments:false

    }
  },
  created(){
    
  },
  methods:{
    async uploadFile(e) {
         this.image = e.target.files[0];
       
    },
    deposit_live(){
        axios.post(this.apiUrl+"api/deposit",{
            amount:this.form.amount,
            token:localStorage.token
        }).then(res=>{
            console.log("ress", res);
            window.location.href = res.data;
            this.payments = res.data;
            this.is_deposit = true;
            this.form_pending= false;
        }).catch(err=>{
            console.log(err);
            var message = err.response.data.message;
            this.success = false;
            this.error = message;
            this.form.amount = "";
        });
    },
    deposit(){
         var forms = new FormData();
        forms.append('image', this.image);
        forms.append('amount', this.form.amount);
        forms.append('upi', this.form.upi_id);
        forms.append('token', localStorage.token); 
        
        axios.post(this.apiUrl+"api/payment",forms).then(res=>{
            console.log(res);
            var message = res.data.message;
            this.error = false;
            this.success = message;
            this.form.amount = "";
            this.form.upi_id = "";
            this.image = "";

        }).catch(err=>{
            console.log(err);
            var message = err.response.data.message;
            this.success = false;
            this.error = message;
            this.form.amount = "";
            this.image = "";
            this.form.upi_id = "";
        });
    },
  }

}
</script>