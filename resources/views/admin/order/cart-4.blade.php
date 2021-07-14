@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 購物訂單完成 Order Completed')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/cart-4.css') }}">
@endsection


@section('main')
    <main style="flex-wrap: wrap;">
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
            </div>

            <hr>

            <div class="order-done">
                檢視訂單
            </div>

            <hr>

            <!-- 商品列表，縮版會隱藏 -->
            <div class="list d-flex flex-wrap">
                <div class="col-sm-12 col-md-6 title-txt product-name">商品名稱</div>
                <div class="col-sm-4 col-md-3 title-txt price">單價</div>
                <div class="col-sm-4 col-md-1 title-txt quantity">數量</div>
                <div class="col-sm-4 col-md-2 title-txt amount">小計</div>
            </div>

            <!-- 商品明細 -->
            @foreach ($record as $item)
            @php
                $product = json_decode($item->old);
            @endphp
                <div class="list d-flex flex-wrap">
                    <div class="col-12 col-sm-12 col-md-6 detail-txt product-name">{{ $product->name }}</div>
                    <div class="col-4 col-sm-4 col-md-3 detail-txt price">${{ $product->price }}</div>
                    <div class="col-4 col-sm-4 col-md-1 detail-txt quantity">x{{ $item->qty }}</div>
                    @php
                        $subTotal = $item->qty * $product->price ;
                    @endphp
                    <div class="col-4 col-sm-4 col-md-2 detail-txt amount">${{ number_format($subTotal) }}</div>
                </div>
            @endforeach

            <hr>



            <!-- 按鈕 -->
            <div class="form-group row button-area">
                <a href="/admin/order" type="submit" class="btn mybtn back">回到前一頁</a>
            </div>
        </div>
    </main>

@endsection
