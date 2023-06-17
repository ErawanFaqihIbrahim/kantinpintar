<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DaftarSebagai</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .daftar1 {
            align-items: center;
            background-color: rgba(248, 244, 240, 1);
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            padding: 63px 24px;
            width: 390px;
            position: fixed;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .group-187 {
            align-items: flex-start;
            align-self: flex-start;
            cursor: pointer;
            height: 30px;
            display: flex;
            gap: 8px;
            min-width: 94px;
            margin-left: 24px;
            margin-top: 74px;
        }

        .kembali {
            color: rgba(99, 54, 59, 1);
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
            min-width: 68px;
            margin-left: 25px;
            margin-top: -31px;
        }

        .vector {
            height: 29px;
            align-self: flex-end;
            margin-bottom: 0;
            width: 16px;
        }

        .login {
            align-items: flex-start;
            display: flex;
            gap: 16px;
            flex-direction: column;
            margin-right: 10px;
            margin-top: 10px;
            min-height: 106px;
            width: 295px;
        }

        /* .overlap-group2 {
            border-radius: 36px;
            height: 45px;
            width: 295px;
            position: relative;
        } */

        .ulangi-password {
            left: 56px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 14px;
        }

        .group-162 {
            align-items: flex-start;
            border: 1px solid;
            border-color: rgba(120, 156, 87, 1);
            border-radius: 36px;
            display: flex;
            height: 45px;
            left: 0;
            min-width: 295px;
            padding: 10px 21px;
            position: absolute;
            top: 0;
            ;
        }

        .icon-unlock {
            height: 23px;
            width: 23px;
        }

        .overlap-group-1 {
            align-items: center;
            border: 1px solid;
            border-radius: 36px;
            display: flex;
            border-color: rgba(120, 156, 87, 1);
            gap: 12px;
            height: 45px;
            min-width: 295px;
            padding: 10px 21px;
            font-family: "Poppins";
            color: rgba(120, 156, 87, 1);
            margin-left: 10px;
            margin-right: 10px;


        }

        .icon-person {
            height: 22px;
            width: 22px;
        }

        .email {
            letter-spacing: 0;
            line-height: normal;
            margin-top: 1px;
            min-height: 21px;
            min-width: 38px;
            text-align: center;
        }

        .overlap-group2 {
            border: 1px solid;
            border-color: rgba(120, 156, 87, 1);
            align-items: flex-start;
            border-radius: 36px;
            display: flex;
            gap: 11px;
            height: 45px;
            min-width: 295px;
            padding: 10px 21px;
        }

        .password {
            align-self: center;
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
            text-align: center;
            min-width: 68px;
        }

        .overlap-group3 {
            height: 271px;
            margin-right: 4px;
            margin-top: 24px;
            margin-bottom: 32px;
            position: relative;
            width: 298px;
            justify-content: center;
            margin-left: 37px;
            margin-right: 10px;

            /* align-items: flex-start;
            align-self: flex-start;
            cursor: pointer;
            height: 30px;
            display: flex;
            gap: 8px;
            min-width: 94px;
            margin-left: 24px;
            margin-top: 74px; */
        }

        .overlap-group {
            height: 271px;
            left: 0;
            position: absolute;
            top: 0;
            width: 298px;
            justify-content: center;
            margin-left: -10px;
        }

        .rectangle-115 {
            background-color: #F8F4F0;
            height: 51px;
            left: 0;
            position: absolute;
            top: 220px;
            width: 298px;
        }

        .group-408 {
            height: 271px;
            left: 14px;
            position: absolute;
            top: 0;
            width: 271px;
        }

        .dropdown {
            align-items: flex-start;
            cursor: pointer;
            left: 3px;
            position: absolute;
            top: 220px;
        }

        .daftar1 .dropdown-1 {
            display: flex;
            height: 45px;
            min-width: 295px;
        }

        .dropdown-default {
            align-items: center;
            border-radius: 36px;
            background-color: rgba(120, 156, 87, 1);
            box-shadow: 0px 4px 4px #00000040;
            padding: 10px 103px;
            gap: 6px;
            /* text-align: center; */
        }

        .penjual {
            /* align-self: flex-end; */
            align-items: center;
            font-size: 16px;
            line-height: normal;
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-weight: 600;
            letter-spacing: 0;
            min-height: 24px;
            min-width: 70px;
            text-align: center;
            justify-content: center;

            /* align-items: center;
            background-color: rgba(120, 156, 87, 1);
            box-shadow: 0px 4px 4px #001f2f40;
            border-radius: 36px;
            display: flex;
            height: 66px;
            min-width: 295px;
            padding: 0 21px;
            line-height: normal;
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            justify-content: center; */
        }

        .vector-1 {
            height: 5px;
            /* margin-top: 2px; */
            width: 11px;
            align-items: center;
            align-self: center;

            /* height: 29px;
            align-self: flex-end;
            margin-bottom: 0;
            width: 16px; */
        }

        .group-155 {
            display: flex;
            align-items: flex-start;
            align-self: flex-end;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 60px;
            margin-bottom: 74px;
            min-width: 297px;
            position: relative;
            justify-content: center;
            width: 340px;
        }

        .overlap-group1-1 {
            align-items: center;
            background-color: rgba(120, 156, 87, 1);
            /* box-shadow: 0px 4px 4px #001f2f40; */
            border-radius: 36px;
            display: flex;
            height: 66px;
            min-width: 225px;
            padding: 0 21px;
            line-height: normal;
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            justify-content: center;



            /* align-self: flex-end;
            font-size: 16px;
            line-height: normal;
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-weight: 600;
            letter-spacing: 0;
            min-height: 24px;
            min-width: 70px;
            text-align: center; */

        }

        .overlap-group1-2 {
            align-items: center;
            background-color: rgba(120, 156, 87, 1);
            /* box-shadow: 0px 4px 4px #001f2f40; */
            border-radius: 36px;
            display: flex;
            height: 66px;
            min-width: 225px;
            padding: 0 21px;
            line-height: normal;
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            justify-content: center;

        }

        /* .daftar {
            color: rgba(255, 255, 255, 1);
            font-family: "Poppins";
            font-size: 32px;
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            min-height: 36px;
            min-width: 78px;
            text-align: center;
        } */

        .title {
            color: rgba(0, 0, 0, 1);
            font-family: "Poppins";
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            margin-top: 22px;
            min-height: 48px;
            width: 340px;
            text-align: center;
        }

        input {
            border: none;
            font-family: 'poppins';
            font-size: 14px;
            align-items: center;
            width: 90%;
            height: 35px;

        }

        .overlap-group-12 {
            align-items: center;
            border: 1px solid;
            border-radius: 36px;
            display: flex;
            background-color: rgba(120, 156, 87, 1);
            gap: 12px;
            height: 55px;
            min-width: 295px;
            padding: 10px 21px;
            font-family: "Poppins";
            color: rgba(255, 255, 255, 1);
            margin-left: -10px;
            justify-content: center;
            text-align: center;
            font-weight: 200px;
            font-size: 16px;
            border-color: rgba(120, 156, 87, 1);
        }
    </style>

<body>
    <div class="daftarl screen">
        <div class="group-187">
            <a href="/masuksbg" style="text-decoration:none">
            <img class="vector" src="{{ URL::asset('image/vector.svg') }}" alt="Vector" />
            <div class="kembali">Kembali</div>
            </a>
        </div>

        <div class="title">Login</div>

        <div class="overlap-group3">
            <div class="overlap-group">
                <img class="group-408" src="{{ URL::asset('image/group408.png') }}" alt="Group 408" />
                {{-- <div class="rectangle-115"></div> --}}
            </div>
            <select class="dropdown overlap-group-12" name="test_redirect">
                <option value="loginpenjual" class="overlap-group-12" selected>PENJUAL</option>
                <option value="loginpembeli" class="overlap-group-12">PEMBELI</option>
            </select>
            {{-- <div class="dropdown dropdown-1">
                <div class="dropdown-default">
                    <div class="penjual">PENJUAL</div>
                    <img class="vector-1" src="{{ URL::asset('image/vector-3.svg') }}" alt="Vector" />
                </div>
            </div> --}}
        </div>

        @if (session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('actionloginPenjual') }}" method="post">
            <div class="login">
                @csrf
                <div class="overlap-group-1">
                    <img class="icon-person" src="{{ URL::asset('image/iconperson.png') }}" alt="icon person" />
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="overlap-group-1">
                    <img class="icon-unlock" src="{{ URL::asset('image/iconunlock.png') }}" alt="icon unlock" />
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                </div>
            </div>

            <div>
                <div class="group-155">
                    <button name="masuk" type="submit" class="overlap-group1-1" style="border:none">
                    <div class="overlap-group1-1">Masuk</div>
                    </button>
                </div>
            </div>
    </div>
    <script>
        document.querySelectorAll("[name=test_redirect]")[0].addEventListener('change',
            function() {
                window.location = "/" + this.value;
            });
    </script>
</body>
