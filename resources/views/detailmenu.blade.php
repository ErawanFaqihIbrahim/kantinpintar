<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin Pintar ITS</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <script>
        function add() {
            document.getElementById(amount).value += 1;
        }
    </script>
    <style>
        .pesan-makan-6 {
            align-items: center;
            background-color: #F8F4F0;
            border: 1px none;
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

        .overlap-group-container {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 44px;
            width: 390px;

            margin-top: -21px;
            min-height: 602px;
        }

        .overlap-group4 {
            height: 474px;
            position: relative;
            width: 390px;
        }

        .pesan-makan-6 .ellipse {
            background-color: #789C57;
            box-shadow: 0px 4px 4px #00000040;
            position: absolute;
        }

        .ellipse-9 {
            border-radius: 154px;
            height: 308px;
            left: 41px;
            top: 166px;
            width: 308px;
        }

        .pesan-makan-6 .group {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
        }

        .group-99 {
            gap: 8px;
            left: 24px;
            height: 31px;
            min-width: 94px;
            position: absolute;
            top: 91px;
        }



        .vector {
            height: 31px;
            margin-top: 0;
            width: 16px;
        }

        .kembali {
            align-self: center;
            color: #63363B;
            font-family: 'Poppins';
            font-size: var(--font-size-m);
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            margin-top: 0.92px;
            min-height: 24px;
            min-width: 68px;

        }

        .mask-group {
            height: 294px;
            left: 48px;
            top: 180px;
            position: absolute;
            width: 294px;
        }

        .rectangle-82 {
            height: 500px;
            position: absolute;
            width: 390px;
            top: 0;
            height: 84px;
            background-color: #EAD7CE;
            left: 0;
        }


        .overlap-group3 {
            margin-left: 24px;
            position: relative;
            width: 233px;
        }


        .title {
            color: #000000;
            font-family: 'Poppins';
            font-size: 24px;
            font-weight: 700;
            left: 0;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            top: 0;
            width: 233px;
        }

        .pesan-makan-6 .text {
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
        }

        .text-1 {
            font-family: 'Poppins';
            color: var(--ungu-tua);
            font-size: 24px;
            font-weight: 400;
            top: 49px;
            left: 0;
            width: 83px;
        }

        .flex-row {
            align-items: center;
            display: flex;
            min-width: 163px;
            gap: 22px;
            margin-left: 3px;
            margin-top: 71px;
        }


        .number {
            color: #000000;
            font-family: 'Poppins';
            width: 27px;
            font-size: 32px;
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            margin-bottom: 3px;
            min-height: 41px;
            text-align: center;
        }

        .overlap-group {
            height: 48px;
            position: relative;
            width: 45px;
            cursor: pointer;
        }

        .ellipse-1 {
            border-radius: 22.5px;
            left: 0;
            height: 45px;
            width: 45px;
            top: 3px;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-2 {
            height: 46px;
            left: 11px;
            text-align: center;
            top: 0;
            font-size: 32px;
            color: #F8F4F0;
        }

        .text-3 {
            height: 38px;
            left: 13px;
            text-align: center;
            top: 0;
            font-size: 38px;
            color: #F8F4F0;
        }

        .group-202 {
            margin-left: 2px;
            margin-top: 40px;
            min-width: 296px;
        }

        .overlap-group2 {
            align-items: center;
            border-radius: 35px;
            background-color: #DD6E51;
            height: 55px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            width: 147px;
            padding: 0 64px;
        }

        .tambah-pesanan {
            color: #F8F4F0;
            font-family: 'Poppins';
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 27px;
            width: 165px;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            border: none;
            font-family: 'poppins';
            font-size: 28px;
            align-items: center;
            background-color: #F8F4F0;
            width: 120%;
            height: 40px;
        }

        button {
            border:none;
            background-color: transparent;
        }

        input:read-only {
            color:#000000;
        }


    </style>
</head>

<body>
    {{-- <form method="post" action="keranjang">
        @csrf --}}
    {{-- <div></div>
        <input type="text" value="{{$detailMenu}}">
        <a href="keranjang">Submit</a> --}}

    <form method="post" action="{{ 'keranjang/' . $detailMenu['menuID'] }}">
        @csrf

        <div class="pesan-makan-6 screen">
            <div class="overlap-group-container">
                <div class="overlap-group4">
                    <div class="rectangle-82"></div>
                    <div class="ellipse-9 ellipse"></div>
                    <img class="mask-group" src="{{ asset('image/' . $detailMenu->menuGambar) }}" alt="Mask group" />
                    <div class="group-99 group">
                        <img class="vector" src="{{ URL::asset('image/vector.svg') }}" alt="Vector" /><a
                            href={{ '/menu' }}>
                            <div class="kembali">Kembali</div>

                    </div></a>
                </div>
                <div class="overlap-group3">
                    {{-- <input type="hidden" value="{{$detailMenu->menuID}}"> --}}
                    <h1 class="title">{{ $detailMenu->menuNama }}</h1>
                    <div class="text-1 text">{{ $detailMenu->menuHarga }}</div>
                </div>
            </div>

            <div class="flex-row">
                <div class="overlap-group">
                    <div class="ellipse-1 ellipse">
                        <div id="minus" class="text-3 valign-text-middle poppins-medium-fantasy-32px">-</div>
                    </div>

                </div>
                <div class="number"><input readonly type="number" id="input" name="input" value=1></div>
                <div class="overlap-group">
                    <div class="ellipse-1 ellipse">
                        <div id="plus" class="text-2 valign-text-middle poppins-medium-fantasy-32px"><b>+</b></div>
                    </div>

                </div>
            </div>
            <button type="submit">
            <div class="group-202 group">
                <div class="overlap-group2">

                        <a href={{ 'keranjang/' . $detailMenu['menuID'] }}>
                            <div class="tambah-pesanan">Tambah pesanan</div>

                        </a>

                </div>
            </div>
        </button>

        </div>
    </form>

</body>

</html>

<script>
    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const inputField = document.getElementById('input');

    minusButton.addEventListener('click', event => {
        event.preventDefault();
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue - 1;
    });

    plusButton.addEventListener('click', event => {
        event.preventDefault();
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue + 1;
    });
</script>
