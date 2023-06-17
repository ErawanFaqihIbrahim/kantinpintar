<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Landing Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Styles -->
    <style>
        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .landing-page {
            align-items: flex-start;
            background-color: #F8F4F0;
            border: 1px none;
            display: flex;
            height: 844px;
            padding: 319px 49px;
            width: 100%;
            overflow: hidden;
            position: relative;
            flex-shrink: 0;
            border-radius: 15px;
        }

        .logo {
            height: 191px;
            margin-left: 1px;
            margin-top: 15px;
            width: 291px;
            top: 334px;
            left: 54px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <a href="/masuksbg">

    <div class="landing-page screen">
        <img class="logo" src="{{ URL::asset('image/logo.svg') }}" alt="logo" />
    </div>
    </a>
</body>
