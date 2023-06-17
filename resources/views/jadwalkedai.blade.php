<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="e1_88 container-fluid">

        <div class="e1_89"></div>
        @foreach ($jadwalKedai as $kedainama)
            <div class="e1_90">
                <h1><b>{{ $kedainama->kedaiNama}}</b></h1>
            </div>
        @endforeach
        <span class="e1_91">Jam Operasional</span>
        @foreach ($jadwalKedai as $kedai)
            <div class="e1_92"> <b class="e1_93">Senin</b> <b class="e1_94">{{ $kedai->kedaiBuka }} -
                    {{ $kedai->kedaiTutup }}</b>
                <div class=e1_95>
                    <img src="{{ URL::asset('image/group.png') }}" alt="">
                </div>
        @endforeach
    </div>
    <div class=e1_99><b class="e1_100">Selasa</b> <b class="e1_101">{{ $kedai->kedaiBuka }} -
            {{ $kedai->kedaiTutup }}</b>
        <div class=e1_102>
            <img src="{{ URL::asset('image/group.png') }}" alt="">
        </div>
    </div>
    <div class=e1_106><b class="e1_107">Rabu</b> <b class="e1_108">{{ $kedai->kedaiBuka }} -
            {{ $kedai->kedaiTutup }}</b>
        <div class=e1_109>
            <img src="{{ URL::asset('image/group.png') }}" alt="">
        </div>
    </div>
    <div class=e1_113><b class="e1_114">Kamis</b> <b class="e1_115">{{ $kedai->kedaiBuka }} -
            {{ $kedai->kedaiTutup }}</b>
        <div class=e1_116>
            <img src="{{ URL::asset('image/group.png') }}" alt="">
        </div>
    </div>
    <div class=e1_120><b class="e1_121">Jumat</b> <b class="e1_122">{{ $kedai->kedaiBuka }} -
            {{ $kedai->kedaiTutup }}</b>
        <div class=e1_123>
            <img src="{{ URL::asset('image/group.png') }}" alt="">
        </div>
    </div>
    <div class=e1_127><b class="e1_128">Sabtu</b> <b class="e1_129">{{ $kedai->kedaiBuka }} -
            {{ $kedai->kedaiTutup }}</b>
        <div class=e1_130>
            <img src="{{ URL::asset('image/group.png') }}" alt="">
        </div>
    </div>
    <div class=e1_134><b class="e1_135">Minggu</b> <b class="e1_136">Tutup</b>
        <div class=e1_137>
            <img src="{{ URL::asset('image/group.png') }}"alt="">
        </div>
    </div>
    <a href="">
    <div class=e1_141><b class="e1_142">Kembali</b>
    </a>
        <div class="e1_143"><span class="material-symbols-outlined">
                arrow_back_ios_new
            </span></div>
    </div>
    <div class=e1_144>
        <div class="e1_145"></div>
        <div class=e1_146>
            <div class=e1_147><b class="e1_148">Penilaian</b>
                <div class=e1_149><span class="e1_150">{{$showRating}}/5</span>
                    <div class=e1_151>
                        <div class="e1_152"><i class="icon-star"></i></div>
                        <div class="e1_153"><i class="icon-star"></i></div>
                        <div class="e1_154"><i class="icon-star"></i></div>
                    </div>
                </div>
                <div class=e1_155><b class="e1_156">Lihat Detail</b>
                    <div class="e1_157"><span class="material-symbols-outlined">
                            arrow_forward_ios
                        </span></div>
                </div>
            </div>
        </div>
        <div class="e1_158"></div>
        <div class="e1_159"></div>
        <div class="e1_160"></div>
        <div class="e1_161"></div>
        <div class="e1_162"></div>
        <div class="e1_163"></div>
    </div>
    </div>
</body>

</html>

<style>
    .e1_88 {
        overflow: hidden;
    }

    .e1_88 {
        background-color: rgba(248.0000004172325, 244.0000006556511, 240.00000089406967, 1);
        width: 390px;
        height: 844px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        position: absolute;
    }

    .e1_89 {
        box-shadow: 0px -4px 23px rgba(0, 0, 0, 0.07999999821186066);
        background-color: rgba(255, 255, 255, 1);
        width: 341px;
        height: 535px;
        position: absolute;
        left: 24px;
        top: 375px;
        border-top-left-radius: 26px;
        border-top-right-radius: 26px;
        border-bottom-left-radius: 26px;
        border-bottom-right-radius: 26px;
    }

    .e1_89 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_90 {
        color: rgba(0, 0, 0, 1);
        width: 268px;
        height: 108px;
        position: absolute;
        left: 24px;
        top: 105px;
        font-family: Poppins;
        text-align: left;
        font-size: 40px;
        letter-spacing: 0px;
    }


    .e1_91 {
        color: rgba(0, 0, 0, 1);
        width: 211px;
        height: 36px;
        position: absolute;
        left: 90px;
        top: 391px;
        font-family: Poppins;
        text-align: left;
        font-size: 24px;
        letter-spacing: 0;
    }

    .e1_92 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 462px;
    }

    .e1_93 {
        color: rgba(0, 0, 0, 1);
        width: 46px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_94 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_95 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_96 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_97 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_98 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_99 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 515px;
    }

    .e1_100 {
        color: rgba(0, 0, 0, 1);
        width: 55px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_101 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_102 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_103 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_104 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_105 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_106 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 568px;
    }

    .e1_107 {
        color: rgba(0, 0, 0, 1);
        width: 43px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_108 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_109 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_110 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_111 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_112 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_113 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 621px;
    }

    .e1_114 {
        color: rgba(0, 0, 0, 1);
        width: 52px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_115 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_116 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_117 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_118 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_119 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_120 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 674px;
    }

    .e1_121 {
        color: rgba(0, 0, 0, 1);
        width: 54px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_122 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_123 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_124 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_125 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_126 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_127 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 727px;
    }

    .e1_128 {
        color: rgba(0, 0, 0, 1);
        width: 49px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_129 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_130 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_131 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_132 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_133 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_134 {
        width: 291px;
        height: 30.576452255249023px;
        position: absolute;
        left: 47px;
        top: 780px;
    }

    .e1_135 {
        color: rgba(0, 0, 0, 1);
        width: 62px;
        height: 24px;
        position: absolute;
        left: 43px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_136 {
        color: rgba(0, 0, 0, 1);
        width: 104px;
        height: 24px;
        position: absolute;
        left: 187px;
        top: 3px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_137 {
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_138 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 27.51880645751953px;
        height: 30.576452255249023px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_139 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 3.057645082473755px;
        height: 3.057645082473755px;
        position: absolute;
        left: 6.115271091461182px;
        top: 19.874692916870117px;
    }

    .e1_140 {
        background-color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 9.172935485839844px;
        height: 3.057645082473755px;
        position: absolute;
        left: 12.230561256408691px;
        top: 19.874692916870117px;
    }

    .e1_141 {
        width: 92px;
        height: 31.076475143432617px;
        position: absolute;
        left: 24px;
        top: 54px;
    }

    .e1_142 {
        color: rgba(99.00000169873238, 54.00000058114529, 59.00000028312206, 1);
        width: 68px;
        height: 24px;
        position: absolute;
        left: 24px;
        top: 4px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_143 {
        color: rgba(99.00000169873238, 54.00000058114529, 59.00000028312206, 1);
        width: 15.533974647521973px;
        height: 31.076475143432617px;
        position: absolute;
        left: 0px;
        top: 3px;
    }

    .e1_144 {
        width: 295px;
        height: 80px;
        position: absolute;
        left: 48px;
        top: 263px;
    }

    .e1_145 {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        background-color: rgba(255, 255, 255, 1);
        width: 295px;
        height: 80px;
        position: absolute;
        left: 0px;
        top: 0px;
        border-top-left-radius: 43px;
        border-top-right-radius: 43px;
        border-bottom-left-radius: 43px;
        border-bottom-right-radius: 43px;
    }

    .e1_146 {
        width: 225.43968200683594px;
        height: 50px;
        position: absolute;
        left: 35px;
        top: 13px;
    }

    .e1_147 {
        width: 76px;
        height: 50px;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .e1_148 {
        color: rgba(0, 0, 0, 1);
        width: 76px;
        height: 24px;
        position: absolute;
        left: 0px;
        top: 0px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_149 {
        width: 72px;
        height: 24px;
        position: absolute;
        left: 3px;
        top: 20px;
    }

    .e1_150 {
        color: rgba(0, 0, 0, 1);
        width: 41px;
        height: 24px;
        position: absolute;
        left: 31px;
        top: 7px;
        font-family: Poppins;
        text-align: left;
        font-size: 16px;
        letter-spacing: 0;
    }

    .e1_151 {
        width: 23px;
        height: 19px;
        position: absolute;
        left: 0px;
        top: 2px;
    }

    .e1_152 {
        color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 10px;
        height: 9px;
        position: absolute;
        left: 0px;
        top: 10px;
    }

    .e1_153 {
        color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 10px;
        height: 9px;
        position: absolute;
        left: 13px;
        top: 10px;
    }

    .e1_154 {
        color: rgba(221.00000202655792, 110.00000104308128, 81.00000277161598, 1);
        width: 10px;
        height: 9px;
        position: absolute;
        left: 6px;
        top: 0px;
    }

    .e1_155 {
        width: 101.43968200683594px;
        height: 28.700496673583984px;
        position: absolute;
        left: 124px;
        top: 13px;
    }

    .e1_156 {
        color: rgba(0, 0, 0, 1);
        width: 79px;
        height: 21px;
        position: absolute;
        left: 0px;
        top: 4px;
        font-family: Poppins;
        text-align: left;
        font-size: 14px;
        letter-spacing: 0;
        font-weight: 700;
    }

    .e1_157 {
        color: rgba(99.00000169873238, 54.00000058114529, 59.00000028312206, 1);
        width: 14.439685821533203px;
        height: 28.700496673583984px;
        position: absolute;
        left: 75px;
        top: 2px;
    }

    .e1_158 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_158 {
        width: 280px;
        height: 0px;
        position: absolute;
        left: 8px;
        top: 235px;
    }

    .e1_159 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_159 {
        width: 280px;
        height: 0px;
        position: absolute;
        left: 8px;
        top: 290px;
    }

    .e1_160 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_160 {
        width: 280px;
        height: 0px;
        position: absolute;
        left: 8px;
        top: 345px;
    }

    .e1_161 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_161 {
        width: 280px;
        height: 0px;
        position: absolute;
        left: 8px;
        top: 400px;
    }

    .e1_162 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_162 {
        width: 280px;
        height: 0px;
        position: absolute;
        left: 8px;
        top: 455px;
    }

    .e1_163 {
        border: 1px solid rgba(234.00000125169754, 215.0000023841858, 206.0000029206276, 1);
    }

    .e1_163 {
        width: 280px;
        height: 0px;
        position: absolute;
        left: 8px;
        top: 510px;
    }
</style>
