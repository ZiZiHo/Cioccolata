@extends('layouts.nav_footer')
@section('title','巧遇農情')
@section('css')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- index -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('main')
<main>
    <div class="banner">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div id="swiper-1" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('/img/index/1920x1080 banner01.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dummyimage.com/1920x1080" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dummyimage.com/1920x1080" alt="">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <!-- <div class="swiper-button-next swiper-button-disabled"></div> -->
                    <!-- <div class="swiper-button-prev swiper-button-disabled"></div> -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>


                <div class="col-12 logo d-flex justify-content-center">
                </div>
                <div class="col-12 text d-flex flex-column justify-content-center">
                    <h1>CHOMEET</h1>
                    <h3>巧遇農情</h3>
                    <h3>我們堅持追求每一片美味且真的巧克力</h3>
                </div>


            </div>
        </div>





    </div>

    <div class="section-1">

        <div class="container px-0">
            <div class="row no-gutters">
                <div class="col-12 d-md-none">
                    <div class="title">
                        <h1>關於我們</h1>
                        <h5>About</h5>
                    </div>
                </div>
                <div class="col-md-6 pic d-flex justify-content-center align-items-center"
                    style="height: fit-content;">
                    <img src="{{ asset('/img/index/index-aboutus.png') }}" class="about-us" alt=""
                        style="width: 100%; height: auto;">

                    <img class="pic-sm d-none d-md-block" src="{{ asset('/img/index/chocolate-01-300x260.png') }}" alt=""
                        style="width: 40%; height: auto;">
                </div>
                <div class="col-md-6 text d-flex flex-column justify-content-center align-items-center">
                    <div class="row no-gutters d-flex justify-content-md-start justify-content-center">
                        <div class="title d-none d-md-block">
                            <h1>關於我們</h1>
                            <h5>About</h5>
                        </div>

                        <p>巧遇農情是由天奕和佳慧在2014年共同創辦，他們在屏科大就讀時，輔導農民進行可可到巧克力的製作過程，也就是歐美很流行的Bean to
                            Bar，過程中發現了其中的奧妙，於是畢業後繼續跟農民合作，持續收購農民的可可豆來製作巧克力。</p>
                        <a class="link d-flex justify-content-center align-items-center" href="">了解更多 <i
                                class="fal fa-long-arrow-right ml-3"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="pics-1 d-flex justify-content-center justify-content-md-end align-items-center">

        <div class="beans">
            <img src="{{ asset('/img/index/phone-index-bean-294x145.pn') }}g" alt=""
                style="height: 100%; width: auto; object-fit: contain">
        </div>
        <div class="pic-md ">
            <img src="{{ asset('/img/index/decorate-cococa01-1425x425.jpg') }}" alt="">
        </div>

    </div>

    <div class="section-2 ">
        <div class="container">

            <div class="row no-gutters d-flex justify-content-between">

                <div class="col-12 d-lg-none pl-md-3">
                    <div class="title">
                        <h1>認識巧克力</h1>
                        <h5>Chocolate</h5>
                    </div>
                </div>
                <div
                    class="col-lg-5 col-xl-6 d-flex flex-column justify-content-xl-start justify-content-md-center">
                    <div class="row no-gutters">
                        <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-01-325x150.jpg') }}" alt=""></div>
                        <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-02-325x150.jpg') }}" alt=""></div>
                        <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-03-325x150.jpg') }}" alt=""></div>
                        <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-04-325x150.jpg') }}" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-7 col-xl-6 d-flex flex-column justify-content-center align-items-center text">
                    <div class="row no-gutters">
                        <div class="col-12 d-none d-lg-block">
                            <div class="title">
                                <h1>認識巧克力</h1>
                                <h5>Chocolate</h5>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <p>一片巧克力的生產，從種植開始，開花、結果、採收、發酵、曝曬、烘烤、脫殼、破碎、精磨、調溫、注模到成型，多道工續，是我們堅持追求每一片美味且真的巧克力。</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                            <a class="link d-flex justify-content-center align-items-center" href="">了解更多<i
                                    class="fal fa-long-arrow-right ml-3"></i></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-3">
        <div class="container px-0 position-relative">
            <img class="pic-sm-index d-none d-md-block" src="{{ asset('/img/index/chocolate-02-350x440.png') }}" alt="">

            <img class="pic-sm-phone d-block d-md-none" src="{{ asset('/img/index/chocolate-01-300x260.png') }}" alt=""
                width="20%">

            <div class="col-md-12 d-md-none">
                <div class="title">
                    <h1>消息公告</h1>
                    <h5>News</h5>
                </div>
            </div>
            <div class="row no-gutters news-area d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="title d-none d-md-block ">
                        <h1>消息公告</h1>
                        <h5>News</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row no-gutters news-group d-flex">
                        <div class="col-md-12 col-xl-5 news d-flex">
                            <div class="date">
                                <div class="row no-gutters">
                                    <div class="col-12"><span class="month">06</span>
                                    </div>
                                    <i class="fal fa-slash"></i>

                                    <div class="col-12 d-flex justify-content-end"><span class="day">30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="text">
                                <h3 class="mb-0">Lorem ipsum dolor sit fhfxsdhfhfxsdhfhfsh</h3>
                                <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus
                                    beatae dolores cum?
                                    Mollitia animi est illum illo aliquid nihil neque, asperiores sed provident
                                    eligendi,
                                    explicabo distinctio numquam quidem assumenda iure.</p>
                                <div class="more">
                                    <a href="">more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-xl-5 news d-flex">
                            <div class="date">

                                <div class="row no-gutters">
                                    <div class="col-12"><span class="month">06</span>
                                    </div>
                                    <i class="fal fa-slash"></i>

                                    <div class="col-12 d-flex justify-content-end"><span class="day">30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="photo" style="background-image: url(https://dummyimage.com/210x210);"
                                style="height: auto; width: auto; object-fit: contain">

                            </div>

                            <div class="text">
                                <h3 class="mb-0">Lorem ipsum dolor sit fhfxsdhfhfxsdhfhfsh</h3>
                                <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus
                                    beatae dolores cum?
                                    Mollitia animi est illum illo aliquid nihil neque, asperiores sed provident
                                    eligendi,
                                    explicabo distinctio numquam quidem assumenda iure.</p>
                                <div class="more">
                                    <a href="">more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row no-gutters second news-group d-flex">
                        <div class="col-md-12 col-xl-5 news d-flex">
                            <div class="date">
                                <div class="row no-gutters">
                                    <div class="col-12"><span class="month">06</span>
                                    </div>
                                    <i class="fal fa-slash"></i>

                                    <div class="col-12 d-flex justify-content-end"><span class="day">30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="text">
                                <h3 class="mb-0">Lorem ipsum dolor sit fhfxsdhfhfxsdhfhfsh</h3>
                                <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus
                                    beatae dolores cum?
                                    Mollitia animi est illum illo aliquid nihil neque, asperiores sed provident
                                    eligendi,
                                    explicabo distinctio numquam quidem assumenda iure.</p>
                                <div class="more">
                                    <a href="">more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-xl-5 news d-flex">
                            <div class="date">
                                <div class="row no-gutters">
                                    <div class="col-12"><span class="month">06</span>
                                    </div>
                                    <i class="fal fa-slash"></i>
                                    <div class="col-12 d-flex justify-content-end"><span class="day">30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="photo" style="background-image: url(https://dummyimage.com/210x210);"
                                style="height: auto; width: auto; object-fit: contain">

                            </div>

                            <div class="text">
                                <h3 class="mb-0">Lorem ipsum dolor sit fhfxsdhfhfxsdhfhfsh</h3>
                                <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus
                                    beatae dolores cum?
                                    Mollitia animi est illum illo aliquid nihil neque, asperiores sed provident
                                    eligendi,
                                    explicabo distinctio numquam quidem assumenda iure.</p>
                                <div class="more">
                                    <a href="">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-md-block d-none">
                    <a class="col-md-12 d-flex justify-content-center align-items-center " href="">
                        <div class="link d-flex justify-content-center align-items-center">了解更多
                            <i class="fal fa-long-arrow-right ml-3"></i>
                        </div>
                    </a>
                </div>

            </div>

            <div class="d-block d-md-none">
                <a class="col-md-12 d-flex justify-content-center align-items-center d-none" href="">
                    <div class="link d-flex justify-content-center align-items-center">了解更多
                        <i class="fal fa-long-arrow-right ml-3"></i>
                    </div>
                </a>
            </div>


        </div>

    </div>

    <div class="section-4">
        <div class="pic" style="background-image: url({{ asset('/img/index/slogan-1920x840.jpg') }});">
            <div class="mask"></div>

        </div>
        <div class="container px-0 mr-auto">

            <div class="row no-gutters text">
                <div class="col-md-12  d-flex flex-row flex-wrap justify-content-center no-gutters">
                    <div class="col-12 col-md-4">
                        <h1>不添加任何化學劑</h1>
                    </div>
                    <div class="col-12 col-md-4">
                        <h1>口味純正</h1>
                    </div>
                    <div class="col-12 col-md-4">
                        <h1>僅使用純天然可可脂</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <h1> 我們堅持追求每一片美味且真的巧克力</h1>

                </div>
            </div>
        </div>

    </div>

    <div class="section-5">
        <div class="container row no-gutters">

            <div class="title col-md-12">
                <h1>巧克力品項</h1>
                <h5>Chocolate</h5>
            </div>

            <!-- Swiper -->
            <div
                class="swiper-container mySwiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-f62696a9353e2a810" aria-live="polite"
                    style="transition-duration: 0ms; transform: translate3d(-1576px, 0px, 0px);">
                    <div class="swiper-slide" role="group" aria-label="1 / 9" style="margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="2 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <!-- <img src="/img/teaBar04-550x660.jpg" class="card-img-change" alt="..."> -->
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jp') }}g" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="7 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="9 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-53824a171ef1d279"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                    aria-controls="swiper-wrapper-53824a171ef1d279"></div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            <div
                class="d-block d-sm-none swiper-container mySwiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-f62696a9353e2a810" aria-live="polite"
                    style="transition-duration: 0ms; transform: translate3d(-1576px, 0px, 0px);">
                    <div class="swiper-slide" role="group" aria-label="1 / 9" style="margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="2 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <!-- <img src="/img/teaBar04-550x660.jpg" class="card-img-change" alt="..."> -->
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="7 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="9 / 9"
                        style="width: 344px; margin-right: 50px;">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-sm-center">
                            <!-- 產品圖片 -->
                            <img src="{{ asset('/img/index/teaBar02-550x660.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                <!-- 產品名稱 -->
                                <h4 class="product_name col-md-9">純手工爆香可可杏仁豆</h4>
                                <!-- 產品價格 -->
                                <p class="price col-md-3">300元/罐</p>
                                <!-- 產品內容 -->
                                <p class="content col-md-12">杏仁、可可膏、可可脂、</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-53824a171ef1d279"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                    aria-controls="swiper-wrapper-53824a171ef1d279"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            <div class="col-md-12 d-flex justify-content-center align-items-center mb-5">
                <a href="">
                    <div class="link d-flex justify-content-center align-items-center">前往購物 <i
                            class="fas fa-shopping-cart ml-3"></i></div>
                </a>
            </div>

        </div>

    </div>


    <div class="pics d-flex flex-column align-items-end">
        <div class="pic-gray">
        </div>

        <div class="pic-brown">
            <img src="{{ asset('/img/index/phone-index-375x226.jpg') }}" alt="">
        </div>


    </div>

</main>

@endsection

@section('js')
    <!-- Banner Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

    <!-- Product Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('#swiper-1', {
            autoplay: {
                delay: 3000,
            },

            speed: 2000,
            loop: true,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',


            },
            pagination: {
                el: '.swiper-pagination',
            },
        });



        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
