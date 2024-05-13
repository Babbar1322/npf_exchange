<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exchange </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{ asset('user/assets/plugin/datatables/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugin/datatables/dataTables.bootstrap5.min.css') }}">

    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/cryptoon.style.min.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/carouselTicker.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugin/remixicons/remixicon.css') }}">

    {{-- <link rel="stylesheet" href="{{asset('user/style.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Styles -->


    <!-- Google Code  -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-264428387-1"></script>
    <script type="text/javascript"
        src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        //   window.dataLayer = window.dataLayer || [];
        //   function gtag(){dataLayer.push(arguments);}
        //   gtag('js', new Date());

        //   gtag('config', 'UA-264428387-1');
    </script>
    <style>
         .main{
            background: black !important;
        }
        #chart .apexcharts-tooltip {
            color: black;
        }

        .cstm-position {
            left: 400px;
            bottom: -6px;
        }

        @media (max-width:700px) {
            .cstm-position {
                left: 185px;
            }
        }

        button.button:hover {
            box-shadow: 0px 0px;
        }

        .btn.confirm-btn {
            background-color: rgb(36, 209, 229);
            color: white;
            border-radius: 50px;
            width: 120px;
            height: 50px;
            text-align: center;
            line-height: 52px;
        }

        .btn.cancel-btn {
            color: rgb(36, 209, 229) !important;
            border-color: rgb(36, 209, 229);
            background: transparent;
            width: 120px;
            height: 50px;
            text-align: center;
            line-height: 52px;
        }

        .btn.cancel-btn:hover {
            background: transparent !important;
        }

        .btn.confirm-btn:hover {
            background-color: rgb(36, 209, 229);
        }

        span.input-group-text {
            margin-bottom: 0px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .form-control,
        .form-control:focus,
        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background: #495c6e;
            border: transparent;
            color: white;
            border-radius: 50px;
            min-height: 40px;
        }

        .navbar-brand {
            padding: 5px 0px;
        }

        .bg-main {
            background: #24D1E5;

        }

        .bg-main_dark {
            background-color: #041E37;

        }

        .text-main {
            color: #24D1E5;

        }

        .banner-item {
            background-image: url(banner_img.png);
            height: 100%;
            background-repeat: no-repeat;
        }

        @media (max-width:600px) {
            .banner-item {
                background-size: contain;
            }

            .banner-text {
                font-size: 17px;
                top: 40px;
                left: 33px
            }
        }

        .banner-text {
            position: relative;
        }

        .gradient-text-primary-secondary {
            background: linear-gradient(to right, #06cff1, #defa8e);
            display: inline-block;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent !important;
            font-family: Nova Square, sans-serif;
        }

        .table_img {
            width: 50px;
        }

        .earn_img {
            width: 100px;
        }

        .card,
        .bg-dark,
        .dropdown-menu,
        #offcanvasExample2,
        .table.custom-table-2 tbody tr {

            background-color: #052133 !important;
        }

        .cardcolor {
            background-image: linear-gradient(173deg, #22d1e7, #d9f78e);
        }

        .card,
        .table tr td {
            border-color: #052133;
        }

        .background,
        .main {
            /* background:#f8fafc; */
            /* background:#121111; */
        }

        .widget-visible {
            display: none !important;
        }

        h1,
        h2,
        h3,
        h5,
        h6,
        h4,
        div,
        p,
        span,
        label,
        .offcanvas-body a,
        small,
        .table tr th,
        .table tr td,
        .apexcharts-canvas .apexcharts-legend-text,
        .btn-cstm {
            /* color: white !important; */
        }

        .apexcharts-canvas text {
            fill: white;
        }

        .cstm-tab>.nav-item>.nav-link.active {
            background-color: transparent;
            color: rgb(36, 209, 229);
        }

        .cstm-tab>.nav-item>.nav-link {
            color: black;
        }
    </style>

    <style>
        .svg_navlogo {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: currentColor;
            width: 24px;
            height: 24px;
            font-size: 24px;
            fill: #e9a30e;
            width: 120px;
            height: 24px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            z-index: 1;
            list-style-type: none !important;
        }

        .dropdown-menu a:hover {
            background-color: #ddd;
        }

        /* .dropdown:hover .dropdown-menu {
        display: block;
    } */

        .grid_nav {
            width: 800px !important;
            padding: 10px 20px !important;
        }

        .css-mykl4n {
            min-width: 0;
            width: 24px;
            height: 24px;
            font-size: 24px;
            fill: #1E2329;
        }

        .nav_hover:hover {
            background-color: #aff7ff8c;
            border-radius: 10px;
            color: #000000 !important;
        }

        .nav-link {
            font-size: 14px;
        }

        .right_arrow_nav {
            display: none !important;
        }

        .nav_hover:hover .right_arrow_nav {
            display: block !important;
        }

        @media screen and (max-width: 992px) {
            .deposit_form {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .grid_nav {
                width: 100% !important;
            }

            .grid_nav_transform {
                width: 100% !important;
                transform: translate(0px, 0px) !important;
            }
        }

        .svg_navlogo {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: currentColor;
            width: 24px;
            height: 24px;
            font-size: 24px;
            fill: #e9a30e;
            width: 120px;
            height: 24px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            z-index: 1;
            list-style-type: none !important;
        }

        .dropdown-menu a:hover {
            background-color: #ddd;
        }



        .grid_nav {
            width: 800px !important;
            padding: 10px 20px !important;
        }

        .css-mykl4n {
            min-width: 0;
            width: 24px;
            height: 24px;
            font-size: 24px;
            fill: #1E2329;
        }

        .nav_hover:hover {
            background-color: #aff7ff8c;
            border-radius: 10px;
            color: #000000 !important;
        }

        .nav-link {
            font-size: 14px;
        }

        .right_arrow_nav {
            display: none !important;
        }

        .nav_hover:hover .right_arrow_nav {
            display: block !important;
        }

        .table_img {
            width: 30px !important;
        }

        .earn_img {
            width: 50px;
        }

        .card_earn {
            transition: .2s all;
        }

        .card_earn:hover {
            transform: translateY(-5%);
            box-shadow: 0px 8px 16px rgba(24, 26, 32, 0.16);
        }

        .card_earn:hover .earn_icon {
            background-color: #e9a30e !important;
            padding: 5px;
            border-radius: 100px;
        }

        .card-deck-shadow {
            transition: .2s all;
        }

        .card-deck-shadow:hover {
            transform: translateY(-5%);
            box-shadow: 0px 8px 16px rgba(24, 26, 32, 0.16);
        }


        @media screen and (max-width: 992px) {
            .deposit_form {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .verify_img {
                width: 80px !important;
            }

            .grid_nav {
                width: 100% !important;
            }

            .grid_nav_transform {
                width: 100% !important;
                transform: translate(0px, 0px) !important;
            }

            .chart_height {
                height: 370px;
            }
        }

        /* body{
        overflow-y: scroll !important;
    } */
        .text-warning {
            color: #7258db !important;
        }

        .chart_height {
            height: 500px;
        }

        .coin_width>div {
            width: 100% !important;
        }

        div.coin_width>div>div>a>svg {
            display: none;
        }
    </style>

</head>

<body class="background">
    <div id="app" class="theme-indigo ">
        <mainapp />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Jquery Core Js -->
    <script src="{{ asset('user/assets/bundles/libscripts.bundle.js') }}"></script>

    <!-- Plugin Js -->
    <script src="{{ asset('user/assets/bundles/dataTables.bundle.js') }}"></script>
    <script src="{{ asset('user/assets/bundles/apexcharts.bundle.js') }}"></script>

    <!-- Jquery Page Js -->
    <script src="{{ asset('user/js/template.js') }}"></script>
    <script src="{{ asset('user/js/page/margin-trade.js') }}"></script>
    <script src="{{ asset('user/js/page/exchange.js') }}"></script>
    <script src="{{ asset('user/js/page/index.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- Plugin Js -->

    <!-- Jquery Page Js -->
    <script src="{{ asset('user/js/page/future.js') }}"></script>
    <script src="{{ asset('user/js/page/chart-apex.js') }}"></script>
    <script src="{{ asset('user/js/page/custom.js') }}"></script>
    <script src="{{ asset('user/js/page/jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

    <script>
        // $(document).ready(function(){
        //     $(".widget-visible").attr("style","display:none");
        // });
    </script>
</body>

</html>
