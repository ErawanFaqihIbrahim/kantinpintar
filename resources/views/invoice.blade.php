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
        @import url("https://fonts.googleapis.com/css?family=Poppins:700,600,400");

        .konfirmasi-list-pesanan {
            align-items: center;
            background-color: #F8F4F0;
            border: 1px none;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            height: 844px;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .line-11 {
            height: 2px;
            margin-top: 30px;
            margin-left:23px;
            width: 342px;
        }

        .overlap-group2 {
            height: 285px;
            margin-top: -37px;
            position: relative;
            width: 390px;
        }

        .rectangle-81 {
            background-color: #EAD7CE;
            height: 243px;
            left: 0;
            position: absolute;
            top: 0;
            width: 390px;
        }

        .title {
            color: #000000;
            font-family: 'poppins';
            font-size: 24px;
            font-weight: 700;
            width:390px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 117px;
        }

        .rectangle-4 {
            background-color: #789C57;
            border-radius: 68px;
            box-shadow: 0px 4px 4px #00000040;
            height: 88px;
            left: 24px;
            position: absolute;
            top: 197px;
            width: 342px;
        }

        .selasa-26-juli-2022-pukul-1503 {
            color: #F8F4F0;
            font-family: 'poppins';
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 195px;
            width: 390px;
        }

        .group-container-1 {
            align-items: flex-end;
            display: flex;
            gap: 10px;
            height: 76px;
            margin-left: 3px;
            margin-top: 16px;
            width: 390px;
            justify-content: center;
        }

        .group-265 {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 4px;
            min-height: 76px;
            width: 236px;
        }

        .total-pembayaran {
            letter-spacing: 0;
            line-height: normal;
            margin-left: 1px;
            min-height: 36px;
            font-size: 24px;
            font-weight: 500;
        }

        .price {
            letter-spacing: 0;
            line-height: normal;
            min-height: 36px;
            font-size: 24px;
        }

        .overlap-group1 {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            height: 76px;
            margin-bottom: 3px;
            position: relative;
            width: 100px;
        }

        .price-1 {
            color:#63363B;
            font-family: 'poppins';
            font-size: var(--font-size-xs);
            font-weight: 700;
            left: 0;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: right;
            top:47px;
            width:100px;
        }

        .saldo {
            color: #63363B;
            font-family: 'poppins';
            font-size: var(--font-size-xs);
            font-weight: 700;
            left: 0px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: right;
            top: 20px;
            width:100px;
        }

        .group-197 {
            align-items: flex-end;
            display: flex;
            gap: 81px;
            height: 188px;
            margin-left: 5px;
            margin-top: 29px;
            min-width: 349px;
        }

        .text-container {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 48px;
            min-height: 159px;
            width: 43px;
        }

        .text-1 {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        }

        .text-2 {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        }

        .text-3 {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        }

        .group-container {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 19px;
            min-height: 188px;
            width: 219px;
        }

        .group-96 {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-left: 1px;
            min-height: 50px;
            width: 218px;
        }

        .nasi-sayur-ayam {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        }

        .warung-tegal-cak-dhanul {
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
        }

        .group-95 {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-left: 1px;
            min-height: 50px;
            width: 195px;
        }

        .bakso-bapak-bambang {
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
        }

        .bakso-babat {
            letter-spacing: 0;
            line-height:normal ;
            min-height: 21px;
        }

        .group-97 {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 5px;
            min-height: 50px;
            width: 121px;
        }

        .surname {
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
        }

        .surname-1 {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        }

        .group-202 {
            align-items: flex-start;
            display: flex;
            margin-left: 2px;
            margin-top: 62px;
            margin-bottom: 50px;
            width: 390px;
            justify-content: center;

        }

        .overlap-group {
            align-items: center;
            background-color: #789C57;
            border-radius: 35px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 55px;
            width: 294px;
            padding: 0 119px;
            box-sizing: border-box;
        }

        .bayar {
            color: #FFFFFF;
            font-family: 'poppins';
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 27px;
            min-width: 56px;
        }

        .pesanan-f-container {
            height: 24px;
            margin-left: 1px;
            margin-top: 20px;
            position: relative;
            display: flex;
            width: 390px;
        }

        .pesanan-f-3024 {
            color:#2c435b;
            font-family: 'poppins';
            font-size: var(--font-size-m2);
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            position: relative;
            top: 0;
            width:inherit;
            text-align: center;
        }

        body {
            font-family: 'poppins';
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        .bottom {
            bottom:60px;
            position: absolute;
            justify-content: center;
        }

    </style>
</head>

<body>
    <div class="konfirmasi-list-pesanan screen">
        <div class="overlap-group2">
            <div class="rectangle-81"></div>
            <div class="rectangle-4"></div>
            <p class="selasa-26-juli-2022-pukul-1503">{{$dataTransaksi->transaksiWaktu}}<br>Pesanan {{$dataPesanan->pesananID}}</p>
            <h1 class="title">Ringkasan Pesanan</h1>
        </div>
        {{-- <div class="pesanan-f-container">
            <div class="pesanan-f-3024">Pesanan {{$dataPesanan->pesananID}}</div>


        </div> --}}
        <div class="group-197">
            <div class="group-container">
            @foreach ($dataMenuPesanan as $menupesanan)

                <div class="group-95">
                    <div class="bakso-bapak-bambang poppins-semi-bold-black-16px">{{$menupesanan->menuNama}}</div>
                    <div class="bakso-babat poppins-normal-congo-brown-14px">{{$menupesanan->pesananHarga}}</div>

                </div>
            @endforeach


            </div>

            <div class="text-container">
                @foreach ($dataMenuPesanan as $menupesanan)
                <div class="text-1 poppins-normal-black-14px"> {{$menupesanan->pesananJumlah}}</div>
            @endforeach

            </div>



        </div>
        <div class="bottom">
        <img class="line-11"
            src="https://anima-uploads.s3.amazonaws.com/projects/6464dffd9a8179f76fe86705/releases/6472e9537aff4642d000007b/img/line-11.svg"
            alt="Line 11" />
        <div class="group-container-1">
            <div class="group-265">
                <div class="total-pembayaran poppins-bold-black-24px">Total Pembayaran</div>
                <div class="price poppins-bold-black-24px">Rp {{$total}}</div>
            </div>
            <div class="overlap-group1">
                <div class="saldo">Saldo</div>
                <div class="price-1">Rp {{$dataPembeli->saldoJumlah}}</div>
            </div>
        </div>
        <div class="group-202">
            <a href={{'/homepage1'}}>
            <div class="overlap-group">
                <div class="bayar">Home</div>
            </div>
        </a>
        </div>
        <div>
    </div>
</body>

</html>
