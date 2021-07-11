@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 認識巧克力 Chocolate')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/chocolate.css') }}">
@endsection

@section('main')
<main>
    <div class="banner"></div>
    <div class="title">
        <h1>認識巧克力</h1>
        <h5>Chocolate</h5>
    </div>

    <div class="cocoa"></div>

    <div class="content">
        <h1>台灣巧克力</h1>
        <hr>
        <h4>
            巧遇農情 CHOMEET 是台灣巧克力品牌，使用台灣與世界各地的可可原豆製作巧克力，用 Bean to Bar
            傳統工法，讓消費者認識純正巧力的豐富滋味，將台灣在地農產品結合巧克力，利用可可果實打造工藝藝術，呈現不同階段的可可製程，帶來五感奇特體驗。
        </h4>
    </div>

    <div class="plant">

        <div class="photo-group">
            <div class="left">
                <div class="pic-1"></div>
                <div class="pic-3"></div>
            </div>
            <div class="right">
                <div class="pic-2"></div>
                <div class="pic-4"></div>
            </div>
        </div>

        <div class="method">
            <div class="method-content">
                <div class="method-title">
                    <h1>種植方式</h1>
                    <hr>
                </div>

                <h4>可可樹也稱為巧克力樹，地理條件須具備良好的排水性、26~30°C的年均溫度、日夜溫差小，台灣的北迴歸線以南都非常適合種植，平地種植的可可樹生長狀況優於山坡地。</h4>

                <h4>使用種子栽種可可是最簡單的方式（實生苗），新鮮可可果夾剖開後，將種子從果莢取出，種植時不必去除可可的果肉，直接放置在土中並覆蓋2公分的土壤，並保持土壤濕潤良好的排水性。約2週後會開始發芽，新鮮的可可種子發芽率可以達到75％以上，建議於生長60公分後，移植到適當的盆栽或農地。
                </h4>

                <h4>野生可可樹最高可達10公尺（大約三層樓高），一般人工種植為方便收成控制在3~5公尺。從種子到開花結果約2~3年，樹齡在5年以上生產的可可豆品質較佳且穩定，可可樹採收年限為25年，之後報酬遞減。
                </h4>

            </div>
        </div>
    </div>


</main>

@endsection


