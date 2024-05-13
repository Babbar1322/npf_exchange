<html>

<head>

    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

    <title>Welcome</title>

    <style>
        .container {

            width: 600px;

            margin: 0 auto;

        }

        .logo {

            width: 100%;

            float: left;

            text-align: center;

            margin-top: 30px;

        }

        .logo img {

            width: 44%;

        }

        .main-div {

            width: 100%;

            float: left;

            /* background: linear-gradient(to right, #10407c, #030B15) !important; */
            background: #052133;
            border-radius: 20px;

            padding: 27px;

            margin-top: 20px;

            margin-bottom: 20px;

        }

        td {

            border: 1px #ccc solid;

            padding: 10px;

        }

        .main-div h1 {

            color: white;

        }

        p,
        td {
            color: white;
        }
        .btn{
            background-color: rgb(36, 209, 229);
            color: white;
            border-radius: 50px;
            width: 120px;
            height: 20px;
            text-align: center;
            line-height: 52px;
            padding: 10px 30px;
        }
    </style>

</head>

<body>

    <div class='container'>


        <div class='main-div'>

            <div class='logo'>
                <img src="https://npfexchange.com/logo.png" alt="logo">
            </div>


            <h1>Login Details</span></h1>

            <p>Dear {{ $name }},</p>
            <p>You are login details linked with your NPFExchange account,</p>


            <table style='width:100%'>
                <tr>
                    <td>Email</td>
                    <td class="text-white">{{ $email }}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td style="text-white">{{ $password }}</td>
                </tr>
            </table>

            <p> Never share your Details with anyone </p>

            <p>Thank you,</p>

            <p>Please check more detail at <a href='https://npfexchange.com/'>https://npfexchange.com/</a></p>

          <a href='https://npfexchange.com/Login' class="btn">Login</a>

        </div>

    </div>

</body>

</html>
