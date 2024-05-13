<template>
    <div>
        <!-- top header  -->
        <nav class="bg-main py-2" v-if="auth == false">
            <div class="container">
                <div class="row">
                    <div class="col-2 d-none d-md-block">
                        <div class="d-flex gap-1 ">
                            <i class="fa fa-life-ring  text-black my-auto"></i>
                            <p class="text-black my-auto">Contact Support</p>
                        </div>
                    </div>
                    <div class="col d-none d-md-block">
                        <div class="d-flex gap-1 ">
                            <i class="fa fa-pie-chart  text-black my-auto"></i>
                            <p class="text-black my-auto"> Trading Fees: 0.05% Taker / -0.54% Market</p>
                        </div>
                    </div>
                    <div class="col d-none d-md-block">
                        <div class="d-flex gap-2 float-end">
                            <router-link class="text-black" :to="{ name: 'Login' }"> <i
                                    class="fa fa-sign-in pe-1"></i>Login</router-link>
                            <router-link class="text-black" :to="{ name: 'Register' }"> <i
                                    class="fa fa-lock pe-1"></i>Register</router-link>
                        </div>

                    </div>
                    <div class="col d-flex d-md-none justify-content-center">
                        <div class="d-flex gap-2 float-end">
                            <router-link class="text-black" :to="{ name: 'Login' }"> <i
                                    class="fa fa-sign-in pe-1"></i>Login</router-link>
                            <router-link class="text-black" :to="{ name: 'Register' }"> <i
                                    class="fa fa-lock pe-1"></i>Register</router-link>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-main_dark shadow py-2 sticky-top px-3">
            <div class="container">
                <router-link class="navbar-brand text-white" :to="{ name: 'index' }">
                    <img :src="apiUrl + 'logo.png'" alt="" width="100"><span class="gradient-text-primary-secondary ms-2">
                    </span>
                </router-link>
                <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="ri-menu-2-line fs-4 fw-bold"></i>
                </button>
                <div class="offcanvas offcanvas-start w-75 bg-black" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center col">
                            <li class="nav-item mx-1 d-md-none">
                                <router-link class="navbar-brand text-white mb-3" :to="{ name: 'index' }">
                                    <img :src="apiUrl + 'logo.png'" alt="" width="100">
                                </router-link>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" :class="{ 'show': dropToggle }"
                                    @click="dropdowns">
                                    <img :src="apiUrl+'icons/npficon.svg'" alt="" width="20">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="#24D1E5" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                        <path style="fill:#24D1E5"
                                            d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z">
                                        </path>
                                    </svg> -->
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav grid_nav_transform" :class="{ 'show': dropToggle }">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover gap-2 py-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <!-- <div class="col-2">
                                                            <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                        </div> -->
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-hands-holding-child text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Charity</p>
                                                        <p class="mb-0" style="font-size: 10px;">Powering blockchain for
                                                            good.</p>
                                                    </div>
                                                    <!-- <div class="col-2">
                                                            <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                        </div> -->
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-flask-vial fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Labs</p>
                                                        <p class="mb-0" style="font-size: 10px;">Incubator for top
                                                            blockchains projects.</p>
                                                    </div>
                                                    <!-- <div class="col-2">
                                                            <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                        </div> -->
                                                </div>
                                            </a>
                                            <!-- <a href="#">
                                                    <div class="row align-items-center mb-3 nav_hover p-2">
                                                        <div class="col-2">
                                                            <i class="ri-swap-line text-main fs-5"></i>
                                                        </div>
                                                        <div class="col-8">
                                                            <p class="mb-0">npf Live </p>
                                                            <p class="mb-0" style="font-size: 10px;">Bringing blockchain broadcasts to you live.</p>
                                                        </div>
                                                        <div class="col-2">
                                                            <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                        </div>
                                                    </div>
                                                </a> -->
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-wallet fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Defi Wallet</p>
                                                        <p class="mb-0" style="font-size: 10px;">Meet the next-generation
                                                            Web3 wallet.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-graduation-cap fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Academy</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            education.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-cloud fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Cloud</p>
                                                        <p class="mb-0" style="font-size: 10px;">Enterprise exchange
                                                            solutions.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-rocket fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">LaunchPad</p>
                                                        <p class="mb-0" style="font-size: 10px;">Token Launch Plateform.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">BABT</p>
                                                        <p class="mb-0" style="font-size: 10px;">Verified user credentials
                                                            fort the Web3 era.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-circle-notch fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">OTC Trading</p>
                                                        <p class="mb-0" style="font-size: 10px;">Spot,Options,Algo Orders
                                                            and more.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-brands fa-leanpub fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Learn & Earn</p>
                                                        <p class="mb-0" style="font-size: 10px;">Earn free crypto through
                                                            learning.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-box fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">DEX</p>
                                                        <p class="mb-0" style="font-size: 10px;">Fast and secure
                                                            decentralized digital asset exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-microscope fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Research</p>
                                                        <p class="mb-0" style="font-size: 10px;">Insitutional-grade analysis
                                                            and reports.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-file fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">npf Tax</p>
                                                        <p class="mb-0" style="font-size: 10px;">Free tax tool to calculate
                                                            your crypto taxes.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-tarp-droplet fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Accept Crypto Payment</p>
                                                        <p class="mb-0" style="font-size: 10px;">Allow your customer to pay
                                                            with crypto.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Trade
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 600px;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <router-link :to="{ name: 'trade' }">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-trowel-bricks text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Spot</p>
                                                        <p class="mb-0" style="font-size: 10px;">Trade crypto with advanced
                                                            tools </p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </router-link>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Npf Convert</p>
                                                        <p class="mb-0" style="font-size: 10px;">The easiest way to trade.
                                                        </p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                        <i class="fa-solid fa-percent text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Margin</p>
                                                        <p class="mb-0" style="font-size: 10px;">Increase your profit with
                                                            leverage</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                        <i class="fa-solid fa-robot text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Trading Bots</p>
                                                        <p class="mb-0" style="font-size: 10px;">Trade smater with the
                                                            various automated statergies-easy,fast and reliable.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <router-link :to="{name:'p2p'}">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                        <i class="fa-solid fa-person-military-to-person text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">P2P</p>
                                                        <p class="mb-0" style="font-size: 10px;">Bank Transfer and 100+
                                                            options</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </router-link>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                        <i class="fa-solid fa-repeat text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Swap Farming</p>
                                                        <p class="mb-0" style="font-size: 10px;">Swap to Earn npf</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-ranking-star text-main fs-5"></i>

                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Fan Token</p>
                                                        <p class="mb-0" style="font-size: 10px;">Upgrade your fan experience
                                                        </p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-cubes-stacked text-main fs-5"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">OTC Block Trading</p>
                                                        <p class="mb-0" style="font-size: 10px;">RFQ and trade large spot
                                                            orders</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Buy Crypto
                                    <!-- <span class="badge text-bg-warning ms-1">EUR</span> -->
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 300px">
                                    <div>
                                        <a href="#">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-credit-card text-main fs-5"></i>
                                                    <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Credit/Debit Card</p>
                                                    <p class="mb-0" style="font-size: 10px;">Buy crypto via card</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <!-- <i class="ri-swap-line text-main fs-5"></i> -->
                                                    <i class="fa-solid fa-person-military-to-person text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">P2P Trading</p>
                                                    <p class="mb-0" style="font-size: 10px;">Bank transfer and 100+ options
                                                    </p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Cash Balance</p>
                                                        <p class="mb-0" style="font-size: 10px;">Buy Crypto with your npf Balance</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Deposit npf</p>
                                                        <p class="mb-0" style="font-size: 10px;">Add cash</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </a> -->
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Markets
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 300px;">
                                    <div>
                                        <a href="#">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                    <i class="fa-solid fa-chart-simple text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Market Overview</p>
                                                    <p class="mb-0" style="font-size: 10px;">Overview of the crypto market
                                                        with real-time prices and key-data</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <!-- <i class="ri-swap-line text-main fs-2"></i> -->
                                                    <i class="fa-solid fa-chart-line text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Trading Data</p>
                                                    <p class="mb-0" style="font-size: 10px;">View top market movers and
                                                        price performance</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </ul>
                            </li>

                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Derivativies
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 600px;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-file-invoice-dollar fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">USD-M Futures</p>
                                                    <p class="mb-0" style="font-size: 10px;">Prepectual or Quarterly
                                                        Contracts settled in USDT or BUSD</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-file-contract fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Coin-M Futures</p>
                                                    <p class="mb-0" style="font-size: 10px;">Prepectual or Quarterly
                                                        Contracts settled in Cryptocurrency</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-scroll text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Options</p>
                                                    <p class="mb-0" style="font-size: 10px;">Buy and sell European-style
                                                        Options</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-group-arrows-rotate text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Leveraged Token</p>
                                                    <p class="mb-0" style="font-size: 10px;">Enjoy increased leverage
                                                        without risk of liquidation</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-clipboard-list text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Leaderboard</p>
                                                    <p class="mb-0" style="font-size: 10px;">Exclusive ranking for
                                                        traders,follow top traders strategies</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-binoculars text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0"> Futures Overview</p>
                                                    <p class="mb-0" style="font-size: 10px;">Follow our full range of crypto
                                                        derivative instruments</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-chart-pie text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Future Markets</p>
                                                    <p class="mb-0" style="font-size: 10px;">View trends and opportunities
                                                        in Future Market before trading</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-id-badge text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Responsible Trading</p>
                                                    <p class="mb-0" style="font-size: 10px;">Learn how could you practice
                                                        responsible trading with futures.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-newspaper fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Blog</p>
                                                    <p class="mb-0" style="font-size: 10px;">Expand your knowledge and get
                                                        the latest insights in Derivatives Trading</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-gem text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">VIP Portal</p>
                                                    <p class="mb-0" style="font-size: 10px;">VIP Exclusive,Tailor-made
                                                        Institutional Grade Services .</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Earn
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 600px;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-piggy-bank fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">npf Earn</p>
                                                    <p class="mb-0" style="font-size: 10px;">One Stop Investment Solution.
                                                    </p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-circle-dollar-to-slot text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Simple Earn</p>
                                                    <p class="mb-0" style="font-size: 10px;">Earn daily rewards on the idle
                                                        tokens.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="fa-solid fa-circle-stop fs-5 text-main"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">BNB Vault</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div> -->
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-hammer fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">npf Pool</p>
                                                    <p class="mb-0" style="font-size: 10px;">Mine more rewards for
                                                        connecting to the pool.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-arrow-trend-up text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Range Bound</p>
                                                    <p class="mb-0" style="font-size: 10px;">Earn high rewards when the
                                                        market moves sideways</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-rocket text-main fs-5"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">LaunchPad</p>
                                                    <p class="mb-0" style="font-size: 10px;">Token Launch Plateform.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-coins fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Defi Stacking</p>
                                                    <p class="mb-0" style="font-size: 10px;">Easy access to defi
                                                        oppertunites.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-group-arrows-rotate fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Auto-Invest</p>
                                                    <p class="mb-0" style="font-size: 10px;">Accumulate crypto on autopilot.
                                                    </p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-brands fa-ethereum fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">ETH Stacking</p>
                                                    <p class="mb-0" style="font-size: 10px;">One click stacking,rewards paid
                                                        only.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div> -->
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Finance
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 300px;">
                                    <div>
                                        <div class="row align-items-center mb-3 nav_hover p-2">
                                            <div class="col-2">
                                                <i class="fa-solid fa-id-card fs-5 text-main"></i>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">npf Card</p>
                                                <p class="mb-0" style="font-size: 10px;">Get upto 8% cashback when you spend
                                                    at 90M merchants worldwide.</p>
                                            </div>
                                            <div class="col-2">
                                                <i class="ri-arrow-right-line right_arrow_nav"></i>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3 nav_hover p-2">
                                            <div class="col-2">
                                                <i class="fa-solid fa-sack-dollar text-main fs-5"></i>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">npf Loans</p>
                                                <p class="mb-0" style="font-size: 10px;">Get an instant loan secured by
                                                    crypto assets.</p>
                                            </div>
                                            <div class="col-2">
                                                <i class="ri-arrow-right-line right_arrow_nav"></i>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3 nav_hover p-2">
                                            <div class="col-2">
                                                <i class="fa-regular fa-credit-card fs-5 text-main"></i>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">npf Pay</p>
                                                <p class="mb-0" style="font-size: 10px;">Send ,receive and spend crypto with
                                                    0 fees.</p>
                                            </div>
                                            <div class="col-2">
                                                <i class="ri-arrow-right-line right_arrow_nav"></i>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3 nav_hover p-2">
                                            <div class="col-2">
                                                <i class="fa-solid fa-gift fs-5 text-main"></i>
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0">npf Gift Card</p>
                                                <p class="mb-0" style="font-size: 10px;">Customizable crypto gift card.</p>
                                            </div>
                                            <div class="col-2">
                                                <i class="ri-arrow-right-line right_arrow_nav"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link text-white" href="#">
                                    NFT
                                </a>
                            </li>
                            <li class="nav-item mx-1 dropdown">
                                <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Institutional
                                </a>
                                <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 500px;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-house fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Institutional Home</p>
                                                    <p class="mb-0" style="font-size: 10px;">Premium digital asset solution
                                                        for institutions.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-gear fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Asset Management Solutions</p>
                                                    <p class="mb-0" style="font-size: 10px;">Discover various asset
                                                        manangement solutions.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-shield fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Custody</p>
                                                    <p class="mb-0" style="font-size: 10px;">Secure digital assets with
                                                        leading infrastructure.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div> -->
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-link fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Link</p>
                                                    <p class="mb-0" style="font-size: 10px;">Connect and grow with npf
                                                        liquidity solutions.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-gem fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">VIP Portal</p>
                                                    <p class="mb-0" style="font-size: 10px;">One-stop station made for VIP
                                                        and institutions.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-chart-line fs-5 text-main"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Historical Markeet Data</p>
                                                    <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                        assest exchange.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <!-- <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div> -->
                                        </div>

                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item mx-1">
                                <router-link class="nav-link text-white nav_margin"
                                    :to="{ name: 'feed' }">Feed</router-link>
                            </li>
                            <!-- <li class="nav-item mx-1 dropdown">
                                    <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 300px;">
                                            <div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    </ul>
                                </li> -->
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center ">
                            <!-- <li class="nav-item mx-1 " v-if="auth == false">
                                <router-link class="nav-link text-white nav_margin" :to="{ name: 'Login' }">Log
                                    In</router-link>
                            </li>
                            <li class="nav-item mx-1" v-if="auth == false">
                                <router-link :to="{ name: 'Register' }" class="btn text-light p-1 px-2"
                                    style="background-color: #7258db;">
                                    <i class="ri-gift-fill"></i>
                                    Register
                                </router-link>
                            </li> -->

                            <li class="nav-item mx-1 dropdown" v-if="auth == true">
                                <router-link :to="{ name: 'deposit' }" class="nav-link text-light btn"
                                    style="background-color: #24d1e5;">
                                    <i class="ri-download-2-line"></i> Deposit
                                </router-link>
                            </li>
                            <li class="nav-item mx-1 dropdown" v-if="auth == true">
                                <a class="nav-link text-white" data-bs-toggle="offcanvas" href="#offcanvasExample2"
                                    role="button" aria-controls="offcanvasExample">
                                    <i class="ri-user-3-fill fs-5"></i>
                                </a>
                            </li>

                            <!-- <li class="nav-item mx-1 dropdown">
                                    <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-notification-fill fs-5"></i>
                                    </a>
                                     <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 300px; transform: translate(-200px, 0px);">
                                            <div>
                                                <div class="row align-items-center mb-3  nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-3 nav_hover p-2">
                                                    <div class="col-2">
                                                        <i class="ri-swap-line text-main fs-2"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="mb-0">Exchange</p>
                                                        <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                            assest exchange.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    </ul> 
                                </li> -->
                            <!-- <li class="nav-item mx-1 dropdown">
                                    <a class="nav-link text-white nav_margin dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-download-2-line fs-5"></i>
                                    </a>
                                    <ul class="dropdown-menu p-3 grid_nav_transform" style="width: 300px; transform: translate(-200px, 0px);">
                                        <div>
                                            <div class="row align-items-center mb-3  nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="ri-swap-line text-main fs-2"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Exchange</p>
                                                    <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                        assest exchange.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="ri-swap-line text-main fs-2"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Exchange</p>
                                                    <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                        assest exchange.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="ri-swap-line text-main fs-2"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Exchange</p>
                                                    <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                        assest exchange.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="ri-swap-line text-main fs-2"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Exchange</p>
                                                    <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                        assest exchange.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 nav_hover p-2">
                                                <div class="col-2">
                                                    <i class="ri-swap-line text-main fs-2"></i>
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0">Exchange</p>
                                                    <p class="mb-0" style="font-size: 10px;">Blockchain and crypto
                                                        assest exchange.</p>
                                                </div>
                                                <div class="col-2">
                                                    <i class="ri-arrow-right-line right_arrow_nav"></i>
                                                </div>
                                            </div>
                                        </div>
                                </ul> 
                                </li> -->
                            <!-- <li class="nav-item mx-1">
                                    <a class="nav-link text-white nav_margin" href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal">
                                        <i class="ri-menu-3-line fs-5"></i>
                                    </a>
                                </li> -->
                        </ul>

                    </div>
                </div>

            </div>
        </nav>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasExampleLabel"
            v-if="auth == true">
            <div class="offcanvas-header">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <a href="#" class="fs-5 nav-link text-white">{{ user.email }}</a>
                <div class="mt-5">
                    <ul class="navbar-nav text-white w-100">
                        <router-link :to='{ name: "home" }'>
                            <li class="nav-item nav_item_modal p-3">
                                <i class="ri-user-3-fill"></i> <span class="ms-3">Dashboard</span>
                            </li>
                        </router-link>
                        <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample" class="collapsed">
                            <li class="nav-item nav_item_modal p-3">
                                <i class="ri-wallet-fill"></i>
                                <span class="ms-3">Wallet</span>
                                <i class="ri-arrow-down-s-line float-end"></i>
                            </li>
                        </a>
                        <div class="collapse" id="collapseExample" style="">
                            <div>
                                <li class="nav-item text-white nav_item_modal p-2"><a href="" class="nav-link">Overview</a>
                                </li>
                                <li class="nav-item text-white nav_item_modal p-2"><router-link
                                        :to="{ name: 'deposit_history' }" class="nav-link">Deposit History</router-link>
                                </li>
                                <li class="nav-item text-white nav_item_modal p-2"><router-link :to="{ name: 'funding' }"
                                        class="nav-link">Funding</router-link></li>
                                <li class="nav-item text-white nav_item_modal p-2"><router-link :to="{ name: 'spot' }"
                                        class="nav-link">SPOT</router-link></li>
                                <li class="nav-item text-white nav_item_modal p-2"><a href="" class="nav-link">Margin</a>
                                </li>
                                <li class="nav-item text-white nav_item_modal p-2"><a href="" class="nav-link">Futures</a>
                                </li>
                                <li class="nav-item text-white nav_item_modal p-2"><a href="" class="nav-link">Options</a>
                                </li>
                                <li class="nav-item text-white nav_item_modal p-2"><a href="" class="nav-link">Trading
                                        Bots</a>
                                </li>
                                <li class="nav-item text-white nav_item_modal p-2"><a href="" class="nav-link">Earn</a></li>
                            </div>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                            aria-controls="collapseExample2">
                            <li class="nav-item  nav_item_modal p-3">
                                <i class="fa-solid fa-file-contract"></i>
                                <span class="ms-3">Orders</span>
                                <i class="ri-arrow-down-s-line float-end"></i>
                            </li>
                        </a>
                        <div class="collapse" id="collapseExample2">
                            <div>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">Spot Order</a></li>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">Margin Order</a></li>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">Option Order</a></li>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">Trading Bots Order</a>
                                </li>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">P2P Order</a></li>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">Earn History</a>
                                </li>
                                <li class="nav-item  nav_item_modal p-2"><a href="" class="nav-link">Earn</a></li>
                            </div>
                        </div>
                        <a href="">
                            <li class="nav-item  nav_item_modal p-3">
                                <i class="fa-solid fa-shield-halved"></i> <span class="ms-3">Security</span>
                            </li>
                        </a>
                        <a href="">
                            <li class="nav-item  nav_item_modal p-3">
                                <i class="fa-regular fa-id-card"></i> <span class="ms-3">Identification</span>
                            </li>
                        </a>
                        <router-link :to="{ name: 'refer' }">
                            <li class="nav-item  nav_item_modal p-3">
                                <i class="fa-solid fa-network-wired"></i> <span class="ms-3">Referal</span>
                            </li>
                        </router-link>
                        <a href="">
                            <li class="nav-item  nav_item_modal p-3">
                                <i class="fa-brands fa-hubspot"></i> <span class="ms-3">Rewards Hub</span>
                            </li>
                        </a>
                        <!-- <a href="">
                                <li class="nav-item text-white nav_item_modal p-3">
                                    <i class="ri-user-3-fill"></i> <span class="ms-3">API Management</span>
                                </li>
                            </a>
                            <a href="">
                                <li class="nav-item text-white nav_item_modal p-3">
                                    <i class="ri-user-3-fill"></i> <span class="ms-3">Notification</span>
                                </li>
                            </a> -->
                        <a @click="logout" href="#">
                            <li class="nav-item  nav_item_modal p-3">
                                <i class="fa-solid fa-person-through-window"></i> <span class="ms-3">Log Out</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import pagination from "vue-pagination-2";
export default {
    name: "header",
    components: {
        pagination,
    },
    data() {
        return {
            auth: false,
            apiUrl: process.env.mix_api_url,
            user: {},
            dropToggle: false
        };
    },
    created() {
        var token = localStorage.token;
        if (token != undefined && token != '') {
            this.auth = true;
            this.$emit("auth", this.auth);

        }
        this.userDetails();
    },
    methods: {
        dropdowns() {
            this.dropToggle = !this.dropToggle;
        },

        userDetails() {
            axios.post(this.apiUrl + 'api/getUserDetails', {
                token: localStorage.token
            }).then(res => {
                this.user = res.data.user;
                this.$emit("authUser", res.data.user);
                this.balance = res.data.balance;
            }).catch(err => {
                console.log(err);
            });
        },
        logout() {
            // axios
            //     .post(this.url + "api/userLogout", {
            //         token: localStorage.token,
            //     })
            //     .then((res) => {
            //         console.log(res);
            //     })
            //     .catch((err) => {
            //         console.log(err);
            //     });
            localStorage.removeItem("token");

            this.$router.push({ name: "index" });
            location.reload();
        },
    }


};
</script>