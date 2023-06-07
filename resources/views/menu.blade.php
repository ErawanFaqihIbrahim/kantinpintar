<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Pintar ITS</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <style>

        .pesen-makan-2 {
            align-items: center;
            background-color: #F8F4F0;
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 898px;
            width: 390px;
            padding: 7px 26px;
            padding-bottom: 81px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .group-container-1 {
            display: flex;
            gap: 28px;
            align-items: flex-start;
            min-width: 346px;
            margin-left: 4px;
            margin-top: 32px;
        }

        .group-21 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            height: 224px;
            min-width: 159px;
        }

        .overlap-group {
            height: 226px;
            margin-top: -2px;
            position: relative;
            width: 155px;
        }

        .overlap-group-1 {
            align-items: flex-end;
            background-color: #789C57;
            border-radius: 16px;
            box-shadow: 0px 4px 4px #00000040;
            height: 23px;
            display: flex;
            left: 13px;
            min-width: 129px;
            padding: 2px 0px;
            position: absolute;
            top: 193px;
        }

        .tambah {
            letter-spacing: 0;
            margin-left: 40px;
            color: #FFFFFF;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 12px;
            line-height: normal;
            min-height: 18px;
            min-width: 51px;
        }

        .mask-group {
            height: 145px;
            left: 5px;
            position: absolute;
            width: 145px;
            top: 0;
        }

        .rectangle-86 {
            background-color: #FFFFFF;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            height: 160px;
            left: 0;
            position: absolute;
            top: 66px;
            width: 155px;
        }

        .text {
            left: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 170px;
        }

        .bakso {
            left: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 150px;
        }

        .overlap-group5 {
            align-items: flex-end;
            background-color: #EAD7CE;
            height: 121px;
            margin-top: 31px;
            box-shadow: 0px -4px 4px #00000040;
            display: flex;
            min-width: 390px;
            padding: 34px 24px;
            position:fixed;
            bottom: -40px;
        }

        .group-77 {
            align-items: center;
            background-color: #DD6E51;
            border-radius: 34px;
            box-shadow: 0px 4px 4px #00000040;
            cursor: pointer;
            display: flex;
            gap: 108px;
            height: 52px;
            justify-content: space-evenly;
            min-width: 341px;
            padding: 7px 26px;
            position:fixed;
            bottom: 40px;
        }

        .checkout-pesanan {
            color: #F8F4F0;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: var(--font-size-s);
            letter-spacing: 0;
            line-height: normal;
            min-width: 137px;
            margin-top: 1px;
            min-height: 21px;
        }

        .group-73 {
            align-items: flex-start;
            /* align-self: flex-end; */
            display: flex;
            flex-direction: column;
            gap: 1px;
            min-height: 37px;
            /* width: 43px; */
        }

        .group-73-item {
            letter-spacing: 0;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color:#F8F4F0;
            line-height: normal;
            min-height: 18px;
        }

        .flex-row {
            align-items: flex-start;
            display: flex;
            margin-right: 2.88px;
            gap: 40px;
            margin-top: 10px;
            min-width: 343px;
        }

        .icon-info-outline {
            cursor: pointer;
            height: 37px;
            margin-top: 14.74px;
            width: 35px;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .bakso-bapak-bambang {
            color: #000000;
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 53.6px;
            /* height: 108px; */
            letter-spacing: 0;
            min-width: 268px;
        }

        .group-101 {
            align-items: flex-start;
            align-self: flex-start;
            cursor: pointer;
            display: flex;
            height: 30px;
            min-width: 94px;
            gap: 8px;
            margin-left: 24px;
            margin-top: 74px;
        }

        .kembali {
            color: #63363B;
            font-family: 'Poppins', sans-serif;
            font-size: 16;
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
            width: 68px;
        }

        .vector {
            height: 29px;
            align-self: flex-end;
            margin-bottom: 0;
            width: 16px;
        }

        .group-container {
            align-items: flex-start;
            display: flex;
            margin-left: 4px;
            margin-top: 44px;
            min-width: 346px;
            width: 390px;
            flex-wrap: wrap;
            gap: 26px;
        }

        .group-210 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            height: 224px;
            min-width: 161px;
        }

        .stok-5 {
            color: #000000;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            font-weight: 500;
            left: 94px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 173px;
        }

        li {
            list-style: none;
            margin:0px;
            padding:0px;
            /* display: flex; */
            flex-wrap: wrap;
            /* column-gap: 20px 70px; */
        }

    </style>
</head>

<body>
    <div class="pesen-makan-2 screen">
        <div class="group-101">
            <img class="vector" src="{{URL::asset('assets/vector.svg')}}" alt="Vector" />
            <div class="kembali">Kembali</div>
        </div>
        <div class="flex-row">
            <h1 class="bakso-bapak-bambang valign-text-middle">Bakso Bapak<br/>Bambang</h1>
            <img class="icon-info-outline" src="{{URL::asset('assets/-icon-info-outline.png')}}" alt='icon"info outline"' />
        </div>



        {{-- <div class="group-container">
            @foreach ($dataMenu as $menu)
                <li>
                    <div class="group-210">
                        <div class="overlap-group">
                            <div class="rectangle-86"></div>
                            <div class="bakso poppins-medium-pickled-bluewood-16px"> {{ $menu->menuNama }} </div>
                            <div class="text poppins-medium-pickled-bluewood-14px">{{ $menu->menuHarga }}</div> --}}
                            {{-- <div class="stok-5">Stok &lt; 5</div> --}}
                            {{-- <div class="overlap-group-1">
                                <div class="tambah poppins-medium-fantasy-12px"><a
                                        href={{ 'menu/'.$menu['id']}}>TAMBAH</a></div>
                            </div>
                            <img class="mask-group" src="{{ asset('image/'. $menu->menuGambar) }}" alt="Mask group" />
                        </div>
                    </div>

                </li>
            @endforeach
        </div> --}}


        <div class="group-container">

            <li>
                <div class="group-210">
                    <div class="overlap-group">
                        <div class="rectangle-86"></div>
                        <div class="bakso poppins-medium-pickled-bluewood-16px"> Nama Menu </div>
                        <div class="text poppins-medium-pickled-bluewood-14px"> Harga </div>
                                {{-- <div class="stok-5">Stok &lt; 5</div> --}}
                        <div class="overlap-group-1">
                            <div class="tambah poppins-medium-fantasy-12px">TAMBAH</div>
                        </div>

                </div>
                </div>

            </li>
            <li>
                <div class="group-210">
                    <div class="overlap-group">
                        <div class="rectangle-86"></div>
                        <div class="bakso poppins-medium-pickled-bluewood-16px"> Nama Menu </div>
                        <div class="text poppins-medium-pickled-bluewood-14px"> Harga </div>
                                {{-- <div class="stok-5">Stok &lt; 5</div> --}}
                        <div class="overlap-group-1">
                            <div class="tambah poppins-medium-fantasy-12px">TAMBAH</div>
                        </div>

                </div>
                </div>

            </li>
            <li>
                <div class="group-210">
                    <div class="overlap-group">
                        <div class="rectangle-86"></div>
                        <div class="bakso poppins-medium-pickled-bluewood-16px"> Nama Menu </div>
                        <div class="text poppins-medium-pickled-bluewood-14px"> Harga </div>
                                {{-- <div class="stok-5">Stok &lt; 5</div> --}}
                        <div class="overlap-group-1">
                            <div class="tambah poppins-medium-fantasy-12px">TAMBAH</div>
                        </div>

                </div>
                </div>

            </li>
            <li>
                <div class="group-210">
                    <div class="overlap-group">
                        <div class="rectangle-86"></div>
                        <div class="bakso poppins-medium-pickled-bluewood-16px"> Nama Menu </div>
                        <div class="text poppins-medium-pickled-bluewood-14px"> Harga </div>
                                {{-- <div class="stok-5">Stok &lt; 5</div> --}}
                        <div class="overlap-group-1">
                            <div class="tambah poppins-medium-fantasy-12px">TAMBAH</div>
                        </div>

                </div>
                </div>

            </li>
        </div>

        <div class="overlap-group5">
            <div class="group-77">
                <div class="group-73">
                    <div class="group-73-item poppins-semi-bold-fantasy-12px">1 ITEM</div>
                    <div class="group-73-item poppins-semi-bold-fantasy-12px">10.000</div>
                </div>
                <div class="checkout-pesanan">Checkout pesanan</div>
            </div>
        </div>
    </div>
</body>

</html>
