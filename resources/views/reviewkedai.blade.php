<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin Pintar ITS</title>
    <style>
        .homepage {
            align-items: flex-start;
            background-color: rgba(248, 244, 240, 1);
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            width: 390px;
            padding: 31px 13px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .vector {
            height: 33px;
            margin-left: 11px;
            margin-top: 0;
            width: 73px;
        }

        .jumbotron {
            background-color: rgba(248, 244, 240, 1);
        }

        .media {
            background-color: white;
            box-shadow: 0px 4px 4px #00000040;
        }

        .title {
            align-self: flex-start;
            color: black;
            font-family: 'poppins';
            font-size: 32px;
            font-weight: 600;
            margin-top: -10px;
            min-height: 48px;
        }

        .text-block {
            position: relative;
            top: -62px;
            left: 20px;
            color: gold;
            height: 5px;
        }

    </style>
</head>

<body>

    <div class="homepage">
        <div><a href="#">
            <img class="vector" src="{{ URL::asset('image/kembali.jpeg') }}" alt="kembali" />
        </a>
        </div>
        <div class="jumbotron">

            <h1 class="title"> Review &amp; Rating Kedai</h1>
            <br>

            <div class="media border p-3">
                <div class="media-body">
                    <h6>Faqih Ibrahim <small><br><i>02/05/2023</i></small></h6>
                    <p>Baksonya enak dan banyak!</p>
                </div>

                <div>
                    <img src="{{ URL::asset('image/rating.jpeg') }}" style="width:60px;">
                    <div class="text-block">4.0</div>
                </div>

            </div>

            <br>
            <div class="media border p-3">
                <div class="media-body">
                    <h6>Bintang Bakkara <small><br><i>25/04/2023</i></small></h6>
                    <p>Mantappp!</p>
                </div>
                <div>
                    <img src="{{ URL::asset('image/rating.jpeg') }}" style="width:60px;">
                    <div class="text-block">5.0</div>
                </div>
            </div>
            <br>
            <div class="media border p-3">
                <div class="media-body">
                    <h6>Femi Nabila <small><br><i>27/04/2023</i></small></h6>
                    <p>Baksonya enak tapi asin!</p>
                </div>
                <div>
                    <img src="{{ URL::asset('image/rating.jpeg') }}" style="width:60px;">
                    <div class="text-block">3.5</div>
                </div>
            </div>
            <br>
            <div class="media border p-3">
                <div class="media-body">
                    <h6>Fathia Rahma <small><br><i>28/04/2023</i></small></h6>
                    <p>Lezat dan bergiji!</p>
                </div>
                <div>
                    <img src="{{ URL::asset('image/rating.jpeg') }}" style="width:60px;">
                    <div class="text-block">4.5</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
