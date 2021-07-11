@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 巧克力')


@section('css')
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="{{ asset('/css/product.css') }}">
@endsection

@section('main')
    <main>

        <div class="banner">
            <img src="/img/product/product-banner-1920x575.jpg" alt="">
            <div class="title">
                <h1>產品</h1>
                <h5>Product</h5>
            </div>
        </div>

        <div class="section-1">
            <div class="row no-gutters d-none d-md-block">
                <div
                    class="types col-md-12 d-flex justify-content-between justify-content-lg-around justify-content-xl-center">
                    <a href="" class="btn type col-lg-3 col-xl-2 p-0">
                        <h3 class="m-0">巧克力薄片</h3>
                    </a>
                    <a href="" class="btn type col-lg-3 col-xl-2 p-0">
                        <h3 class="m-0">巧克力Bar</h3>
                    </a>
                    <a href="" class="btn type col-lg-3 col-xl-2 p-0">
                        <h3 class="m-0">其他</h3>
                    </a>
                    <a href="" class="btn type col-lg-3 col-xl-2 p-0">
                        <h3 class="m-0">全部商品</h3>
                    </a>
                </div>
            </div>

            <div class="type-select col-12 d-flex justify-content-center d-block d-md-none mb-3">
                <form action="" class="position-relative">
                    <label for="type">
                    </label>

                    <select class="type d-flex justify-content-center" name="type" id="type" width="240"
                        style="width: 240px; height: 40px;" height="40">
                        <option value="巧克力薄片">巧克力薄片</option>
                        <option value="巧克力Bar">巧克力Bar</option>
                        <option value="其他">其他</option>
                        <option value="全部商品">全部商品</option>

                    </select>
                    <i class="fal fa-chevron-down type"></i>
                </form>
            </div>

            <div class="container px-0">
                <div class="row d-flex no-gutters">
                    <div class="col-lg-6 col-xl-7 d-flex justify-content-center align-items-center">
                        <div class="pic">
                            <img src="/img/product/巧克力bar/bar-no01-920x570.jpg" alt="" style="max-width: 100%;">
                            <div class="rank d-flex justify-content-md-center align-items-end">
                                <div class="rank-no">no.</div>
                                <div class="rank-num">1</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 d-flex justify-content-center align-items-center">
                        <div class="text row no-gutters">
                            <h2 class="title col-12">2021母親節禮盒 黑糖可可飲+100%Bean to Bar巧克力</h2>
                            <div class="content col-md-12">
                                <ul>
                                    <li>巧遇農情母親節禮盒內容：</li>
                                    <li>＊黑糖可可飲4入</li>
                                    <li>＊100%Bean to Bar巧克力1片</li>
                                    <li>＊禮盒專屬提袋1只</li>
                                    <li>禮盒尺寸：長 21 x 寬 18 x 高 5(cm)</li>
                                </ul>
                            </div>
                            <div class="add-cart col-md-10 d-flex justify-content-center justify-content-lg-between">
                                <div
                                    class="qty d-flex justify-content-around  align-items-center mr-lg-2 mr-4 col-5 col-md-4 col-lg-6">
                                    <button type="button" class="subBtn btn btn-sm">-</button>
                                    <input type="number" placeholder="1" id="number">
                                    <button type="button" class="addBtn btn btn-sm">+</button>
                                </div>

                                <div class="cart d-flex justify-content-center align-items-center col-5 col-md-4 col-lg-6">
                                    <a href="" class=" d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-lg">加入購物車</button>
                                        <i class="fas fa-shopping-cart p-0"></i>

                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section-2">
            <div class="container px-0">
                <div class="row no-gutters card-deck d-flex flex-row flex-wrap align-content-center align-items-center">

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <!-- 產品卡片 -->
                        <div class="card d-flex justify-content-center align-items-center">
                            <!-- 產品圖片 -->
                            <div class="card-img row no-gutters">
                                <img src="/img/product/巧克力bar/bar-02-390x430.jpg" class="card-img-top" alt="...">
                                <div class="col-12 mask">
                                    <div class="text d-flex flex-column justify-content-center align-items-center">
                                        <p>｜成分｜</p>
                                        <p>>74%巧克力(含可可脂，<br> 無人造油)<br>『CHOMEET』可可<br>原豆磨成巧克力><br>糖<br>文山包種茶</p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body row no-gutters d-flex justify-content-center">
                                <!-- 產品名稱 -->
                                <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                    74%文山包種紅茶</h5>
                                <!-- 產品價格 -->
                                <p class="price col-12 d-flex justify-content-center
                                    justify-content-md-start">NT$ 280</p>

                                <div class="add-cart col-md-12">
                                    <div class="qty d-flex justify-content-center align-items-center mr-3">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>
                                    </div>
                                    <a href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                        <button type="button" class="btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart pr-2"></i>

                                    </a>
                                </div>

                                <div class="add-cart-phone col-12">
                                    <div class="qty d-flex justify-content-center align-items-center">
                                        <button type="button" class="subBtn btn">-</button>
                                        <input type="number" class="form-control" placeholder="1" id="number">
                                        <button type="button" class="addBtn btn">+</button>

                                    </div>
                                    <div class="cart d-flex justify-content-center align-items-center mt-1">
                                        <button type="button" class="btn"> <i
                                                class="fal fa-cart-arrow-down"></i></i></button>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>




                </div>

                <div class="page row no-gutters">
                    <div class="col-8 d-flex justify-content-center">
                        <div class="arrow d-flex justify-content-center align-items-center pr-2">
                            <a href="#">
                                <i class="fal fa-chevron-left"></i>
                            </a>
                        </div>
                        <div class="nums d-flex justify-content-around align-items-center">
                            <div class="num"><a href="">1</a></div>
                            <div class="num"><a href="">2</a></div>
                            <div class="num"><a href="">3</a></div>
                        </div>
                        <div class="arrow d-flex justify-content-center align-items-center pl-1">
                            <a href="#"> <i class="fal fa-chevron-right"></i></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="pics">
            <img src="/img/index/phone-index-375x226.jpg" alt="" style="max-width: 100%; height: auto;">
            <div class="pic-gray"></div>
            <div class="pic-brown"></div>
        </div>



    </main>
@endsection
