<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kantin Pintar ITS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins';
        }

        .navbar a:visited{
            color: black;
        }
        .navbar a:active{
            color: green;
        }

        a:hover {
            color: inherit;
            background-color: transparent;
            text-decoration: none;
        }

        input {
            border: none;
            font-family: 'poppins';
            font-size: 14px;
            align-items: center;
            width: 148%;
            height: 35px;
        }

        .homepage {
            align-items: center;
            background-color: rgba(248, 244, 240, 1);
            height: 1680px;
            width: 390px;
        }

        .overlap-group1 {
            height: 256px;
            position: relative;
            width: 390px;
        }

        .rectangle-82 {
            height: 202px;
            background-color: rgba(234, 215, 206, 1);
            position: absolute;
            left: 0;
            top: 0;
            width: 390px;
        }

        .group-217 {
            left: 258px;
            height: 131px;
            position: absolute;
            top: 71px;
            width: 56px;
        }

        .group {
            height: 104px;
            left: 286px;
            position: absolute;
            top: 90px;
            width: 89px;
        }

        .rectangle-29 {
            height: 55px;
            position: absolute;
            top: 180px;
            width: 336px;
            left: 27px;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        nav {
            top: 100px;
        }

        .span1 {
            color: rgba(0, 0, 0, 1);
            font-family: 'Poppins';
            font-size: 32px;
        }

        .span2 {
            color: rgba(0, 0, 0, 1);
            font-family: 'Poppins';
            font-size: 32px;
        }

        .nama {
            height: 74px;
            left: 85px;
            font-family: 'Poppins';
            letter-spacing: 0;
            line-height: 37.4px;
            position: absolute;
            top: 81px;
        }

        .search {
            color: rgba(99, 54, 59, 1);
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 400;
            left: 80px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 185px;
        }

        .group-210 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            height: 224px;
            min-width: 161px;
        }

        .overlap-group {
            height: 226px;
            margin-top: -2px;
            position: relative;
            width: 155px;
        }

        .rectangle-86 {
            background-color: #FFFFFF;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            height: 98px;
            width: 115px;
            left: 0;
            position: absolute;
            top: 66px;

        }

        .media {
            border-radius: 11px;
            background-color: #FFFFFF;
            box-shadow: 0px 4px 4px #00000040;
        }

        .con-link {
            color: black;
            background-color: transparent;
            text-decoration: none;
        }

        .navbar {
            width: 390px;
        }

        @media only screen (max-width : 600px) {
            .navbar-nav {
                width: 100%;
            }
        }

        .icon-bar {
            width: 390px;
            background-color: rgb(234, 215, 206);
            position: fixed;
            bottom: 0%;
        }

        .icon-bar a {
            float: left;
            margin-left: 80px;
            width: 80px;
            text-align: center;
            padding: 12px 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
            box-shadow: 0px 4px 4px #00000040;
            border-radius: 77px;
        }

        .nominal {
            position: relative;
        }

        h5 {
            position: absolute;
            font-family: 'Poppins';
            font-weight: 600;
            left: 13px;
            top: 22px;
        }

        .group-container {
            color: #FFFFFF;
            align-items: flex-end;
            background-color: rgba(234, 215, 206, 1);
            box-shadow: 0px -4px 4px #00000040;
            display: flex;
            gap: 95px;
            height: 97px;
            justify-content: flex-end;
            margin-left: -1px;
            bottom: 0;
            position: fixed;
            min-width: 391px;
            padding: 2px 93px;
        }

        .group-222 {
            align-items: center;
            cursor: pointer;
            display: flex;
            gap: 13px;
            height: 71px;
            flex-direction: column;
            width: 52px;
        }

        .group-216 {
            height: 33px;
            margin-right: 2.06px;
            width: 26px;
        }

        .favorit {
            letter-spacing: 0;
            line-height: normal;
            height: 25px;
            min-width: 50px;
            text-align: center;
            font-family: 'poppins';
            font-size: 16px;
            font-weight: 500;
        }

        .group-424 {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 15px;
            height: 76px;
            width: 45px;
        }

        .place {
            align-self: flex-start;
            letter-spacing: 0;
            line-height: normal;
            height: 25px;
            width: 52px;
            text-align: center;
            font-family: 'poppins';
            font-size: 16px;
            font-weight: 500;
            margin-left: -4px;
        }

        .vector {
            height: 36px;
            width: 40px;
        }

        .vector1 {
            height: 33px;
            width: 26px;
        }

        .group-container a:visited{
            color: rgba(221, 110, 81, 1);
        }

    </style>
</head>

<body>
    <div class="homepage">

        <div>
            <div class="overlap-group1">
                <div class="rectangle-82"></div>

                <h1 class="nama">
                    <span><span class="span1">Halo,<br /></span>
                        <span class="span2"><b>Faqih!</b></span></span>
                </h1>

                <img class="group-217" src="{{ URL::asset('image/botol.png') }}" />
                <img class="group" src="{{ URL::asset('image/cupcake.png') }}"" />
                <img class="rectangle-29" src="{{ URL::asset('image/search.png') }}" alt="Search" />
                <p class="search"> <input type="text" placeholder="mau makan apa hari ini?"></p>

            </div>
        </div>

        <nav class="navbar navbar-expand-sm bg-success sticky-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <div class="nominal">
                            <img src="{{ URL::asset('image/saldo.jpeg') }}" alt="home" style="width:130px;">
                            <h5>20.000</h5>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <img src="{{ URL::asset('image/x.jpeg') }}" style="width:60px; cursor:default">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href={{ 'denah' }}>
                        <img src="{{ URL::asset('image/denah.jpeg') }}" alt="denah" style="width:60px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <img src="{{ URL::asset('image/logout.jpeg') }}" alt="logout" style="width:59px;">
                    </a>
                </li>
            </ul>
        </nav>

        @foreach ($dataKedai as $kedai)
            <div class="container mt-3">

                <div class="media border p-3">
                    <a class="con-link" href="homepage">
                        <img src="{{ URL::asset('image/cupcake.png') }}" class="align-self-center mr-3" style="width:40px;">
                    </a>
                    <a class="con-link" href="homepage">
                        <div class="media-body">
                            <h4><b>{{ $kedai->kedaiNama }}</b></h4>
                            <h6>Bakso, Mie ayam, Nasi goreng.</h6>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        <div class="group-container">
            <a href="#"><div class="group-424">
                <img class="vector" src="{{ URL::asset('image/home.jpeg') }}">
                <div class="place">Home</div>
            </div></a>
            <a href="#"><div class="group-222">
                <img class="vector1" src="{{ URL::asset('image/favorit.jpeg') }}">
                <div class="favorit">Favorit</div>
            </div></a>
        </div>

    </div>

</body>

</html>
