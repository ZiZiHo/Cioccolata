@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 確認訂單明細 Confirm Order')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/cart-1.css') }}">
@endsection

@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>購物車</h1>
            <h5>Shopping Cart</h5>
        </div>

        <div class="container">
            <!-- 四個步驟 -->
            <div class="row step-group">
                <div class="col-3 box s1">
                    <div class="circle c1">1</div>
                    <h4 class="txt t1">確認商品明細</h4>
                </div>
                <div class="col-3 box s2">
                    <div class="circle c2">2</div>
                    <h4 class="txt t2">付款寄送方式</h4>
                </div>
                <div class="col-3 box s3">
                    <div class="circle c3">3</div>
                    <h4 class="txt t3">確認訂單明細</h4>
                </div>
                <div class="col-3 box s4">
                    <div class="circle c4">4</div>
                    <h4 class="txt t4">購物訂單完成</h4>
                </div>
                <hr>
            </div>

            <!-- 商品列表 -->
            <div class="row list d-flex flex-wrap">
                <div class="col-12 col-sm-12 col-md-5 title-txt product-name">商品名稱</div>
                <div class="col-6 col-sm-4 col-md-2 title-txt price">單價</div>
                <div class="col-6 col-sm-3 col-md-2 title-txt quantity">數量</div>
                <div class="col-6 col-sm-3 col-md-2 title-txt amount">小計</div>
                <div class="col-6 col-sm-2 col-md-1 title-txt edit">刪除</div>
            </div>
            @foreach ($cartCollection as $item)
                <div class="row list">
                    <div class="col-12 col-sm-12 col-md-5 detail-txt product-name">{{ $item->name }}</div>
                    <div class="col-6 col-sm-4 col-md-2  detail-txt price js-price" data-price="{{ $item->price }}">{{ $item->price }}</div>

                    <div class="col-6 col-sm-3 col-md-2 detail-txt quantity">
                        <!-- 減號 -->
                        <button type="button" class="btn minus-btn"><i class="fas fa-minus"></i></button>
                        <!-- 數量 -->
                        <input class="qty-input" data-id="{{ $item->id }}" type="number" style="width: 30px;" placeholder="1" value="{{ $item->quantity }}" >
                        <!-- 加號 -->
                        <button type="button" class="btn plus-btn"><i class="fas fa-plus"></i></button>
                    </div>

                    <div class="col-6 col-sm-3 col-md-2 detail-txt amount js-subtotal">$300</div>
                    <div class="col-6 col-sm-2 col-md-1 detail-txt edit">
                        <button class="delete js-delete">X</button>
                    </div>
                    {{-- <hr class="product-line"> --}}
                </div>
            @endforeach






            <hr>

            <!-- 金額統計 -->
            <div class="row amount">
                <div class="col-md-10 detail-txt">總數量</div>
                <div class="col-md-2 detail-txt js-cart-qty">5</div>
            </div>
            <div class="row amount">
                <div class="col-md-10 detail-txt">運費</div>
                <div class="col-md-2 detail-txt js-shipping">$60</div>
            </div>
            <div class="row amount">
                <div class="col-md-10 detail-txt">總金額</div>
                <div class="col-md-2 detail-txt js-total">$1,300</div>
            </div>

            <!-- 按鈕 -->
            <div class="form-group row button-area">
                <a href="/product" class="btn mybtn back">返回繼續購物</a>
                <a href="/shopping-car/2" class="btn mybtn">下一步</a>
            </div>
        </div>

    </main>
@endsection


@section('js')
    {{-- <script src="{{ asset('/js/tw-city-selector.js') }}"></script> --}}
    <script src="{{ asset('js/cartCount.js') }}"></script>
    {{-- <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county',
            elDistrict: '.district',
            elZipcode: '.zipcode'
        });
    </script> --}}
@endsection
