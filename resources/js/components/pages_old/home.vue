<template>
   
    <div class="gs-container">
        <div class="row">
            <div class="col-lg-5 col-md-6 mx-auto bg-dark-purple2" style="min-height: 660px;">
                
                <div class="my-3 text-center px-2">
                    <img :src="url+'logo.png'" alt="" width="200">
                    
                    <div class="mt-4">
                        <h4 class="text-white">WELCOME</h4>
                        <!-- <img :src="url+'coins.jpeg'" alt="" width="150"> -->
                    </div>
                    <div class="mt-3">
                        <h5 class="text-white">Win level income and game level income</h5>
                    </div>
                </div>
                <!-- <div class="my-3">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <h3 class="text-muted">Balance</h3>
                            <h3>{{ balance }}</h3>
                           
                        </div>
                        <div class="col-5">
                            <router-link :to="{name:'recharge'}" class="btn btn-primary btn-block rounded-pill shadow mt-3"><b>Recharge</b></router-link>
                            <router-link :to="{name:'withdraw'}" class="btn btn-light btn-block rounded-pill shadow mt-3"><b>Withdraw</b></router-link>
                        </div>
                        <div class="col-1"></div>
                    </div>
                   
                    <div class="row mt-5 px-3">
                        <div class="col-6 my-2">
                            <router-link :to="{name:'spin'}" href="#">
                                <img :src="url+'game_card.png'" class="w-100" alt="">
                            </router-link>
                        </div>
                        <div class="col-6 my-2"><a href="javascript:;">
                                <img :src="url+'coming-soon.png'" class="w-100" alt="">
                            </a></div>
                       
                    </div>
                </div> -->
               <Footer />
            </div>
        </div>

    </div>

  
  </template>


  <script>
export default {
  name: 'home',
  data(){
    return {
       user:{},
       url:process.env.mix_api_url,
       balance:0,
       user:{}
    }
  },
   created(){
    this.userDetails();
  },
  methods:{
     userDetails(){
        axios.post(this.url+'api/getUserDetails',{
            token:localStorage.token
        }).then(res=>{
            console.log(res);
            this.user=  res.data.user;
            this.balance = res.data.balance;
        }).catch(err=>{
            console.log(err);
        })
    }
  },
  mounted(){
    // if(!localStorage.token){
    //     // this.$router.push("/login");
    // }
  }
}
</script>
<style >
.gs-container{
    overflow-x: hidden;
}
</style>