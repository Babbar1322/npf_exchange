<template>
    <div>
        <sidebar />
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
                                <h6 class="px-2 text-primary mb-0">Download App</h6>
                                <img src="user/assets/images/qr-code.png" alt="Download App" class="img-fluid">
                            </div>
                            <div class="col-lg-10">
                                <ul class="menu-grid list-unstyled row row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mb-0 mt-lg-3">
                                    <li class="col">
                                        <a href="help.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 38 38">
                                                    <circle xmlns="http://www.w3.org/2000/svg" cx="19" cy="19" r="11" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></circle>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M19,2c9.374,0,17,7.626,17,17c0,8.304-6.011,15.3-14,16.725v-2.025C28.847,32.309,34,26.257,34,19  c0-8.284-6.716-15-15-15S4,10.716,4,19s6.716,15,15,15c0.338,0,0.668-0.028,1-0.05V36h-1C9.626,36,2,28.374,2,19S9.626,2,19,2z   M20,23.417c0-2.067,0.879-2.99,1.896-4.06C22.882,18.322,24,17.148,24,15c0-2.757-2.243-5-5-5s-5,2.243-5,5h2c0-1.654,1.346-3,3-3  s3,1.346,3,3c0,1.348-0.651,2.032-1.552,2.979C19.357,19.124,18,20.55,18,23.417V26h2V23.417z M20,28h-2v2h2V28z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">Help</p>
                                                <small class="text-muted">How May I Help You?</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="ui-elements/ui-alerts.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <rect xmlns="http://www.w3.org/2000/svg" class="st2" width="24" height="24" style="fill:none;;" fill="none"></rect>
                                                    <path xmlns="http://www.w3.org/2000/svg" d="M13,1.07V9h7C20,4.92,16.95,1.56,13,1.07z M4,15c0,4.42,3.58,8,8,8s8-3.58,8-8v-4H4V15z   M11,1.07C7.05,1.56,4,4.92,4,9h7V1.07z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M13,1.07V9h7C20,4.92,16.95,1.56,13,1.07z M11,1.07C7.05,1.56,4,4.92,4,9h7V1.07z" style="opacity:0.2;fill:#FFFFFF;;" fill="rgb(255, 255, 255)"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M6,15c-1.66,0-2.491,0.82-2.941,2.418C2.628,18.939,2.625,19.625,1,20.407C1.92,21.38,3.49,22,5,22  c2.21,0,4-1.563,4-3.719C9,16.389,7.66,15,6,15z M21.49,5C20,7,17.96,10.04,16,12c-1.48,1.48-5.48,3.93-5.48,3.93L8.07,13.48  c0,0,2.45-4,3.93-5.48c1.96-1.96,5-4,7-5.48c0.78-0.58,1.8-0.69,2.49,0C22.17,3.2,22.06,4.22,21.49,5z"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M16,12c-1.479,1.48-5.477,3.927-5.477,3.927l-2.449-2.45c0,0,2.445-3.998,3.926-5.477L16,12z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">UI Components</p>
                                                <small class="text-muted">Bootstrap Components</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="invoices.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 38 38">
                                                    <path xmlns="http://www.w3.org/2000/svg" d="M22,6h2c0.875,0,1.513,0.657,2,1.31V10h4.501L32,12v24H22V6z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M10,14v18h18V14h-6v2h4v14h-6v-2.059c1.989-0.236,3-1.22,3-2.941c0-0.805-0.27-1.5-0.78-2.01  C21.226,21.998,19.654,22.003,19,22c-0.352-0.007-1.398,0.002-1.806-0.405C17.111,21.512,17,21.359,17,21c0-0.469,0-1,2-1  c1.122,0,1.788,0.205,2.297,0.709l1.406-1.422c-0.704-0.697-1.568-1.083-2.703-1.222V14H10z M18,18.059  c-1.988,0.236-3,1.221-3,2.941c0,0.805,0.271,1.5,0.781,2.01c0.994,0.992,2.543,0.989,3.22,0.99  c0.343-0.008,1.397-0.002,1.805,0.405C20.89,24.488,21,24.641,21,25c0,0.469,0,1-2,1c-1.121,0-1.787-0.205-2.297-0.709l-1.406,1.422  c0.705,0.697,1.568,1.083,2.703,1.222V30h-6V16h6V18.059z M30,14v20H8V4h15c0.46,0,1,0.26,1,1v3H12v2h12v2h7.99  c0,0-6.08-8.17-6.62-8.87C24.83,2.44,23.99,2,23,2H6v34h26V14H30z M26,7.31L28.01,10H26V7.31z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">Invoices</p>
                                                <small class="text-muted">Simple, List, Email Invoice </small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="salaryslip.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <path xmlns="http://www.w3.org/2000/svg" d="M20,20c0,1.104-0.896,2-2,2H6c-1.104,0-2-0.896-2-2V4c0-1.104,0.896-2,2-2h8l6,6V20z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M16,8c-1.1,0-1.99-0.9-1.99-2L14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h1v-1.25C7,19.09,10.33,18,12,18  s5,1.09,5,2.75V22h1c1.1,0,2-0.9,2-2V8H16z M12,17c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3S13.66,17,12,17z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">SalarySlip</p>
                                                <small class="text-muted">Simple SalarySlip</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="expenses.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 38 38">
                                                    <circle xmlns="http://www.w3.org/2000/svg" class="stshockcolor" cx="19" cy="19" r="11" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></circle>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M36,19c0,8.35-6.05,15.31-14,16.73V33.7c6.84-1.391,12-7.46,12-14.7c0-8.27-6.73-15-15-15C10.73,4,4,10.73,4,19  c0,8.27,6.73,15,15,15c0.34,0,0.67-0.01,1-0.04v2.01C19.67,35.99,19.34,36,19,36C9.63,36,2,28.37,2,19S9.63,2,19,2S36,9.63,36,19z   M19.257,17.588C15.516,16.591,15,15.487,15,14.443c0-1.43,1.4-2.185,3-2.383v3.008c0.412,0.175,0.973,0.375,1.772,0.587  c0.08,0.021,0.149,0.046,0.228,0.068v-3.596c1.726,0.359,3,1.504,3,2.872h2c0-2.442-2.159-4.478-5-4.912V8h-2v2.059  c-2.979,0.285-5,1.998-5,4.384c0,3.126,2.903,4.321,5.743,5.078C20.686,20.037,23,21.074,23,23.085c0,1.611-1.107,2.647-3,2.868  v-3.839c-0.468-0.244-1.069-0.475-1.771-0.661c-0.07-0.019-0.152-0.041-0.229-0.062v4.456c-1.692-0.393-3-1.549-3-2.848h-2  c0,2.424,2.153,4.448,5,4.903V30h2v-2.036c3.445-0.305,5-2.601,5-4.879C25,21.273,24.004,18.849,19.257,17.588z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">Expenses</p>
                                                <small class="text-muted">Expenses List</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="ui-elements/stater-page.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <rect xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:none;;" fill="none"></rect>
                                                    <path xmlns="http://www.w3.org/2000/svg" d="M20,20c0,1.104-0.896,2-2,2H6c-1.104,0-2-0.896-2-2V4c0-1.104,0.896-2,2-2h8l6,6V20z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M11,13h2v2h-2V13z M20,8v12c0,1.1-0.9,2-2,2H6c-1.1,0-2-0.9-2-2V4c0-1.1,0.9-2,2-2h8l0.01,4  c0,1.1,0.891,2,1.99,2H20z M17,11h-2V9h-2v2h-2V9H9v2H7v2h2v2H7v2h2v2h2v-2h2v2h2v-2h2v-2h-2v-2h2V11z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">Stater page</p>
                                                <small class="text-muted">Start working with</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="ui-elements/documentation.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 32 32">
                                                <path xmlns="http://www.w3.org/2000/svg" d="M25.5,9.78V28.5c0,0.56-0.44,1-1,1h-17c-0.56,0-1-0.44-1-1v-25c0-0.55,0.45-1,1-1h10.72  L25.5,9.78z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                                                <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M19.5,9.5c-0.561,0-1-0.439-1-1V2.793L25.207,9.5H19.5z"></path>
                                                <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M19,16c0-2.65,0.54-4,2-4c0.98,0,1.7,0.63,2,1.83l-0.89,0.6C21.92,13.49,21.43,13,21,13c-0.62,0-1,1.01-1,3  s0.38,3,1,3c0.43,0,0.92-0.49,1.11-1.43l0.89,0.6c-0.3,1.2-1.02,1.83-2,1.83C19.54,20,19,18.65,19,16z M18,16c0,3-0.9,4-2,4  c-1.1,0-2-1-2-4s0.9-4,2-4C17.1,12,18,13,18,16z M17,16c0-0.7,0-3-1-3s-1,2.3-1,3s0,3,1,3S17,16.7,17,16z M13,16.04  c0,2.88-0.8,3.96-2.4,3.96C9.8,20,9,20,9,20v-8c0,0,0.8,0,1.6,0C12.2,12,13,13.15,13,16.04z M12,16.03c0-2.17-0.52-3.03-1.33-3.03  c-0.4,0-0.67,0-0.67,0v6c0,0,0.27,0,0.67,0C11.48,19,12,18.2,12,16.03z M26,10v18.5c0,0.828-0.672,1.5-1.5,1.5h-17  C6.672,30,6,29.328,6,28.5v-25C6,2.672,6.672,2,7.5,2H18c0.621,0,0.646,0.232,1,0.586L25.414,9C25.768,9.354,26,9.368,26,10z   M19,8.5C19,8.776,19.224,9,19.5,9c0,0,2.639,0,4.5,0l-5-5V8.5z M25,10h-5.5C18.672,10,18,9.328,18,8.5V3c0,0-9.5,0-10.5,0  C7.225,3,7,3.224,7,3.5v25C7,28.776,7.225,29,7.5,29h17c0.275,0,0.5-0.224,0.5-0.5C25,28,25,10,25,10z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">Documentation</p>
                                                <small class="text-muted">How to Install</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="ui-elements/changelog.html" class="d-flex color-700">
                                            <div class="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <rect xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"></rect>
                                                    <polygon xmlns="http://www.w3.org/2000/svg" class="st0" points="22,6 22,12 20,12 20,9.42 13,16.41 8.95,12.36 2.65,17.76 1.35,16.24 9.05,9.64   13,13.59 18.58,8 16,8 16,6 "></polygon>
                                                    <polygon xmlns="http://www.w3.org/2000/svg" class="st1" points="11.91,12.5 10.58,13.99 8.95,12.36 2.65,17.76 1.35,16.24 9.05,9.64 "></polygon>
                                                </svg>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="h6 mb-0">Changelog</p>
                                                <small class="text-muted">Changelog Update</small>
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
                <h1 class="h4 mt-1">Market</h1>
            </div>
            <div class="col-12 col-md-6 text-md-end">
                <a href="https://themeforest.net/user/pixelwibes" title="Download" target="_blank" class="btn btn-white border lift">Download</a>
                <button type="button" class="btn btn-dark lift">Generate Report</button>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex-fill text-truncate">
                            <span class="text-muted small text-uppercase">Top gainer (24h)</span>
                            <span class="h6 mt-3 mb-1 fw-bold d-block">DF/USDT</span>
                            <div class="d-flex justify-content-between">
                                <div class="price-block">
                                    <span class="fs-6 fw-bold color-price-up">0.3165</span>
                                    <span class="small text-muted px-2">$0</span>
                                </div>
                                <div class="price-report">
                                    <span class="small text-success">+59.10% <i class="fa fa-level-up"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex-fill text-truncate">
                            <span class="text-muted small text-uppercase">Top loser (24h)</span>
                            <span class="h6 mt-3 mb-1 fw-bold d-block">XTZDOWN/USDT</span>
                            <div class="d-flex justify-content-between">
                                <div class="price-block">
                                    <span class="fs-6 fw-bold color-price-down">2.831</span>
                                    <span class="small text-muted px-2">$3</span>
                                </div>
                                <div class="price-report">
                                    <span class="small text-danger">-40.87% <i class="fa fa-level-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex-fill text-truncate">
                            <span class="text-muted small text-uppercase">Highlight</span>
                            <span class="h6 mt-3 mb-1 fw-bold d-block">USDT/BIDR</span>
                            <div class="d-flex justify-content-between">
                                <div class="price-block">
                                    <span class="fs-6 fw-bold">14,339</span>
                                    <span class="small text-muted px-2">$1</span>
                                </div>
                                <div class="price-report">
                                    <span class="small text-danger">-0.44% <i class="fa fa-level-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex-fill text-truncate">
                            <span class="text-muted small text-uppercase">GRT/USDT</span>
                            <span class="h6 mt-3 mb-1 fw-bold d-block">DOT/USDT</span>
                            <div class="d-flex justify-content-between">
                                <div class="price-block">
                                    <span class="fs-6 fw-bold color-price-up">30.90</span>
                                    <span class="small text-muted px-2">$31</span>
                                </div>
                                <div class="price-report">
                                    <span class="small text-success">+3.66% <i class="fa fa-level-up"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->

        <div class="row g-3 my-5 border-bottom pb-4">
            <div class="col-lg-12 ">
                <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#Favorites" role="tab" aria-selected="true">Favorites</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Spotmarkets" role="tab" aria-selected="false" tabindex="-1">Spot Markets</a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Futuresmarkets" role="tab" aria-selected="false" tabindex="-1">Futures Markets</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Newlisting" role="tab" aria-selected="false" tabindex="-1">New listing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Allcryptos" role="tab" aria-selected="false" tabindex="-1">All Cryptos</a></li> -->
                </ul>
            </div>
        </div><!-- Row End -->

        <div class="row g-3 mb-3">
            <div class="col-lg-12 col-md-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Favorites" role="tabpanel">
                        <ul class="nav nav-pills rounded d-inline-flex" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#Spot" role="tab" aria-selected="true">Spot(6)</a></li>
                            <!-- <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Futures" role="tab" aria-selected="false" tabindex="-1">Futures(6)</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Margin" role="tab" aria-selected="false" tabindex="-1">Margin(3)</a></li> -->
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="Spot" role="tabpanel">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 158px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 155px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 87px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 146px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 93px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 62px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                       
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BNB</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td>$75,260.60M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTC<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                            <td><span class="color-price-up">+1.12%</span></td>
                                            <td>43,200.00 / 40,675.00</td>
                                            <td>2,603.11M</td>
                                            <td>$801,182.25M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td>$30,298.93M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>$743958.07M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="Futures" role="tabpanel">
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADAUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td>$75,260.60M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTCUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                            <td><span class="color-price-up">+1.12%</span></td>
                                            <td>43,200.00 / 40,675.00</td>
                                            <td>2,603.11M</td>
                                            <td>$801,182.25M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td>$30,298.93M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOLUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>$743958.07M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="Margin" role="tabpanel">
                                <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_2_length"><label>Show <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_2"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/USDT</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>$743958.07M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div><!-- Favorites Tab End -->
                    <div class="tab-pane fade" id="Spotmarkets" role="tabpanel">
                        <ul class="nav nav-pills rounded d-inline-flex" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#BNB" role="tab" aria-selected="true">BNB</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#BTC" role="tab" aria-selected="false" tabindex="-1">BTC</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#ALTS" role="tab" aria-selected="false" tabindex="-1">ALTS</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#FIAT" role="tab" aria-selected="false" tabindex="-1">FIAT</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#ETF" role="tab" aria-selected="false" tabindex="-1">ETF</a></li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="BNB" role="tabpanel">
                                <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_3_length"><label>Show <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_3"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BNB</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td>$75,260.60M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td>$30,298.93M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATIC<span class="text-muted">/BNB</span></td>
                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                            <td><span class="color-price-up">+1.97%</span></td>
                                            <td>0.003359 / 0.003147</td>
                                            <td>22,212.85</td>
                                            <td>$7,673.14M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKE<span class="text-muted">/BNB</span></td>
                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                            <td><span class="color-price-down">-3.46%</span></td>
                                            <td>0.006776 / 0.006346</td>
                                            <td>15,622.05</td>
                                            <td>$71,737.76M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/BNB</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>$743958.07M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_3_next"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="BTC" role="tabpanel">
                                <div id="DataTables_Table_4_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_4_length"><label>Show <select name="DataTables_Table_4_length" aria-controls="DataTables_Table_4" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_4"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_4" role="grid" aria-describedby="DataTables_Table_4_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BTC</span></td>
                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                            <td><span class="color-price-down">-3.46%</span></td>
                                            <td>0.006776 / 0.006346</td>
                                            <td>15,622.05</td>
                                            <td>$71,737.76M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKE<span class="text-muted">/BTC</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td>$75,260.60M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BTC</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> DOT<span class="text-muted">/BTC</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td>$30,298.93M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/BTC</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATIC<span class="text-muted">/BTC</span></td>
                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                            <td><span class="color-price-up">+1.97%</span></td>
                                            <td>0.003359 / 0.003147</td>
                                            <td>22,212.85</td>
                                            <td>$7,673.14M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1"> SOL<span class="text-muted">/BTC</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>$743958.07M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_4_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_4_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_4_previous"><a href="#" aria-controls="DataTables_Table_4" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_4_next"><a href="#" aria-controls="DataTables_Table_4" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="ALTS" role="tabpanel">
                                <div id="DataTables_Table_5_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_5_length"><label>Show <select name="DataTables_Table_5_length" aria-controls="DataTables_Table_5" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_5"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_5" role="grid" aria-describedby="DataTables_Table_5_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1"> BNB <span class="text-muted">/ETH</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td>$30,298.93M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/BTS.png" alt="" class="img-fluid avatar mx-1"> BTT <span class="text-muted">/TRX</span></td>
                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                            <td><span class="color-price-up">+1.12%</span></td>
                                            <td>43,200.00 / 40,675.00</td>
                                            <td>2,603.11M</td>
                                            <td>$801,182.25M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/CNX.png" alt="" class="img-fluid avatar mx-1"> CNX <span class="text-muted">/ETH</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>$743958.07M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/HSR.png" alt="" class="img-fluid avatar mx-1"> HEGIC <span class="text-muted">/ETH</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/TRX.png" alt="" class="img-fluid avatar mx-1"> TRX <span class="text-muted">/XRP</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td>$75,260.60M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/WTC.png" alt="" class="img-fluid avatar mx-1"> WIN <span class="text-muted">/TRX</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_5_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_5_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_5_previous"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_5_next"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="FIAT" role="tabpanel">
                                <div id="DataTables_Table_6_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_6_length"><label>Show <select name="DataTables_Table_6_length" aria-controls="DataTables_Table_6" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_6_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_6"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_6" role="grid" aria-describedby="DataTables_Table_6_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BTC</span></td>
                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                            <td><span class="color-price-down">-3.46%</span></td>
                                            <td>0.006776 / 0.006346</td>
                                            <td>15,622.05</td>
                                            <td>$71,737.76M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/GBP</span></td>
                                            <td><span class="color-price-up">1.6693</span> <span class="text-muted">/ $2.27</span></td>
                                            <td><span class="color-price-down">+0.27%</span></td>
                                            <td>0.006776 / 0.006346</td>
                                            <td>15,622.05</td>
                                            <td>$71,737.76M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKE<span class="text-muted">/BTC</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td>$75,260.60M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1" tabindex="0"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/CVC.png" alt="" class="img-fluid avatar mx-1"> CELR<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">0.16675</span> <span class="text-muted">/ $0.16</span></td>
                                            <td><span class="color-price-up">-11.15%</span></td>
                                            <td>0.19870 / 0.16111</td>
                                            <td>321.14M</td>
                                            <td>$988.07M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BTC</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/USDT</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td>$563.54M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> DOT<span class="text-muted">/BTC</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td>$30,298.93M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/BTC</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/EUR</span></td>
                                            <td><span class="color-price-up">2,683.90</span> <span class="text-muted">/ $3,146.92</span></td>
                                            <td><span class="color-price-up">+9.33%</span></td>
                                            <td>2,714.56 / 2,355.50</td>
                                            <td>166.23M</td>
                                            <td>$370,389.91M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td>$342,735.73M</td>
                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_6_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_6_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_6_previous"><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_6_next"><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="ETF" role="tabpanel">
                                <div id="DataTables_Table_7_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_7_length"><label>Show <select name="DataTables_Table_7_length" aria-controls="DataTables_Table_7" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_7_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_7"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_7" role="grid" aria-describedby="DataTables_Table_7_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADADOWN<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                            <td><span class="color-price-down">-3.46%</span></td>
                                            <td>0.006776 / 0.006346</td>
                                            <td>15.75M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKEUP<span class="text-muted">/USDT</span></td>
                                            <td><span>1.721</span> <span class="text-muted">/ $1</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>1.119 / 1.293</td>
                                            <td>10.75M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/CVC.png" alt="" class="img-fluid avatar mx-1"> CELRUP<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">0.16675</span> <span class="text-muted">/ $0.16</span></td>
                                            <td><span class="color-price-up">-11.15%</span></td>
                                            <td>0.19870 / 0.16111</td>
                                            <td>16.55M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIDOWN<span class="text-muted">/USDT</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17.15M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> DOTUP<span class="text-muted">/USDT</span></td>
                                            <td><span>6.721</span> <span class="text-muted">/ $6.71</span></td>
                                            <td><span class="color-price-up">+6.95%</span></td>
                                            <td>7.119 / 5.293</td>
                                            <td>12.75M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUP<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-up">59.795</span> <span class="text-muted">/ $59.80</span></td>
                                            <td><span class="color-price-up">+24.55%</span></td>
                                            <td>61.750 / 44.269</td>
                                            <td>15.78M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATICDOWN<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                            <td><span class="color-price-up">+1.97%</span></td>
                                            <td>0.003359 / 0.003147</td>
                                            <td>14.75M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1"> SOLDOWN<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="user/assets/images/coin/USDT.png" alt="" class="img-fluid avatar mx-1"> USDT<span class="text-muted">/USDT</span></td>
                                            <td><span class="color-price-down">72.70</span> <span class="text-muted">/ $1.00</span></td>
                                            <td><span class="color-price-up">-0.83%</span></td>
                                            <td>73.40 / 72.68</td>
                                            <td>3.71M</td>
                                            <td>-</td>
                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_7_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_7_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_7_previous"><a href="#" aria-controls="DataTables_Table_7" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_7" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_7_next"><a href="#" aria-controls="DataTables_Table_7" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div><!-- Spotmarkets Tab End -->
                    <div class="tab-pane fade" id="Futuresmarkets" role="tabpanel">
                        <ul class="nav nav-pills rounded d-inline-flex" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#USDFUTURES" role="tab" aria-selected="true">USDⓈ-M Futures</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#COINFUTURE" role="tab" aria-selected="false" tabindex="-1">COIN-M Futures</a></li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="USDFUTURES" role="tabpanel">
                                <div id="DataTables_Table_8_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_8_length"><label>Show <select name="DataTables_Table_8_length" aria-controls="DataTables_Table_8" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_8_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_8"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_8" role="grid" aria-describedby="DataTables_Table_8_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                      
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADAUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>26,781.66</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTCUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                            <td><span class="color-price-up">+1.12%</span></td>
                                            <td>43,200.00 / 40,675.00</td>
                                            <td>2,603.11M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>36,883.46</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>17,935.33</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>2,079.60M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOLUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>743.07M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_8_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_8_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_8_previous"><a href="#" aria-controls="DataTables_Table_8" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_8" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_8_next"><a href="#" aria-controls="DataTables_Table_8" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <div class="tab-pane fade" id="COINFUTURE" role="tabpanel">
                                <div id="DataTables_Table_9_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_9_length"><label>Show <select name="DataTables_Table_9_length" aria-controls="DataTables_Table_9" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_9_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_9"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_9" role="grid" aria-describedby="DataTables_Table_9_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_9" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_9" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_9" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_9" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_9" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_9" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADAUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+7.27%</span></td>
                                            <td>0.006652 / 0.006168</td>
                                            <td>55.52M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTCUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                            <td><span class="color-price-up">+1.12%</span></td>
                                            <td>43,200.00 / 40,675.00</td>
                                            <td>460.63M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                            <td><span class="color-price-up">+3.45%</span></td>
                                            <td>0.09024 / 0.08345</td>
                                            <td>45.92M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                            <td><span class="color-price-up">+28.33%</span></td>
                                            <td>0.0018867 / 0.0013722</td>
                                            <td>10.17M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                            <td><span class="color-price-up">+4.03%</span></td>
                                            <td>2,979.99 / 2,733.00</td>
                                            <td>68.30M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="user/assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOLUSDT <span class="text-muted">perpetual</span></td>
                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                            <td><span class="color-price-up">+5.83%</span></td>
                                            <td>144.22 / 128.15</td>
                                            <td>24.40M</td>
                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_9_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_9_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_9_previous"><a href="#" aria-controls="DataTables_Table_9" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_9" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_9_next"><a href="#" aria-controls="DataTables_Table_9" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div><!-- Futuresmarkets Tab End -->
                    <div class="tab-pane fade" id="Newlisting" role="tabpanel">
                        <div id="DataTables_Table_10_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_10_length"><label>Show <select name="DataTables_Table_10_length" aria-controls="DataTables_Table_10" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_10_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_10"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_10" role="grid" aria-describedby="DataTables_Table_10_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h High / 24h Low: activate to sort column ascending">24h High / 24h Low</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                            </thead>
                            <tbody>
                                
                            <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1"><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="user/assets/images/coin/GALA.png" alt="" class="img-fluid avatar mx-1"> GALA <span class="text-muted"> GALA</span></td>
                                    <td><span class="color-price-up">$0.09</span></td>
                                    <td><span class="color-price-up">+2.20%</span></td>
                                    <td>223.32M</td>
                                    <td>$648.18M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr></tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_10_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_10_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_10_previous"><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_10_next"><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div><!-- Newlisting Tab End -->
                    <div class="tab-pane fade" id="Allcryptos" role="tabpanel">
                        <div id="DataTables_Table_11_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_11_length"><label>Show <select name="DataTables_Table_11_length" aria-controls="DataTables_Table_11" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_11_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_11"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="myProjectTable table table-hover custom-table align-middle mb-0 dataTable no-footer dtr-inline" style="width: 100%;" id="DataTables_Table_11" role="grid" aria-describedby="DataTables_Table_11_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_11" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_11" rowspan="1" colspan="1" style="width: 0px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_11" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Change: activate to sort column ascending">24h Change</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_11" rowspan="1" colspan="1" style="width: 0px;" aria-label="24h Volume: activate to sort column ascending">24h Volume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_11" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Cap: activate to sort column ascending">Market Cap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_11" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                            </thead>
                            <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1"><img src="user/assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ADA </span> <span class="text-muted"> Cardano</span></td>
                                    <td><span class="">$2.25</span></td>
                                    <td><span class="color-price-up">+0.45%</span></td>
                                    <td>3,931.81M</td>
                                    <td>$72,085.72M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1"><img src="user/assets/images/coin/ADX.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ADX </span> <span class="text-muted"> Adex</span></td>
                                    <td><span class="">$0.46</span></td>
                                    <td><span class="color-price-up">+6.18%</span></td>
                                    <td>29.28M</td>
                                    <td>$60.16M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1"><img src="user/assets/images/coin/ARDR.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ARDR </span> <span class="text-muted"> Ardor</span></td>
                                    <td><span class="">$0.28</span></td>
                                    <td><span class="color-price-up">+1.23%</span></td>
                                    <td>14.39M</td>
                                    <td>$288.31M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0"><img src="user/assets/images/coin/ARK.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ARK </span> <span class="text-muted"> Ark</span></td>
                                    <td><span class="">$1.51</span></td>
                                    <td><span class="color-price-down">-1.97%</span></td>
                                    <td>10.33M</td>
                                    <td>$200.74M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0"><img src="user/assets/images/coin/BAT.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BAT </span> <span class="text-muted"> Attention Token</span></td>
                                    <td><span class="">$0.65</span></td>
                                    <td><span class="color-price-up">+4.41%</span></td>
                                    <td>182.25M</td>
                                    <td>$971.60M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0"><img src="user/assets/images/coin/BCH.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BCH </span> <span class="text-muted"> Bitcoin Cash</span></td>
                                    <td><span class="">$511.30</span></td>
                                    <td><span class="color-price-up">+1.07%</span></td>
                                    <td>5,769.91M</td>
                                    <td>$9,645.19M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1"><img src="user/assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BNB </span> <span class="text-muted"> BNB</span></td>
                                    <td><span class="">$355.80</span></td>
                                    <td><span class="color-price-up">+4.62%</span></td>
                                    <td>1,969.40M</td>
                                    <td>$59,688.64M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0"><img src="user/assets/images/coin/BNT.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BNT </span> <span class="text-muted"> Bancor</span></td>
                                    <td><span class="">$3.60</span></td>
                                    <td><span class="color-price-up">+5.89%</span></td>
                                    <td>63.33M</td>
                                    <td>$843.39M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1"><img src="user/assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BTC </span> <span class="text-muted"> Bitcoin</span></td>
                                    <td><span class="color-price-down">$44,090.69</span></td>
                                    <td><span class="color-price-up">+4.92%</span></td>
                                    <td>32,826.51M</td>
                                    <td>$830,324.82M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0"><img src="user/assets/images/coin/CVC.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> CVC </span> <span class="text-muted"> Civic</span></td>
                                    <td><span class="">$0.43</span></td>
                                    <td><span class="color-price-up">+1.25%</span></td>
                                    <td>60.91M</td>
                                    <td>$291.78M</td>
                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                </tr></tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_11_info" role="status" aria-live="polite">Showing 1 to 10 of 26 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_11_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_11_previous"><a href="#" aria-controls="DataTables_Table_11" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_11" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_11" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_11" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="DataTables_Table_11_next"><a href="#" aria-controls="DataTables_Table_11" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div><!-- Allcryptos Tab End -->
                </div>
            </div>
        </div><!-- Row End -->

    </div>
</div>

<!-- Modal Custom Settings-->
<div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Custome Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom_setting">
                <!-- Settings: Color -->
                <div class="setting-theme pb-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                    <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="tradewind"><div class="tradewind"></div></li>
                        <li data-theme="monalisa"><div class="monalisa"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange" class="active"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="red"><div class="red"></div></li>
                    </ul>
                </div>
                <!-- Settings: Template dynamics -->
                <div class="dynamic-block py-3">
                    <ul class="list-unstyled choose-skin mb-2 mt-1">
                        <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                    </ul>
                    <div class="dt-setting">
                        <ul class="list-group list-unstyled mt-1">
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label>Primary Color</label>
                                <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label>Secondary Color</label>
                                <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">Chart Color 1</label>
                                <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">Chart Color 2</label>
                                <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">Chart Color 3</label>
                                <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">Chart Color 4</label>
                                <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">Chart Color 5</label>
                                <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0 colorpicker-element"></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Settings: Font -->
                <div class="setting-font py-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                    <ul class="list-group font_setting mt-1">
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                <label class="form-check-label" for="font-poppins">
                                    Poppins Google Font
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans">
                                <label class="form-check-label" for="font-opensans">
                                    Open Sans Google Font
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                <label class="form-check-label" for="font-montserrat">
                                    Montserrat Google Font
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-Plex" value="font-Plex" >
                                <label class="form-check-label" for="font-Plex">
                                    Plex Google Font
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Settings: Light/dark -->
                <div class="setting-mode py-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                    <ul class="list-group list-unstyled mb-0 mt-1">
                        <li class="list-group-item d-flex align-items-center py-1 px-2">
                            <div class="form-check form-switch theme-switch mb-0">
                                <input class="form-check-input" type="checkbox" id="theme-switch">
                                <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-1 px-2">
                            <div class="form-check form-switch theme-high-contrast mb-0">
                                <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-1 px-2">
                            <div class="form-check form-switch theme-rtl mb-0">
                                <input class="form-check-input" type="checkbox" id="theme-rtl">
                                <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary lift">Save Changes</button>
            </div>
        </div>
    </div>
</div> 

</div>
    </div>
</template>