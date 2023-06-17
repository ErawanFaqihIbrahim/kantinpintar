<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>redeemvoucher1</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .redeemvoucher1 {
            align-items: center;
            background-color: #F8F4F0;
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            padding: 52px 24px;
            width: 390px;
        }

        .panah-home {
            align-items: center;
            align-self: flex-start;
            display: flex;
            gap: 8px;
            margin-left: 24px;
            margin-top: 54px;
            min-width: 75px;
            font-family: "Poppins";
            font-size: 16px;
            color: rgba(99, 54, 59, 1);
        }

        .nama-kedai {
            color: rgba(0, 0, 0, 1);
            font-family: "Poppins";
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: 42.9px;
            margin-top: 25px;
            min-height: 86px;
            width: 390px;
            text-align: center;
        }

        /* .kembali {
            align-items: center;
            display: flex;
            gap: 8px;
            height: 31px;
            left: 0;
            min-width: 94px;
            position: absolute;
            top: 1px;
        }

        .kembali-1 {
            color: rgba(99, 54, 59, 1);
            font-family: "Poppins";
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            margin-top: 0.92px;
            min-height: 24px;
            min-width: 68px;
        } */

        .vector {
            height: 31px;
            width: 16px;
        }

        .image-6 {
            height: 176px;
            margin-top: 20px;
            object-fit: cover;
            width: 176px;
            margin-right: 20px;
            margin-left: 100px;
            min-height: 24px;
        }

        /* .tombol-tambah {
            align-items: flex-start;
            display: flex;
            margin-left: 3px;
            margin-top: 63px;
            min-width: 247px;
        } */

        .overlap-group2 {
            align-self: flex;
            height: 233px;
            margin-top: 50px;
            position: relative;
            width: 344px;
        }

        .overlap-group3 {
            align-items: center;
            background-color: rgba(120, 156, 87, 1);
            color: rgba(255, 255, 255, 1);
            border-radius: 35px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 55px;
            left: 48px;
            min-width: 294px;
            padding: 0 1 2 2px;
            position: absolute;
            top: 20px;
            align-items: center;

            font-family: "Poppins";
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            text-align: center;
            justify-content: center;
        }

        .redeemvoucher1overlap {
            box-shadow: 0px4px4px #00000040;
            display: ;
        }

        .overlap-group-1 {
            align-items: flex-end;
            background-color: rgba(120, 156, 87, 1);
            border-radius: 68px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 65px;
            justify-content: flex-end;
            min-width: 245px;
            padding: 14px 65px;
        }

        /* .tambah {
            color: rgba(248, 244, 240, 1);
            font-family: "Poppins";
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 36px;
            min-width: 105px;

            display: flex;
            align-items: center;
            justify-content: center;

        } */

        .kode {
            letter-spacing: 0;
            line-height: normal;
            margin-left: 2px;
            margin-top: 30px;
            min-height: 48px;
            min-width: 100px;
            text-align: center;
            color: rgba(0, 0, 0, 1);
            font-family: "Poppins";
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: 42.9px;
            /* margin-bottom: 100px; */
            min-height: 86px;
            width: 390px;
            text-align: center;
        }

        .keterangan {
            letter-spacing: 0;
            line-height: normal;
            margin-right: 20px;
            margin-left: 30px;
            min-height: 24px;
            min-width: 198px;
            font-family: "Poppins";
            font-size: 16px;
            color: rgba(0, 0, 0, 1);
            text-align: center;
            width: 320px;

            /* font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            margin-left: 1px;
            margin-top: 48px;
            min-height: 36px; */
        }

        .form-kode {
            background-color: rgba(248, 244, 240, 1);
            border-radius: 40px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 80px;
            justify-content: center;
            margin-right: 4px;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-left: 20px;
            min-height: 147px;
            width: 300px;
            line-height: 42.9px;
            /* margin-top: 25px; */
            min-height: 40px;
            width: 350px;
            text-align: center;

        }

        .overlap-group1 {
            align-items: center;
            background-color: rgba(221, 110, 81, 1);
            border-radius: 33px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 62px;
            min-width: 334px;
            padding: 0 28px;
        }

        .kodetopup {
            background-color: transparent;
            border: 0;
            height: 48px;
            letter-spacing: 0;
            line-height: normal;
            padding: 0;
            width: 278px;
            font-family: "Poppins";
            font-size: 24px;
            margin-top: 14px;
            text-align: center;
        }

        input:focus {
            outline: none;
        }

        .kodetopup::placeholder {
            color: #00000099;
        }

        .masukin-kode {
            letter-spacing: 0;
            line-height: normal;
            margin-left: 1px;
            margin-top: 18px;
            min-height: 96px;
            text-align: center;
            width: 279px;

            background-color: transparent;
            border: 0;
            cursor: pointer;
            height: 21px;
            padding: 0;
            width: 300px;
        }

        .vektor-panah {
            height: 31px;
            left: 0;
            position: absolute;
            top: 0;
            width: 16px;
        }

        .gambar-ceklis {
            align-items: flex-start;
            display: flex;
            margin-top: 41px;
            min-width: 184px;
            opacity: 0.5;
        }

        .group-267 {
            align-items: flex-start;
            background-color: rgba(234, 215, 206, 1);
            border-radius: 92px;
            display: flex;
            height: 184px;
            justify-content: flex-end;
            min-width: 184px;
            padding: 17.7px 4.9px;
        }
    </style>
</head>

<body>
    <div class="redeemvoucher1screen">
        <div class="redeemvoucher1screen">
            <div class="panah-home">
                <img class="vector-1" src="{{ URL::asset('image/panah.svg') }}" alt="Vector" />
                <div class="placepoppins">Kembali</div>
            </div>
            <h1 class="nama-kedai">Masukkan Nominal<br>Saldo Top Up</h1>
            {{-- <h1 class="judulMasukkanKode">Masukkan kode top up</h1> --}}
            <p class="keterangan">Dapatkan kode top up dengan melakukan transaksi top up saldo secara offline</p><img
                class="image-6" src="{{ URL::asset('image/image-6.png') }}" alt="Vector" />
            <div class="kode">Nominal:</div>

            <form action="{{ route('redeemvoucher1') }}" method="POST">
                @csrf
                <div class="form-kode">
                    <div class="masukin-kode">
                        <input class="kodetopup" name="kodetopup" placeholder="contoh: 20000" type="text"
                            required="" />
                    </div>
                </div>
                <div class="overlap-group2">
                    <button type="submit" class="overlap-group3">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>
