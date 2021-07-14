@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 最新消息')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
@endsection

@section('main')
    <main>

        <div class="banner">
            <img class="wow fadeIn" src="/img/news/phone-news-375x150-banner.jpg" alt="" data-wow-delay="0s"
                data-wow-duration="1s">
            <div class="title wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s">
                <h1>最新消息</h1>
                <h5>News</h5>
            </div>
        </div>

        <div class="section-1">
            <div class="container px-0 position-relative">
                <div class="row no-gutters news-area d-flex justify-content-center wow fadeIn" data-wow-delay="2s"
                    data-wow-duration="1s">
                    <div class="col-12">
                        <div class="title d-none d-md-block wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s">
                            <h1>消息公告</h1>
                            <h5>News</h5>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row no-gutters news-group d-flex justify-content-center wow fadeInUp"
                            data-wow-delay="1s" data-wow-duration="1s">
                            <!-- 最新消息，hover換圖在SCSS:231行，可取消 -->
                            <div class="col-md-12 col-xl-5 news d-flex justify-content-xl-end justify-content-center">
                                <!-- 日期 -->
                                <div class="date">
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
                                    <div class="more">
                                        <a href="{{ $news[0]->readmore }}">more</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 col-xl-5 news d-flex  justify-content-xl-end justify-content-center">
                                <div class="date">

                                    <div class="row no-gutters">
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[1]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="/img/index/slash.png" alt="">
                                        </div>

                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[1]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>



                                <div class="text">
                                    <h3 class="mb-0">{{ $news[1]->title }}</h3>
                                    <p class="mb-0">{{ $news[1]->summary }}</p>
                                    <div class="more">
                                        <a href="{{ $news[1]->readmore }}">more</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row no-gutters second news-group d-flex wow fadeInUp" data-wow-delay="1s"
                            data-wow-duration="1s">
                            <div class="col-md-12 col-xl-5 news d-flex justify-content-xl-end justify-content-center">
                                <div class="date">
                                    <div class="row no-gutters">
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[2]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="/img/index/slash.png" alt="">
                                        </div>

                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[3]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text">
                                    <h3 class="mb-0">{{ $news[2]->title }}</h3>
                                    <p class="mb-0">{{ $news[2]->summary }}</p>
                                    <div class="more">
                                        <a href="{{ $news[2]->readmore }}">more</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 col-xl-5 news d-flex justify-content-xl-end justify-content-center">
                                <div class="date">
                                    <div class="row no-gutters">
                                        <div class="col-12"><span
                                                class="month">{{ date('m', strtotime($news[3]->date)) }}</span>
                                        </div>
                                        <!-- 20210713更改斜線樣式 -->
                                        <div class="slash">
                                            <img src="/img/index/slash.png" alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-end"><span
                                                class="day">{{ date('d', strtotime($news[3]->date)) }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo" style="background-image: url(https://dummyimage.com/210x210);"
                                    style="height: auto; width: auto; object-fit: contain">

                                </div>

                                <div class="text">
                                    <h3 class="mb-0">{{ $news[3]->title }}</h3>
                                    <p class="mb-0">{{ $news[3]->summary }}</p>
                                    <div class="more">
                                        <a href="{{ $news[3]->readmore }}">more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="title wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                            <h1>媒體採訪</h1>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- 最新消息圖片影片 -->
                        <div class="pic d-flex justify-content-center justify-content-md-end wow fadeInUp"
                            data-wow-delay="1s" data-wow-duration="1s">
                            <img src="{{ $interview[0]->media }}" alt="">

                            <!-- <iframe src="https://www.youtube.com/embed/0gSta0rSMPY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true"></iframe> -->

                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-md-center align-items-md-center">
                        <div class="text wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                            <!-- 最新消息title -->
                            <h3>{{ $interview[0]->title }}</h3>
                            <!-- 最新消息content -->
                            <h5>{{ $interview[0]->summary }}</h5>

                            <!-- 外部連結 -->
                            <!-- 20210713 修改字 -->
                            <a href="{{ $interview[0]->readmore }}" class="d-none d-md-block">more</a>

                            <div class="link-btn" type="button"><a href="https://youtu.be/BRapy94sMoI">開啟連結</a> </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-3 wow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
            <div class="container">
                <div class="row no-gutters d-flex justify-content-around justify-content-xl-between">
                    <!-- 媒體報導 -->
                    <!-- 20210713 報導html修改 -->
                    <div class="row no-gutters report col-5 col-md-6 d-flex justify-content-center">
                        <!-- 圖片 -->
                        <div class="pic d-flex justify-content-md-center wow bounceIn" data-wow-delay="1s"
                            data-wow-duration="1s">
                            <img src="{{ $interview[1]->media }}" alt="" >
                        </div>
                        <div class="text col-xl-8 d-flex flex-column justify-content-center align-items-center wow bounceIn"
                            data-wow-delay="1s" data-wow-duration="1s">
                            <!-- 標題 -->
                            <h3 class="mb-4">{{ $interview[1]->title }}</h3>
                            <!-- 內容 -->
                            <h5>{{ $interview[1]->summary }}</h5>
                            <!-- 電腦版外部連結 -->
                            <a href="{{ $interview[1]->readmore }}"
                                class="more col-12 d-md-flex justify-content-end d-none">
                                <p>more</p>
                            </a>
                            <!--  手機版外部連結 -->
                            <div class="link-btn" type="button"><a href="{{ $interview[1]->readmore }}">開啟連結</a> </div>
                        </div>
                    </div>
                    <!-- 20210713 報導html修改 -->
                    <div class="row no-gutters report col-5 col-md-6 d-flex justify-content-center">
                        <div class="pic d-flex justify-content-md-center wow bounceIn" data-wow-delay="1s"
                            data-wow-duration="1s">
                            <img src="{{ $interview[2]->media }}" alt="" style=" height: auto; max-width:100% ">
                        </div>
                        <div class="text col-xl-8 d-flex flex-column justify-content-center align-items-center wow bounceIn"
                            data-wow-delay="1s" data-wow-duration="1s">
                            <!-- 標題 -->
                            <h3 class="mb-4">{{ $interview[2]->title }}</h3>
                            <!-- 內容 -->
                            <h5>{{ $interview[2]->summary }}
                            </h5>
                            <!-- 電腦版外部連結 -->
                            <a href="{{ $interview[2]->readmore }}"
                                class="more col-12 d-md-flex justify-content-end d-none">
                                <p>more</p>
                            </a>
                            <!--  手機版外部連結 -->
                            <div class="link-btn" type="button"><a href="{{ $interview[2]->readmore }}">開啟連結</a> </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="pic-md d-flex justify-content-md-end wow slideInRight" data-wow-delay="1s" data-wow-duration="1s">
            <img src="/img/news/news-1540x470.jpg" alt="" style="max-width: 100%; height: auto;">
        </div>

        <div class="section-4">
            <div class="container">
                <div class="row no-gutters d-flex justify-content-between">
                    <div class="col-12 d-flex justify-content-center">
                        <h1 class="title wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">活動消息</h1>
                    </div>


                    <div class="row no-gutters col-12 activity d-flex align-items-center justify-content-center">

                        <div class="col-6 col-lg-6">
                            <!-- 活動圖片 -->
                            <div class="pic d-flex justify-content-center align-items-center mr-md-2 wow fadeInLeft"
                                data-wow-delay="1s" data-wow-duration="1s">
                                <img src="{{ $event[0]->media }}" alt="">
                            </div>
                        </div>
                        <!-- 20210713 修改html -->
                        <div class="col-6 col-lg-5 d-flex flex-column justify-content-center align-items-center">
                            <div class="text col-12 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1s">
                                <!-- 活動標題 -->
                                <h3>{{ $event[0]->title }}</h3>
                                <div class="bg-color col-12">
                                    <!-- 活動內容 -->
                                    <h5>
                                        {{ $event[0]->summary }}
                                    </h5>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="row no-gutters col-12 activity d-flex align-items-center justify-content-center">
                        <div class="col-6 col-lg-6">
                            <!-- 活動圖片 -->
                            <div class="pic d-flex justify-content-center align-items-center mr-md-2 wow fadeInLeft"
                                data-wow-delay="1s" data-wow-duration="1s">
                                <img src="{{ $event[1]->media }}" alt="" >
                            </div>
                        </div>
                        <!-- 20210713 修改html -->
                        <div class="col-6 col-lg-5 d-flex flex-column justify-content-center align-items-center">
                            <div class="text col-12 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1s">
                                <!-- 活動標題 -->
                                <h3>{{ $event[1]->title }}
                                </h3>
                                <div class="bg-color col-12">
                                    <!-- 活動內容 -->
                                    <h5>
                                        {{ $event[1]->summary }}
                                    </h5>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </main>

@endsection
