@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 購物訂單完成 Order Completed')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/cart-4.css') }}">
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
            </div>

            <hr>

            <div class="order-done">
                訂單已成立，我們將盡快為您出貨，謝謝您！
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
            @foreach ($cartProducts as $item)
                <div class="list d-flex flex-wrap">
                    <div class="col-12 col-sm-12 col-md-6 detail-txt product-name">{{ $item->name }}</div>
                    <div class="col-4 col-sm-4 col-md-3 detail-txt price">${{ $item->price }}</div>
                    <div class="col-4 col-sm-4 col-md-1 detail-txt quantity">x{{ $item->quantity }}</div>
                    @php
                        $subTotal = $item->quantity * $item->price;
                    @endphp
                    <div class="col-4 col-sm-4 col-md-2 detail-txt amount">${{ number_format($subTotal) }}</div>
                </div>
            @endforeach

            <hr>

            @php
                $qty = 0;
                $shipping = 0;
                $total = 0;
                foreach ($cartProducts as $key => $item) {
                    $qty += $item->quantity;
                    $total += $item->price;
                }
                $shipping = $total > 1000 ? 0 : 60;
                $total = number_format($total);
            @endphp

            <!-- 金額統計 -->
            <div class="row amount">
                <div class="col-md-10 detail-txt">總數量</div>
                <div class="col-md-2 detail-txt">{{ $qty }}</div>
            </div>
            <div class="row amount">
                <div class="col-md-10 detail-txt">運費</div>
                <div class="col-md-2 detail-txt">${{ $shipping }}</div>
            </div>
            <div class="row amount">
                <div class="col-md-10 detail-txt">總金額</div>
                <div class="col-md-2 detail-txt">${{ $total }}</div>
            </div>

            <hr>

            @php
                $order = Session::get('order');
            @endphp

            <!-- 收貨人資料 -->
            <div class="recive-info">
                <h3 class="tag">收貨人資料</h3>

                <div class="row">
                    <label for="name" class="col-md-2 mytag">姓名：</label>
                    <div class="col-md-4">
                        <span class="txt"> {{ $order['name'] }} {{ $order['gender'] }} </span>
                    </div>
                </div>

                <div class="row">
                    <label for="mobile" class="col-md-2 mytag">手機：</label>
                    <div class="col-md-10">
                        <span class="txt"> {{ $order['phone'] }} </span>
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-2 mytag">email：</label>
                    <div class="col-md-10">
                        <span class="txt"> {{ $order['email'] }} </span>
                    </div>
                </div>

                <div class="row">
                    <label for="address" class="col-md-2 mytag">地址：</label>

                    <div class="col-md-10">
                        <span class="txt"> {{ $order['address'] }} </span>
                    </div>
                </div>
            </div>

            <hr>

            <!-- 付款方式 -->
            <div class="payment row">
                <label class="col-md-2 col-6">付款方式：</label>
                <div class="item col-md-10 col-6">
                    <span class="txt"> {{ $order['pay_type'] }} </span>
                </div>
            </div>

            <!-- 發票資料 -->
            <div class="invoice row">
                <label class="col-md-2 col-6">發票資料：</label>
                <div class="item col-md-10 col-6">
                    <span class="txt"> {{ $order['invoice'] }} </span>
                </div>
            </div>

            <!-- 備註 -->
            <div class="form-group message row">
                <label for="message" class="col-md-2 col-12">備註：</label>
                <div class="col-md-10 col-12">
                    <span class="txt"> {{ $order['remark'] }} </span>
                </div>
            </div>

            <hr>

            <!-- 按鈕 -->
            <div class="form-group row button-area">
                <a href="/shopping-car/finish" type="submit" class="btn mybtn back">回到首頁</a>
            </div>
        </div>
    </main>

@endsection
