<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        .pesan-makan-9 {
            background-color: #F8F4F0;
            align-items: flex-start;
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            padding: 49px 16px;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }



        .group-container {
            height: 31px;
            margin-left: 8px;
            margin-top: 21px;
            position: relative;
            width: 94px;
        }

        .group-206 {
            cursor: pointer;
            height: 31px;
            left: 0;
            position: absolute;
            width: 16px;
            top: 0;
        }

        .group-100 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            gap: 8px;
            height: 31px;
            left: 0;
            min-width: 94px;
            position: absolute;
            top: 0;
        }

        .vector {
            height: 31px;
            margin-top: 0;
            width: 16px;
        }

        .kembali {
            align-self: center;
            color: #63363B;
            font-family: 'poppins';
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            font-size: var(--font-size-m);
            margin-top: 0.92px;
            min-height: 24px;
            min-width: 68px;
        }



        .title {
            color: #000000;
            font-family: 'poppins';
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            margin-left: -28px;
            margin-top: 27px;
            min-height: 48px;
        }

        .group-360 {
            align-items: flex-start;
            min-width: 350px;
            align-self: flex-end;
            display: flex;
            height: 525px;
            margin-top: 16px;
        }



        .overlap-group2 {
            align-items: flex-end;
            background-color: #FFFFFF;
            box-shadow: 0px 4px 4px ☐#00000040;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            gap: 38px;
            min-height: 525px;
            padding: 24px 17px;
            width: 342px;
            margin-left: -35px;
        }



        .flex-row {
            gap: 40px;
            height: 399px;
            min-width: 307px;
        }

        .pesan-makan-9 .flex {
            align-items: flex-start;
            display: flex;
        }

        .group-container-1 {
            align-items: center;
            display: flex;
            flex-direction: column;
            min-height: 399px;
            width: 89px;
        }

        .overlap-group3 {
            height: 111px;
            margin-top: 26px;
            position: relative;
            width: 89px;
        }

        .group-358 {
            align-items: flex-start;
            display: flex;
            gap: 16px;
            height: 19px;
            left: 10px;
            min-width: 71px;
            position: absolute;
            top: 92px;
        }



        .overlap-group {
            align-items: flex-end;
            align-self: center;
            background-color: #DD6E51;
            border-radius: 8px;
            box-shadow: 0px 4px 4px ☐#00000040;
            display: flex;
            height: 16px;
            justify-content: flex-end;
            margin-bottom: 1px;
            min-width: 16px;
            padding: 0.7px 4.2px;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-2 {
            height: 15px;
        }

        .pesan-makan-9 .text-3 {
            letter-spacing: 0;
            line-height: normal;
            text-align: center;
            white-space: nowrap;
            width: 7px;
        }

        .number {
            align-self: flex-end;
            letter-spacing: 0;
            min-height: 18px;
            line-height: normal;
            min-width: 4px;
            text-align: center;
        }

        .overlap-group1 {
            align-items: flex-start;
            background-color: #DD6E51;
            border-radius: 8.5px;
            height: 17px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            padding: 0.7px 5.2px;
            min-width: 17px;

        }

        .text-1 {
            height: 16px;
        }

        .rectangle-8 {
            background-color: #DD6E51;
            border-radius: 11px;
            height: 89px;
            position: absolute;
            left: 0;
            top: 0;
            width: 89px;
        }

        .mask-group {
            left: 0;
            height: 89px;
            position: absolute;
            width: 89px;
            top: 4px;
        }

        .overlap-group5 {
            height: 93px;
            margin-top: 30px;
            position: relative;
            width: 89px;
        }

        .group-35 {
            align-items: flex-start;
            display: flex;
            gap: 16px;
            height: 19px;
            margin-left: 2px;
            margin-top: 4px;
            min-width: 71px;
        }

        .number-1 {
            align-self: flex-end;
            color: #F8F4F0;
            font-family: 'poppins';
            font-size: var(--font-size-xs);
            font-weight: 400;
            letter-spacing: 0;
            min-height: 18px;
            line-height: normal;
            min-width: 4px;
            text-align: center;
        }

        .overlap-group4 {
            height: 93px;
            position: relative;
            width: 89px;
        }

        .flex-col {
            flex-direction: column;
            /* margin-top: 1px; */
            margin-left: -10px;
            min-height: 344px;
            width: 178px;

        }

        .overlap-group-1 {
            margin-top: 6px;
            position: relative;
            width: 79px;
            height: 70px;

        }

        .bakso-babat {
            left: 0;
            font-size: 10px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 0;
            width: 79px;
            height: 10px;
        }

        .text-2-1 {
            left: 0;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 15px;
            width: 38px;
        }

        .surname {
            letter-spacing: 0;
            font-size: 14px;
            line-height: normal;
            margin-top: 80px;
            min-height: 21px;
        }

        .warung-tegal-cak-danul {
            letter-spacing: 0;
            font-size: 14px;
            line-height: normal;
            margin-top: 63px;
            min-height: 21px;
        }

        .group-20 {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            margin-top: 6px;
            min-height: 34px;
            width: 89px;
        }

        .nasi-sayur-ayam {
            letter-spacing: 0;
            font-size: 10px;
            line-height: normal;
            min-height: 15px;
        }

        .text {
            letter-spacing: 0;
            line-height: normal;
            min-height: 19px;
            width: 88px;
            font-size: 10px;
        }

        .bakso-bapak-bambang {
            letter-spacing: 0;
            font-size: 14px;
            line-height: normal;
            min-height: 21px;
            width: 171px;
        }

        .ringkasan-pesanan {
            color: #000000;
            align-self: center;
            font-family: 'poppins';
            font-size: 24px;
            letter-spacing: 0;
            line-height: normal;
            font-weight: 700;
            margin-left: 1px;
            margin-top: 4px;
            min-height: 36px;
            min-width: 247px;
        }

        .group-202 {
            align-items: flex-start;
            align-self: center;
            display: flex;
            margin-left: 2px;
            margin-top: 33px;
            min-width: 296px;
        }

        .overlap-group-2 {
            align-items: center;
            background-color: #789C57;
            border-radius: 35px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 55px;
            justify-content: flex-start;
            min-width: 294px;
            padding: 0 48px;
        }

        .pesan {
            color: #FFFFFF;
            text-align: center;
            font-family: 'poppins';
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 27px;
            min-width: 57px;
            margin-left: 120px;
        }

        div {
            font-family: 'poppins';
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }


        .span1 {
            color:red;
            width:150px;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div class="pesan-makan-9 screen">
        <div class="group-container">
            <div class="group-100">
                <img class="vector" src={{ asset('image/vector.svg') }} alt="Vector" />
                <div class="kembali"><a href={{ '/homepage' }}>Kembali</div></a>
            </div>
            {{-- <img class="group-206" src="group-206.png" alt="Group 206" /> --}}
        </div>
        <div class="group-360">
            <div class="overlap-group2">
                <div class="ringkasan-pesanan">Ringkasan pesanan</div>

                @if (count($cektransaksi) == 0)
                    <div class="flex-row flex">
                        <div class="flex-col flex">
                            @foreach ($dataPesanan as $pesanan)
                                <div class="bakso-bapak-bambang poppins-semi-bold-black-14px">{{ $pesanan->menuNama }}
                                </div>
                                <div class="overlap-group-1">

                                    <div class="nasi-sayur-ayam poppins-normal-congo-brown-10px">Jumlah:
                                        {{ $pesanan->pesananJumlah }}</div>
                                    <div class="text poppins-normal-congo-brown-10px">Harga: {{ $pesanan->pesananHarga }}</div>
                                    <a href="/keranjang/{{ $pesanan->pesananID }}/{{ $pesanan->pesananJumlah }}/{{ $pesanan->menuNama }}/hapus">
                                    <div class="text span1 poppins-normal-congo-brown-10px">Hapus Menu</div></a>
                                </div>
                            @endforeach
                        </div>


                        <div class="group-container-1">

                            @foreach ($dataPesanan as $pesanan)
                                <div class="overlap-group4">
                                    <div class="rectangle-8"></div>
                                    <img class="mask-group" src={{ asset('image/' . $pesanan->menuGambar) }}
                                        alt="Mask group" />
                                </div>
                            @endforeach

                        </div>


                    </div>
                @endif




            </div>
        </div>
        <div class="group-202">
            @if (count($cektransaksi) == 0)
                <h1 class="title">Total: Rp {{ $total }}</h1>
            @else
            <h1 class="title">Total: Rp 0</h1>
            @endif



        </div>

        <div class="overlap-group-2"><a href={{"bayar/".$pesananID}}>
                <div class="pesan">Bayar</div>
            </a>
        </div>
    </div>
    </div>

</body>

</html>
