<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Review Kedai</title>
    <style>
        .denah {
            align-items: center;
            background-color: rgba(248, 244, 240, 1);
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            padding: 48px 32px;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .group-container {
            height: 122px;
            align-self: flex-end;
            margin-top: 33px;
            position: relative;
            width: 324px;
        }

        .denah .overlap {
            align-items: center;
            border-radius: 33px;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            height: 66px;
            padding: 0 55px;
            position: absolute;
        }

        .overlap-group {
            background-color: rgb(254, 174, 101);
            justify-content: flex-end;
            min-width: 322px;
            left: 0;
            top: 56px;
        }

        .title {
            color: black;
            font-family: 'poppins';
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 48px;
            min-width: 211px;
        }

        .group-1 {
            height: 40px;
            left: 249px;
            position: absolute;
            top: 0;
            width: 42px;
        }

        .overlap-group1 {
            background-color:rgb(120, 156, 87);
            left: 52px;
            min-width: 218px;
            top: 0;
        }

        .denah-1 {
            color: rgba(248, 244, 240, 1);
            font-family: 'poppins';
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 48px;
            min-width: 108px;
        }

        .group {
            position: absolute;
            top: 24px;
            width: 50px;
            height: 52px;
            left: 28px;
        }

        .group-201 {
            align-items: center;
            background-color: rgb(120, 156, 87);
            border-radius: 68px;
            box-shadow: 0px 4px 4px #00000040;
            cursor: pointer;
            display: flex;
            margin-left: 1px;
            margin-top: 111px;
            min-width: 245px;
            padding: 14px 56px;
            gap: 13px;
            height: 65px;
        }

        .vector {
            height: 36px;
            margin-top: 0.08px;
            width: 133px;
        }

        .kembali {
            align-self: flex-end;
            color: rgba(248, 244, 240, 1);
            font-family: 'poppins';
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            min-height: 36px;
            min-width: 104px;
        }

        .group-231 {
            align-items: flex-start;
            background-color: rgb(120, 156, 87);
            border-radius: 15px;
            display: flex;
            height: 357px;
            margin-left: 1px;
            margin-top: 60px;
            min-width: 291px;
            padding: 25px 20px;
        }

        .group-2 {
            height: 306px;
            width: 251px;
        }

    </style>
</head>

<body>
    <div class="denah screen">
        <div class="group-container">
            <div class="overlap-group overlap">
                <h1 class="title">Kantin Pusat</h1>
            </div>
            <div class="overlap-group1 overlap">
                <div class="denah-1">Denah</div>
            </div>
            <img class="group" src="{{ URL::asset('image/sparkle.png') }}" />
            <img class="group-1" src="{{ URL::asset('image/sparkle.png') }}" />
        </div>

        <div class="group-231">
            <img class="group-2" src="{{ URL::asset('image/denah.png') }}" />
        </div>

        <a href={{'homepage1'}}><div class="group-201">
            <img class="vector" src="{{ URL::asset('image/kembali1.jpeg') }}" />
        </div>
    </a>

    </div>
    </div>
</body>

</html>
