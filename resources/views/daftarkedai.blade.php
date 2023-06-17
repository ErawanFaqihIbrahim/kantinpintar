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
        .daftarkan-kedai {
            align-items: center;
            background-color: #F8F4F0;
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            padding: 36px 0;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .flex-row-1 {
            align-items: flex-start;
            display: flex;
            height: 144px;
            margin-left: 9px;
            min-width: 307px;
        }

        .senin-selasa-rabu-kamis-jumat-sabtu {
            font-family: 'poppins';
            letter-spacing: 0;
            line-height: normal;
            min-height: 144px;
            min-width: 54px;
            text-align: center;
        }

        .text-2 {
            margin-left: 14px;
        }

        .daftarkan-kedai .text {
            letter-spacing: 0;
            line-height: normal;
            min-height: 144px;
        }

        .text-3 {
            color: #63363B;
            font-family: 'poppins';
            font-size: 16px;
            font-weight: 400;
            margin-left: 17px;
            min-width: 12px;
        }

        .text-1 {
            margin-left: 62px;
            min-width: 74px;
        }

        .group-368 {
            align-items: flex-start;
            display: flex;
            margin-left: 4px;
            margin-top: 41px;
            min-width: 346px;
        }

        .kedai-container {
            /* align-items: flex-start; */
            background-color: #ffffff;
            border-radius: 11px;
            display: flex;
            gap: 40px;
            height: 38px;
            /* justify-content: flex-end; */
            /* min-width: 342px; */
            padding: 8px 10px;
            width: 350px;
        }

        .nama-kedai {
            /* color: #63363B; */
            font-family: 'poppins';
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            height: 35px;
            text-align: center;
            margin-top: 7px;
            width: 114px;
        }

        .span1 {
            color: #CC4B41;
        }

        .cth-kedai-barokah {
            color: #63363B;
            font-family: 'Poppins';
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            /* min-height: 21px;
            min-width: 137px; */
            opacity: 0.7;
        }

        .group-100 {
            height: 121px;
            margin-top: 18px;
            width: 350px;
        }

        .group-369 {
            align-items: flex-start;
            display: flex;
            margin-left: 2px;
            margin-top: 19px;
            min-width: 344px;
        }

        .overlap-group1 {
            align-items: flex-end;
            background-color: #ffffff;
            border-radius: 11px;
            display: flex;
            height: 38px;
            min-width: 342px;
            padding: 8px 14px;
        }

        .keterangan {
            font-family: 'poppins';
            letter-spacing: 0;
            line-height: normal;
            /* min-height: 21px;
            min-width: 83px; */
            height: 35px;
            text-align: center;
            margin-top: 7px;
            width: 114px;
            gap: 40px;
        }

        .flex-row {
            align-items: flex-start;
            display: flex;
            gap: 127px;
            height: 24px;
            margin-right: 33px;
            margin-top: 15px;
            min-width: 245px;
        }

        .place {
            font-family: 'poppins';
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
            min-width: 35px;
        }

        .jam-buka {
            font-family: 'poppins';
            letter-spacing: 0;
            line-height: normal;
            min-height: 24px;
        }

        .waktu-buka {
            font-family: 'poppins';
            align-self: flex-start;
            letter-spacing: 0;
            line-height: normal;
            margin-left: 32px;
            margin-top: 39px;
            min-height: 24px;
        }

        .title {
            color: rgba(99, 54, 59, 1);
            letter-spacing: 0;
            font-family: "Poppins";
            font-size: 32px;
            font-weight: 700;
            line-height: normal;
            margin-top: 35px;
            min-height: 48px;
            min-width: 310px;
            text-align: center;
        }

        .group-201 {
            align-items: flex-end;
            background-color: #789C57;
            border-radius: 68px;
            box-shadow: 0px 4px 4px #00000040;
            cursor: pointer;
            display: flex;
            height: 50px;
            margin-left: 9px;
            /* margin-top: 103px; */
            padding: 14px 45px;
            text-align: center;

            margin-left: 10px;
            margin-right: 10px;
            margin-top: 60px;
            margin-bottom: 74px;
            position: relative;
            justify-content: center;
            width: 200px;
            cursor: pointer;

            /* display: flex;
            align-items: flex-start;
            align-self: flex-end;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 60px;
            margin-bottom: 74px;
            position: relative;
            justify-content: center;
            cursor: pointer; */
        }

        .daftar-kedai {
            color: #ffffff;
            font-family: 'poppins';
            background-color: #789C57;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: normal;
            justify-content: center;
            cursor: pointer;
            text-align: center;
            align-items: center;
            margin-bottom: 8px;

            /* min-height: 36px;
            min-width: 155px; */
        }

        input {
            border: none;
            font-size: 16px;
            height: 35px;
            /* margin-left: 20px; */
        }


    </style>

</head>

<body>

    <form action="('updateKedai')" method="post">

    <div class="daftarkan-kedai screen">
        <h1 class="title">Pendaftaran Kedai</h1>
        <div class="group-368">
            <div class="kedai-container">
                <div class="nama-kedai"><span class="poppins-normal-black-14px">Nama Kedai</span><span
                        class="span1">*</span>
                </div>
                <div class="cth-kedai-barokah"><input type="text" placeholder="cth: Kedai Barokah"></div>
            </div>
        </div>
        <img class="group-100" src="{{ URL::asset('image/group-100.png') }}" alt="Group 100" /></span>
        <div class="inputfile">
            {{-- <span id="imageName"></span><span><input id="inputTag" name="menuGambar" type="file"/> --}}
        <span id="imageName"></span><span><input id="inputTag" name="menuGambar" type="file"/></span>
        </div>
        <div class="group-369">
            <div class="kedai-container">
                <div class="keterangan poppins-normal-black-14px">Keterangan</div>
                <div class="cth-kedai-barokah"><input type="text" placeholder="cth: dijamin enak"></div>
            </div>
        </div>
        <div class="group-369">
            <div class="kedai-container">
                <div class="keterangan poppins-normal-black-14px">Waktu Buka</div>
                <div class="cth-kedai-barokah"><input type="text" placeholder="cth: 07.00 WIB"></div>
            </div>
        </div>
        <div class="group-369">
            <div class="kedai-container">
                <div class="keterangan poppins-normal-black-14px">Waktu Tutup</div>
                <div class="cth-kedai-barokah"><input type="text" placeholder="cth: 17.00  WIB"></div>
            </div>
        </div>
        {{-- <div class="waktu-buka poppins-bold-black-16px">Waktu Buka</div>
        <div class="flex-row">
            <div class="place poppins-bold-black-16px">Hari</div>
            <div class="jam-buka poppins-bold-black-16px">Jam Buka</div>
        </div>
        <div class="flex-row-1">
            <div class="senin-selasa-rabu-kamis-jumat-sabtu poppins-medium-congo-brown-16px">
                Senin<br />Selasa<br />Rabu<br />Kamis<br />Jumat<br />Sabtu
            </div>
            <p class="text-1 text poppins-medium-congo-brown-16px"><br /><br /><br /><br /><br /></p>
            <div class="text-3 text">&amp;<br />&amp;<br />&amp;<br />&amp;<br />&amp;<br />&amp;</div>
            <p class="text-2 text poppins-medium-congo-brown-16px"><br /><br /><br /><br /><br /></p>
        </div> --}}
        <div class="group-201">
            <button name="daftar" type="submit" class="daftar-kedai" style="border:none">Daftar Kedai</button>
        </div>
    </div>
    <script>
        document.querySelectorAll("[name=test_redirect]")[0].addEventListener('change',
            function() {
                window.location = "/" + this.value;
            });
    </script>
</body>

</html>
