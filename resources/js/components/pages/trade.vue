<template>
    <div>
        <Header />
        <div class="main px-lg-4 px-md-4">
            <!-- Body: Header -->
            <div class="header">
                <!-- topmain menu -->
                <div class="container-xxl position-relative">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow menu slidedown position-absolute zindex-modal">
                                <div class="card-body p-3">
                                    <div class="row g-3">
                                        <div class="d-none d-lg-block col-lg-2 text-start">
                                            <h6 class="px-2 text-primary mb-0">
                                                Download App
                                            </h6>
                                            <img src="user/assets//images/qr-code.png" alt="Download App"
                                                class="img-fluid" />
                                        </div>
                                        <div class="col-lg-10">
                                            <ul
                                                class="menu-grid list-unstyled row row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mb-0 mt-lg-3">
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 38 38">
                                                                <circle xmlns="http://www.w3.org/2000/svg" cx="19"
                                                                    cy="19" r="11" style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    " data-st="fill:var(--chart-color4);"></circle>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M19,2c9.374,0,17,7.626,17,17c0,8.304-6.011,15.3-14,16.725v-2.025C28.847,32.309,34,26.257,34,19  c0-8.284-6.716-15-15-15S4,10.716,4,19s6.716,15,15,15c0.338,0,0.668-0.028,1-0.05V36h-1C9.626,36,2,28.374,2,19S9.626,2,19,2z   M20,23.417c0-2.067,0.879-2.99,1.896-4.06C22.882,18.322,24,17.148,24,15c0-2.757-2.243-5-5-5s-5,2.243-5,5h2c0-1.654,1.346-3,3-3  s3,1.346,3,3c0,1.348-0.651,2.032-1.552,2.979C19.357,19.124,18,20.55,18,23.417V26h2V23.417z M20,28h-2v2h2V28z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                Help
                                                            </p>
                                                            <small class="text-muted">How May I Help
                                                                You?</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- <li class="col">
                                                    <a
                                                        href="#"
                                                        class="d-flex color-700"
                                                    >
                                                        <div class="avatar">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                x="0px"
                                                                y="0px"
                                                                width="24px"
                                                                height="24px"
                                                                viewBox="0 0 24 24"
                                                            >
                                                                <rect
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="st2"
                                                                    width="24"
                                                                    height="24"
                                                                    style="
                                                                        fill: none;
                                                                    "
                                                                    fill="none"
                                                                ></rect>
                                                                <path
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    d="M13,1.07V9h7C20,4.92,16.95,1.56,13,1.07z M4,15c0,4.42,3.58,8,8,8s8-3.58,8-8v-4H4V15z   M11,1.07C7.05,1.56,4,4.92,4,9h7V1.07z"
                                                                    style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    "
                                                                    data-st="fill:var(--chart-color4);"
                                                                ></path>
                                                                <path
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="st0"
                                                                    d="M13,1.07V9h7C20,4.92,16.95,1.56,13,1.07z M11,1.07C7.05,1.56,4,4.92,4,9h7V1.07z"
                                                                    style="
                                                                        opacity: 0.2;
                                                                        fill: #ffffff;
                                                                    "
                                                                    fill="rgb(255, 255, 255)"
                                                                ></path>
                                                                <path
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="st0"
                                                                    d="M6,15c-1.66,0-2.491,0.82-2.941,2.418C2.628,18.939,2.625,19.625,1,20.407C1.92,21.38,3.49,22,5,22  c2.21,0,4-1.563,4-3.719C9,16.389,7.66,15,6,15z M21.49,5C20,7,17.96,10.04,16,12c-1.48,1.48-5.48,3.93-5.48,3.93L8.07,13.48  c0,0,2.45-4,3.93-5.48c1.96-1.96,5-4,7-5.48c0.78-0.58,1.8-0.69,2.49,0C22.17,3.2,22.06,4.22,21.49,5z"
                                                                ></path>
                                                                <path
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="st0"
                                                                    d="M16,12c-1.479,1.48-5.477,3.927-5.477,3.927l-2.449-2.45c0,0,2.445-3.998,3.926-5.477L16,12z"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <div
                                                            class="flex-fill text-truncate"
                                                        >
                                                            <p class="h6 mb-0">
                                                                UI Components
                                                            </p>
                                                            <small
                                                                class="text-muted"
                                                                >Bootstrap
                                                                Components</small
                                                            >
                                                        </div>
                                                    </a>
                                                </li> -->
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 38 38">
                                                                <path xmlns="http://www.w3.org/2000/svg"
                                                                    d="M22,6h2c0.875,0,1.513,0.657,2,1.31V10h4.501L32,12v24H22V6z"
                                                                    style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    " data-st="fill:var(--chart-color4);"></path>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M10,14v18h18V14h-6v2h4v14h-6v-2.059c1.989-0.236,3-1.22,3-2.941c0-0.805-0.27-1.5-0.78-2.01  C21.226,21.998,19.654,22.003,19,22c-0.352-0.007-1.398,0.002-1.806-0.405C17.111,21.512,17,21.359,17,21c0-0.469,0-1,2-1  c1.122,0,1.788,0.205,2.297,0.709l1.406-1.422c-0.704-0.697-1.568-1.083-2.703-1.222V14H10z M18,18.059  c-1.988,0.236-3,1.221-3,2.941c0,0.805,0.271,1.5,0.781,2.01c0.994,0.992,2.543,0.989,3.22,0.99  c0.343-0.008,1.397-0.002,1.805,0.405C20.89,24.488,21,24.641,21,25c0,0.469,0,1-2,1c-1.121,0-1.787-0.205-2.297-0.709l-1.406,1.422  c0.705,0.697,1.568,1.083,2.703,1.222V30h-6V16h6V18.059z M30,14v20H8V4h15c0.46,0,1,0.26,1,1v3H12v2h12v2h7.99  c0,0-6.08-8.17-6.62-8.87C24.83,2.44,23.99,2,23,2H6v34h26V14H30z M26,7.31L28.01,10H26V7.31z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                Invoices
                                                            </p>
                                                            <small class="text-muted">Simple, List,
                                                                Email Invoice
                                                            </small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 24 24">
                                                                <path xmlns="http://www.w3.org/2000/svg"
                                                                    d="M20,20c0,1.104-0.896,2-2,2H6c-1.104,0-2-0.896-2-2V4c0-1.104,0.896-2,2-2h8l6,6V20z"
                                                                    style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    " data-st="fill:var(--chart-color4);"></path>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M16,8c-1.1,0-1.99-0.9-1.99-2L14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h1v-1.25C7,19.09,10.33,18,12,18  s5,1.09,5,2.75V22h1c1.1,0,2-0.9,2-2V8H16z M12,17c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3S13.66,17,12,17z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                SalarySlip
                                                            </p>
                                                            <small class="text-muted">Simple
                                                                SalarySlip</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 38 38">
                                                                <circle xmlns="http://www.w3.org/2000/svg"
                                                                    class="stshockcolor" cx="19" cy="19" r="11" style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    " data-st="fill:var(--chart-color4);"></circle>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M36,19c0,8.35-6.05,15.31-14,16.73V33.7c6.84-1.391,12-7.46,12-14.7c0-8.27-6.73-15-15-15C10.73,4,4,10.73,4,19  c0,8.27,6.73,15,15,15c0.34,0,0.67-0.01,1-0.04v2.01C19.67,35.99,19.34,36,19,36C9.63,36,2,28.37,2,19S9.63,2,19,2S36,9.63,36,19z   M19.257,17.588C15.516,16.591,15,15.487,15,14.443c0-1.43,1.4-2.185,3-2.383v3.008c0.412,0.175,0.973,0.375,1.772,0.587  c0.08,0.021,0.149,0.046,0.228,0.068v-3.596c1.726,0.359,3,1.504,3,2.872h2c0-2.442-2.159-4.478-5-4.912V8h-2v2.059  c-2.979,0.285-5,1.998-5,4.384c0,3.126,2.903,4.321,5.743,5.078C20.686,20.037,23,21.074,23,23.085c0,1.611-1.107,2.647-3,2.868  v-3.839c-0.468-0.244-1.069-0.475-1.771-0.661c-0.07-0.019-0.152-0.041-0.229-0.062v4.456c-1.692-0.393-3-1.549-3-2.848h-2  c0,2.424,2.153,4.448,5,4.903V30h2v-2.036c3.445-0.305,5-2.601,5-4.879C25,21.273,24.004,18.849,19.257,17.588z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                Expenses
                                                            </p>
                                                            <small class="text-muted">Expenses
                                                                List</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 24 24">
                                                                <rect xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" style="
                                                                        fill: none;
                                                                    " fill="none"></rect>
                                                                <path xmlns="http://www.w3.org/2000/svg"
                                                                    d="M20,20c0,1.104-0.896,2-2,2H6c-1.104,0-2-0.896-2-2V4c0-1.104,0.896-2,2-2h8l6,6V20z"
                                                                    style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    " data-st="fill:var(--chart-color4);"></path>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M11,13h2v2h-2V13z M20,8v12c0,1.1-0.9,2-2,2H6c-1.1,0-2-0.9-2-2V4c0-1.1,0.9-2,2-2h8l0.01,4  c0,1.1,0.891,2,1.99,2H20z M17,11h-2V9h-2v2h-2V9H9v2H7v2h2v2H7v2h2v2h2v-2h2v2h2v-2h2v-2h-2v-2h2V11z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                Stater page
                                                            </p>
                                                            <small class="text-muted">Start working
                                                                with</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 32 32">
                                                                <path xmlns="http://www.w3.org/2000/svg"
                                                                    d="M25.5,9.78V28.5c0,0.56-0.44,1-1,1h-17c-0.56,0-1-0.44-1-1v-25c0-0.55,0.45-1,1-1h10.72  L25.5,9.78z"
                                                                    style="
                                                                        fill: var(
                                                                            --primary-color
                                                                        );
                                                                    " data-st="fill:var(--chart-color4);"></path>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M19.5,9.5c-0.561,0-1-0.439-1-1V2.793L25.207,9.5H19.5z">
                                                                </path>
                                                                <path xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    d="M19,16c0-2.65,0.54-4,2-4c0.98,0,1.7,0.63,2,1.83l-0.89,0.6C21.92,13.49,21.43,13,21,13c-0.62,0-1,1.01-1,3  s0.38,3,1,3c0.43,0,0.92-0.49,1.11-1.43l0.89,0.6c-0.3,1.2-1.02,1.83-2,1.83C19.54,20,19,18.65,19,16z M18,16c0,3-0.9,4-2,4  c-1.1,0-2-1-2-4s0.9-4,2-4C17.1,12,18,13,18,16z M17,16c0-0.7,0-3-1-3s-1,2.3-1,3s0,3,1,3S17,16.7,17,16z M13,16.04  c0,2.88-0.8,3.96-2.4,3.96C9.8,20,9,20,9,20v-8c0,0,0.8,0,1.6,0C12.2,12,13,13.15,13,16.04z M12,16.03c0-2.17-0.52-3.03-1.33-3.03  c-0.4,0-0.67,0-0.67,0v6c0,0,0.27,0,0.67,0C11.48,19,12,18.2,12,16.03z M26,10v18.5c0,0.828-0.672,1.5-1.5,1.5h-17  C6.672,30,6,29.328,6,28.5v-25C6,2.672,6.672,2,7.5,2H18c0.621,0,0.646,0.232,1,0.586L25.414,9C25.768,9.354,26,9.368,26,10z   M19,8.5C19,8.776,19.224,9,19.5,9c0,0,2.639,0,4.5,0l-5-5V8.5z M25,10h-5.5C18.672,10,18,9.328,18,8.5V3c0,0-9.5,0-10.5,0  C7.225,3,7,3.224,7,3.5v25C7,28.776,7.225,29,7.5,29h17c0.275,0,0.5-0.224,0.5-0.5C25,28,25,10,25,10z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                Documentation
                                                            </p>
                                                            <small class="text-muted">How to
                                                                Install</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="d-flex color-700">
                                                        <div class="avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 24 24">
                                                                <rect xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" fill="none"></rect>
                                                                <polygon xmlns="http://www.w3.org/2000/svg" class="st0"
                                                                    points="22,6 22,12 20,12 20,9.42 13,16.41 8.95,12.36 2.65,17.76 1.35,16.24 9.05,9.64   13,13.59 18.58,8 16,8 16,6 ">
                                                                </polygon>
                                                                <polygon xmlns="http://www.w3.org/2000/svg" class="st1"
                                                                    points="11.91,12.5 10.58,13.99 8.95,12.36 2.65,17.76 1.35,16.24 9.05,9.64 ">
                                                                </polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-fill text-truncate">
                                                            <p class="h6 mb-0">
                                                                Changelog
                                                            </p>
                                                            <small class="text-muted">Changelog
                                                                Update</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body: Titel Header -->
            <div class="body-header border-bottom d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center g-2">
                        <div class="col">
                            <!-- Pretitle -->
                            <h1 class="h4 mt-1">Exchange</h1>
                        </div>
                        <!-- <div class="col-12 col-md-6 text-md-end">
                <a href="https://themeforest.net/user/pixelwibes" title="Download" target="_blank" class="btn btn-white border lift">Download</a>
                <button type="button" class="btn btn-dark lift">Generate Report</button>
            </div> -->
                    </div>
                    <!-- Row end  -->
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="dropdown-1 dropend d-flex mb-4 px-5">
                        <i class="fa-solid fa-arrow-right-arrow-left mt-2"></i>
                        <a class="nav-link text-light dropdown-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                            role="button" aria-controls="offcanvasExample">
                            {{ coin }}USDT
                        </a>
                    </div>
                    <div class="offcanvas offcanvas-start bg-black sm-offcanvas" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel" style="max-width: 280px" :class="{ show: show }">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="list-unstyled" v-if="symbols.length > 0">
                                <li class="offcanvas-nav active ps-5 nav_items mb-3 mt-3 p-2" v-for="symbol in symbols">
                                    <a class="offcanvas-item text-light fs-6" href="#" @click="
                                coins(symbol.name),
                                getBalance(),
                                getPrice()
                                " data-bs-dismiss="offcanvas" aria-label="Close">
                                        {{ symbol.name }}USDT</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="offcanvas-body">
                            <ul class="list-unstyled">
                                <li class="offcanvas-nav active ps-5 nav_items mb-3 mt-3 p-2">
                                    <a class="offcanvas-item text-light fs-6" href="#" @click="coins('BTC'),getBalance(),getPrice()" data-bs-dismiss="offcanvas"
                                aria-label="Close"> BTCUSDT</a>
                                </li>
                                <li class="offcanvas-nav ps-5 nav_items mb-3 p-2">
                                    <a class="offcanvas-item text-light fs-6" href="#" @click="coins('BNB'),getBalance(),getPrice()" data-bs-dismiss="offcanvas"
                                aria-label="Close">BNBUSDT</a>
                                </li>
                                <li class="offcanvas-nav ps-5 nav_items p-2 ">
                                    <a class="offcanvas-item text-light fs-6" href="#" @click="coins('TRX'),getBalance(),getPrice()" data-bs-dismiss="offcanvas"
                                aria-label="Close">TRXUSDT</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="row g-3 mb-3">
                        <!-- <div class="col-5 col-md-1">
                            <select
                                name="coin"
                                class="form-control text-center border-0"
                                v-model="coin"
                                @change="getBalance(), getPrice()"
                            >
                                <option value="BTC">BTCUSDT </option>
                                <option value="BNB">BNBUSDT</option>
                                <option value="TRX">TRXUSDT</option>
                            </select>
                        </div> -->

                        <ul class="nav nav-tabs tab-body-header rounded d-flex mt-3 d-lg-none" role="tablist">
                            <li class="nav-item col p-0 text-center" role="presentation">
                                <a class="nav-link active text-center" data-bs-toggle="tab" href="#trade" role="tab"
                                    aria-selected="true" @click="showTrade">Trade</a>
                            </li>
                            <li class="nav-item col p-0 text-center" role="presentation">
                                <a class="nav-link text-center" data-bs-toggle="tab" href="#graph" role="tab"
                                    aria-selected="false" tabindex="-1" @click="showChart">Chart</a>
                            </li>
                        </ul>
                        <!-- <div class="col-7 text-center">
                            <span class="icon-GwQQdU8S" @click="graphToggle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28" fill="currentColor"><path d="M17 11v6h3v-6h-3zm-.5-1h4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5z"></path><path d="M18 7h1v3.5h-1zm0 10.5h1V21h-1z"></path><path d="M9 8v12h3V8H9zm-.5-1h4a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 .5-.5z"></path><path d="M10 4h1v3.5h-1zm0 16.5h1V24h-1z"></path></svg></span>
                        </div> -->
                        <div class="col-md-12 mt-2">
                            <div class="card" :class="{ 'd-none d-md-block': mobile }">
                                <div class="card-body">
                                    <div v-if="coin == 'NPF'">
                                        <div id="chart" class="d-flex jusify-content-center"></div>
                                        <!-- <canvas ref="chartCanvas"></canvas> -->
                                    </div>

                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container" v-if="coin != 'NPF'">
                                        <div id="tradingview_e05b7" class="chart_height">
                                            <div id="tradingview_319a7-wrapper" style="
                                                    position: relative;
                                                    box-sizing: content-box;
                                                    width: 100%;
                                                    height: 100%;
                                                    margin: 0 auto !important;
                                                    padding: 0 !important;
                                                    font-family: -apple-system,
                                                        BlinkMacSystemFont,
                                                        'Trebuchet MS', Roboto,
                                                        Ubuntu, sans-serif;
                                                ">
                                                <div style="
                                                        width: 100%;
                                                        height: 100%;
                                                        background: transparent;
                                                        padding: 0 !important;
                                                    ">
                                                    <!-- <iframe id="tradingview_319a7" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_319a7&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;calendar=1&amp;hotlist=1&amp;studies=%5B%5D&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=in&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD#%7B%22page-uri%22%3A%22__NHTTP__%22%7D" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen="">
    </iframe> -->
                                                    <iframe id="tradingview_319a7" :src="'https://s.tradingview.com/widgetembed/?frameElementId=tradingview_319a7&amp;symbol=' +
                                coin +
                                'USDT&amp;interval=D&amp;hidesidetoolbar=0&theme=dark&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;calendar=1&amp;hotlist=1&amp;studies=%5B%5D&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=in&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD#%7B%22page-uri%22%3A%22__NHTTP__%22%7D'
                                " style="
                                                            width: 100%;
                                                            height: 100%;
                                                            margin: 0 !important;
                                                            padding: 0 !important;
                                                        " frameborder="0" allowtransparency="true" scrolling="no"
                                                        allowfullscreen="">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                    <div class="my-5" v-if="trade_on == true">
                        <h3 class="text-center">Trading will be Coming Soon</h3>
                    </div>
                    <div :class="{ 'd-none': trade_on }">
                        <div class="row g-3 mb-3" :class="{ 'd-none d-md-block': trade }">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div
                                        class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold text-light">Spot</h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" href="#">Market</a>
                                            </li>
                                            <!-- <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#Limit" role="tab" aria-selected="true">Limit</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Market" role="tab" aria-selected="false" tabindex="-1">Market</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Stoplimit" role="tab" aria-selected="false" tabindex="-1">Stop Limit</a></li> -->
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="Limit" role="tabpanel">
                                                <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-3"
                                                    role="tablist">
                                                    <li class="nav-item col p-0" role="presentation">
                                                        <a class="nav-link active text-center" data-bs-toggle="tab"
                                                            href="#buy" role="tab" aria-selected="true">Buy</a>
                                                    </li>
                                                    <li class="nav-item col p-0" role="presentation">
                                                        <a class="nav-link text-center" data-bs-toggle="tab"
                                                            href="#sell" role="tab" aria-selected="false"
                                                            tabindex="-1">Sell</a>
                                                    </li>
                                                </ul>
                                                <div class="row g-3 tab-content">
                                                    <div class="col-lg-12 tab-pane fade show active" id="buy"
                                                        role="tabpanel">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-3">
                                                            <span class="small text-muted">Avbl</span>
                                                            <span class="">{{
                                usdt
                            }}
                                                                USDT</span>
                                                        </div>
                                                        <form>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Price</span>
                                                                <input type="text" class="form-control" v-model="price
                                " readonly />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Amount</span>
                                                                <input type="text" class="form-control" v-model="coin_amount
                                " @input="calUsdt
                                " />
                                                                <span class="input-group-text">{{
                                coin
                            }}</span>
                                                            </div>
                                                            <div class="input-group mb-3 px-3">
                                                                <div
                                                                    class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                    <span class="text-muted">0%</span>
                                                                    <span class="text-muted px-2">25%</span>
                                                                    <span class="text-muted px-1">50%</span>
                                                                    <span class="text-muted px-1">75%</span>
                                                                    <span class="text-muted">100%</span>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="5"
                                                                    value="1" step="1" v-model="buy_per
                                " @change="buyPer
                                " />
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Total</span>
                                                                <input type="text" class="form-control" v-model="total
                                " @input="totalBuy
                                " />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <small class="text-danger" v-if="error">{{
                                error
                            }}</small>
                                                            <button type="button"
                                                                class="btn flex-fill btn-light-success fs-5 text-uppercase w-100"
                                                                @click="buyCoin" :disabled="buy_disable
                                ">
                                                                BUY {{ coin }}
                                                                <div class="spinner-grow spinner-grow-sm text-success"
                                                                    role="status" :class="{
                                'd-none':
                                    spin,
                            }"></div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-12 tab-pane fade" id="sell" role="tabpanel">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-3">
                                                            <span class="small text-muted">Avbl</span>
                                                            <span class="">{{ balance }}
                                                                {{ coin }}</span>
                                                        </div>
                                                        <form>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Price</span>
                                                                <input type="text" class="form-control" v-model="price
                                " readonly />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Amount</span>
                                                                <input type="text" class="form-control" v-model="coin_sell
                                " @input="calSell
                                " />
                                                                <span class="input-group-text">{{
                                coin
                            }}</span>
                                                            </div>
                                                            <div class="input-group mb-3 px-3">
                                                                <div
                                                                    class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                    <span class="text-muted">0%</span>
                                                                    <span class="text-muted px-2">25%</span>
                                                                    <span class="text-muted px-1">50%</span>
                                                                    <span class="text-muted px-1">75%</span>
                                                                    <span class="text-muted">100%</span>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="5"
                                                                    value="1" step="1" v-model="sell_per
                                " @change="sellPer
                                " />
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Total</span>
                                                                <input type="text" class="form-control" v-model="total_sell
                                " @input="totalSell
                                " />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <small class="text-danger" v-if="error_sell
                                ">{{
                                error_sell
                            }}</small>

                                                            <button type="button"
                                                                class="btn flex-fill btn-light-danger  fs-5 text-uppercase px-5 w-100"
                                                                @click="sellCoin
                                " :disabled="sell_disable
                                ">
                                                                SELL {{ coin }}
                                                                <div class="spinner-grow spinner-grow-sm text-danger"
                                                                    role="status" :class="{
                                'd-none':
                                    spin,
                            }"></div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Limit Tab End -->

                                            <div class="tab-pane fade" id="Market" role="tabpanel">
                                                <div class="row g-3">
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-3">
                                                            <span class="small text-muted">Avbl</span>
                                                            <span class="">310.800000
                                                                USDT</span>
                                                        </div>
                                                        <form>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Price</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Market" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <button type="button" class="btn btn-outline-secondary">
                                                                    Amount
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span class="visually-hidden">Toggle
                                                                        Dropdown</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Amount</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Total</a>
                                                                    </li>
                                                                </ul>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">{{
                                coin
                            }}</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div
                                                                    class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                    <span class="text-muted">0%</span>
                                                                    <span class="text-muted px-2">25%</span>
                                                                    <span class="text-muted px-1">50%</span>
                                                                    <span class="text-muted px-1">75%</span>
                                                                    <span class="text-muted">100%</span>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="5"
                                                                    value="1" step="1" />
                                                            </div>
                                                            <button type="submit"
                                                                class="btn flex-fill btn-light-success fs-5 text-uppercase w-100">
                                                                BUY BTC
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-3">
                                                            <span class="small text-muted">Avbl</span>
                                                            <span class="">0.0000000
                                                                {{ coin }}</span>
                                                        </div>
                                                        <form>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Price</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Market" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <button type="button" class="btn btn-outline-secondary">
                                                                    Amount
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span class="visually-hidden">Toggle
                                                                        Dropdown</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Amount</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Total</a>
                                                                    </li>
                                                                </ul>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">{{
                                coin
                            }}</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div
                                                                    class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                    <span class="text-muted">0%</span>
                                                                    <span class="text-muted px-2">25%</span>
                                                                    <span class="text-muted px-1">50%</span>
                                                                    <span class="text-muted px-1">75%</span>
                                                                    <span class="text-muted">100%</span>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="5"
                                                                    value="1" step="1" />
                                                            </div>
                                                            <button type="submit"
                                                                class="btn flex-fill btn-light-danger  fs-5 text-uppercase px-5 w-100">
                                                                SELL {{ coin }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Market Tab End -->

                                            <div class="tab-pane fade" id="Stoplimit" role="tabpanel">
                                                <div class="row g-3">
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-3">
                                                            <span class="small text-muted">Avbl</span>
                                                            <span class="">310.800000
                                                                USDT</span>
                                                        </div>
                                                        <form>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Stop</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Limit</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Amount</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">{{
                                coin
                            }}</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div
                                                                    class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                    <span class="text-muted">0%</span>
                                                                    <span class="text-muted px-2">25%</span>
                                                                    <span class="text-muted px-1">50%</span>
                                                                    <span class="text-muted px-1">75%</span>
                                                                    <span class="text-muted">100%</span>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="5"
                                                                    value="1" step="1" />
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Total</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn flex-fill btn-light-success fs-5 text-uppercase w-100">
                                                                BUY {{ coin }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-3">
                                                            <span class="small text-muted">Avbl</span>
                                                            <span class="">0.0000000
                                                                {{ coin }}</span>
                                                        </div>
                                                        <form>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Stop</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Limit</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Amount</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">{{
                                coin
                            }}</span>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div
                                                                    class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                    <span class="text-muted">0%</span>
                                                                    <span class="text-muted px-2">25%</span>
                                                                    <span class="text-muted px-1">50%</span>
                                                                    <span class="text-muted px-1">75%</span>
                                                                    <span class="text-muted">100%</span>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="5"
                                                                    value="1" step="1" />
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Total</span>
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn flex-fill btn-light-danger  fs-5 text-uppercase px-5 w-100">
                                                                SELL {{ coin }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Stoplimit Tab End -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-none">
                                    <div
                                        class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold">
                                            {{ coin }}/USDT Order Book
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                            <!-- <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#Both" role="tab" aria-selected="true">Both</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Long" role="tab" aria-selected="false" tabindex="-1">Long</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Short" role="tab" aria-selected="false" tabindex="-1">Short</a></li> -->
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="Both" role="tabpanel">
                                                <div id="priceTableup_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="priceTableup_length">
                                                                <label>Show
                                                                    <select name="priceTableup_length"
                                                                        aria-controls="priceTableup"
                                                                        class="form-select form-select-sm">
                                                                        <option value="10">
                                                                            10
                                                                        </option>
                                                                        <option value="25">
                                                                            25
                                                                        </option>
                                                                        <option value="50">
                                                                            50
                                                                        </option>
                                                                        <option value="100">
                                                                            100
                                                                        </option>
                                                                    </select>
                                                                    entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="priceTableup_filter" class="dataTables_filter">
                                                                <label>Search:<input type="search"
                                                                        class="form-control form-control-sm"
                                                                        placeholder=""
                                                                        aria-controls="priceTableup" /></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="priceTableup"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid" aria-describedby="priceTableup_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="dt-body-right sorting_asc"
                                                                            tabindex="0" aria-controls="priceTableup"
                                                                            rowspan="1" colspan="1" style="
                                                                                width: 88px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Price(USDT): activate to sort column descending">
                                                                            Price(USDT)
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="priceTableup" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 94px;
                                                                            "
                                                                            aria-label="Amount(BTC): activate to sort column ascending">
                                                                            Amount({{
                                coin
                            }})
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="priceTableup" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 98px;
                                                                            "
                                                                            aria-label="Total: activate to sort column ascending">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42925.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42928.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42978.90</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43925.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43928.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43978.90</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43979.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.03855
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            10,978.37750
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">44279.20</span>
                                                                        </td>
                                                                        <td>
                                                                            0.17214
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            76,053.29043
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="priceTableup_info"
                                                                role="status" aria-live="polite">
                                                                Showing 1 to 10
                                                                of 10 entries
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="priceTableup_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="priceTableup_previous">
                                                                        <a href="#" aria-controls="priceTableup"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="priceTableup"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="priceTableup_next">
                                                                        <a href="#" aria-controls="priceTableup"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="priceTabledown_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="priceTabledown_length">
                                                                <label>Show
                                                                    <select name="priceTabledown_length"
                                                                        aria-controls="priceTabledown"
                                                                        class="form-select form-select-sm">
                                                                        <option value="10">
                                                                            10
                                                                        </option>
                                                                        <option value="25">
                                                                            25
                                                                        </option>
                                                                        <option value="50">
                                                                            50
                                                                        </option>
                                                                        <option value="100">
                                                                            100
                                                                        </option>
                                                                    </select>
                                                                    entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="priceTabledown_filter" class="dataTables_filter">
                                                                <label>Search:<input type="search"
                                                                        class="form-control form-control-sm"
                                                                        placeholder=""
                                                                        aria-controls="priceTabledown" /></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="priceTabledown"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid" aria-describedby="priceTabledown_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="dt-body-right sorting_asc"
                                                                            tabindex="0" aria-controls="priceTabledown"
                                                                            rowspan="1" colspan="1" style="
                                                                                width: 88px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Price(USDT): activate to sort column descending">
                                                                            Price(USDT)
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="priceTabledown" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 94px;
                                                                            "
                                                                            aria-label="Amount(BTC): activate to sort column ascending">
                                                                            Amount({{
                                                                            coin
                                                                            }})
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="priceTabledown" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 98px;
                                                                            "
                                                                            aria-label="Total: activate to sort column ascending">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42925.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42928.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42978.90</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43925.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43928.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43978.90</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43979.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.03855
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            10,978.37750
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">44279.20</span>
                                                                        </td>
                                                                        <td>
                                                                            0.17214
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            76,053.29043
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="priceTabledown_info"
                                                                role="status" aria-live="polite">
                                                                Showing 1 to 10
                                                                of 10 entries
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="priceTabledown_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="priceTabledown_previous">
                                                                        <a href="#" aria-controls="priceTabledown"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="priceTabledown"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="priceTabledown_next">
                                                                        <a href="#" aria-controls="priceTabledown"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Long" role="tabpanel">
                                                <div id="priceTableuponly_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="priceTableuponly_length">
                                                                <label>Show
                                                                    <select name="priceTableuponly_length"
                                                                        aria-controls="priceTableuponly"
                                                                        class="form-select form-select-sm">
                                                                        <option value="10">
                                                                            10
                                                                        </option>
                                                                        <option value="25">
                                                                            25
                                                                        </option>
                                                                        <option value="50">
                                                                            50
                                                                        </option>
                                                                        <option value="100">
                                                                            100
                                                                        </option>
                                                                    </select>
                                                                    entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="priceTableuponly_filter" class="dataTables_filter">
                                                                <label>Search:<input type="search"
                                                                        class="form-control form-control-sm"
                                                                        placeholder=""
                                                                        aria-controls="priceTableuponly" /></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="priceTableuponly"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid" aria-describedby="priceTableuponly_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="dt-body-right sorting_asc"
                                                                            tabindex="0"
                                                                            aria-controls="priceTableuponly" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Price(USDT): activate to sort column descending">
                                                                            Price(USDT)
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="priceTableuponly" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Amount(BTC): activate to sort column ascending">
                                                                            Amount({{
                                                                            coin
                                                                            }})
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="priceTableuponly" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Total: activate to sort column ascending">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42628.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42825.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">42978.70</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43925.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43928.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43978.90</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">43979.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.03855
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            10,978.37750
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span class="color-price-up">44279.20</span>
                                                                        </td>
                                                                        <td>
                                                                            0.17214
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            76,053.29043
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="priceTableuponly_info"
                                                                role="status" aria-live="polite">
                                                                Showing 1 to 10
                                                                of 10 entries
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="priceTableuponly_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="priceTableuponly_previous">
                                                                        <a href="#" aria-controls="priceTableuponly"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="priceTableuponly"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="priceTableuponly_next">
                                                                        <a href="#" aria-controls="priceTableuponly"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Short" role="tabpanel">
                                                <div id="priceTabledownonly_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length"
                                                                id="priceTabledownonly_length">
                                                                <label>Show
                                                                    <select name="priceTabledownonly_length"
                                                                        aria-controls="priceTabledownonly"
                                                                        class="form-select form-select-sm">
                                                                        <option value="10">
                                                                            10
                                                                        </option>
                                                                        <option value="25">
                                                                            25
                                                                        </option>
                                                                        <option value="50">
                                                                            50
                                                                        </option>
                                                                        <option value="100">
                                                                            100
                                                                        </option>
                                                                    </select>
                                                                    entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="priceTabledownonly_filter"
                                                                class="dataTables_filter">
                                                                <label>Search:<input type="search"
                                                                        class="form-control form-control-sm"
                                                                        placeholder=""
                                                                        aria-controls="priceTabledownonly" /></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="priceTabledownonly"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid"
                                                                aria-describedby="priceTabledownonly_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="dt-body-right sorting_asc"
                                                                            tabindex="0"
                                                                            aria-controls="priceTabledownonly"
                                                                            rowspan="1" colspan="1" style="
                                                                                width: 0px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Price(USDT): activate to sort column descending">
                                                                            Price(USDT)
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="priceTabledownonly"
                                                                            rowspan="1" colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Amount(BTC): activate to sort column ascending">
                                                                            Amount({{
                                                                            coin
                                                                            }})
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="priceTabledownonly"
                                                                            rowspan="1" colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Total: activate to sort column ascending">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42628.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42825.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">42978.70</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43925.73</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08752
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            5,022.51319
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43928.23</span>
                                                                        </td>
                                                                        <td>
                                                                            0.08881
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,677.76807
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43978.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.11228
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            6,938.88312
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43978.90</span>
                                                                        </td>
                                                                        <td>
                                                                            0.00062
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            1,151.15971
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">43979.43</span>
                                                                        </td>
                                                                        <td>
                                                                            0.03855
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            10,978.37750
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="dt-body-right sorting_1"
                                                                            tabindex="0">
                                                                            <span
                                                                                class="color-price-down">44279.20</span>
                                                                        </td>
                                                                        <td>
                                                                            0.17214
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            76,053.29043
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="priceTabledownonly_info"
                                                                role="status" aria-live="polite">
                                                                Showing 1 to 10
                                                                of 10 entries
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="priceTabledownonly_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="priceTabledownonly_previous">
                                                                        <a href="#" aria-controls="priceTabledownonly"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="priceTabledownonly"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="priceTabledownonly_next">
                                                                        <a href="#" aria-controls="priceTabledownonly"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div
                                        class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold text-light">
                                            Spot trade Status
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mb-3"
                                            role="tablist">
                                            <li class="nav-item col p-0 text-center" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#OpenOrder" role="tab"
                                                    aria-selected="true">Open Order</a>
                                            </li>
                                            <li class="nav-item col p-0 text-center" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#OrderHistory"
                                                    role="tab" aria-selected="false" tabindex="-1">Order History</a>
                                            </li>
                                            <!-- <li
                                            class="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                class="nav-link"
                                                data-bs-toggle="tab"
                                                href="#TradeHistory"
                                                role="tab"
                                                aria-selected="false"
                                                tabindex="-1"
                                                >Trade History</a
                                            >
                                        </li>
                                        <li
                                            class="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                class="nav-link"
                                                data-bs-toggle="tab"
                                                href="#Funds"
                                                role="tab"
                                                aria-selected="false"
                                                tabindex="-1"
                                                >Funds</a
                                            >
                                        </li> -->
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="OpenOrder" role="tabpanel">
                                                <div id="ordertabone_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <!-- <div
                                                            class="dataTables_length"
                                                            id="ordertabone_length"
                                                        >
                                                            <label
                                                                >Show
                                                                <select
                                                                    name="ordertabone_length"
                                                                    aria-controls="ordertabone"
                                                                    class="form-select form-select-sm"
                                                                >
                                                                    <option
                                                                        value="10"
                                                                    >
                                                                        10
                                                                    </option>
                                                                    <option
                                                                        value="25"
                                                                    >
                                                                        25
                                                                    </option>
                                                                    <option
                                                                        value="50"
                                                                    >
                                                                        50
                                                                    </option>
                                                                    <option
                                                                        value="100"
                                                                    >
                                                                        100
                                                                    </option>
                                                                </select>
                                                                entries</label
                                                            >
                                                        </div> -->
                                                        </div>
                                                        <!-- <div
                                                        class="col-sm-12 col-md-6"
                                                    >
                                                        <div
                                                            id="ordertabone_filter"
                                                            class="dataTables_filter"
                                                        >
                                                            <label
                                                                >Search:<input
                                                                    type="search"
                                                                    class="form-control form-control-sm"
                                                                    placeholder=""
                                                                    aria-controls="ordertabone"
                                                            /></label>
                                                        </div>
                                                    </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="ordertabone"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline collapsed"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid" aria-describedby="ordertabone_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc text-dark" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 110px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Date: activate to sort column descending">
                                                                            Date
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 135px;
                                                                            "
                                                                            aria-label="Pair: activate to sort column ascending">
                                                                            Pair
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 39px;
                                                                            "
                                                                            aria-label="Type: activate to sort column ascending">
                                                                            Type
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 37px;
                                                                            "
                                                                            aria-label="Side: activate to sort column ascending">
                                                                            Side
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 55px;
                                                                            "
                                                                            aria-label="Price: activate to sort column ascending">
                                                                            Price
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                                display: none;
                                                                            "
                                                                            aria-label="Amount: activate to sort column ascending">
                                                                            Amount
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabone" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                                display: none;
                                                                            "
                                                                            aria-label="Action: activate to sort column ascending">
                                                                            Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- <tr
                                                                    role="row"
                                                                    class="odd"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-18
                                                                        17:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/ETH.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />ETH/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-up"
                                                                            >Buy</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        2774.00
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        0.000378
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="even"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-18
                                                                        17:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/DGD.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />DGD/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-down"
                                                                            >Sell</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        35.00
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        0.000005
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="odd"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-20
                                                                        13:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/DOGE.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />DOGE/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-down"
                                                                            >Sell</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        0.2040
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        0.203900
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="even"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-20
                                                                        18:38:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/SOL.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />SOL/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-up"
                                                                            >Buy</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        125.00
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        0.005378
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="odd"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-21
                                                                        13:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/ADA.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />ADA/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-down"
                                                                            >Sell</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        3.500
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        0.000001
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="even"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-21
                                                                        13:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/BNB.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />BNB/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-down"
                                                                            >Sell</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        415.00
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        0.000041
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="odd"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-22
                                                                        16:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/ADX.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />ADX/USDT
                                                                    </td>
                                                                    <td>
                                                                        Limit
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-up"
                                                                            >Buy</span
                                                                        >
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        2.134
                                                                    </td>
                                                                    <td
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        2.13
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                        style="
                                                                            display: none;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="btn-group"
                                                                            role="group"
                                                                        >
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary"
                                                                            >
                                                                                <i
                                                                                    class="icofont-edit text-success"
                                                                                ></i>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="btn btn-outline-secondary deleterow"
                                                                            >
                                                                                <i
                                                                                    class="icofont-ui-delete text-danger"
                                                                                ></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr> -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                    <div
                                                        class="col-sm-12 col-md-5"
                                                    >
                                                        <div
                                                            class="dataTables_info"
                                                            id="ordertabone_info"
                                                            role="status"
                                                            aria-live="polite"
                                                        >
                                                            Showing 1 to 7 of 7
                                                            entries
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-7"
                                                    >
                                                        <div
                                                            class="dataTables_paginate paging_simple_numbers"
                                                            id="ordertabone_paginate"
                                                        >
                                                            <ul
                                                                class="pagination"
                                                            >
                                                                <li
                                                                    class="paginate_button page-item previous disabled"
                                                                    id="ordertabone_previous"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                        aria-controls="ordertabone"
                                                                        data-dt-idx="0"
                                                                        tabindex="0"
                                                                        class="page-link"
                                                                        >Previous</a
                                                                    >
                                                                </li>
                                                                <li
                                                                    class="paginate_button page-item active"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                        aria-controls="ordertabone"
                                                                        data-dt-idx="1"
                                                                        tabindex="0"
                                                                        class="page-link"
                                                                        >1</a
                                                                    >
                                                                </li>
                                                                <li
                                                                    class="paginate_button page-item next disabled"
                                                                    id="ordertabone_next"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                        aria-controls="ordertabone"
                                                                        data-dt-idx="2"
                                                                        tabindex="0"
                                                                        class="page-link"
                                                                        >Next</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                </div>
                                            </div>
                                            <!-- OpenOrdertab End -->
                                            <div class="tab-pane fade show active" id="OrderHistory" role="tabpanel">
                                                <div id="ordertabtwo_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="ordertabtwo_length">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="ordertabtwo_filter" class=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 table-responsive">
                                                            <table id="ordertabtwo"
                                                                class="priceTable table table-hover custom-table-2 align-middle mb-0 nowrap table-borderless no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " aria-describedby="ordertabtwo_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Date: activate to sort column descending">
                                                                            Date
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Pair: activate to sort column ascending">
                                                                            Pair
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Type: activate to sort column ascending">
                                                                            Type
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Side: activate to sort column ascending">
                                                                            Side
                                                                        </th>
                                                                        <!-- <th
                                                                        class="sorting"
                                                                        tabindex="0"
                                                                        aria-controls="ordertabtwo"
                                                                        rowspan="1"
                                                                        colspan="1"
                                                                        style="
                                                                            width: 0px;
                                                                        "
                                                                        aria-label="Average: activate to sort column ascending"
                                                                    >
                                                                        Average
                                                                    </th> -->
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Price: activate to sort column ascending">
                                                                            Price
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Executed: activate to sort column ascending">
                                                                            Executed
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Amount: activate to sort column ascending">
                                                                            Amount
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabtwo" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Total: activate to sort column ascending">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody v-if="trades.length >0">
                                                                    <tr role="row" class="odd" v-for="trade in trades">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            {{moment(trade.created_at).format("DD-MM-YYYY,hh:mm:ss A")}}
                                                                        </td>
                                                                        <td>
                                                                            <img :src="'user/assets/images/coin/' + trade.symbol.slice(0,-4) +'.png'"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />{{trade.symbol
                                                                            }}
                                                                        </td>
                                                                        <td> Market</td>
                                                                        <td>
                                                                            <span
                                                                                :class="trade.type == 'Buy'? 'color-price-up': 'color-price-down'">{{trade.type
                                                                                }}</span>
                                                                        </td>
                                                                        <td>{{trade.price}}</td>
                                                                        <!-- <td>
                                                                        Market
                                                                    </td> -->
                                                                        <td class="dt-body-right">
                                                                            {{ trade.quantity}}
                                                                        </td>
                                                                        <td>
                                                                            {{trade.quantity}}
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            {{trade.amount}}
                                                                        </td>
                                                                    </tr>
                                                                    <!-- <tr
                                                                    role="row"
                                                                    class="even"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-18
                                                                        08:52:04
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/ETH.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />ETH/USDT
                                                                    </td>
                                                                    <td>
                                                                        Market
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-up"
                                                                            >Buy</span
                                                                        >
                                                                    </td>
                                                                    <td>
                                                                        3,439.20
                                                                    </td>
                                                                    <td>
                                                                        Market
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        0.0111
                                                                    </td>
                                                                    <td>
                                                                        0.0111
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        38.18
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="odd"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-18
                                                                        17:31:11
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/SOL.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />SOL/USDT
                                                                    </td>
                                                                    <td>
                                                                        Market
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-down"
                                                                            >Sell</span
                                                                        >
                                                                    </td>
                                                                    <td>
                                                                        160.33
                                                                    </td>
                                                                    <td>
                                                                        Market
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        0.75
                                                                    </td>
                                                                    <td>
                                                                        0.75
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        120.25
                                                                    </td>
                                                                </tr>
                                                                <tr
                                                                    role="row"
                                                                    class="even"
                                                                >
                                                                    <td
                                                                        tabindex="0"
                                                                        class="sorting_1"
                                                                    >
                                                                        09-18
                                                                        17:32:15
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="user/assets//images/coin/ETH.png"
                                                                            alt=""
                                                                            class="img-fluid avatar mx-1"
                                                                        />ETH/USDT
                                                                    </td>
                                                                    <td>
                                                                        Market
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="color-price-down"
                                                                            >Sell</span
                                                                        >
                                                                    </td>
                                                                    <td>
                                                                        3,487.50
                                                                    </td>
                                                                    <td>
                                                                        Market
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        0.0110
                                                                    </td>
                                                                    <td>
                                                                        0.0110
                                                                    </td>
                                                                    <td
                                                                        class="dt-body-right"
                                                                    >
                                                                        38.36
                                                                    </td>
                                                                </tr> -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- <pagination v-model="page" :records="records" @paginate="trades" :per-page="per_page" class="mt-4"  /> -->
                                                    <div class="row mt-5">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="ordertabtwo_info"
                                                                role="status" aria-live="polite">
                                                                <!-- Showing 1 to 4 of 4
                                                            entries -->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="ordertabtwo_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous"
                                                                        :class="page == 1 ? 'disabled' : ''"
                                                                        id="ordertabtwo_previous">
                                                                        <a href="#" aria-controls="ordertabtwo"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link" @click="prev">Previous</a>
                                                                    </li>
                                                                    <!-- <li
                                                                    class="paginate_button page-item active"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                        aria-controls="ordertabtwo"
                                                                        data-dt-idx="1"
                                                                        tabindex="0"
                                                                        class="page-link"
                                                                        >1</a
                                                                    >
                                                                </li> -->
                                                                    <li class="paginate_button page-item next"
                                                                        :class="page ==last_page ? 'disabled' : ''"
                                                                        id="ordertabtwo_next">
                                                                        <a href="#" aria-controls="ordertabtwo"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link" @click="next">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- OrderHistorytab End -->
                                            <div class="tab-pane fade" id="TradeHistory" role="tabpanel">
                                                <div id="ordertabthree_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <!-- <div class="row">
                                                    <div
                                                        class="col-sm-12 col-md-6"
                                                    >
                                                        <div
                                                            class="dataTables_length"
                                                            id="ordertabthree_length"
                                                        >
                                                            <label
                                                                >Show
                                                                <select
                                                                    name="ordertabthree_length"
                                                                    aria-controls="ordertabthree"
                                                                    class="form-select form-select-sm"
                                                                >
                                                                    <option
                                                                        value="10"
                                                                    >
                                                                        10
                                                                    </option>
                                                                    <option
                                                                        value="25"
                                                                    >
                                                                        25
                                                                    </option>
                                                                    <option
                                                                        value="50"
                                                                    >
                                                                        50
                                                                    </option>
                                                                    <option
                                                                        value="100"
                                                                    >
                                                                        100
                                                                    </option>
                                                                </select>
                                                                entries</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-6"
                                                    >
                                                        <div
                                                            id="ordertabthree_filter"
                                                            class="dataTables_filter"
                                                        >
                                                            <label
                                                                >Search:<input
                                                                    type="search"
                                                                    class="form-control form-control-sm"
                                                                    placeholder=""
                                                                    aria-controls="ordertabthree"
                                                            /></label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="ordertabthree"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid" aria-describedby="ordertabthree_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Date: activate to sort column descending">
                                                                            Date
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Pair: activate to sort column ascending">
                                                                            Pair
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Side: activate to sort column ascending">
                                                                            Side
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Price: activate to sort column ascending">
                                                                            Price
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Executed: activate to sort column ascending">
                                                                            Executed
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Fee: activate to sort column ascending">
                                                                            Fee
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabthree" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Total: activate to sort column ascending">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            09-17
                                                                            08:34:14
                                                                        </td>
                                                                        <td>
                                                                            <img src="user/assets//images/coin/SOL.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />SOL/USDT
                                                                        </td>
                                                                        <td>
                                                                            <span class="color-price-up">Buy</span>
                                                                        </td>
                                                                        <td>
                                                                            147.04
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.76
                                                                        </td>
                                                                        <td>
                                                                            0.00076000
                                                                            SOL
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            111.75040000
                                                                            USDT
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            09-18
                                                                            08:52:04
                                                                        </td>
                                                                        <td>
                                                                            <img src="user/assets//images/coin/ETH.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />ETH/USDT
                                                                        </td>
                                                                        <td>
                                                                            <span class="color-price-up">Buy</span>
                                                                        </td>
                                                                        <td>
                                                                            3,439.20
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.0111
                                                                        </td>
                                                                        <td>
                                                                            0.00001110
                                                                            ETH
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            38.17512000
                                                                            USDT
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            09-18
                                                                            17:31:11
                                                                        </td>
                                                                        <td>
                                                                            <img src="user/assets//images/coin/SOL.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />SOL/USDT
                                                                        </td>
                                                                        <td>
                                                                            <span class="color-price-down">Sell</span>
                                                                        </td>
                                                                        <td>
                                                                            160.33
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.75
                                                                        </td>
                                                                        <td>
                                                                            0.12024750
                                                                            USDT
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            120.24750000
                                                                            USDT
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            09-18
                                                                            17:32:15
                                                                        </td>
                                                                        <td>
                                                                            <img src="user/assets//images/coin/ETH.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />ETH/USDT
                                                                        </td>
                                                                        <td>
                                                                            <span class="color-price-down">Sell</span>
                                                                        </td>
                                                                        <td>
                                                                            3,487.50
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.0110
                                                                        </td>
                                                                        <td>
                                                                            0.03836250
                                                                            USDT
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            38.36250000
                                                                            USDT
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="ordertabthree_info"
                                                                role="status" aria-live="polite">
                                                                Showing 1 to 4
                                                                of 4 entries
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="ordertabthree_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="ordertabthree_previous">
                                                                        <a href="#" aria-controls="ordertabthree"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="ordertabthree"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="ordertabthree_next">
                                                                        <a href="#" aria-controls="ordertabthree"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- TradeHistorytab End -->
                                            <div class="tab-pane fade" id="Funds" role="tabpanel">
                                                <div id="ordertabfour_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="ordertabfour_length">
                                                                <label>Show
                                                                    <select name="ordertabfour_length"
                                                                        aria-controls="ordertabfour"
                                                                        class="form-select form-select-sm">
                                                                        <option value="10">
                                                                            10
                                                                        </option>
                                                                        <option value="25">
                                                                            25
                                                                        </option>
                                                                        <option value="50">
                                                                            50
                                                                        </option>
                                                                        <option value="100">
                                                                            100
                                                                        </option>
                                                                    </select>
                                                                    entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="ordertabfour_filter" class="dataTables_filter">
                                                                <label>Search:<input type="search"
                                                                        class="form-control form-control-sm"
                                                                        placeholder=""
                                                                        aria-controls="ordertabfour" /></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="ordertabfour"
                                                                class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                                                style="
                                                                    width: 100%;
                                                                " role="grid" aria-describedby="ordertabfour_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc" tabindex="0"
                                                                            aria-controls="ordertabfour" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            " aria-sort="ascending"
                                                                            aria-label="Coin: activate to sort column descending">
                                                                            Coin
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabfour" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Total Balance: activate to sort column ascending">
                                                                            Total
                                                                            Balance
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabfour" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="Available Balance: activate to sort column ascending">
                                                                            Available
                                                                            Balance
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="ordertabfour" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="In Order: activate to sort column ascending">
                                                                            In
                                                                            Order
                                                                        </th>
                                                                        <th class="dt-body-right sorting" tabindex="0"
                                                                            aria-controls="ordertabfour" rowspan="1"
                                                                            colspan="1" style="
                                                                                width: 0px;
                                                                            "
                                                                            aria-label="BTC Value: activate to sort column ascending">
                                                                            BTC
                                                                            Value
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/ICN.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />1INCH
                                                                        </td>
                                                                        <td>
                                                                            10.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            10.00000000
                                                                        </td>
                                                                        <td>
                                                                            08.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.00000080
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/ADA.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />ADA
                                                                        </td>
                                                                        <td>
                                                                            112.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            112.00000000
                                                                        </td>
                                                                        <td>
                                                                            098.00000098
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.0000000009
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/ARK.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />ARK
                                                                        </td>
                                                                        <td>
                                                                            113.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            113.00000000
                                                                        </td>
                                                                        <td>
                                                                            097.00000097
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.0000000009
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/BNB.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />BNB
                                                                        </td>
                                                                        <td>
                                                                            0.00431435
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.00431435
                                                                        </td>
                                                                        <td>
                                                                            0.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.00003445
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/EDG.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />EDG
                                                                        </td>
                                                                        <td>
                                                                            11.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            11.00000000
                                                                        </td>
                                                                        <td>
                                                                            10.00000010
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.000000010
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/ETH.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />ETH
                                                                        </td>
                                                                        <td>
                                                                            0.05431435
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.05431435
                                                                        </td>
                                                                        <td>
                                                                            0.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.00543445
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td tabindex="0" class="sorting_1">
                                                                            <img src="user/assets//images/coin/FUN.png"
                                                                                alt=""
                                                                                class="img-fluid avatar mx-1" />Fun
                                                                        </td>
                                                                        <td>
                                                                            218.00000000
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            218.00000000
                                                                        </td>
                                                                        <td>
                                                                            095.00000095
                                                                        </td>
                                                                        <td class="dt-body-right">
                                                                            0.0000000008
                                                                            BTC
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="ordertabfour_info"
                                                                role="status" aria-live="polite">
                                                                Showing 1 to 7
                                                                of 7 entries
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="ordertabfour_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="ordertabfour_previous">
                                                                        <a href="#" aria-controls="ordertabfour"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="ordertabfour"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="ordertabfour_next">
                                                                        <a href="#" aria-controls="ordertabfour"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fundstab End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>

            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center">
                                    <i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings
                                </h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo">
                                        <div class="indigo"></div>
                                    </li>
                                    <li data-theme="tradewind">
                                        <div class="tradewind"></div>
                                    </li>
                                    <li data-theme="monalisa">
                                        <div class="monalisa"></div>
                                    </li>
                                    <li data-theme="blue">
                                        <div class="blue"></div>
                                    </li>
                                    <li data-theme="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li data-theme="green">
                                        <div class="green"></div>
                                    </li>
                                    <li data-theme="orange" class="active">
                                        <div class="orange"></div>
                                    </li>
                                    <li data-theme="blush">
                                        <div class="blush"></div>
                                    </li>
                                    <li data-theme="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic">
                                        <div class="dynamic">
                                            <i class="icofont-paint me-2"></i>
                                            Click to Dyanmic Setting
                                        </div>
                                    </li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker"
                                                class="btn bg-primary avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker"
                                                class="btn bg-secondary avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1"
                                                class="btn chart-color1 avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2"
                                                class="btn chart-color2 avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3"
                                                class="btn chart-color3 avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4"
                                                class="btn chart-color4 avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5"
                                                class="btn chart-color5 avatar xs border-0 rounded-0 colorpicker-element"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center">
                                    <i class="icofont-font fs-4 me-2 text-primary"></i>
                                    Font Settings
                                </h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins"
                                                value="font-poppins" />
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans"
                                                value="font-opensans" />
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font"
                                                id="font-montserrat" value="font-montserrat" />
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-Plex"
                                                value="font-Plex" checked="" />
                                            <label class="form-check-label" for="font-Plex">
                                                Plex Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center">
                                    <i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout
                                </h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch" />
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast" />
                                            <label class="form-check-label" for="theme-high-contrast">Enable High
                                                Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl" />
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary lift">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- toaster -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" :class="toast"
                data-bs-animation="true" data-bs-autohide="true" data-bs-delay="5000">
                <div class="toast-header text-white" :class="text == 'Success' ? 'bg-success' : 'bg-danger'">
                    <strong class="me-auto">{{ text }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ message }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import Chart from "chart.js/auto";
import pagination from "vue-pagination-2";
import moment from "moment";

import { createChart } from 'lightweight-charts';
import { each } from "jquery";


export default {
    name: "trade",
    components: {
        pagination,
    },
    data() {
        return {
            chart: null,
            coin: "BTC",
            url: process.env.mix_api_url,
            balance: 0,
            usdt: 0,
            price: "",
            coin_amount: "",
            total: "",
            coin_sell: "",
            total_sell: "",
            buy_per: 1,
            sell_per: 1,
            error: false,
            error_sell: false,
            toast: "hide",
            message: "",
            text: "Error",
            trades: [],
            records: 1,
            page: 1,
            per_page: 1,
            last_page: 1,
            mobile: true,
            trade: false,
            show: false,
            buy_disable: false,
            sell_disable: false,
            spin: true,
            trade_on: false,
            symbols: [],
            data: [],
            date: [],
            chartData:[]
        };
    },
    mounted() {
            // const chartOptions = { layout: { textColor: 'black', background: { type: 'solid', color: 'white' } } };
            //     const chart = createChart(document.getElementById('chartContainer'), chartOptions);
            //     const areaSeries = chart.addAreaSeries({
            //         lineColor: '#2962FF', topColor: '#2962FF',
            //         bottomColor: 'rgba(41, 98, 255, 0.28)',
            //     });
            //     areaSeries.setData([
            //         { time: '2018-12-22', value: 32.51 },
            //         { time: '2018-12-23', value: 31.11 },
            //         { time: '2018-12-24', value: 27.02 },
            //         { time: '2018-12-25', value: 27.32 },
            //         { time: '2018-12-26', value: 25.17 },
            //         { time: '2018-12-27', value: 28.89 },
            //         { time: '2018-12-28', value: 25.46 },
            //         { time: '2018-12-29', value: 23.92 },
            //         { time: '2018-12-30', value: 22.68 },
            //         { time: '2018-12-31', value: 22.67 },
            //     ]);

            //     const candlestickSeries = chart.addCandlestickSeries({
            //         upColor: '#26a69a', downColor: '#ef5350', borderVisible: false,
            //         wickUpColor: '#26a69a', wickDownColor: '#ef5350',
            //     });
            //     candlestickSeries.setData([
            //         { time: '2018-12-22', open: 75.16, high: 82.84, low: 36.16, close: 45.72 },
            //         { time: '2018-12-23', open: 45.12, high: 53.90, low: 45.12, close: 48.09 },
            //         { time: '2018-12-24', open: 60.71, high: 60.71, low: 53.39, close: 59.29 },
            //         { time: '2018-12-25', open: 68.26, high: 68.26, low: 59.04, close: 60.50 },
            //         { time: '2018-12-26', open: 67.71, high: 105.85, low: 66.67, close: 91.04 },
            //         { time: '2018-12-27', open: 91.04, high: 121.40, low: 82.70, close: 111.40 },
            //         { time: '2018-12-28', open: 111.51, high: 142.83, low: 103.34, close: 131.25 },
            //         { time: '2018-12-29', open: 131.33, high: 151.17, low: 77.68, close: 96.43 },
            //         { time: '2018-12-30', open: 106.33, high: 110.20, low: 90.39, close: 98.10 },
            //         { time: '2018-12-31', open: 109.87, high: 114.69, low: 85.66, close: 111.26 },
            //     ]);

            //     chart.timeScale().fitContent();
        },
    created() {
        this.getPrice();
        this.getBalance();
        this.usdtBalance();
        this.tradeHistory();
        this.getSymbols();
        this.npfPrices();
    },

    methods: {
        toFixed(n, fixed) {
            return ~~(Math.pow(10, fixed) * n) / Math.pow(10, fixed);
        },
        coins(val) {
            this.coin = val;
            this.show = false;
        },
        prev() {
            if (this.page > 1) {
                this.page = this.page - 1;
                this.tradeHistory();
            }
        },
        next() {
            if (this.page < this.last_page) {
                this.page = this.page + 1;
                this.tradeHistory();
            }
        },

        moment(date) {
            return moment.utc(date);
        },
        graphToggle() {
            this.mobile = !this.mobile;
        },
        showTrade() {
            this.mobile = true;
            this.trade = false;
        },
        showChart() {
            this.mobile = false;
            this.trade = true;
        },
        getBalance() {
            this.coin_amount = "";
            this.total = "";
            this.coin_sell = "";
            this.total_sell = "";

            axios
                .post(this.url + "api/coinBalance", {
                    coin: this.coin,
                    token: localStorage.token,
                })
                .then((res) => {
                    console.log(res);
                    this.balance = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        usdtBalance() {
            this.coin_amount = "";
            this.total = "";
            this.coin_sell = "";
            this.total_sell = "";
            axios
                .post(this.url + "api/getUserDetails", {
                    token: localStorage.token,
                })
                .then((res) => {
                    console.log(res);
                    this.usdt = res.data.balance;
                    if (res.data.user.id == 19) {
                        this.trade_on = false;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        npfPrices() {
            axios
                .post(this.url + "api/npfPrices", {
                    coin: this.coin,
                })
                .then((res) => {
                    this.data = res.data.prices;
                    this.date = res.data.date;
                    this.price = res.data.price.price;

                    res.data.date.forEach((ress,i)=>{
                    console.log(ress);
                  
                    console.log(res.data.prices[i]);
                    var data = {
                        x:ress,
                        y:[res.data.data[i].open,res.data.data[i].high,res.data.data[i].low,res.data.data[i].close]
                    }
                        this.chartData.push(data);
           
                    });

                    this.createChart();
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        createChart() {
            

           var options = {
          series: [{
          data: this.chartData
        }],
          chart: {
          type: 'candlestick',
          height: 350,
        },
        title: {
          text: 'NPF Exchange Prices',
          align: 'left'
        },
        annotations: {
          xaxis: [
            {
              borderColor: '#00E396',
              label: {
                borderColor: '#00E396',
                style: {
                  fontSize: '12px',
                  color: '#fff',
                  background: '#00E396'
                },
                orientation: 'horizontal',
                offsetY: 7,
              }
            }
          ]
        },
        xaxis: {
          type: 'datetime'
        },
        yaxis: {
          tooltip: {
            enabled: true,
            theme: 'dark', // You can use 'light' or 'dark' theme
                style: {
                background: '#333', // Change the background color here
                },
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

            // var options = {
            //     series: [{
            //         name: 'NPF EXCHANGE',
            //         data: this.data
            //     }],
            //     chart: {
            //         type: 'area',
            //         stacked: false,
            //         height: 350,
            //         zoom: {
            //             type: 'x',
            //             enabled: true,
            //             autoScaleYaxis: true
            //         },
            //         toolbar: {
            //             autoSelected: 'zoom'
            //         }
            //     },
            //     dataLabels: {
            //         enabled: false
            //     },
            //     markers: {
            //         size: 0,
            //     },
            //     title: {
            //         text: 'NPF Exchange Prices',
            //         align: 'left'
            //     },
            //     plotOptions: {
            //         candlestick: {
            //         colors: {
            //             upward: '#3C90EB',
            //             downward: '#DF7D46'
            //         },
            //         wick: {
            //             useFillColor: true,
            //             }
            //         }
            //     },
            //     fill: {
            //         type: 'gradient',
            //         gradient: {
            //             shadeIntensity: 1,
            //             inverseColors: false,
            //             opacityFrom: 0.5,
            //             opacityTo: 0,
            //             stops: [0, 90, 100]
            //         },
            //     },
            //     yaxis: {
            //         labels: {
            //             formatter: function (val) {
            //                 //   return (val / 1000000).toFixed(0);
            //                 return val;
            //             },
            //         },
            //         title: {
            //             text: 'Price'
            //         },
            //     },
            //     xaxis: {
            //         type: 'datetime',
            //         categories: this.date

            //     },
            //     tooltip: {
            //         shared: false,
            //         y: {
            //             formatter: function (val) {
            //                 //   return (val / 1000000).toFixed(0)
            //                 return val;
            //             }
            //         }
            //     }
            // };

            // var chart = new ApexCharts(document.querySelector("#chart"), options);
            // chart.render();
            // const ctx = this.$refs.chartCanvas.getContext('2d');
            // this.chart = new Chart(ctx, {
            //     type: 'line',
            //     data: {
            //         labels: this.date,
            //         datasets: [
            //             {
            //                 label: 'Live Rating',
            //                 borderColor: '#DD40FF',
            //                 borderWidth: 2,
            //                 data: this.data,
            //             },
            //         ],
            //     },
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: false,
            //         aspectRatio: 1.3,
            //     },
            // });
        },
        getPrice() {
            if (this.coin == 'NPF') {
                this.npfPrices();
                return false;
            }
            axios
                .post(this.url + "api/getPrice", {
                    coin: this.coin,
                })
                .then((res) => {
                    this.price = res.data.price;
                    this.getSymbols();
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        getSymbols() {
            axios
                .post(this.url + "api/getSymbols")
                .then((res) => {
                    this.symbols = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        calUsdt() {
            this.error = false;
            this.total = this.toFixed(this.price * this.coin_amount, 4);
            if (this.total > this.usdt) {
                this.error = "Insufficient Balance";
            }
        },
        calSell() {
            var stepSize = [];
            stepSize["BNB"] = 2;
            stepSize["BTC"] = 6;
            stepSize["TRX"] = 1;

            this.error_sell = false;
            this.total_sell = this.toFixed(this.price * this.coin_sell, 4);
            if (this.coin_sell > this.balance) {
                this.error_sell = "Insufficient Balance";
            }
        },
        buyPer() {
            this.error = false;
            var per = [];
            per[1] = 0;
            per[2] = 25;
            per[3] = 50;
            per[4] = 75;
            per[5] = 100;
            var val = per[this.buy_per];

            var stepSize = [];
            stepSize["BNB"] = 2;
            stepSize["BTC"] = 6;
            stepSize["TRX"] = 1;

            var size = stepSize[this.coin];
            if (this.coin == "NPF") {
                size = 0;
            }

            this.total = this.toFixed(this.usdt * (val / 100), 4);
            this.coin_amount = this.toFixed(
                this.total / this.price,
                size
            );
            if (this.total > this.usdt) {
                this.error = "Insufficient Balance";
            }
        },
        sellPer() {
            this.error_sell = false;
            var per = [];
            per[1] = 0;
            per[2] = 25;
            per[3] = 50;
            per[4] = 75;
            per[5] = 100;
            var val = per[this.sell_per];
            // console.log(this.balance * (val / 100));

            var stepSize = [];
            stepSize["BNB"] = 2;
            stepSize["BTC"] = 6;
            stepSize["TRX"] = 1;

            // this.total_sell = this.usdt * (val / 100);
            this.total_sell = this.toFixed(
                this.balance * (val / 100) * this.price,
                4
            );

            var size = stepSize[this.coin];
            if (this.coin == "NPF") {
                size = 0;
            }

            this.coin_sell = this.toFixed(
                this.total_sell / this.price,
                size
            );
            if (this.coin_sell > this.balance) {
                this.error_sell = "Insufficient Balance";
            }
        },
        totalSell() {
            var stepSize = [];
            stepSize["BNB"] = 2;
            stepSize["BTC"] = 6;
            stepSize["TRX"] = 1;

            this.error_sell = false;
            this.coin_sell = this.toFixed(
                this.total_sell / this.price,
                stepSize[this.coin]
            );
            if (this.coin_sell > this.balance) {
                this.error_sell = "Insufficient Balance";
            }
        },
        totalBuy() {
            this.error = false;
            var stepSize = [];
            stepSize["BNB"] = 2;
            stepSize["BTC"] = 6;
            stepSize["TRX"] = 1;

            this.coin_amount = this.toFixed(
                this.total / this.price,
                stepSize[this.coin]
            );
            // if (this.coin_amount > this.balance) {
            if (this.total > this.usdt) {
                this.error = "Insufficient Balance";
            }
        },
        tradeHistory() {
            axios
                .post(this.url + "api/tradeHistory?page=" + this.page, {
                    token: localStorage.token,
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
        buyCoin() {
            if (confirm("Are you sure want to Buy!")) {
                this.buy_disable = true;
                this.spin = false;
                var link = this.url + "api/buyCoin";
                if (this.coin == "NPF") {
                    link = this.url + "api/manualBuy";
                }

                axios
                    .post(link, {
                        quantity: this.coin_amount,
                        price: this.price,
                        coin: this.coin,
                        total: this.total,
                        token: localStorage.token,
                    })
                    .then((res) => {
                        console.log(res.data);
                        this.buy_per = 1;
                        this.getBalance();
                        this.usdtBalance();
                        this.getPrice();
                        this.tradeHistory();
                        var message = res.data.message;
                        this.$toaster.success(message);
                        // this.message = message;

                        // this.text = "Success";
                        // this.toast="show bg-success text-white";
                        this.coin_amount = "";
                        this.total = "";
                        this.spin = true;
                        this.buy_disable = false;
                        // this.$bvToast.toast(message, {
                        //     variant: "success",
                        //     solid: true,
                        // });
                    })
                    .catch((err) => {
                        console.log(err);
                        var message = err.response.data.message;
                        this.$toaster.error(message);
                        // this.message = message;
                        // this.text = "Error";
                        // this.toast="show bg-danger text-white";
                        this.coin_amount = "";
                        this.total = "";
                        this.buy_per = 1;
                        this.spin = true;
                        this.buy_disable = false;
                        // this.$bvToast.toast(message, {
                        //     variant: "danger",
                        //     solid: true,
                        // });
                    });
            }
        },
        sellCoin() {
            if (confirm("Are you sure want to Sell!")) {
                this.sell_disable = false;
                this.spin = false;

                var link = this.url + "api/sellCoin";
                if (this.coin == "NPF") {
                    link = this.url + "api/manualSell";
                }

                axios
                    .post(link, {
                        quantity: this.coin_sell,
                        price: this.price,
                        coin: this.coin,
                        total: this.total_sell,
                        token: localStorage.token,
                    })
                    .then((res) => {
                        console.log(res);
                        this.getBalance();
                        this.usdtBalance();
                        this.getPrice();
                        this.tradeHistory();
                        var message = res.data.message;
                        this.$toaster.success(message);
                        // this.message = message;
                        // this.text = "Success";
                        // this.toast="show bg-success text-white";
                        this.coin_amount = "";
                        this.total_sell = "";
                        this.sell_per = 1;
                        this.spin = true;
                        this.sell_disable = false;
                        // this.$bvToast.toast(message, {
                        //     variant: "success",
                        //     solid: true,
                        // });
                    })
                    .catch((err) => {
                        console.log(err);
                        var message = err.response.data.message;
                        this.$toaster.error(message);
                        // this.message = message;
                        // this.text = "Error";
                        // this.toast="show bg-danger text-white";
                        this.coin_amount = "";
                        this.total_sell = "";
                        this.sell_per = 1;
                        this.spin = true;
                        this.sell_disable = false;
                        // this.$bvToast.toast(message, {
                        //     variant: "danger",
                        //     solid: true,
                        // });
                    });
            }
        },
       
    }
};
</script>

<style scoped>
.nav-link {
    color: white !important;
}

.table.custom-table-2 tbody tr {
    background-color: #052133;
    color: white !important;
}

.cstm_dropdown {
    background-color: #052133 !important;
    color: white !important;
}

table.table-bordered.dataTable tbody th,
table.table-bordered.dataTable tbody td {
    color: white !important;
    border-color: #092940 !important;
}

.lift {
    color: white !important;
}

.card {
    color: white !important;
    background-color: #052133;
    border-color: #092940 !important;
}

.card.card-body {
    background-color: #052133 !important;
    color: white !important;
}

.card.card-header {
    background-color: #052133;
    color: white !important;
}

.input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    background-color: #052133;
    color: white !important;
    border-color: #092940 !important;
}

.input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3),
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
    background-color: #052133;
    color: white !important;
    border-color: #092940 !important;
}

div.dataTables_wrapper div.dataTables_length select {
    background-color: #052133;
    color: white !important;
    border-color: #092940 !important;
}

.form-control {
    background-color: #052133;
    color: white !important;
    border-color: #092940 !important;
}

.form-control:focus {
    background-color: #052133;
    color: white !important;
    border-color: #092940 !important;
}

.main {
    background-color: #051c2c !important;
    color: white !important;
    border-color: #092940 !important;
}

.layout-with-border-radius .layout__area--right:not(.no-border-top-left-radius) .widgetbar-pages,
.layout-with-border-radius .layout__area--right:not(.no-border-top-left-radius) .widgetbar-pages.hidden+.widgetbar-tabs,
.layout-with-border-radius .layout__area--right:not(.no-border-top-left-radius) .widgetbar-widget:first-child {
    background-color: 052133 !important;
    color: white !important;
}

.page-item.disabled .page-link {
    background-color: #24d1e5 !important;
    color: white !important;
    border-color: #24d1e5 !important;
}

.page-item.active .page-link {
    background-color: #24d1e5 !important;
    color: white !important;
    border-color: #24d1e5 !important;
}

thead,
tbody,
tfoot,
tr,
td,
th {
    color: white !important;
}

/* .widget-visible {
            display: none;
        } */

#x95lruu5mog1686812186080.widget-visible {
    display: none !important;
}

/* nav.navbar.navbar-expand-lg.bg-light.cstm-bg {
            background: #052133 !important;
    
        } */
</style>
