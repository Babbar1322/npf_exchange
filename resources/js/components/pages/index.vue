<template>
    <div>
        <Header @auth="getAuth" />

        <!-- <div class="banner-item">
            <div class="container my-auto">
                <div class="row">
                    <div class="col">
                        <h2 class="text-white banner-text">Crypto Currency
                            Currency Solutions
                            Investments</h2>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div> -->
        <!-- <section id="main-content" class="">
         <div id="demos">
            <h2 style="display:none;">heading</h2>
            <div id="carouselTicker" class="carouselTicker">
               <ul class="carouselTicker__list">
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Bitcoin<span class="update_change_minus">-1,521.25</span>
                           </div>
                           <div class="coin_price">
                              $11,459.75<span class="scsl__change_minus">-12.97%</span>
                           </div>
                           <div class="coin_time">
                              $175,016,158,112.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Ethereum<span class="update_change_minus">-109.12</span>
                           </div>
                           <div class="coin_price">
                              $952.98<span class="scsl__change_minus">-11.45%</span>
                           </div>
                           <div class="coin_time">
                              $92,587,551,437.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Exchange Union<span class="update_change_minus">-0.33</span>
                           </div>
                           <div class="coin_price">
                              $8.16<span class="scsl__change_minus">-4.02%</span>
                           </div>
                           <div class="coin_time">
                              $16,322,520.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Ripple<span class="update_change_minus">-0.14</span>
                           </div>
                           <div class="coin_price">
                              $1.25<span class="scsl__change_minus">-11.05%</span>
                           </div>
                           <div class="coin_time">
                              $48,231,782,365.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Veritaseum<span class="update_change_minus">-46.70</span>
                           </div>
                           <div class="coin_price">
                              $337.46<span class="scsl__change_minus">-13.84%</span>
                           </div>
                           <div class="coin_time">
                              $687,292,480.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Digitalcoin<span class="update_change_minus">-0.01</span>
                           </div>
                           <div class="coin_price">
                              $0.07<span class="scsl__change_minus">-14.89%</span>
                           </div>
                           <div class="coin_time">
                              $1,986,979.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Bitcoin<span class="update_change_minus">-1,521.25</span>
                           </div>
                           <div class="coin_price">
                              $11,459.75<span class="scsl__change_minus">-12.97%</span>
                           </div>
                           <div class="coin_time">
                              $175,016,158,112.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Ethereum<span class="update_change_minus">-109.12</span>
                           </div>
                           <div class="coin_price">
                              $952.98<span class="scsl__change_minus">-11.45%</span>
                           </div>
                           <div class="coin_time">
                              $92,587,551,437.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Exchange Union<span class="update_change_minus">-0.33</span>
                           </div>
                           <div class="coin_price">
                              $8.16<span class="scsl__change_minus">-4.02%</span>
                           </div>
                           <div class="coin_time">
                              $16,322,520.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Ripple<span class="update_change_minus">-0.14</span>
                           </div>
                           <div class="coin_price">
                              $1.25<span class="scsl__change_minus">-11.05%</span>
                           </div>
                           <div class="coin_time">
                              $48,231,782,365.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Veritaseum<span class="update_change_minus">-46.70</span>
                           </div>
                           <div class="coin_price">
                              $337.46<span class="scsl__change_minus">-13.84%</span>
                           </div>
                           <div class="coin_time">
                              $687,292,480.00
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="carouselTicker__item">
                     <div class="coin_info">
                        <div class="inner">
                           <div class="coin_name">
                              Digitalcoin<span class="update_change_minus">-0.01</span>
                           </div>
                           <div class="coin_price">
                              $0.07<span class="scsl__change_minus">-14.89%</span>
                           </div>
                           <div class="coin_time">
                              $1,986,979.00
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section> -->
        <section id="full_slider" class="full_slider_inner padding_0">
            <div class="main_slider">
                <div id="bootstrap-touch-slider">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img :src="apiUrl + 'assets/images/slider_img2.png'" alt="Bootstrap Touch Slider"
                                class="slide-image w-100" />
                            <div class="container">
                                <div class="row">
                                    <div class="slide-text slide_style_left white_fonts">
                                        <h2 data-animation="animated">Crypto <span
                                                class="currency">Currency</span><br>Currency Solutions<br>Investments
                                        </h2>
                                        <router-link :to="{ name: 'Login' }" class="btn btn-default active">Get
                                            started</router-link>
                                        <router-link :to="{ name: 'Register' }" class="btn btn-default">Free
                                            Account</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding_0 info_coins">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="full">
                            <h2 style="display:none;">heading</h2>
                            <div class="coin_formation">
                                <ul>
                                    <li>
                                        <span class="curr_name">Bitcoin Price</span>
                                        <!-- <span class="curr_price">2395.00 USD</span> -->
                                        <div class="spinner-border text-dark" role="status" v-if="btc_usd=='' || btc_usd == null"></div>
                                        <span class="curr_price" v-else>{{ Number(btc_usd).toFixed(2) }} USD</span>
                                    </li>
                                    <li>
                                        <span class="curr_name">Bitcoin Price</span>
                                        <!-- <span class="curr_price">2321.68 EUR</span> -->
                                        <div class="spinner-border text-dark" role="status" v-if="btc_eur=='' || btc_eur == null"></div>
                                        <span class="curr_price" v-else>{{ Number(btc_eur).toFixed(2) }} EUR</span>
                                    </li>
                                    <li>
                                        <span class="curr_name">24H Volume</span>
                                        <!-- <span class="curr_price">1,957.25 BTC</span> -->
                                        <div class="spinner-border text-dark" role="status" v-if="btc_vol=='' || btc_vol == null"></div>
                                        <span class="curr_price" v-else>{{ Number(btc_vol).toFixed(2) }} BTC</span>
                                    </li>
                                    <li>
                                        <span class="curr_name">Active Traders</span>
                                        <!-- <span class="curr_price">1,169,857 EUR</span> -->
                                        <div class="spinner-border text-dark" role="status" v-if="eur_trades=='' || eur_trades == null"></div>
                                        <span class="curr_price" v-else>{{ eur_trades }} EUR</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start header -->
        <!-- <div class="container my-5 text-dark" >
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold">Buy, trade, and hold 350+ cryptocurrencies on CIAZ</h1>
                        <div class="my-5">
                            <a href="#" class="fs-5">
                                <i class="ri-gift-fill text-primary"></i><span class="px-2">Trade Bitcoin for
                                    free</span><i class="ri-arrow-right-s-line"></i>
                            </a>
                        </div>
                        <router-link :to="{name:'Register'}" class="btn  btn-primary px-4 w-100">
                            Sign up with Email
                        </router-link>
                    </div>
                    <div class="col-lg-6">
                        <img :src="apiUrl+'assets/images/earn.png'" alt="" class="w-100">
                    </div>
                </div>
            </div> -->
        <!-- end header -->

        <!-- card start -->
        <!-- <div class="container mt-4 text-dark" v-if="auth== false">
                <div class="row align-itmes-center">
                    <div class="col-lg-3">
                        <h2>$10 billion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <div class="col-lg-3">
                        <h2>$10 billion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <div class="col-lg-3">
                        <h2>$10 billion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <div class="col-lg-3">
                        <h2>$10 billion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
            </div> -->
        <!-- card end -->

        <section class="layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="full">
                            <div class="heading_main">
                                <h2><span>Crypto Live Exchange Rates</span></h2>
                                <p>Minimum purchase is 50 Coins tokens. Get a bonus from 5% to 25%<br>on every token
                                    purchase</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="full table-responsive">
                            <table class="table table-hover fronTable table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th style="min-width: 130px;">Name</th>
                                        <th>Last Price</th>
                                        <th>24h Change</th>
                                        <th>Market Cap</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img :src="apiUrl + 'assets/images/bnb-bnb-logo.png'" alt=""
                                                class="table_img"> <span class="fs-6 ms-1">BNB</span></td>
                                        <td>$234.2</td>
                                        <td>-5.67%</td>
                                        <td>$87,789M</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img :src="apiUrl + 'assets/images/Bitcoin.png'" alt="" class="table_img">
                                            <span class="fs-6 ms-1">Bitcoin</span>
                                        </td>
                                        <td>$234.2</td>
                                        <td>-5.67%</td>
                                        <td>$87,789M</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img :src="apiUrl + 'assets/images/ethereum.png'" alt="" class="table_img">
                                            <span class="fs-6 ms-1">
                                                Ethereum</span>
                                        </td>
                                        <td>$234.2</td>
                                        <td>-5.67%</td>
                                        <td>$87,789M</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img :src="apiUrl + 'assets/images/galexy.png'" alt="" class="table_img">
                                            <span class="fs-6 ms-1"> Galxe</span>
                                        </td>
                                        <td>$234.2</td>
                                        <td>-5.67%</td>
                                        <td>$87,789M</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img :src="apiUrl + 'assets/images/green_token.png'" alt=""
                                                class="table_img">
                                            <span class="fs-6 ms-1">Green Metaverse Token</span>
                                        </td>
                                        <td>$234.2</td>
                                        <td>-5.67%</td>
                                        <td>$87,789M</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- table start -->
        <!-- <div class="container mt-5 text-dark">
            <h1>Popular cryptocurrencies</h1>
            <div class="table-responsive card">
                <table class="table table-hover mt-5">
                    <thead>
                        <tr>
                            <th style="min-width: 130px;">Name</th>
                            <th>Last Price</th>
                            <th>24h Change</th>
                            <th>Market Cap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img :src="apiUrl + 'assets/images/bnb-bnb-logo.png'" alt="" class="table_img"> <span
                                    class="fs-6 ms-1">BNB</span></td>
                            <td>$234.2</td>
                            <td>-5.67%</td>
                            <td>$87,789M</td>
                        </tr>
                        <tr>
                            <td>
                                <img :src="apiUrl + 'assets/images/Bitcoin.png'" alt="" class="table_img">
                                <span class="fs-6 ms-1">Bitcoin</span>
                            </td>
                            <td>$234.2</td>
                            <td>-5.67%</td>
                            <td>$87,789M</td>
                        </tr>
                        <tr>
                            <td>
                                <img :src="apiUrl + 'assets/images/ethereum.png'" alt="" class="table_img">
                                <span class="fs-6 ms-1">
                                    Ethereum</span>
                            </td>
                            <td>$234.2</td>
                            <td>-5.67%</td>
                            <td>$87,789M</td>
                        </tr>

                        <tr>
                            <td>
                                <img :src="apiUrl + 'assets/images/galexy.png'" alt="" class="table_img">
                                <span class="fs-6 ms-1"> Galxe</span>
                            </td>
                            <td>$234.2</td>
                            <td>-5.67%</td>
                            <td>$87,789M</td>
                        </tr>
                        <tr>
                            <td>
                                <img :src="apiUrl + 'assets/images/green_token.png'" alt="" class="table_img">
                                <span class="fs-6 ms-1">Green Metaverse Token</span>
                            </td>
                            <td>$234.2</td>
                            <td>-5.67%</td>
                            <td>$87,789M</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="mt-5 mb-4">Sign up now to build your own portfolio for free!
            </h4>
            <button class="btn btn-primary px-5 py-2">Get Started</button>
        </div> -->
        <!-- table end -->


        <!-- card-section start -->
        <!-- <div class="container mt-5 text-dark">
            <div class="d-flex align-items-center">
                <h1>Trending on Ciaz Feed</h1>
                <a href="" class="ms-auto">
              
                </a>
            </div>
            <p class="fs-5 mt-2">Discover the latest crypto news and feed from news media and influencers.</p>
            <div class="row mt-4">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <a href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <img :src="apiUrl + 'assets/images/girl.jpg'" alt=""
                                                class="table_img rounded-circle">
                                            <span class="ms-3">Crypto Sadiya</span>
                                        </div>
                                        <p class="card-text">
                                            📊 Analyzing the BTC situation: At the start of the week, trading
                                            volumes
                                            have significantly increased.</p>
                                        <p>19 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <img :src="apiUrl + 'assets/images/girl.jpg'" alt=""
                                                class="table_img rounded-circle">
                                            <span class="ms-3">Crypto Sadiya</span>
                                        </div>
                                        <p class="card-text">
                                            📊 Analyzing the BTC situation: At the start of the week, trading
                                            volumes
                                            have significantly increased.</p>
                                        <p>19 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <a href="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <img :src="apiUrl + 'assets/images/girl.jpg'" alt=""
                                                class="table_img rounded-circle">
                                            <span class="ms-3">Crypto Sadiya</span>
                                        </div>
                                        <p class="card-text">
                                            📊 Analyzing the BTC situation: At the start of the week, trading
                                            volumes
                                            have significantly increased.</p>
                                        <p>19 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <img :src="apiUrl + 'assets/images/girl.jpg'" alt=""
                                                class="table_img rounded-circle">
                                            <span class="ms-3">Crypto Sadiya</span>
                                        </div>
                                        <p class="card-text">
                                            📊 Analyzing the BTC situation: At the start of the week, trading
                                            volumes
                                            have significantly increased.</p>
                                        <p>19 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <a href="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <img :src="apiUrl + 'assets/images/girl.jpg'" alt=""
                                                class="table_img rounded-circle">
                                            <span class="ms-3">Crypto Sadiya</span>
                                        </div>
                                        <p class="card-text">
                                            📊 Analyzing the BTC situation: At the start of the week, trading
                                            volumes
                                            have significantly increased.</p>
                                        <p>19 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <img :src="apiUrl + 'assets/images/girl.jpg'" alt=""
                                                class="table_img rounded-circle">
                                            <span class="ms-3">Crypto Sadiya</span>
                                        </div>
                                        <p class="card-text">
                                            📊 Analyzing the BTC situation: At the start of the week, trading
                                            volumes
                                            have significantly increased.</p>
                                        <p>19 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img :src="apiUrl + 'assets/images/feed-entry.svg'" alt="">
                    <h4 class="mt-5">World's largest crypto community
                    </h4>
                    <button class="btn btn-primary w-100 mt-4 py-2">Explore now</button>
                </div>
            </div>
        </div> -->
        <!-- card-section end -->
        <section class="layout_padding dark_bg white_fonts">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="full">
                            <div class="heading_main">
                                <h2><span>Why Choose Bit-Exchange?</span></h2>
                                <p>Investments and employment of the Blockchain Technologies. Optimize your
                                    business<br>case with blockchain technology and Smart Contracts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="full">
                            <div class="cryto_feature">
                                <ul>
                                    <li>
                                        <div class="pull-left"><img :src="apiUrl + 'assets/images/f2.png'" alt="#" />
                                        </div>
                                        <div>
                                            <h3>Fast Transaction</h3>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left"><img :src="apiUrl + 'assets/images/f3.png'" alt="#" />
                                        </div>
                                        <div>
                                            <h3>Secure and Stable</h3>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left"><img :src="apiUrl + 'assets/images/f4.png'" alt="#" />
                                        </div>
                                        <div>
                                            <h3>Coin Exchange</h3>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="full digital_earth">
                            <img :src="apiUrl + 'assets/images/bg3_new.png'" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="full">
                            <div class="cryto_feature right_text">
                                <ul>
                                    <li>
                                        <div>
                                            <h3>Mobile Apps</h3>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                        <div class="pull-right"><img :src="apiUrl + 'assets/images/f5.png'" alt="#" />
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h3>24/7 Trading</h3>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                        <div class="pull-right"><img :src="apiUrl + 'assets/images/f6.png'" alt="#" />
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h3>Free Consulting</h3>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                        <div class="pull-right"><img :src="apiUrl + 'assets/images/f1.png'" alt="#" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full our_work_type">
                            <div class="center"><img :src="apiUrl + 'assets/images/icon_1_b.png'" alt="#" /></div>
                            <div class="center">
                                <h4>Licensed in Luxembourg</h4>
                            </div>
                            <div class="center">
                                <p class="text-black">Taking the time to manage your money really pay off.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full our_work_type">
                            <div class="center"><img :src="apiUrl + 'assets/images/icon_2_b.png'" alt="#" /></div>
                            <div class="center">
                                <h4>No Hidden Fees</h4>
                            </div>
                            <div class="center">
                                <p class="text-black">Taking the time to manage your money really pay off.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full our_work_type">
                            <div class="center"><img :src="apiUrl + 'assets/images/icon_3_b.png'" alt="#" /></div>
                            <div class="center">
                                <h4>Instant Trading</h4>
                            </div>
                            <div class="center">
                                <p class="text-black">Taking the time to manage your money really pay off.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full our_work_type">
                            <div class="center"><img :src="apiUrl + 'assets/images/icon_4_b.png'" alt="#" /></div>
                            <div class="center">
                                <h4>Secure and Transparent</h4>
                            </div>
                            <div class="center">
                                <p class="text-black">Taking the time to manage your money really pay off.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>

            </div>
        </section>
        <!-- Earn section start -->
        <section class="layout_padding dark_bg white_fonts">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="full">
                            <div class="heading_main">
                                <h2><span>Earn daily rewards on your idle tokens</span></h2>
                                <p>Simple & Secure. Search popular coins and start earning.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center mt-5 text-dark">
                    <div class="row text-center">
                        <div class="col my-2">
                            <div class="card cardcolor rounded-4 card_earn">
                                <a href="">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/usdt.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">USDT</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/Bitcoin.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">BTC</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/bnb-bnb-logo.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">BNB</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/busd.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">BUSD</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/ethereum.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">ETH</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/Bitcoin.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">DOT</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/ada.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">ADA</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/shib.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">SHIB</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/Bitcoin.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">SOL</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col my-2">
                            <a href="">
                                <div class="card cardcolor rounded-4 card_earn">
                                    <div class="card-body text-center">
                                        <img :src="apiUrl + 'assets/images/matic.png'" alt="" class="earn_img">
                                        <p class="mt-3 fs-5 fw-bold text">MATIC</p>
                                        <p class="text">APR</p>
                                        <p class="fs-5 text">0.74%-146.65%</p>
                                        <i class="ri-arrow-right-s-line earn_icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-default mt-5">Start to Earn</a>
                </div>
            </div>
        </section>
        <section class="layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="full">
                            <div class="heading_main">
                                <h2><span>Feedback Our Investors</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="testimonial4"
                        class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                        data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="testimonial4_slide">
                                    <img :src="'assets/images/testimonial_cleint_icon.png'"
                                        class="img-circle img-responsive" />
                                    <p><span class="left_testmonial_qout"><i class="fa fa-quote-left"></i></span>Lorem
                                        Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book.
                                        <span class="right_testmonial_qout"><i class="fa fa-quote-right"></i></span>
                                    </p>
                                    <h4>Denwen Evile</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial4_slide">
                                    <img :src="'assets/images/testimonial_cleint_icon.png'"
                                        class="img-circle img-responsive" />
                                    <p><span class="left_testmonial_qout"><i class="fa fa-quote-left"></i></span>Lorem
                                        Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. <span
                                            class="right_testmonial_qout"><i class="fa fa-quote-right"></i></span> </p>
                                    <h4>Denwen Evile</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial4_slide">
                                    <img :src="'assets/images/testimonial_cleint_icon.png'"
                                        class="img-circle img-responsive" />
                                    <p><span class="left_testmonial_qout"><i class="fa fa-quote-left"></i></span>Lorem
                                        Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book.
                                        <span class="right_testmonial_qout"><i class="fa fa-quote-right"></i></span>
                                    </p>
                                    <h4>Denwen Evile</h4>
                                </div>
                            </div>
                        </div>
                        <a data-slide="prev" href="#testimonial4" class="left carousel-control"><i
                                class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#testimonial4" class="right carousel-control"><i
                                class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Earn section end -->

        <!-- crypto portfolio section start -->
        <!-- <div class="container mt-5 text-dark">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1>Build your crypto portfolio</h1>
                    <p class="fs-5 mt-2">Start your first trade with these easy steps.</p>
                    <div class="row mt-5">
                        <div class="col-2">
                            <img :src="apiUrl + 'assets/images/verify.png'" alt="" class="w-75">
                        </div>
                        <div class="col-10">
                            <h4>Verify your identity</h4>
                            <p>Complete the identity verification process to secure your account and transactions.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-2">
                            <img :src="apiUrl + 'assets/images/user.png'" alt="" class="w-75">
                        </div>
                        <div class="col-10">
                            <h4>Fund your account</h4>
                            <p>Add funds to your crypto account to start trading crypto..
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-2">
                            <img :src="apiUrl + 'assets/images/trading.webp'" alt="" class="w-75">
                        </div>
                        <div class="col-10">
                            <h4>Start trading</h4>
                            <p>You are good to go! Buy/Sell crypto.
                            </p>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-5 px-5 py-2" v-if="auth == false">Get Started</button>
                </div>
                <div class="col-lg-5 mt-5 d-flex justify-content-center">
                    <img :src="apiUrl + 'assets/images/phone.webp'" alt="" class="w-75">
                </div>
            </div>
        </div> -->
        <!-- crypto portfolio section end -->

        <!-- deck cards section start -->
        <!-- <div class="container mt-5 text-dark">
                <h1>Explore endless possibilities with Binance</h1>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card h-100 card-deck-shadow">
                                <img src="assets/images/deck-cards-1.webp" class="card-img-top w-100 mt-4" alt="...">
                                <div class="card-body mt-5 mb-5">
                                    <h3 class="card-title">Dive into the world of NFTs</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card h-100 card-deck-shadow">
                                <div class="card-body mt-5">
                                    <h3 class="card-title">Grow your business with Binance Pay</h3>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional
                                        content.</p>
                                </div>
                                <img src="assets/images/deck-cards-2.webp" class="card-img-top w-100 mt-5" alt="...">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card h-100 card-deck-shadow">
                                <img src="assets/images/deck-cards-3.webp" class="card-img-top w-100" alt="...">
                                <div class="card-body mt-5">
                                    <h3 class="card-title">Binance Earn</h3>
                                    <p class="card-text">Hold your crypto funds and start earning.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="btn btn-primary px-5 py-2 mt-5">Explore Now</button>
            </div> -->
        <!-- deck cards section end -->

        <!-- crypto exchange section start -->
        <!-- <div class="container mt-5 text-dark">
                <div class="d-flex align-items-center">
                    <h1>Your trusted crypto exchange</h1>
                    <a href="" class="ms-auto">view more <i class="ri-arrow-right-s-line"></i></a>
                </div>
                <p class="mt-2">Here at Binance, we are committed to user protection with strict protocols and
                    industry-leading technical measures.</p>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row mt-5">
                            <div class="col-2">
                                <img :src="apiUrl+'assets/images/verify.png'" alt="" class="w-75">
                            </div>
                            <div class="col-10">
                                <h4>Secure Asset Fund for Users (SAFU)</h4>
                                <p>Complete the identity verification process to secure your account and transactions.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-2">
                                <img :src="apiUrl+'assets/images/verify.png'" alt="" class="w-75">
                            </div>
                            <div class="col-10">
                                <h4>Personalised Access Control</h4>
                                <p>Complete the identity verification process to secure your account and transactions.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-2">
                                <img :src="apiUrl+'assets/images/verify.png'" alt="" class="w-75">
                            </div>
                            <div class="col-10">
                                <h4>Advanced Data Encryption</h4>
                                <p>Complete the identity verification process to secure your account and transactions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/trusted-section.webp" alt="" class="w-100">
                    </div>
                </div>
                <button class="btn btn-primary px-5 py-2 mt-5">Get Started</button>
            </div> -->
        <!-- crypto exchange section end -->

        <!-- Trade anytime section start -->
        <!-- <div class="container mt-5 text-dark">
                <div class="d-flex align-items-center">
                    <h1>Your trusted crypto exchange</h1>
                    <a href="" class="ms-auto">view more <i class="ri-arrow-right-s-line"></i></a>
                </div>
                <p class="fs-5 mt-2">Stay in the know with our app and desktop client.</p>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <img src="assets/images/laptop_2.png" alt="" class="w-75">
                    </div>
                </div>
            </div> -->
        <!-- trade anytime section end -->

        <!-- Need help start -->
        <!-- <div class="container mt-5 text-dark">
            <h1>Need help?</h1>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img :src="apiUrl + 'assets/images/user.png'" alt="" style="width:70px;">
                                </div>
                                <div class="col-lg-9">
                                    <p class="fs-5 fw-bold mb-0">24/7 Chat Support</p>
                                    <p style="font-size: 13px;" class="mb-0 mt-1">Get 24/7 chat support with our
                                        friendly
                                        customer service agents at your service.</p>
                                    <div class="mt-3"><a href="#" class="text-primary">chat now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- <div class="col-lg-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img :src="apiUrl+'assets/images/user.png'" alt="" class="w-100">
                                    </div>
                                    <div class="col-lg-9">
                                        <p class="fs-5 fw-bold mb-0">24/7 Chat Support</p>
                                        <p style="font-size: 13px;" class="mb-0 mt-1">Get 24/7 chat support with our
                                            friendly
                                            customer service agents at your service.</p>
                                        <div class="mt-3"><a href="#" class="text-primary">chat now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img :src="apiUrl+'assets/images/user.png'" alt="" class="w-100">
                                    </div>
                                    <div class="col-lg-9">
                                        <p class="fs-5 fw-bold mb-0">24/7 Chat Support</p>
                                        <p style="font-size: 13px;" class="mb-0 mt-1">Get 24/7 chat support with our
                                            friendly
                                            customer service agents at your service.</p>
                                        <div class="mt-3"><a href="#" class="text-primary">chat now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        <!-- </div>
        </div> -->
        <!-- Need help end -->

        <!-- footer start -->
        <Footer />
    </div>
</template>

<script>
import pagination from 'vue-pagination-2';
import moment from 'moment';
import VueCarousel from 'vue-carousel';
export default {
    name: 'Index',
    components: {
        pagination,
        VueCarousel
    },
    data() {
        return {
            user: {},
            auth: false,
            apiUrl: process.env.mix_api_url,
            upi: {},
            form: {
                amount: "",
                upi_id: ""
            },
            image: "",
            error: false,
            success: false,
            balance: 0,
            usdt: 0,
            coin: "BTC",
            price: 0,
            est_value: 0,
            trades: [],
            records: 1,
            page: 1,
            per_page: 1,
            last_page: 1,
            btc_usd:'',
            btc_eur:'',
            btc_vol:'',
            eur_trades:''

        }
    },
    created() {
        this.getAuth();
        this.userDetails();
        this.getPrice();
        this.getUpi();
        this.getBalance();
        this.usdtBalance();
        this.tradeHistory();
    },
    methods: {
        moment(date) {
            return moment.utc(date);
        },
        value() {
            alert("Link Copied");
            return this.upi.upi_id;
        },
        getPrice() {
            axios.post(this.apiUrl + "api/getPrice", {
                coin: this.coin
            }).then(res => {
                this.price = res.data.price;
            }).catch(err => {
                console.log(err);
            });
        },
        getBalance() {
            axios.post(this.apiUrl + "api/getBalance", {
                coin: this.coin,
                token: localStorage.token
            }).then(res => {
                this.balance = res.data.balance;
                this.est_value = (this.price * this.balance).toFixed(4);
            }).catch(err => {
                console.log(err);
            });
        },
        usdtBalance() {
            axios.post(this.apiUrl + "api/usdtBalance", {
                token: localStorage.token
            }).then(res => {
                this.usdt = res.data.balance;
            }).catch(err => {
                console.log(err);
            });
        },
        userDetails() {
            axios.post(this.apiUrl + 'api/getUserDetails', {
                token: localStorage.token
            }).then(res => {
                this.user = res.data.user;
                this.balance = res.data.balance;
            }).catch(err => {
                console.log(err);
            });
        },

        getAuth(value) {
            if (value != undefined)
                this.auth = value;
        },
        getUpi() {
            axios.post(this.apiUrl + 'api/upi').then(res => {
                this.upi = res.data.upi;
            }).catch(err => {
                console.log(err);
            });
        },
        async uploadFile(e) {
            this.image = e.target.files[0];

        },
        deposit() {
            var forms = new FormData();
            forms.append('image', this.image);
            forms.append('amount', this.form.amount);
            forms.append('upi', this.form.upi_id);
            forms.append('token', localStorage.token);

            axios.post(this.apiUrl + "api/payment", forms).then(res => {
                console.log(res);
                var message = res.data.message;
                this.error = false;
                this.success = message;
                this.form.amount = "";
                this.form.upi_id = "";
                this.image = "";

            }).catch(err => {
                console.log(err);
                var message = err.response.data.message;
                this.success = false;
                this.error = message;
                this.form.amount = "";
                this.image = "";
                this.form.upi_id = "";
            });
        },
        tradeHistory() {
            axios
                .post(this.apiUrl + "api/tradeHistory?page=" + this.page, {
                    token: localStorage.token
                })
                .then((res) => {
                    this.trades = res.data.trades.data;
                    this.page = res.data.trades.current_page;
                    this.records = res.data.trades.total;
                    this.per_page = res.data.trades.per_page;
                    this.last_page = res.data.trades.last_page;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    mounted() {

        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'https://www.livecoinwatch.com/static/lcw-widget.js')
        document.head.appendChild(recaptchaScript);

        const socket = new WebSocket("wss://stream.binance.com:9443/ws/!ticker@arr");
        socket.onopen = function(e) {
            console.log(e);
        };
        var vm = this;
        socket.onmessage = function(event) {
            var data = JSON.parse(event.data);
           for(var i=0;i<data.length;i++){
            var symbol = data[i].s;
            if(symbol == "BTCUSDT"){
                vm.btc_usd = data[i].c;
                vm.btc_vol = data[i].v;
            }
            if(symbol == "BTCEUR"){
                vm.btc_eur = data[i].c;
                vm.eur_trades = data[i].n;
            }
           }
        }
        
    },

}
</script>

<style>
/* body {
    overflow-y: scroll !important;
} */
</style>