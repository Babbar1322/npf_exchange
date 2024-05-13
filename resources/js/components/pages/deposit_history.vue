<template>
  <div>
    <Header />
    <div class="container mt-5 text-dark">
                <div class="d-flex align-items-center">
                    
                    <h2><a href="#" class="fa-solid fa-arrow-left me-3 text-white" @click="$router.go(-1);"></a>Deposit History</h2>
                    <div class="ms-auto">
                        <!-- <a href="#" class="fs-6">
                            <i class="ri-external-link-fill"></i>
                            Export Transaction Records
                        </a> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mt-5 text-center shadow" style="background-color: #7258db;">
                        <thead class="table-head rounded-top">
                            <tr>
                                <th scope="col" class="text-light">#</th>
                                <th scope="col" class="text-light">Asset</th>
                                <th scope="col" class="text-light">Amount</th>
                                <th scope="col" class="text-light">Description</th>
                                <th scope="col" class="text-light">Time</th>
                            </tr>
                        </thead>
                        <tbody v-if="history.length > 0">
                            <tr v-for="(his,i) in history">
                                <th scope="row">{{ i+1 }}</th>
                                <td>USDT</td>
                                <td>{{ his.amount }}</td>
                                <td>{{ his.description }}</td>
                                <td>{{ moment(his.created_at).format('DD-MM-YYYY, hh:mm:ss A') }}</td>
                               
                            </tr>
                        </tbody>
                    </table>
                    <pagination v-model="page" :records="records" @paginate="history" />

                </div>
                <!-- nav tabs end -->
            </div>
  </div>
</template>


<script>
import pagination from "vue-pagination-2";
import moment  from "moment";


export default {
    name: "deposit_history",
    components: {
        pagination,
    },
    data() {
        return {
            apiUrl:process.env.mix_api_url,
            history:[],
            page:1,
            records:0,
            paginate:0

        };
    },
    created() {
        this.deposit_history();
    },
    methods:{
        moment(date) {
           return moment(date);
       },
       deposit_history(){
        axios.post(this.apiUrl+"api/deposit_history",{
            token:localStorage.token
        }).then(res=>{
            this.history = res.data.history.data;
            this.page = res.data.history.current_page;
            this.records = res.data.history.total;
            this.paginate = res.data.history;
        }).catch(err=>{
            console.log(err);
        });
       }
    }

    
};
</script>