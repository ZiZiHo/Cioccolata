@extends('layouts.nav_footer')
@section('title', '巧遇農情')
@section('css')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- index -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('main')
    <main>
        <a href="{{ asset('/shopping-car/1') }}" class="cart">
            <div class="quantity">{{ $count }}</div>
            <i class="fal fa-shopping-cart"></i>
        </a>

        <a href="#ankor-top">
            <div class="back-to-top">TOP</div>
        </a>

        <div class="banner" id="ankor-top">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div id="swiper-1" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="banner-img"
                                    style="background-image: url({{ asset('/img/index/banner/1920x1080\ banner01.jpg') }});">

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="banner-img"
                                    style="background-image: url({{ asset('/img/index/banner/02.jpg') }});"></div>
                            </div>


                            <div class="swiper-slide">
                                <div class="banner-img"
                                    style="background-image: url({{ asset('/img/index/banner/05.jpg') }});"></div>
                            </div>

                            <div class="swiper-slide">
                                <div class="banner-img"
                                    style="background-image: url({{ asset('/img/index/banner/04.jpg') }});"></div>
                            </div>


                            <div class="swiper-slide">
                                <div class="banner-img"
                                    style="background-image: url({{ asset('/img/index/banner/07.jpg') }});"></div>
                            </div>

                        </div>

                    </div>

                    <div class="col-12 logo d-flex justify-content-center wow slideInDown" data-wow-duration="1s">
                    </div>
                    <div class="col-12 text d-flex flex-column justify-content-center wow slideInUp" data-wow-delay="0.2s"
                        data-wow-duration="1s">
                        <h1>CHOMEET</h1>
                        <h3>巧遇農情</h3>
                        <h3>我們堅持追求每一片美味且真的巧克力</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- 關於我們 -->
        <div class="section-1">
            <div class="container px-0">
                <div class="row no-gutters">
                    <div class="col-12 d-md-none">
                        <div class="title wow fadeInUp" data-wow-delay="0s" data-wow-duration="0.5s">
                            <h1>關於我們</h1>
                            <h5>About</h5>
                        </div>
                    </div>
                    <div class="col-md-6 pic d-flex justify-content-center align-items-center wow fadeInUp"
                        style="height: fit-content;" data-wow-delay="0s" data-wow-duration="1s">
                        <img class="" src="{{ asset('/img/index/index-aboutus.png') }}" class="about-us" alt=""
                            style="width: 100%; height: auto;">

                        <img class="pic-sm d-none d-md-block wow rollIn"
                            src="{{ asset('/img/index/chocolate-01-300x260.png') }}" alt=""
                            style="width: 40%; height: auto;" data-wow-delay="0s" data-wow-duration="1s">
                    </div>
                    <div class="col-md-6 text d-flex flex-column justify-content-center align-items-center">
                        <div class="row no-gutters d-flex justify-content-md-start justify-content-center  wow fadeInUp"
                            data-wow-delay="1s" data-wow-duration="1s">
                            <div class="title d-none d-md-block">
                                <h1>關於我們</h1>
                                <h5>About</h5>
                            </div>

                            <p>巧遇農情是由天奕和佳慧在2014年共同創辦，他們在屏科大就讀時，輔導農民進行可可到巧克力的製作過程，也就是歐美很流行的Bean to
                                Bar，過程中發現了其中的奧妙，於是畢業後繼續跟農民合作，持續收購農民的可可豆來製作巧克力。</p>
                            <!-- 連到認識我們頁 -->
                            <!-- 20210713 調整了解更多html結構 -->
                            <a class="link d-flex justify-content-md-end justify-content-center align-items-center col-12"
                                href="/about">
                                <h4>了解更多
                                    <i class="fal fa-long-arrow-right ml-1 ml-md-m ml-1d-3"></i>
                                </h4>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="pics-1 d-flex justify-content-center justify-content-md-end align-items-center">

            <div class="beans wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                <img src="{{ asset('/img/index/phone-index-bean-294x145.png') }}" alt=""
                    style="height: 100%; width: auto; object-fit: contain">
            </div>
            <div class="pic-md wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                <img src="{{ asset('/img/index/decorate-cococa01-1425x425.jpg') }}" alt="">
            </div>

        </div>
        <!-- 認識巧克力 -->
        <div class="section-2 ">
            <div class="container">
                <div class="row no-gutters d-flex justify-content-between">
                    <div class="col-12 d-lg-none pl-md-3 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                        <div class="title">
                            <h1>認識巧克力</h1>
                            <h5>Chocolate</h5>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6 d-flex flex-column justify-content-xl-start justify-content-md-center wow fadeInUp"
                        data-wow-delay="0.5s" data-wow-duration="2s">
                        <div class="row no-gutters">
                            <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-01-325x150.jpg') }}"
                                    alt=""></div>
                            <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-02-325x150.jpg') }}"
                                    alt=""></div>
                            <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-03-325x150.jpg') }}"
                                    alt=""></div>
                            <div class="pic col-md-6"><img src="{{ asset('/img/index/phone-index-04-325x150.jpg') }}"
                                    alt=""></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-6 d-flex flex-column justify-content-center align-items-center text wow fadeInUp"
                        data-wow-delay="1s" data-wow-duration="2s">
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
                                <!-- 連到認識巧克力頁 -->
                                <!-- 20210713 調整了解更多html結構 -->
                                <a class="link d-flex justify-content-lg-end justify-content-center align-items-center col-12"
                                    href="/knowledge">
                                    <h4>了解更多
                                        <i class="fal fa-long-arrow-right ml-1 ml-md-m ml-1d-3"></i>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 最新消息 -->
        <div class="section-3">
            <div class="container px-0 position-relative">

                <img class="pic-sm-index d-none d-md-block wow zoomIn"
                    src="{{ asset('/img/index/chocolate-02-350x440.png') }}" alt="" data-wow-delay="3s"
                    data-wow-duration="1s">

                <img class="pic-sm-phone d-block d-md-none wow zoomIn"
                    src="{{ asset('/img/index/chocolate-01-300x260.png') }}" alt="" width="20%" data-wow-delay="3s"
                    data-wow-duration="1s">

                <div class="col-md-12 d-md-none wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                    <div class="title">
                        <h1>消息公告</h1>
                        <h5>News</h5>
                    </div>
                </div>
                <div class="row no-gutters news-area d-flex justify-content-center wow fadeIn" data-wow-delay="0s"
                    data-wow-duration="1s">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                        <div class="title d-none d-md-block ">
                            <h1>消息公告</h1>
                            <h5>News</h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- 消息群組一，是否長兩個(群組一&群組二)，排版才不會跑掉 -->
                        <div class="row no-gutters news-group d-flex wow fadeInUp" data-wow-delay="1s"
                            data-wow-duration="1s">
                            <!-- 要長的最新消息 -->
                            <div class="col-md-12 col-xl-5 news d-flex">

                                <!-- 日期，hover換圖在SCSS:783行，可取消 -->
                                <div class="date" style="content:'{{ asset('$news[0]->media') }}' ">
                                    <div class="row no-gutters">
                                        <!-- 月 -->
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[0]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="{{ asset('/img/index/slash.png') }}" alt="">
                                        </div>
                                        <!-- 日 -->
                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[0]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text">
                                    <!-- 消息標題 -->
                                    <h3 class="mb-0">{{ $news[0]->title }}</h3>
                                    <!-- 消息內容 -->
                                    <p class="mb-0">{{ $news[0]->summary }}</p>
                                    <!-- 連到外部連結 -->
                                    <div class="more">
                                        <a href="{{ $news[0]->readmore }}">more</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 col-xl-5 news d-flex">
                                <div class="date">
                                    <div class="row no-gutters">
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[1]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="{{ asset('/img/index/slash.png') }}" alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[1]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="text">
                                    <!-- 消息標題 -->
                                    <h3 class="mb-0">{{ $news[1]->title }}</h3>
                                    <!-- 消息內容 -->
                                    <p class="mb-0">{{ $news[1]->summary }}</p>
                                    <!-- 連到外部連結 -->
                                    <div class="more">
                                        <a href="{{ $news[1]->readmore }}">more</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- 最新消息群組二 -->
                        <div class="row no-gutters second news-group d-flex wow fadeInUp" data-wow-delay="1s"
                            data-wow-duration="1s">
                            <div class="col-md-12 col-xl-5 news d-flex">
                                <!-- 日期，hover換圖在SCSS:783行，可取消 -->
                                <div class="date">
                                    <div class="row no-gutters">
                                        <!-- 月 -->
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[2]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="{{ asset('/img/index/slash.png') }}" alt="">
                                        </div>
                                        <!-- 日 -->
                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[3]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text">
                                    <!-- 消息標題 -->
                                    <h3 class="mb-0">{{ $news[2]->title }}</h3>
                                    <!-- 消息內容 -->
                                    <p class="mb-0">{{ $news[2]->summary }}</p>
                                    <!-- 連到外部連結 -->
                                    <div class="more">
                                        <a href="{{ $news[2]->readmore }}">more</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 col-xl-5 news d-flex">
                                <div class="date">
                                    <div class="row no-gutters">
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[3]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="{{ asset('/img/index/slash.png') }}" alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[3]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="text">
                                    <!-- 消息標題 -->
                                    <h3 class="mb-0">{{ $news[3]->title }}</h3>
                                    <!-- 消息內容 -->
                                    <p class="mb-0">{{ $news[3]->summary }}</p>
                                    <!-- 連到外部連結 -->
                                    <div class="more">
                                        <a href="{{ $news[3]->readmore }}">more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-block d-none wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                        <!-- 連到消息頁面 -->
                        <a class="col-md-12 d-flex justify-content-center align-items-center " href="/news">
                            <div class="link d-flex justify-content-center align-items-center">
                                <h4>了解更多</h4>
                                <i class="fal fa-long-arrow-right ml-md-3 ml-1"></i>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="d-block d-md-none wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                    <a class="col-md-12 d-flex justify-content-center align-items-center d-none" href="/news">
                        <div class="link d-flex justify-content-center align-items-center">
                            <h4>了解更多</h4>
                            <i class="fal fa-long-arrow-right ml-md-3 ml-1"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- 標語 -->
        <div class="section-4">
            <div class="pic" style="background-image: url({{ asset('/img/index/slogan-1920x840.jpg') }});">
                <div class="mask"></div>
            </div>
            <div class="container px-0 mr-auto">
                <div class="row no-gutters text wow zoomIn" data-wow-delay="1s" data-wow-duration="2s">
                    <div class="col-md-12  d-flex flex-row flex-wrap justify-content-center no-gutters">
                        <div class="col-12 col-md-4">
                            <h1>不添加任何化學劑</h1>
                        </div>
                        <div class="col-12 col-md-3">
                            <h1>口味純正</h1>
                        </div>
                        <div class="col-12 col-md-5">
                            <h1>僅使用純天然可可脂</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <h1> 我們堅持追求每一片美味且真的巧克力</h1>
                    </div>
                </div>
            </div>

        </div>
        <!-- 產品項目 -->
        <div class="section-5">
            <div class="container row no-gutters">

                <div class="title col-md-12 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                    <h1>巧克力品項</h1>
                    <h5>Chocolate</h5>
                </div>

                <!-- Swiper -->
                <div class="swiper-container mySwiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events wow fadeInUp"
                    data-wow-delay="1s" data-wow-duration="1s">
                    <div class="swiper-wrapper" id="swiper-wrapper-f62696a9353e2a810" aria-live="polite"
                        style="transition-duration: 0ms; transform: translate3d(-1576px, 0px, 0px);">
                        @for ($i = 0; $i < 9; $i++)
                            <div class="swiper-slide" role="group" aria-label="1 / 9" style="margin-right: 50px;">
                                <!-- 產品卡片 -->
                                <div class="card d-flex justify-content-center">
                                    <!-- 產品圖片 -->
                                    <img src="{{ $product[$i]->photo }}" style="height: 400px" class="card-img-top"
                                        alt="...">
                                    <div class="card-body row no-gutters d-flex justify-content-between">
                                        <!-- 產品名稱 -->
                                        <h4 class="product_name col-lg-7">{{ $product[$i]->name }}</h4>
                                        <!-- 產品價格 -->
                                        <p class="price col-lg-5 d-none d-lg-block">
                                            {{ $product[$i]->price }}/{{ $product[$i]->unit }}</p>
                                        <!-- 產品內容 -->
                                        <p class="content col-md-12">{{ $product[$i]->ingredient }}</p>
                                        <!-- 產品價格 -->
                                        <p class="price col-md-12 d-block d-lg-none d-flex justify-content-start">
                                            {{ $product[$i]->price }}/{{ $product[$i]->unit }}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-53824a171ef1d279"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-53824a171ef1d279"></div>

                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <!-- 手機板出現 Swiper -->
                <div class="d-block d-sm-none swiper-container mySwiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events wow fadeInUp"
                    data-wow-delay="1s" data-wow-duration="1s">
                    <div class="swiper-wrapper" id="swiper-wrapper-f62696a9353e2a810" aria-live="polite"
                        style="transition-duration: 0ms; transform: translate3d(-1576px, 0px, 0px);">
                        <div class="swiper-slide" role="group" aria-label="1 / 9" style="margin-right: 50px;">
                            <!-- 產品卡片 -->
                            @for ($i = 0; $i < 9; $i++)
                                <div class="card d-flex justify-content-center">
                                    <!-- 產品圖片 -->
                                    <img src="{{ $product[$i]->photo }}" class="card-img-top" alt="...">
                                    <div class="card-body row no-gutters d-flex justify-content-between px-0">
                                        <!-- 產品名稱 -->
                                        <h4 class="product_name col-lg-7">{{ $product[$i]->name }}</h4>
                                        <!-- 產品價格 -->
                                        <p class="price col-lg-5 d-none d-lg-block">
                                            {{ $product[$i]->price }}/{{ $product[$i]->unit }}</p>
                                        <!-- 產品內容 -->
                                        <p class="content col-md-12">{{ $product[$i]->ingredient }}</p>
                                        <!-- 產品價格 -->
                                        <p class="price col-md-12 d-block d-lg-none d-flex justify-content-start">
                                            {{ $product[$i]->price }}/{{ $product[$i]->unit }}</p>
                                    </div>
                                </div>
                            @endfor

                        </div>

                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-53824a171ef1d279"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-53824a171ef1d279"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

                <div class="col-md-12 d-flex justify-content-center align-items-center mb-5">
                    <!-- 連到產品頁 -->
                    <a href="/product">
                        <div class="link d-flex justify-content-center align-items-center wow fadeInUp">
                            <h4>前往購物</h4> <i class="fas fa-shopping-cart ml-md-3" data-wow-delay="1s"
                                data-wow-duration="1s"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="pics">
            <!-- 實驗圖片 -->
            <!-- <img class="wow slideInLeft" src="/img/index/test.jpg" alt=""
                     data-wow-delay="1s" data-wow-duration="1s"> -->

            <img class="wow slideInLeft" src="{{ asset('/img/index/phone-index-375x226.jpg') }}" alt=""
                style="max-width: 100%; height: auto;" data-wow-delay="1s" data-wow-duration="1s">

            <div class="pic-gray wow slideInRight" data-wow-delay="0s" data-wow-duration="0.5s"></div>
            <div class="pic-brown wow slideInRight" data-wow-delay="0s" data-wow-duration="0.5s"></div>
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

            centeredSlides: true,

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
            slidesPerView: 2,
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




        // activate wow.js
        new WOW().init();
    </script>
@endsection
