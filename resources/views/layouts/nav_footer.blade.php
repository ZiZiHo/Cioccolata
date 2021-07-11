<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Google 中文字形 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- 通用區塊 nav -->
    <!-- Nav CSS -->
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
    <!-- Footer CSS -->
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">

    @yield('css')

</head>

<body>
    <div class="burger">
        <span></span>
    </div>

    <nav>
        <ul class="main">
            <li><a href="{{ asset('/about') }}">關於我們</a></li>
            <li><a href="{{ asset('/knowledge') }}">認識巧克力</a></li>
            <li><a href="">最新消息</a></li>
            <li><a href="{{ asset('/diy') }}">瑪雅巧克力DIY</a></li>
            <li><a href="{{ asset('/product') }}">產品介紹</a></li>
            <li><a href="#contactus">聯絡我們</a></li>
            <li><a href="#0"><i class="fal fa-shopping-cart"></i> 購物車</a></li>
            <li><a href="#0"><i class="fal fa-user-alt"></i> 會員登入</a></li>
            <li>
                <i class="far fa-search" style="font-size:20px; color:white"></i>
                <input id="search" type="search" name="search" value="" placeholder="SEARCH..." class="search"></input>
            </li>

        </ul>


    </nav>

    <div class="overlay"></div>

    <main>
        @yield('main')
    </main>

    <footer id="contactus">

        <div class="footer-box">

            <!-- 左邊logo+聯絡資訊 -->
            <div class="box-left">

                <div class="up">
                    <div class="logo"></div>

                    <div class="info">
                        <div class="social">
                            <a href="https://www.facebook.com/chomeet2014" target="blank"><i
                                    class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/chomeet_chocolate" target="blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://line.me/ti/p/@qtw2002b" target="blank"><i class="fab fa-line"></i></a>
                            <a href="https://www.messenger.com/t/473915609339209/" target="blank"><i
                                    class="fab fa-facebook-messenger"></i></a>
                        </div>
                        <div class="text">
                            營業時間：<br>
                            週一至週五 14:00 ~ 17:00<br>
                            週六至週日 10:30 ~ 18:00<br>
                            聯絡電話：0928 922 242<br>
                            地址：台中市中區市府路137號1樓<br>
                            電子信箱：chomeet2014@gmail.com
                        </div>
                    </div>

                </div>

                <div class="down">

                    <div class="contact">
                        <!-- Button trigger modal -->
                        <button class="mymodal" data-toggle="modal" data-target="#exampleModal">
                            <i class="fal fa-envelope"></i>
                            <span>聯絡我們</span>
                        </button>
                    </div>

                    <div class="copy">
                        <div class="copy-txt">
                            Copyright © 2021 巧遇農情. &nbsp; All rights reserved.
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModal">跟巧遇農情說悄悄話</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="name">姓名</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="email">email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">留言</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                        placeholder="Hi~想告訴我們什麼呢？"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">送出留言</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 右邊地圖 -->
            <div class="box-right">
                <div class="vrtical-line"></div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d910.2117360448577!2d120.68201590207406!3d24.14201268664527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d340d98a903%3A0x27e785ef5c7475e5!2z5ben6YGH6L6y5oOFIENIT01FRVQg5ben5YWL5YqbIOWPr-WPryDlsIjos6Plupcg5Y-w5Lit576O6aOf!5e0!3m2!1szh-TW!2stw!4v1625240008981!5m2!1szh-TW!2stw"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </footer>

    <!-- Font Awsome js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap 4.6 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('/js/nav.js') }}"></script>

    @yield('js')

</body>

</html>
