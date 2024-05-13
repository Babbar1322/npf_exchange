<template>
    <div>
        <Header />
        <div class="container">
            <div class="tab-content mt-4">
                <div id="" role="tabpanel" class="tab-pane fade show active">
                    <div class="d-lg-flex d-md-flex d-block">
                        <ul role="tablist" class="first nav nav-tabs tab-body-header rounded d-inline-flex mt-3">
                            <li role="presentation" class="nav-item col p-0"><a data-bs-toggle="tab" href="#buy"
                                    role="tab" aria-selected="true" class="nav-link active text-center">Buy</a></li>
                            <li role="presentation" class="nav-item col p-0">
                                <a data-bs-toggle="tab" href="#sell" role="tab" aria-selected="false" tabindex="-1"
                                    class="nav-link text-center">Sell</a>
                            </li>
                        </ul>
                        <!-- <ul class="d-inline-flex mt-3 second">
                            <li class="font me-4">USDT</li>
                            <li class="font me-4">BTC</li>
                            <li class="font me-4">FDUSD</li>
                            <li class="font me-4">BNB</li>
                            <li class="font me-4">ETH</li>
                            <li class="font me-4">TRX</li>
                            <li class="font me-4">SHIB</li>
                            <li class="font me-4">DOGE</li>
                            <li class="font me-4">ADA</li>
                        </ul> -->

                        <!-- <ul class="nav nav-pills mb-3 d-inline-flex mt-3 second mx-auto my-auto cstm-tab" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">USDT</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">BTC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FDUSD</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">BNB</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">BTC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ETH</button>
                        </li>
                        </ul> -->
                        <!-- <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                        </div> -->
                    </div>
                    <!-- <div class="wrapper d-lg-flex d-block">
                        <form class="form-inline selector">
                            <label class="sr-only" for="inlineFormInputGroup">Amount</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" class="form-control currency-amount" id="inlineFormInputGroup"
                                    placeholder="Enter Amount" size="8">
                                <div class="input-group-addon currency-addon">

                                    <select class="currency-selector">
                                        <option data-symbol="$" data-placeholder="0.00" selected>USD</option>
                                        <option data-symbol="€" data-placeholder="0.00">EUR</option>
                                        <option data-symbol="£" data-placeholder="0.00">GBP</option>
                                        <option data-symbol="¥" data-placeholder="0">JPY</option>
                                        <option data-symbol="$" data-placeholder="0.00">CAD</option>
                                        <option data-symbol="$" data-placeholder="0.00">AUD</option>
                                    </select>

                                </div>
                            </div>
                        </form>
                    </div> -->

                    <div class="row g-3 tab-content">
                        <div id="buy" role="tabpanel" class="col-lg-12 tab-pane fade show active">
                            <div class="container-fluid mt-3 px-2">

                                <div class="table-responsive">
                                    <table
                                        class="table table-responsive table-borderless table-hover table-striped p2ptable mt-3">

                                        <thead>
                                            <tr class="">

                                                <th class="" scope="col" width="10%">Account Holder</th>
                                                <th scope="col" width="10%">Account Number</th>
                                                <th scope="col" width="10%">IFSC</th>
                                                <th scope="col" width="10%">Branch</th>
                                                <th scope="col" width="10%">Account Type</th>
                                                <th scope="col" width="10%">Virtual Payment Address</th>
                                                <th scope="col" width="10%">Trade</th>
                                                <!-- <th class="" scope="col" width="25%">Advertisers</th>
                                                <th scope="col" width="20%">Price</th>
                                                <th scope="col" width="25%">Available/Limit</th>
                                                <th scope="col" width="20%">Payment</th>
                                                <th scope="col" width="20%">Trade</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><span class="nametext"> SONU KUMAR</span></td>
                                                <td><span class="nametext"> 50100708509831</span></td>
                                                <td><span class="nametext"> HDFC0007971</span></td>
                                                <td><span class="nametext"> 100 FEET ROAD BATHINDA</span></td>
                                                <td><span class="nametext"> SAVING</span></td>
                                                <td><span class="nametext"> 9001023020@hdfcbank</span></td>
                                                <td><button class="btn butn" data-bs-toggle="modal" data-bs-target="#recieveModal">Buy USDT</button></td>
                                            </tr>
                                            <div class="modal fade " id="recieveModal" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="recieveModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog centered " style="margin-top:150px">
                                            <div class="modal-content bg-white">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="recieveModal">Buy USDT
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" ></button>
                                                </div>
                                                <div class="modal-body" >
                                                    <form class="mt-4" @submit.prevent="deposit">
                                                        <div class="form-floating my-3">
                                                                <input type="number" class="form-control rounded"  v-model="amount" @input.stop="calQuan">
                                                                <label  class="text-white">Amount</label>
                                                            </div>
                                                            <div class="form-floating my-3">
                                                                <input type="number" class="form-control rounded"  :value="quantity" readonly>
                                                                <label  class="text-white">Quantity</label>
                                                            </div>
                                                            <div class="form-floating my-3">
                                                                <input type="number" class="form-control rounded"  :value="price" readonly>
                                                                <label  class="text-white">Price(INR)</label>
                                                            </div>

                                                            <div class="my-3">
                                                                <label class="form-label text-dark">Screenshot</label>
                                                                <input type="file" class="form-control rounded"  @change="uploadFile">
                                                            </div>
                                                             <button class="btn butn rounded text-dark mb-4" type="submit" :disabled="disable">Continue
                                                                <span class="spinner-grow spinner-grow-sm pl-2" role="status" aria-hidden="true" v-if="disable"></span>
                                                            </button>
                                                    </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- <tr>
                                                <td><span class="nametext">Rashed-TOMOKO-OTC</span><br><span
                                                        class="borderRight pe-2 spantext">468
                                                        orders</span><span class="spantext ms-2">100.00%
                                                        completion</span></td>
                                                <td><span class="pricespan">3.692 AED</span></td>
                                                <td><span class="limitspan">99,970.00 USDT<br>20,000.000 -
                                                        369,089.273</span></td>
                                                <td><span class="borderLeft ps-2 bankspan">Bank Transfer</span></td>
                                                <td><button class="btn butn">Buy
                                                        USDT</button></td>
                                            </tr> -->

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        <div id="sell" role="tabpanel" class="col-lg-12 tab-pane fade">
                            <div class="container mt-5 px-2">

                                <div class="table-responsive">
                                    <table
                                        class="table table-responsive table-borderless table-hover table-striped p2ptable mt-3">

                                        <thead>
                                            <tr class="">

                                                <th class="" scope="col" width="25%">Advertisers</th>
                                                <th scope="col" width="20%">Price</th>
                                                <th scope="col" width="25%">Available/Limit</th>
                                                <th scope="col" width="20%">Payment</th>
                                                <th scope="col" width="20%">Trade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="nametext">Rashed-TOMOKO-OTC</span><br><span
                                                        class="borderRight pe-2 spantext">468
                                                        orders</span><span class="spantext ms-2">100.00%
                                                        completion</span></td>
                                                <td><span class="pricespan">3.692 AED</span></td>
                                                <td><span class="limitspan">99,970.00 USDT<br>20,000.000 -
                                                        369,089.273</span></td>
                                                <td><span class="borderLeft ps-2 bankspan">Bank Transfer</span></td>
                                                <td><button class="btn butn">Buy
                                                        USDT</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container marginbottom mt-5">
            <div class="flex flex-col tradeasily rounded-s text-center w-full bg-basicBg border border-line py-l "
                style="border-radius: 24px;">
                <h1 class="headline5">Trade USDT Easily - Buy and Sell Using
                    Your Favorite Payment Methods</h1>
                <h2 class="headingh2">Exchange TetherUS on NPF EXCHANGE P2P. Find the best offers
                    below to Buy and Sell USDT</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6 text-start">
                    <h1 class="howtext">How P2P Works</h1>
                </div>
                <div class="col-lg-6 ">
                    <ul role="tablist" class="nav nav-pills justify-content-end crypto">
                        <li role="presentation" class="nav-item me-4 ">
                            <a data-bs-toggle="tab" href="#buy2" role="tab" aria-selected="true" class="nav-link active"
                                aria-current="page">Buy Crypto</a>
                        </li>
                        <li role="presentation" class="nav-item crypto">
                            <a data-bs-toggle="tab" href="#sell2" role="tab" aria-selected="false" tabindex="-1"
                                class="nav-link">Sell Crypto</a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="container mt-5">
                <div class="row g-3 tab-content">
                    <div id="buy2" role="tabpanel" class="col-lg-12 tab-pane fade show active">
                        <div class="grids">
                            <div class="border block border-line">
                                <div class="mb-xl">

                                    <img :src="'user/assets/images/i3.png'" class="placeOrder">
                                </div>
                                <div class="headline5 mb-m">1. Place an Order</div>
                                <div class="body3 text-secondaryText">Once you place a P2P order, the crypto asset
                                    will be escrowed by NPF EXCHANGE P2P.</div>
                            </div>
                            <div class="border block border-line">
                                <div class="mb-xl">

                                    <img :src="'user/assets/images/i2.png'" class="placeOrder">
                                </div>
                                <div class="headline5 mb-m">2. Pay the Seller</div>
                                <div class="body3 text-secondaryText">Send money to the seller via the suggested
                                    payment methods. Complete the fiat transaction and click "Transferred, notify
                                    seller" on NPF EXCHANGE P2P.</div>
                            </div>
                            <div class="border block border-line">
                                <div class="mb-xl">

                                    <img :src="'user/assets/images/i1.png'" class="placeOrder">
                                </div>
                                <div class="headline5 mb-m">3. Receive Crypto</div>
                                <div class="body3 text-secondaryText">Once the seller confirms receipt of money, the
                                    escrowed crypto will be released to you.</div>
                            </div>
                        </div>
                    </div>

                    <div id="sell2" role="tabpanel" class="col-lg-12 tab-pane fade">
                        <div class="grids">
                            <div class="border block border-line">
                                <div class="mb-xl">
                                    <img :src="'user/assets/images/i3.png'" class="placeOrder">

                                </div>
                                <div class="headline5 mb-m">1. Place an Order</div>
                                <div class="body3 text-secondaryText">Once you place a P2P order, the crypto asset
                                    will be escrowed by NPF EXCHANGE P2P.</div>
                            </div>
                            <div class="border block border-line">
                                <div class="mb-xl">
                                    <img :src="'user/assets/images/i4.png'" class="placeOrder">
                                </div>
                                <div class="headline5 mb-m">2. Verify Payment</div>
                                <div class="body3 text-secondaryText">Check the transaction record in the given payment
                                    account, and make sure you receive the money sent by the buyer.</div>
                            </div>
                            <div class="border block border-line">
                                <div class="mb-xl">
                                    <img :src="'user/assets/images/i5.png'" class="placeOrder">
                                </div>
                                <div class="headline5 mb-m">3. Release Crypto</div>
                                <div class="body3 text-secondaryText">Once you confirm the receipt of money, release
                                    crypto to the buyer on NPF EXCHANGE P2P.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container aboutp2p my-5">
            <div class="mobile">Advantages of P2P Exchange</div>
            <div class="mt-3xl blocks mt-3">
                <div class="card-column gap-3xl">
                    <div>
                        <img :src="'user/assets/images/i6.png'" alt="spend-to-earn" class="banking">
                        <div class="subtitle1 mb-2xs">Global and Local Marketplace</div>
                        <div class="body2 text-secondaryText">Where as many other P2P platforms target specific markets,
                            NPF EXCHANGE P2P provides a truly global trading experience with support for more than 70
                            local
                            currencies.</div>
                    </div>
                    <div>
                        <img :src="'user/assets/images/i7.png'" alt="spend-to-earn" class="banking">
                        <div class="subtitle1 mb-2xs">Flexible Payment Methods</div>
                        <div class="body2 text-secondaryText">Trusted by millions of users worldwide, NPG EXCHANGE P2P
                            provides a safe platform to conduct crypto trades in 800+ payment methods and 100+ fiat
                            currencies. Users can easily buy, sell and trade crypto directly with other users, while
                            setting their preferred prices and payment methods in an open crypto marketplace.</div>
                    </div>
                    <div>
                        <img :src="'user/assets/images/i8.png'" alt="spend-to-earn" class="banking">
                        <div class="subtitle1 mb-2xs">Trade at Your Preferred Prices</div>
                        <div class="body2 text-secondaryText">Trade crypto with the freedom to buy and sell at your
                            preferred prices. Buy or sell from the existing offers, or create trade advertisements to
                            set your own prices.</div>
                    </div>
                </div>
                <div class="image-column">
                    <img :src="'user/assets/images/edit-screen.png'" class="mobileimg" width="" loading="lazy"
                        alt="mobile p2p advantage">
                </div>
            </div>
        </div>
       <Footer />
    </div>
</template>

<script>
export default {
    name: "p2p",
    data(){
        return {
            image:"",
            amount:"",
            apiUrl:process.env.mix_api_url,
            disable:false,
            price:"",
            quantity:""
        }
    },
    created(){
        this.usdtPrice();
    },
    methods:{
        calQuan(){
            this.quantity = this.amount/this.price;
        },
        usdtPrice(){
            axios.get(this.apiUrl+'api/usdt_price').then(res=>{
                this.price = res.data.price;
            }).catch(err=>{
                console.log(err);
            });
        },
        async uploadFile(e) {
         this.image = e.target.files[0];
        },
        deposit(){
            this.disable = true;
            var forms = new FormData();
            forms.append('image', this.image);
            forms.append('amount', this.amount);
            forms.append('token', localStorage.token); 
        axios.post(this.apiUrl+"api/payment",forms).then(res=>{
            console.log(res);
            this.$toaster.success(res.data.message);
            $(".btn-close").click();
            this.disable = true;
            var message = res.data.message;
            this.error = false;
            this.success = message;
            this.amount = "";
            this.image = "";

        }).catch(err=>{
            console.log(err);
            this.$toaster.error(err.response.data.message);
            $(".btn-close").click();
            this.disable = false;
            var message = err.response.data.message;
            this.success = false;
            this.error = message;
            this.amount = "";
            this.image = "";
        });
    },
    }
}


</script>