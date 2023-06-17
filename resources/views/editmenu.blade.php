<!DOCTYPE html>
<html lang="en">

{{-- masih ada masalah di image --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <script url={{ 'inputfile.js' }}></script>

    <style>
        body {
            font-family: 'poppins';

        }

        .upload-menu {
            align-items: flex-start;
            background-color: #F8F4F0;
            border: 1px none;
            display: flex;
            flex-direction: column;
            height: 844px;
            padding: 51px 22px;
            width: 390px;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .group-99 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            gap: 8px;
            margin-left: 2px;
            margin-top: 19px;
            min-width: 72px;
        }

        .menu {
            align-self: center;
            color: #63363B;
            font-family: var(--font-family-poppins);
            font-size: var(--font-size-m2);
            font-weight: 600;
            letter-spacing: 0;
            line-height: normal;
            margin-top: 0.92px;
            min-height: 24px;
            min-width: 46px;
        }

        .vector {
            height: 31px;
            margin-top: 0;
            width: 16px;
        }

        .group-container {
            align-self: flex-end;
            height: 55px;
            margin-top: 113px;
            position: relative;
            width: 362px;
        }

        .group-345 {
            align-items: flex-start;
            cursor: pointer;
            display: flex;
            height: 55px;
            left: 0;
            min-width: 344px;
            position: absolute;
            top: 0;
        }

        .upload-menu .overlap {
            display: flex;
            min-width: 342px;
            box-sizing: border-box;
        }

        /* .overlap-group1 {
            align-items:center;
            background-color: #789C57;
            border-radius: 60px;
            height: 55px;
            padding: 0 88.3px;

        } */

        .upload-menu-1 {
            letter-spacing: 0;
            line-height: normal;
            min-height: 27px;
            text-align: center;
            width: 165px;

        }

        .overlap-group {
            align-items: center;
            background-color: #789C57;
            border-radius: 60px;
            height: 55px;
            left: 0;
            padding: 0 88.3px;
            position: absolute;
            top: 0;
            box-sizing: border-box;

        }

        .group-344 {
            align-items: center;
            align-self: center;
            display: flex;
            flex-direction: column;
            margin-top: 24px;
            min-height: 500px;
            width: 342px;
        }

        .kan-menu-container {
            align-items: flex-start;
            display: flex;
            gap: 28px;
            height: 21px;
            margin-left: 8px;
            margin-top: 55px;
            width: 390px;
            box-sizing: border-box;
        }

        .tampilkan-menu {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
            min-width: 116px;
        }

        .sembunyikan-menu {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
        }

        .overlap-group2 {
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            gap: 174px;
            height: 38px;
            justify-content: flex-end;
            padding: 8px 17px;
        }

        .cth-nasi-goreng::placeholder {
            color: #63363b99;
        }

        input:focus {
            outline: none;
        }

        .cth-nasi-goreng {
            background-color: transparent;
            border: 0;
            height: 21px;
            letter-spacing: 0;
            line-height: normal;
            opacity: 0.6;
            padding: 0;
            width: 122px;
            text-align: right;

        }

        .nama {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
            min-width: 50px;
        }

        .overlap-group4 {
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            gap: 200px;
            height: 38px;
            justify-content: flex-end;
            margin-top: 24px;
            padding: 7px 17px;
        }

        .rp {
            background-color: transparent;
            border: 0;
            height: 21px;
            letter-spacing: 0;
            line-height: normal;
            opacity: 0.6;
            padding: 0;
            width: 95px;
            text-align: right;
        }

        .rp::placeholder {
            color: #63363b99;
        }

        .harga {
            align-self: center;
            /* color: transparent; */
            font-family: var(--font-family-poppins);
            font-size: var(--font-size-s2);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            margin-bottom: 1px;
            min-height: 21px;
            min-width: 51px;
        }

        .span1 {
            color: red;
        }

        .overlap-group3 {
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            gap: 89px;
            height: 113px;
            justify-content: flex-start;
            margin-top: 24px;
            padding: 8px 17px;
        }

        .inputfile {
            width: 105px;
            cursor: pointer;
            overflow:hidden;
            height: 113px;
        }

        #imageName {
            font-size:12px;
        }

        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #084cdf;
            padding: 10px 16px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
        }

        input[type=file]::file-selector-button:hover {
            background: #0d45a5;
        }

        input[type=file] {
            width: 200px;
            margin-left: 0px;
            cursor: pointer;
        }

        .gambar-container {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 12px;
            min-height: 75px;
            width: 158px;

        }

        .gambar {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;

        }

        .berikan-gambar-menu-agar-lebih-menarik {
            letter-spacing: 0;
            line-height: normal;
            min-height: 42px;
            opacity: 0.7;
        }

        .mdiimage-add-outline {
            align-self: center;
            height: 47px;
            width: 47px;

        }

        .overlap-group5 {
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 11px;
            box-shadow: 0px 4px 4px #00000040;
            gap: 96px;
            height: 112px;
            justify-content: flex-end;
            margin-top: 24px;
            padding: 8px 16px;

        }

        .cth-nasi-goreng-deng::placeholder {
            color: #63363b99;
            font-family: 'poppins';

        }

        .cth-nasi-goreng-deng {
            background-color: transparent;
            border: 0;
            height: 63px;
            letter-spacing: 0;
            line-height: normal;
            opacity: 0.6;
            padding: 0;
            width: 186px;
            resize: none;
            text-align: right;

        }

        .deskripsi {
            letter-spacing: 0;
            line-height: normal;
            min-height: 21px;
            min-width: 62px;

        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        button {
            background-color: transparent;
            width: 265px;
            border:none;
            font-size:18px;
            color: white;
            font-weight:600;
            cursor: pointer;
        }


    </style>
</head>

<body>
    <form class="upload-menu screen" name="edit" action="/menukedai/{{ $dataMenu['menuID'] }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <a href="{{'/menukedai'}}"><div class="group-99">
            <img class="vector"
                src="https://anima-uploads.s3.amazonaws.com/projects/6464dffd9a8179f76fe86705/releases/6464e0584597b1790ecf51da/img/vector-8.svg"
                alt="Vector" />
            <div class="menu">Kembali</div>
        </div></a>

        <div class="group-344">

            <input type="hidden" name="menuID" value="{{$dataMenu['menuID']}}">
            <div class="overlap-group2 overlap">
                <div class="nama poppins-normal-black-14px">Nama<span class="span1">*</span></div><input
                    class="cth-nasi-goreng poppins-normal-congo-brown-14px" name="menuNama"
                    placeholder="Cth : Nasi Goreng" type="text" required="" value="{{$dataMenu['menuNama']}}"/>
            </div>
            <div class="overlap-group3 overlap">
                <div class="gambar-container">
                    <div class="gambar poppins-normal-black-14px">Gambar</div>
                    <p class="berikan-gambar-menu-agar-lebih-menarik poppins-normal-congo-brown-14px"><br /></p>
                </div>
                <div class="inputfile">
                    <span id="imageName">{{$dataMenu['menuGambar']}}</span>
                    <span>
                    <input id="inputTag" name="menuGambar" type="file" value="{{$dataMenu['menuGambar']}}" />
                </span>
                </div>
                {{-- <img class="mdiimage-add-outline"
                    src="https://anima-uploads.s3.amazonaws.com/projects/6464dffd9a8179f76fe86705/releases/6472f05363be7c92ea0fe9de/img/mdi-image-add-outline.svg"
                    alt="mdi:image-add-outline" /> --}}
            </div>
            <div class="overlap-group4 overlap">
                <div class="harga"><span class="poppins-normal-black-14px">Harga</span><span class="span1">*</span>
                </div>
                <input class="rp poppins-normal-congo-brown-14px" name="menuHarga" placeholder="Rp" type="text"
                    required="" value="{{$dataMenu['menuHarga']}}" />
            </div>
            <div class="overlap-group5 overlap">
                <div class="deskripsi poppins-normal-black-14px">Deskripsi</div>
                <textarea class="cth-nasi-goreng-deng poppins-normal-congo-brown-14px"
                    name="menuDeskripsi"
                    placeholder="Cth : Nasi Goreng dengan  bumbu khas aceh dengan tambahan telur"
                    type="text" value="{{$dataMenu['menuDeskripsi']}}">{{$dataMenu['menuDeskripsi']}}</textarea>
            </div>
            <div class="kan-menu-container">
                <div class="tampilkan-menu poppins-normal-white-14px">
                    <input type="radio" id="tampilkan" name="kan" value="tampilkan" class="">
                    <label for="tampilkan" class="">Tampilkan Menu</label>
                </div>
                <div class="sembunyikan-menu poppins-normal-white-14px">
                    <input type="radio" id="sembunyikan" name="kan" value="sembunyikan" class="">
                    <label for="sembunyikan" class="">Sembunyikan Menu</label>
                </div>
            </div>


        </div>

        <div class="group-container">
        <button type="submit">
            {{-- <a href= "/menukedai/{{$dataMenu['menuID']}}"> --}}

            <div class="overlap-group overlap">
                <div class="upload-menu-1 poppins-bold-white-18px">Simpan Menu</div>

            </div>

        {{-- </a> --}}
                {{-- <div class="group-345">
                    <div class="overlap-group1 overlap">
                        <div class="upload-menu-1 poppins-bold-white-18px"></div>
                    </div>
                </div> --}}

    </button>

        </div>

    </form>

    <script>
        let input = document.getElementById("inputTag");
        let imageName = document.getElementById("imageName")

        input.addEventListener("change", ()=>{
            let inputImage = document.querySelector("input[type=file]").files[0];

            imageName.innerText = inputImage.name;
        })
    </script>

</body>

</html>
