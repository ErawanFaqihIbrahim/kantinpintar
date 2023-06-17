<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masuk Sebagai</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .masuk-sebagai {
            align-items: flex-end;
            background-color: #F8F4F0;
            border: 1px none;
            display: flex;
            flex-direction: column;
            gap: 105px;
            height: 844px;
            padding: 158px 46px;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .logo {
            align-self: center;
            height: 113px;
            width: 168px;
        }

        .sign-up {
            flex-direction: column;
            align-items: flex-start;
            display: flex;
            gap: 45px;
            min-height: 177px;
            width: 296px;
        }

        .login {
            letter-spacing: 0;
            line-height: normal;
            min-height: 36px;
            min-width: 66px;
            text-align: center;
            margin-left: 111px;
        }

        /* .overlap-group1 {
            padding: 0;
        } */

        .masuk-sebagai .overlap {
            border-radius: 36px;
            align-items: center;
            background-color: rgba(120, 156, 87, 1);
            box-shadow: 0px 0px 4px #001f2f40;
            height: 66px;
            min-width: 295px;
            display: flex;
            margin-left: -50px;
        }

        .button {
            border: none;
        }

        .title {
            letter-spacing: 0;
            line-height: normal;
            min-height: 36px;
            min-width: 93px;
            text-align: center;
            margin-left: 95px;
        }

        /* .overlap-group {
            margin-left: 1px;
            padding: 0;
        } */


        .poppins-normal-white-12px {
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-size: 12px;
            font-weight: 400;
            font-style: normal;
        }

    </style>
</head>

<body>
    <div class="masuk-sebagai screen">
        <img class="logo" src="{{ URL::asset('image/logo.svg') }}" alt="logo" />
        <div class="sign-up">
            <a href="/signuppembeli" style="text-decoration:none">
            <button name="sign-up" type="submit" class="overlap button">
                <div class="poppins-normal-white-12px">
                    <h1 class="title poppins-semi-bold-white-12px">Sign Up</h1>
                </div>
            </button>
            </a>
            <a href="/loginpembeli" style="text-decoration:none">
            <button name="login" type="submit" class="overlap button">
                <div class="poppins-normal-white-12px">
                    <h1 class="login poppins-semi-bold-white-12px">Login</h1>
                </div>
            </button>
            </a>
        </div>
    </div>
</body>
