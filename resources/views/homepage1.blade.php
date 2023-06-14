<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kantin Pintar ITS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins';
        }

        .navbar a:visited {
            color: black;
        }

        .navbar a:active {
            color: green;
        }

        .media a:hover {
            color: inherit;
            background-color: transparent;
            text-decoration: none;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
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
            height: 844px;
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

        .nama {
            height: 74px;
            left: 85px;
            font-family: 'Poppins';
            letter-spacing: 0;
            line-height: 37.4px;
            position: absolute;
            top: 81px;
        }

        .search input{
            color: rgba(99, 54, 59, 1);
            border-radius: 50px;
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 400;
            left: 20px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 180px;
            width: 340px;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 40px;
            height: 50px;
            box-shadow: 0px 4px 4px #00000040;


        }

        .search button{
            position: absolute;
            display: flex;
            top: 189px;
            left: 20px;

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

        /* .icon-bar {
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
        } */

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

        .group-container a:visited {
            color: rgba(221, 110, 81, 1);
        }

        .overlap-group-1 {
            position: relative;
        }

        .tambahfav {
            position: absolute;
            bottom: -20px;
            right: 5px;
        }

        input[type=checkbox] {
            display: none;
        }

        .label {
            text-shadow: 0 0 1px #f00;
            display: flexbox;
            left: 330px;
            margin-top: -10px;
            position: absolute;
            background-image: url("unfavorit.png");
            color: white;
        }

        input[type=checkbox]:checked+.label {
            /* background: #fff; */
            color: #f00;
            background-image: url("favorit.png");
        }

        #media-body .fa-heart {
            font-size: 200px;
            color: rebeccapurple;
        }

        #media-body .fa-heart.active {
            font-size: 200px;
            color: #f00;
        }
    </style>
</head>

<body>
    <div class="homepage">

        <div>
            <div class="overlap-group1">
                <div class="rectangle-82"></div>

                <h1 class="nama">
                    <span>
                        <span class="span1">Halo,<br /></span>
                        <span class="span1"><b>Faqih!</b></span>
                    </span>
                </h1>

                <img class="group-217" src="{{ URL::asset('image/botol.png') }}" />
                <img class="group" src="{{ URL::asset('image/cupcake.png') }}" />

                <div class="search">
                    <form action="/homepage1/search" method="GET">

                            <input class="search2" type="search" name="search" id="search-item" placeholder="temukan kedai">
                                {{-- onkeyup="search()"> --}}
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>


                    </form>
                </div>


            </div>
        </div>

        <nav class="navbar navbar-expand-sm bg-success sticky-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <div class="nominal">
                            <img src="{{ URL::asset('image/saldo.jpeg') }}" alt="home" style="width:130px;">
                            @foreach ($dataAkunPembeli as $pembeli)
                                <h5>{{ $pembeli->saldoJumlah }}</h5>
                            @endforeach
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
            <div class="container mt-3" id="product-list">
                {{-- product-list --}}

                <div class="media border p-3">
                    {{-- product --}}

                    <a href="homepage" class="con-link">
                        <img src="{{ URL::asset('image/cupcake.png') }}" class="align-self-center mr-3"
                            style="width:40px;">
                    </a>

                    <div class="media-body">
                        <a href="homepage" class="con-link">
                            <h3><b>{{ $kedai->kedaiNama }}</b></h3>
                            {{-- pname --}}


                            <label><input type="checkbox"><span class="label">
                                    <i class="material-icons">bookmark</i></span></label>

                                    {{-- <i class="fa fa-heart"></i> --}}
                        </a>

                        {{-- <a href={{ 'kedai/' . $dataKedai['kedaiID'] }}>
                            <a href="">
                                <div class="overlap-group-1">
                                    <div class="tambahfav"><i class="material-icons">bookmark</i></div>
                                </div>
                            </a>
                        </a> --}}

                        {{-- <h6>Bakso, Mie ayam, Nasi goreng.</h6> --}}
                    </div>
                </div>
            </div>
        @endforeach


        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="group-container">
            <a href="#">
                <div class="group-424">
                    <img class="vector" src="{{ URL::asset('image/home.jpeg') }}">
                    <div class="place">Home</div>
                </div>
            </a>
            <a href={{ 'favorit' }}>
                <div class="group-222">
                    <img class="vector1" src="{{ URL::asset('image/favorit.jpeg') }}">
                    <div class="favorit">Favorit</div>
                </div>
            </a>
        </div>

    </div>
    <script src="app.js"></script>
    {{-- <script>
                        const button = document.querySelector("#media-body .fa-heart");

                        button.onclick = ()=>{
                            let xhr = new XMLHttpRequest();
                            xhr.open("GET", "favoritController.php?akunPembeliID=1&favID=1", true);
                            xhr.onload = ()=>{
                                if(xhr.readyState === XMLHttpRequest.DONE){
                                    IF(xhr.status === 200){
                                        button.classList.toggle("active");

                                    }
                                }
                            }
                            xhr.send();
                        }
                    </script> --}}
</body>

</html>
