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
    <style>
        .homepage {
            align-items: center;
            background-color: rgba(248, 244, 240, 1);
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

        .group-350 {
            align-items: flex-start;
            display: flex;
            cursor: pointer;
            margin-top: 46px;
            min-width: 260px;
        }

        .rectangle-86 {
            background-color: rgba(221, 110, 81, 1);
            border-radius: 18px;
            box-shadow: -4px 0px 4px #00000040;
            height: 258px;
            left: 66px;
            position: absolute;
            top: -66px;
            transform: rotate(-90deg);
            width: 127px;
        }

        .penilaian {
            font-family: poppins;
            font-size: 16px;
            font-weight: 300;
            left: 93px;
            position: absolute;
            top: 70px;
            color: white;
        }

        .vector {
            height: 37px;
            left: 109px;
            position: absolute;
            top: 27px;
            width: 39px;
        }

        .group-348 {
            align-items: flex-end;
            cursor: pointer;
            display: flex;
            height: 127px;
            margin-top: 42px;
            min-width: 260px;
        }

        .overlap-group {
            height: 127px;
            position: relative;
            width: 258px;
        }

        .overlap-group1 {
            align-items: flex-end;
            background-size: 100% 100%;
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-bottom: -8px;
            margin-left: -4px;
            min-height: 135px;
            padding: 12px 107px;
            width: 266px;
        }

        .my-store {
            font-family: poppins;
            font-size: 16px;
            font-weight: 500;
            left: 108px;
            letter-spacing: 0;
            position: absolute;
            line-height: normal;
            text-align: center;
            top: 70px;
            color: white;
        }

        .overlap-group4 {
            cursor: pointer;
            height: 56px;
            margin-right: 1px;
            margin-top: 43px;
            position: relative;
            width: 83px;
        }

        .group-391 {
            align-items: center;
            display: flex;
            flex-direction: column;
            left: 23px;
            min-height: 29px;
            position: absolute;
            top: 12px;
            width: 37px;
        }

        .logout {
            color: rgba(248, 244, 240, 1);
            font-family: poppins;
            letter-spacing: 0;
            line-height: normal;
            margin-right: 2px;
            min-height: 15px;
            min-width: 35px;
        }

        .logout-rounded {
            height: 14px;
            margin-right: 1px;
            width: 14px;
        }

        .rectangle-86-1 {
            background-color: #28a745;
            border-radius: 18px;
            box-shadow: -4px 0px 4px #00000040;
            height: 83px;
            left: 14px;
            position: absolute;
            top: -14px;
            transform: rotate(-90deg);
            width: 56px;
        }

        .group-container {
            align-items: flex-end;
            gap: 72px;
            height: 121px;
            background-color: rgba(234, 215, 206, 1);
            box-shadow: 0px -5px 4px #00000040;
            display: flex;
            margin-top: 41px;
            min-width: 390px;
            padding: 24px 50px;
        }

        .group-container a {
            float: left;
            width: 65px;
            height: 80px;
            text-align: center;
            padding: 12px 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
            box-shadow: 0px 4px 4px #00000040;
            border-radius: 50px;
        }

        .group-119 {
            cursor: pointer;
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-height: 64px;
            width: 50px;
        }

        .icon-home-outline {
            height: 40px;
            margin-right: 1.93px;
        }

        .place {
            color: rgba(120, 156, 87, 1);
            font-family: poppins;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            margin-right: 2px;
            min-height: 24px;
            min-width: 48px;
            text-align: center;
        }

        .group-113 {
            align-items: flex-start;
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

        .group-114 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-height: 66px;
            width: 48px;
        }

        .overlap-group5 {
            align-items: flex-end;
            background-color: rgba(234, 215, 206, 1);
            display: flex;
            height: 243px;
            justify-content: flex-end;
            margin-top: 2px;
            min-width: 390px;
            padding: 75px 50px;
        }

        .overlap-group2 {
            align-items: center;
            background-color: rgba(120, 156, 87, 1);
            border-radius: 33px;
            box-shadow: 0px 6px 4px #00000040;
            display: flex;
            justify-content: flex-end;
            width: 289px;
            padding: 0 28px;
            height: 66px;
        }

        .title {
            color: white;
            font-family: poppins;
            font-size: 32px;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="homepage">
        <div class="overlap-group5">
            <div class="overlap-group2">
                <h1 class="title">Kedai Barokah</h1>
            </div>
        </div>

        <div class="group-350">
            <div class="overlap-group">
                <div class="rectangle-86"></div>
                <img class="vector" src="{{ URL::asset('image/kedai.jpeg') }}" alt="penilaian">
                <div class="my-store">My <br />Store</div>
            </div>
        </div>
        <div class="group-350">
            <div class="overlap-group">
                <div class="rectangle-86"></div>
                <img class="vector" src="{{ URL::asset('image/penilaian.jpeg') }}" alt="penilaian">
                <div class="penilaian">Penilaian</div>
            </div>
        </div>
        <div class="overlap-group4">
            <div class="rectangle-86-1"></div>
            <div class="group-391">
                <img src="{{ URL::asset('image/logout.jpeg') }}" alt="logout" style="width:38px;">
            </div>
        </div>

        <div class="group-container">
            <div class="group-119">
                <img class="icon-home-outline" src="{{ URL::asset('image/homep.jpeg') }}" alt="home">
                <div class="place">Home</div>
            </div>

            <div class="group-113">
                <img class="round" src="{{ URL::asset('image/menu.jpeg') }}" alt="menu">
                <div class="place">Menu</div>
            </div>

            <div class="group-114">
                <img class="round" src="{{ URL::asset('image/order.jpeg') }}" alt="order">
                <div class="place">Order</div>
            </div>
        </div>

    </div>
</body>

</html>
