@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 瑪雅巧克力DIY Chocolate DIY')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/diy-class.css') }}">
@endsection

@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>瑪雅巧克力 DIY</h1>
            <h5>Chocolate DIY</h5>
        </div>

        <div class="history">
            <h1>馬雅巧克力小歷史</h1>
            <hr>
            <h4>
                巧克力的歷史起源於3500年前的瑪雅文明，擁有高度文明的瑪雅人，最早將可可製成祭祀的飲品，他們烘烤可可豆，磨碎成粉，拌入辣椒、香料和龍舌蘭糖漿製作成美味的貢品。乾扁的可可豆也是當時重要的貨幣，一隻兔子要價10顆可可豆，一名奴隸價值100顆可可豆。
            </h4>
        </div>


        <div class="diy">
            <div class="content">
                <div class="class-title">
                    <h2>體驗課程</h2>
                    <hr>
                </div>
                <h4>
                    瑪雅巧克力的DIY，帶領大家從可可豆開始，一步步體驗巧克力的風味，從豆子最原始的風味品嚐、脫殼及搗磨，了解3000年前巧克力的製作過程，其巧克力風味的轉變。
                </h4>
                <h3>體驗內容： </h3>
                <h4>
                    • 可可豆品嚐 &nbsp; • 可可粉吸食 &nbsp; • 可可脂體驗<br>
                    • 巧克力製作 &nbsp; • 巧克力上色 &nbsp; • 巧克力裝盒
                </h4>
                <h3>課程贈品： </h3>
                <h4>
                    • 可可飲一杯 &nbsp; • 點心一份<br>
                    • 生可可果（季節限定，同時段共同體驗）
                </h4>
                <h4 class="price">售價： 880元／人</h4>

                <div class="add-cart">
                    <a href="#" class="cart">加入購物車 <i class="fal fa-long-arrow-right"></i></a>
                    <hr>
                </div>
            </div>

            <div class="photo-group">
                <div class="photo-1"></div>
                <div class="photo-2"></div>
            </div>
        </div>





    </main>
@endsection
