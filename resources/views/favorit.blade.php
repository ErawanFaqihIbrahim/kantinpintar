<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kantin Pintar ITS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        .kedaifav {
            align-items: flex-start;
            background-color: rgba(248, 244, 240, 1);
            border: 1px none;
            display: flex;
            height: 844px;
            width: 390px;
        }

        .overlap-group {
            height: 292px;
            margin-top: -41px;
            position: relative;
            width: 390px;
        }

        .navbar a:visited{
            color: black;
        }

        .navbar a:active{
            color: green;
        }

        a:hover {
            color: inherit;
            background-color: transparent;
            text-decoration: none;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .rectangle-87 {
            background-color: white;
            border-radius: 67px;
            box-shadow: 0px 4px 4px #00000040;
            height: 319px;
            left: 157px;
            position: absolute;
            top: 94px;
            transform: rotate(-90deg);
            width: 77px;
        }

        .rectangle-82 {
            background-color: rgba(234, 215, 206, 1);
            left: 0;
            height: 243px;
            position: absolute;
            width: 390px;
            top: 0;
        }

        .group {
            height: 108px;
            left: 240px;
            position: absolute;
            top: 184px;
            width: 84px;
        }

        .valign-text-middle {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .nama {
            height: 74px;
            left: 85px;
            font-family: 'Poppins';
            letter-spacing: 0;
            line-height: 37.4px;
            position: absolute;
            top: 122px;
        }

        .span1 {
            color: rgba(0, 0, 0, 1);
            font-family: 'Poppins';
            font-size: 32px;
        }


        .text {
            color: black;
            font-family: 'Poppins';
            font-size: 16px;
            top: 229px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            font-weight: 600;
            left: 65px;
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

        .group-container a:visited{
            color: rgba(221, 110, 81, 1);
        }

        .group-424 {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 15px;
            height: 76px;
            width: 45px;
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

        .vector {
            height: 36px;
            width: 40px;
        }

        .vector1 {
            height: 33px;
            width: 26px;
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


    </style>
</head>

<body>
    <div class="kedaifav screen">
        <div class="overlap-group">
            <div class="rectangle-82"></div>
            <div class="rectangle-87"></div>
            <img class="group" src="{{ URL::asset('image/tangan.png') }}" />
            <div class="text">Tambahin lagi<br />kedai favoritmu!</div>

            <h1 class="nama">
                <span>
                    <span class="span1">Halo,<br /></span>
                    <span class="span1"><b>Faqih!</b></span>
                </span>
            </h1>

            <div class="group-container">
                <a href={{ 'homepage1' }}><div class="group-424">
                    <img class="vector" src="{{ URL::asset('image/home.jpeg') }}">
                    <div class="place">Home</div>
                </div></a>
                <a href="#"><div class="group-222">
                    <img class="vector1" src="{{ URL::asset('image/favorit.jpeg') }}">
                    <div class="favorit">Favorit</div>
                </div></a>
            </div>

        </div>
    </div>
</body>

</html>
