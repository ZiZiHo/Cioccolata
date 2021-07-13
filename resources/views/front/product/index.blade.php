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
            <img class="wow fadeIn" src="/img/product/product-375x150-banner.jpg" alt="" data-wow-delay="0s"
                data-wow-duration="1s">
            <div class="title wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s">
                <h1>產品</h1>
                <h5>Product</h5>
            </div>
        </div>

        <div class="section-1 wow fadeIn" data-wow-delay="0.5s" data-wow-duration="2s">
            <div class="row no-gutters d-none d-md-block">
                <!-- 電腦板產品選單 -->
                <div class="types col-md-12 d-flex justify-content-between justify-content-lg-around justify-content-xl-center wow fadeInDown"
                    data-wow-offset="10" data-wow-delay="0.5s" data-wow-duration="1s">
                    @foreach ($productType as $type)
                        {{-- $type_id --}}
                        @if ($type->id == $type_id)
                            <a href="/product?type_id={{ $type->id }}"
                                class="btn type col-lg-3 type-click col-xl-2 p-0">
                                <h3 class="m-0">{{ $type->product_type_name }}</h3>
                            </a>
                        @else
                            <a href="/product?type_id={{ $type->id }}" class="btn type col-lg-3 col-xl-2 p-0">
                                <h3 class="m-0">{{ $type->product_type_name }}</h3>
                            </a>
                        @endif
                    @endforeach
                    @if ($type_id < 3)
                        <a href="/product" class="btn type col-lg-3 col-xl-2 p-0 ">
                            <h3 class="m-0">全部商品 </h3>
                        </a>
                    @else
                        <a href="/product" class="btn type col-lg-3 col-xl-2 p-0 type-click ">
                            <h3 class="m-0">全部商品 </h3>
                        </a>
                    @endif

                </div>
            </div>

            <div class="type-select col-12 d-flex justify-content-center d-block d-md-none mb-3 wow fadeIn"
                data-wow-delay="0.5s" data-wow-duration="1s">
                <!-- 手機板產品選單 -->
                <form action="" class="position-relative">
                    <label for="type">
                    </label>

                    <select class="type d-flex justify-content-center" name="type" id="type" width="240"
                        style="width: 240px; height: 40px;" height="40" onChange="window.location.href=this.value">
                        @foreach ($productType as $type)
                            @if ($type->id == $type_id)
                                <option selected value="/product?type_id={{ $type->id }}">
                                    {{ $type->product_type_name }}
                                </option>
                            @else
                            <option value="/product?type_id={{ $type->id }}">
                                {{ $type->product_type_name }}
                            </option>
                            @endif
                        @endforeach
                        @if ($type_id < 3)
                            <option value="/product" >全部商品</option>
                        @else
                            <option value="/product" selected >全部商品</option>
                        @endif

                    </select>
                    <i class="fal fa-chevron-down type"></i>
                </form>
            </div>

            <div class="container px-0">
                <div class="row d-flex no-gutters">
                    <div class="col-lg-6 col-xl-7 d-flex justify-content-center align-items-center">
                        <div class="pic wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s">
                            <!-- 產品圖片 -->
                            <img src="{{ $record[0]->photo }}" alt="" style="max-width: 100%;" data-wow-delay="4s"
                                data-wow-duration="3s">
                            <!-- 排名第一 -->
                            <div class="rank d-flex justify-content-md-center align-items-end wow bounce"
                                data-wow-delay="2s" data-wow-duration="1.5s">
                                <div class="rank-no">no.</div>
                                <div class="rank-num">1</div>
                            </div>
                        </div>
                    </div>
                    <!-- 排名第一品項 -->
                    <div class="col-lg-6 col-xl-5 d-flex justify-content-center align-items-center">

                        <div class="text row no-gutters">
                            <!-- 產品名稱 -->
                            <h2 class="title col-12 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                {{ $record[0]->name }}</h2>
                            <!-- 產品內容 -->
                            <div class="content col-md-12 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                <ul>
                                    <li> 內容 : {{ $record[0]->unit }}</li>
                                    <li> 重量 : {{ $record[0]->weight }}</li>
                                    <li class="js-price" data-price="{{ $record[0]->price }}"> 價格 : ${{ $record[0]->price }}</li>
                                    <li> 成分 : {{ $record[0]->ingredient }}</li>
                                    {{-- <li>禮盒尺寸：長 21 x 寬 18 x 高 5(cm)</li> --}}
                                </ul>
                            </div>
                            <!-- 購物車按鈕 -->
                            <div class="add-cart col-md-10 d-flex justify-content-center justify-content-lg-between wow zoomInRight"
                                data-wow-delay="0.5s" data-wow-duration="1s">
                                <!-- 數量 -->
                                <div
                                    class="qty d-flex justify-content-around  align-items-center mr-lg-2 mr-4 col-5 col-md-4 col-lg-6">
                                    <!-- 減少按鈕 -->
                                    <button type="button" class="subBtn btn btn-sm minus-btn ">-</button>
                                    <!-- 數量 -->
                                    <input name="quantity" class="qty-input" value="1" type="number" placeholder="1" id="number">
                                    <!-- 增加按鈕 -->
                                    <button type="button" class="addBtn btn btn-sm plus-btn">+</button>
                                </div>
                                <!-- 加入購物車 -->
                                <div class="cart d-flex justify-content-center align-items-center col-5 col-md-4 col-lg-6">
                                    <div  class=" d-flex justify-content-center align-items-center">
                                        <button data-id = "{{ $record[0]->id }}" class="btn btn-lg add-btn">加入購物車</button>
                                        <i class="fas fa-shopping-cart p-0"></i>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section-2">
            <div class="container px-0">
                <div class="row no-gutters card-deck d-flex flex-row flex-wrap align-content-center align-items-center wow fadeInUp"
                    data-wow-delay="1s" data-wow-duration="1s">
                    @for ($i = 1; $i < 9 && $i < count($record); $i++)
                        <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                            <!-- 產品卡片 -->
                            <div class="card d-flex justify-content-center align-items-center">
                                <!-- 產品圖片 -->
                                <div class="card-img row no-gutters">
                                    <img src="{{ $record[$i]->photo }}" class="card-img-top" style="height:400px"
                                        alt="...">
                                    <div class="col-12 mask">
                                        <div class="text d-flex flex-column justify-content-center align-items-center">
                                            <p>｜成分｜</p>
                                            <p>>{{ $record[$i]->ingredient }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-body row no-gutters d-flex justify-content-center">
                                    <!-- 產品名稱 -->
                                    <h5 class="product_name col-12 d-flex justify-content-center justify-content-md-start">
                                        {{ $record[$i]->name }}</h5>
                                    <!-- 產品價格 -->
                                    <p data-price="{{ $record[$i]->price }}" class="price col-12 d-flex justify-content-center
                                                        justify-content-md-start js-price">NT$ {{ $record[$i]->price }}</p>

                                    <!-- 購物車按鈕 -->
                                    <div class="add-cart col-md-12">
                                        <div class="qty d-flex justify-content-center align-items-center mr-3">
                                            <!-- 減少按鈕 -->
                                            <button type="button" class="subBtn btn minus-btn">-</button>
                                            <!-- 數量 -->
                                            <input name="quantity" type="number" value="1" class="form-control qty-input" placeholder="1" id="number">
                                            <!-- 增加按鈕 -->
                                            <button type="button" class="addBtn btn plus-btn">+</button>
                                        </div>
                                        <!-- 加入購物車按鈕 -->
                                        <div href="" class="cart d-flex justify-content-md-center align-items-md-center">
                                            <button data-id = "{{ $record[$i]->id }}" class="btn add-btn">加入購物車</button>
                                            <i class="fas fa-shopping-cart pr-2"></i>

                                        </div>
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
                    @endfor







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
            <img class="wow slideInLeft" src="/img/index/phone-index-375x226.jpg" alt="" data-wow-delay="1s"
                data-wow-duration="1s">
            <div class="pic-gray wow slideInRight" data-wow-delay="0s" data-wow-duration="0.5s"></div>
            <div class="pic-brown wow slideInRight" data-wow-delay="0s" data-wow-duration="0.5s"></div>
        </div>



    </main>
@endsection

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@endsection
