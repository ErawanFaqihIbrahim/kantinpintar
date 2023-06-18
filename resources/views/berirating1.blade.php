<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>berirating1</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .berirating1new {
            align-items: center;
            background-color: rgba(248, 244, 240, 1);
            border: 1px;
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

        .rating {
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-left: 4px;
            margin-top: 65px;
            min-height: 147px;
            width: 346px;
        }

        .kodePesanan {
            letter-spacing: 0;
            line-height: normal;

            margin-top: 8px;
            margin-left: 100px;
            align-content: center;


            margin-right: 8px;
            min-height: 24px;
            min-width: 198px;
            font-family: "Poppins";
            font-size: 16px;

        }

        .gimana-pelayanannya {
            letter-spacing: 0;
            line-height: normal;
            margin-right: 8px;
            min-height: 24px;
            min-width: 198px;
            font-family: "Poppins";
            font-size: 16px;
        }

        .vector-container {
            align-items: flex;
            background-color: rgba(248, 244, 240, 1);
            border-radius: 40px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 80px;
            justify-content: center;
            margin-right: 4px;
            min-width: 342px;
            /* padding: 20px 20px; */
            gap: 14px;
            margin-top: 10px;

        }

        .vector-container {
            display: inline-block;
        }

        .vector-container input {
            display: none;
        }

        .vector-container label {
            float: right;
            color: #ddd;
        }

        .vector-container label:before {
            content: "\2605";
            font-size: 50px;
        }

        .vector-container input:checked~label {
            color: #DD6E51;
        }

        .vector-container label:hover,
        .vector-container label:hover~label {
            color: #DD6E51;
        }

        .vector-container label {
            float: right;
            color: #ddd;
            margin-right: 20px;
        }

        .vector {
            height: 38px;
            width: 42px;
            margin-top: 20px;
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
        }

        .place {
            letter-spacing: 0;
            line-height: normal;
            margin-top: 0.92px;
            min-height: 24px;
            min-width: 49px;
        }

        .vector-1 {
            height: 31px;
            width: 16px;
        }

        .overlap-group2 {
            align-self: flex-start;
            height: 233px;
            margin-top: 114px;
            position: relative;
            width: 344px;
        }

        .overlap-group1 {
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
            top: 129px;
            align-items: center;

            font-family: "Poppins";
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            text-align: center;
            justify-content: center;
        }

        .abang {
            height: 233px;
            left: 0;
            position: absolute;
            top: 0;
            width: 287px;
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

        .komentar {
            font-family: "Poppins";
            font-size: 16px;
            letter-spacing: 0;
            line-height: ;
            margin-left: 25px;
            margin-top: 44px;
            min-height: 24px;
        }

        .sangat-baik-terima-kasih::placeholder {
            color:
                #63363b99;
        }

        input:focus {
            outline: none;
        }

        .isiKomentar {

            background-color: transparent;
            border: 0;
            cursor: pointer;
            height: 21px;
            letter-spacing: 0;
            line-height: normal;
            margin-left: 25px;
            margin-top: 11px;
            padding: 0;
            width: 300px;
            font-family: "Poppins";
            font-size: 16px;
        }

        /* .komentar-1 {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        } */
    </style>
</head>

<body>
    <div class="berirating1newscreen">
        <div class="panah-home">
            <img class="vector-1" src="{{ URL::asset('image/panah.svg') }}" alt="Vector" />
            <div class="placepoppins">Home</div>
        </div>
        <h1 class="nama-kedai">{{ $menuNama }}</h1>
        <div class="rating">
            <div class="gimana-pelayanannya">Gimana pelayanannya?</div>
            <br>
            <form action="/berirating1" method="POST">
                @csrf
                {{-- <input type="hidden" name="menuID" value="{{ $menuID }}">
                    <input type="hidden" name="akunPembeliID" value="{{ $akunPembeliID }}">
                    <!-- Input rating dan komentar -->
                    <!-- ... -->
                    <button type="submit" class="overlap-group1">Kirim</button> --}}
                <div class="vector-container">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>
                <br>
        </div>
        <div class="komentar">Komentar</div>
        <a href="javascript:SubmitForm('form1')" onclick="window.event.stopPropagation()">
            <input class="isiKomentar" name="isiKomentar" placeholder="tulis komentarmu!" type="text"
                required="" /></a>
        <div class="overlap-group2">
            <img class="abang"
                src="https://anima-uploads.s3.amazonaws.com/projects/646f09f76499fa9c5951ea2c/releases/647b9aad0355d4480479b88c/img/abang@2x.png"
                alt="abang" />
            <button type="submit" class="overlap-group1">Kirim</button>
        </div>
        </form>
    </div>

</body>

