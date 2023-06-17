<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        .menu-kedai-3 {
            align-items: center;
            background-color: #F8F4F0;
            border: 1px;
            display: flex;
            flex-direction: column;
            height: 794px;
            width: 390px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .menu-kedai-3::-webkit-scrollbar {
            display: none;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .tidak-ada-menu-di-kedai-ini {
            color: #63363B;
            font-family: "poppins";
            font-size: var(--font-size-m);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            margin-left: 16px;
            margin-top: 91px;
            min-height: 24px;
            min-width: 220px;
            text-align: center;
        }

        .uilfile-search-alt {
            height: 160px;
            margin-left: 26px;
            margin-top: 140px;
            width: 160px;
        }

        .line-2 {
            height: 1px;
            margin-top: 5px;
            object-fit: cover;
            width: 390px;
        }

        .group-container {
            align-items: flex-end;
            background-color: #EAD7CE;
            box-shadow: 0px -4px 4px #00000040;
            display: flex;
            gap: 72px;
            height: 121px;
            margin-top: 106px;
            width: 390px;
            padding: 24px 50px;
            box-sizing: border-box;
            bottom: 0;
            position: fixed;
        }

        .group-113 {
            align-items: flex-start;
            /* box-shadow: 0px 4px 4px #00000040; */
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-height: 66px;
            width: 47px;
        }

        .round {
            height: 40px;
            margin-left: 3px;
            width: 40px;
        }

        .menu {
            color: #789C57;
            font-family: "poppins";
            font-size: var(--font-size-m);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
            min-width: 45px;
            text-align: ;
        }

        .group-119 {
            align-items: center;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-height: 64px;
            width: 50px;
        }

        .place {
            letter-spacing: 0;
            line-height: normal;
            margin-right: 2px;
            min-height: 24px;
            min-width: 48px;
            text-align: center;
        }

        .icon-home-outline {
            height: 38px;
            margin-right: 1.93px;
            width: 38px;
        }

        .group-114 {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-height: 66px;
            width: 48px;
        }

        .order {
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
            min-width: 46px;
            text-align: center;
        }

        .group-115 {
            align-items: flex-start;
            align-self: flex-start;
            cursor: pointer;
            display: flex;
            margin-left: 27px;
            margin-top: 5px;
            min-width: 94px;
        }

        .overlap-group {
            height: 20px;
            position: relative;
            width: 92px;
        }

        .icround-plus {
            height: 20px;
            left: 0;
            position: absolute;
            top: 0;
            width: 20px;
        }

        .tambahkan {
            color: #000000;
            font-family: "poppins";
            font-size: var(--font-size-xs);
            font-weight: 400;
            left: 19px;
            letter-spacing: 0;
            line-height: normal;
            opacity: 0.5;
            position: absolute;
            text-align: center;
            top: 2px;
        }

        .menu-kedai {
            color: #000000;
            font-family: "poppins";
            font-size: var(--font-size-m);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            margin-top: 43px;
            min-height: 24px;
            min-width: 94px;
            text-align: center;
        }

        .group-117 {
            align-items: flex-end;
            background-color: #FFFFFF;
            border-radius: 5px;
            display: flex;
            height: 30px;
            margin-top: 74px;
            min-width: 328px;
            padding: 2px 8px;
        }


        .material-symbolssearch-rounded {
            height: 24px;
            width: 24px;
        }

        .overlap-group2 {
            height: 69px;
            margin-left: -6px;
            position: relative;
            width: 325px;

        }

        .overlap-group1 {
            height: 69px;
            left: 35px;
            position: absolute;
            top: 0;
            width: 290px;
        }

        .rectangle-86 {
            background-color: #FFFFFF;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            height: 290px;
            left: 110px;
            position: absolute;
            top: -110px;
            transform: rotate(-90deg);
            width: 69px;
        }

        .group-344 {
            align-items: flex-start;
            display: flex;
            margin-left: 5px;
            margin-top: 13px;
            min-width: 325px;
            margin-bottom: 7px;
        }

        .bakso-bapak-bambang {
            color: #000000;
            font-family: 'poppins';
            font-size: var(--font-size-s2);
            font-weight: 700;
            left: 28px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 8px;
        }

        .text-1 {
            left: 63px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 45px;
        }

        .mask-group {
            height: 59px;
            margin-left: 0;
            position: absolute;
            top: 9px;
            width: 59px;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        body {
            font-family: 'poppins';
        }
    </style>

</head>

<body>
    <div class="menu-kedai-3 screen">
        <div class="group-117"><img class="material-symbolssearch-rounded"
                src="{{ URL::asset('image/material-symbols-search-rounded.svg') }}"
                alt="material-symbols:search-rounded" /></div>
        <div class="menu-kedai">Menu Kedai</div><img class="line-2" src="{{ URL::asset('image/line-2.svg') }}"
            alt="Line 2" />
        <div class="group-115">
            <div class="overlap-group">
                <a href={{ 'uploadmenu' }}>
                    <div class="tambahkan">Tambahkan</div><img class="icround-plus"
                        src="{{ URL::asset('image/ic-round-plus.svg') }}" alt="ic:round-plus" />
                </a>
            </div>
        </div>

        @if ($jumlahmenupenjual == 0)
            <img class="uilfile-search-alt" src="{{ URL::asset('image/uil-file-search-alt.svg') }}"
                alt="uil:file-search-alt" />
            <p class="tidak-ada-menu-di-kedai-ini">Tidak ada menu di kedai ini</p>
        @else
            @foreach ($menupenjual as $menu)
                <a href="/menukedai/{{ $menu['menuID'] }}/edit">
                    <div class="group-344">
                        <div class="overlap-group2">
                            <div class="overlap-group1">
                                <div class="rectangle-86"></div>

                                <div class="bakso-bapak-bambang">{{ $menu->menuNama }}</div>

                            </div><img class="mask-group" src="{{ asset('image/' . $menu->menuGambar) }}"
                                alt="Mask group" />

                            <div class="bakso-jumbo poppins-medium-congo-brown-10px"></div>
                            <div class="text-1 poppins-medium-congo-brown-10px">{{ $menu->menuHarga }}</div>
                            {{-- <img class="carbonsettings-adjust"
                    src="https://anima-uploads.s3.amazonaws.com/projects/6464dffd9a8179f76fe86705/releases/6471621f9fa7b575abf1fae7/img/carbon-settings-adjust.svg"
                    alt="carbon:settings-adjust" /> --}}

                        </div>

                    </div>
                </a>

            @endforeach


        @endif

        <div class="group-container">
            <div class="group-119"><img class="icon-home-outline" src="{{ URL::asset('image/-icon-home-outline.png') }}"
                    alt='icon "home outline"' />
                <div class="place poppins-normal-burnt-sienna-16px">Home</div>
            </div>
            <div class="group-113"><img class="round" src="{{ URL::asset('image/ic-round-menu-book.svg') }}"
                    alt="ic:round-menu-book" />
                <div class="menu">Menu</div>
            </div>
            <div class="group-114"><img class="round"
                    src="{{ URL::asset('image/material-symbols-list-alt-outline-rounded.svg') }}"
                    alt="material-symbols:list-alt-outline-rounded" />
                <div class="order poppins-normal-burnt-sienna-16px">Order</div>
            </div>
        </div>



</body>

</html>
