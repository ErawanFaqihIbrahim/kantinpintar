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
        @import url("https://fonts.googleapis.com/css?family=Poppins:700,600");

        .konfirmasi-pembayaran {
            align-items: flex-start;
            background-color: #ffffff;
            border: 1px none;
            display: flex;
            height: 844px;
            overflow: hidden;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .overlap-group3 {
            height: 877px;
            margin-top: -23px;
            position: relative;
            width: 390px;
        }

        .konfirmasi-pembayaran .rectangle {
            left: 0;
            position: absolute;
            width: 390px;
        }

        .rectangle-6 {
            background-color: #F8F4F0;
            border-radius: 18px;
            height: 626px;
            top: 251px;
        }

        .overlap-group2 {
            align-items: center;
            background-color: #789C57;
            border-radius: 35px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 55px;
            justify-content: flex-end;
            left: 48px;
            width: 55px;
            padding: 0 119px;
            position: absolute;
            top: 763px;
        }

        .place {
            color: #ffffff;
            font-family: 'poppins';
            font-size: var(--font-size-l3);
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 27px;
            text-align: center;
            width: 65px;
            margin-top: 3.5px;
        }

        .pembayaran-terkonfirmasi {
            color: var(--hitam);
            font-family: 'poppins';
            font-size: 31px;
            font-weight: 700;
            left: 82px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 102px;
        }

        .rectangle-7 {
            background-color: #EAD7CE;
            height: 265px;
            top: 0;
        }

        .group-268 {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 32px;
            left: 67px;
            min-height: 264px;
            position: absolute;
            top: 325px;
            width: 257px;
        }

        .overlap-group {
            align-items: center;
            background-color: #789C57;
            border-radius: 49px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 48px;
            justify-content: flex-end;
            width: 157px;
            padding: 0 78px;

        }

        .price {
            color: #ffffff;
            font-family: 'poppins';
            font-size: var(--font-size-m);
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            min-height: 30px;
            min-width: 100px;
            margin-top: 5px;
        }

        .group-267 {
            align-items: flex-start;
            background-color: #EAD7CE;
            border-radius: 92px;
            display: flex;
            height: 150px;
            justify-content: flex-end;
            margin-right: 1px;
            width: 180px;
            padding: 17.7px 4.9px;
        }

        .overlap-group1 {
            height: 146px;
            position: relative;
            width: 159px;
        }

        .group-266 {
            height: 123px;
            left: 25px;
            position: absolute;
            top: 0;
            width: 134px;
        }

        .ellipse-18 {
            background-color: #DD6E51;
            border-radius: 71.65px;
            height: 143px;
            left: 0;
            position: absolute;
            top: 3px;
            width: 143px;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

    </style>

</head>

<body>
    <div class="konfirmasi-pembayaran screen">
        <div class="overlap-group3">
            <div class="rectangle-7 rectangle"></div>
            <div class="rectangle-6 rectangle"></div>
            <h1 class="pembayaran-terkonfirmasi">Pembayaran<br />Terkonfirmasi</h1>
            <div class="group-268">
                <div class="group-267">
                    <div class="overlap-group1">
                        <div class="ellipse-18"></div><img class="group-266" src="group-266.png" alt="Group 266" />
                    </div>
                </div>
                <div class="overlap-group">
                    <div class="price">{{$total}}</div>
                </div>
            </div>
            <div class="overlap-group2">
                <div class="place"><a href={{"invoice/".$pesananID}}>Invoice</a></div>
            </div>
        </div>
    </div>

</body>

</html>
