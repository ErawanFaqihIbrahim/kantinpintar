<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Pintar ITS</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d11932acb.js" crossorigin="anonymous"></script>
    <style>
        .home-pelanggan-2 {
            align-items: center;
            background-color: rgba(248, 244, 240, 1);
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            width: 390px;

        }

        .group-container {
            /* align-items: flex-start;
            background-color: rgba(234, 215, 206, 1);
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            gap: 100px;
            height: 121px;
            justify-content: flex-end;
            margin-top: 6px;
            min-width: 390px;
            padding: 13px 79px; */

            align-items: flex-end;
            background-color: #EAD7CE;
            height: 121px;
            margin-top: 6px;
            box-shadow: 0px -4px 4px #00000040;
            display: flex;
            width: 390px;

            position: fixed;
            bottom: 0px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .group-398 {
            align-items: center;
            align-self: center;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: 17px;
            margin-top: 4px;
            min-height: 71px;
            width: 64px;
        }

        .group-216 {
            height: 33px;
            margin-right: 2.06px;
            width: 26px;
        }

        .favorit {
            color: rgba(221, 110, 81, 1);
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            margin-right: 2px;
            min-height: 21px;
            min-width: 50px;
            text-align: center;
        }

        .group-277 {
            align-items: center;
            align-self: center;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: 20px;
            min-height: 89px;
            width: 64px;
        }

        .overlap-group {
            align-items: flex-end;
            background-color: rgba(120, 156, 87, 1);
            border-radius: 77px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 63px;
            justify-content: flex-end;
            margin-right: 2px;
            min-width: 62px;

        }

        .icon-home {
            height: 35px;
            width: 35px;
            align-self: center;
            margin-right: 12px;

        }

        .place {
            color: rgba(120, 156, 87, 1);
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            margin-right: 1px;
            min-height: 21px;
            min-width: 50px;
            text-align: center;
        }

        .group-41 {
            height: 106px;
            margin-left: 4.61px;
            margin-top: 6px;
            width: 327px;
        }

        .group-417 {
            height: 106px;
            margin-left: 4.61px;
            margin-top: 40px;
            width: 327px;
        }

        .overlap-group1 {
            height: 276px;
            margin-top: -41px;
            position: relative;
            width: 390px;
        }

        .mau-makan-apa-hari-ini {
            color: rgba(99, 54, 59, 1);
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 400;
            left: 80px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 215px;
        }

        .group {
            height: 104px;
            left: 286px;
            position: absolute;
            top: 131px;
            width: 89px;
        }

        .rectangle-82 {
            height: 243px;
            background-color: rgba(234, 215, 206, 1);
            position: absolute;
            left: 0;
            top: 0;
            width: 390px;
        }

        .rectangle-29 {
            height: 55px;
            position: absolute;
            top: 221px;
            width: 336px;
            left: 27px;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .halo-shane {
            height: 74px;
            left: 85px;
            font-family: 'Poppins';
            letter-spacing: 0;
            line-height: 37.4px;
            position: absolute;
            top: 121px;
        }

        .span1 {
            color: rgba(0, 0, 0, 1);
            font-family: 'Poppins';
            font-size: 24px;
            font-weight: 700;
        }

        .navbar {
            cursor: pointer;
            left: 20px;
            height: 47px;
            position: absolute;
            top: 122px;
            width: 47px;
        }

        .group-217 {
            left: 258px;
            height: 131px;
            position: absolute;
            top: 112px;
            width: 56px;
        }

        input {
            border: none;
            font-family: 'poppins';
            font-size: 14px;
            align-items: center;
            width: 150%;
            height: 25px;
        }

        .footer {
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 400px;
            background-color: #1B2223;
            color: white;
            border-radius: 20px 20px 0px 0px;
        }
    </style>
</head>

<body>
    <div class="home-pelanggan-2 screen">

        <div class="overlap-group1">
            <div class="rectangle-82"></div>
            <img class="navbar" src="{{ URL::asset('image/navbar.png') }}" alt="navbar" />
            <h1 class="halo-shane valign-text-middle">
                <span><span class="poppins-medium-black-32px">Halo,<br /></span>
                    <span class="span1">Shane!</span>
            </h1>
            <img class="group-217" src="{{ URL::asset('image/botol.png') }}" alt="Group 217" />
            <img class="group" src="{{ URL::asset('image/cupcake.png') }}" alt="Group" />
            <img class="rectangle-29" src="{{ URL::asset('image/search.png') }}" alt="Search" />

            <p class="mau-makan-apa-hari-ini"> <input type="text" placeholder="mau makan apa hari ini?"></p>

        </div>


        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Favorit</a></li>
            </ul>
        </nav>

        <h1>Selamat Datang di Beranda</h1>

        {{-- <h2>Menu Favorit</h2>
        <div class="favorite-menu">
            @foreach ($favoriteMenus as $menu)
                <div class="menu">
                    <h3>{{ $menu->name }}</h3>
                    <p>{{ $menu->description }}</p>
                    <p>{{ $menu->price }}</p>
                </div>
            @endforeach
        </div> --}}

        {{-- <h2>Menu Terbaru</h2>
        <div class="latest-menu">
            @foreach ($dataKedai as $kedai)
                <div class="menu">
                    <h3>{{ $kedai->kedaiNama }}</h3>
                    {{-- @if ($menu->is_favorite) --}}
                    <span class="favorite-icon">Favorite</span>
                    {{-- @else --}}
                    {{-- <form action="{{ route('menu.addToFavorites', $menu->id) }}" method="POST"> --}}
                        {{-- @csrf --}}
                        <button type="submit" class="favorite-button">Tambahkan ke Favorit</button>
                    </form>
                    {{-- @endif --}}
                </div>
            --}}

            {{-- <div class="group-container">
                <div class="group-277">
                    <div class="overlap-group">
                        <img class="icon-home" src="{{ URL::asset('image/home.png') }}" alt="icon "home" />
                    </div>
                    <div class="place">Home</div>
                </div>

                <div class="group-398">
                    <img class="group-216" src="{{ URL::asset('image/favorit.png') }}" alt="Group 216" />
                    <div class="favorit">Favorit</div>
                </div>
            </div> --}}

        </div>
</body>

</html>

{{-- <div class="group-container">
    @foreach ($dataKedai as $kedai)
        <li>
            <div class="group-210">
                <div class="overlap-group">
                    <div class="group-41">
                    <div class="bakso poppins-medium-pickled-bluewood-16px"> {{ $kedai->kedaiNama }} </div>
                    {{-- <img class="mask-group" src="{{ asset('image/'. $kedai->kedaiGambar) }}" alt="Mask group" /> --}}
</div>
</div>
</li>
</div> --}}
