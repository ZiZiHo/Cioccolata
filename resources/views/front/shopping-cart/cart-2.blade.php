@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 付款及寄送方式 Payment & Shipment')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/cart-2.css') }}">
@endsection

@section('main')
    <main class="flex-wrap">
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

            <form action="/shopping-car/2/check" method="POST">
                @csrf
                <!-- 收貨人資料 -->
                <div class="recive-info">
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <h3>收貨人資料</h3>
                        </div>
                        @guest
                        <div class="col-md-6 col-12">
                            <input type="checkbox" name="different" disabled id="different">&nbsp;&nbsp;
                            <span class="different">收件人與會員資料相同</span>
                        </div>
                        @else
                            <div class="col-md-6 col-12">
                                <input type="checkbox" name="different" id="different">&nbsp;&nbsp;
                                <span class="different">收件人與會員資料相同</span>

                            </div>
                        @endguest

                    </div>

                    <!-- 姓名 -->
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label mytag"><span class=required>*</span>姓名：</label>
                        <div class="col-md-4">
                            <input type="text" name='name' class="form-control readonly" id="name">
                        </div>
                        <label for="gender" class="col-md-2 col-form-label mytag">稱謂：</label>
                        <div class="col-md-4">
                            <input type="radio" class="gender" name="gender" value='先生' checked><span class="txt"> 先生</span>
                            &nbsp; &nbsp; &nbsp;
                            <input type="radio" class="gender" name="gender" value='小姐'><span class="txt"> 小姐</span>
                        </div>
                    </div>

                    <!-- 手機 -->
                    <div class="form-group row">
                        <label for="mobile" class="col-md-2 col-form-label mytag"><span class=required>*</span>手機：</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control readonly " name="phone" id="mobile">
                        </div>

                    </div>

                    <!-- email -->
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label mytag"><span class=required>*</span>email：</label>
                        <div class="col-md-10">
                            <input type="text" name='email' class="form-control readonly" id="email">
                        </div>
                    </div>

                    <!-- 地址 -->
                    <div class="form-group row city-selector-set">
                        <label for="address" class="col-md-2 col-form-label mytag"><span class=required>*</span>地址：</label>
                        <div class="col-md-4 col-4">
                            <select class="county form-control readonly"></select>
                        </div>
                        <div class="col-md-3 col-4">
                            <select class="district form-control readonly"></select>
                        </div>
                        <div class="col-md-3 col-4">
                            <input class="zipcode form-control" name="zipcode" type="text" size="3" readonly
                                placeholder="郵遞區號">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label mytag"></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control readonly" id="address" name="address">
                        </div>
                    </div>
                    <hr>
                </div>


                <!-- 運送方式 -->
                <div class="shipment row">
                    <div class="tag col-md-2"><span class=required>*</span>運送方式：</div>
                    <div class="item col-md-10">
                        <input type="radio" name="shipment" value="快遞到家" id="normal">
                        快遞到家 &nbsp; &nbsp; &nbsp;
                        <input type="radio" name="shipment" value="超商取貨" id="cvs">
                        超商取貨
                    </div>
                </div>

                <!-- 付款方式 -->
                <div class="payment row">
                    <div class="tag col-md-2"><span class=required>*</span>付款方式：</div>
                    <div class="item col-md-10">
                        <input type="radio" name="payment" value="刷卡付款" id="credit-card">
                        刷卡付款 &nbsp; &nbsp; &nbsp;
                        <input type="radio" name="payment" value="貨到付款" id="cash">
                        貨到付款
                    </div>
                </div>

                <!-- 發票資料 -->
                <div class="invoice row">
                    <div class="tag col-md-2"><span class=required>*</span>發票資料：</div>
                    <div class="item col-md-10">
                        <input type="radio" name="invoice" value="個人發票" id="personal">
                        個人發票 &nbsp; &nbsp; &nbsp;
                        <input type="radio" name="invoice" value="公司發票" id="company">
                        公司發票
                    </div>
                </div>

                <!-- 備註 -->
                <div class="form-group message row">
                    <label for="message" class="col-md-2 col-form-label tag">備註：</label>
                    <div class="col-md-10">
                        <textarea name="remark" id="message " rows="3" placeholder="選擇公司發票者，請留下公司名稱及統一編號。"></textarea>
                    </div>
                </div>

                <!-- 按鈕 -->
                <div class="form-group row button-area">
                    <a href="/shopping-car/1" type="submit" class="btn mybtn back">返回修改</a>
                    <button type="submit" class="btn mybtn">下一步</button>
                </div>

            </form>
        </div>

    </main>
@endsection




@section('js')
    <script src="{{ asset('/js/tw-city-selector.js') }}"></script>
    <script>
        // 處理郵遞區號
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county',
            elDistrict: '.district',
            elZipcode: '.zipcode'
        });

        // 處理checkbox
        var checkbox = document.querySelector("#different");
        var readonlyInput = document.querySelectorAll(".readonly");
        var gender = document.querySelectorAll(".gender");


        checkbox.addEventListener('change', function() {
            if (!this.checked) {
                readonlyInput.forEach(element => {
                    element.removeAttribute('readonly');
                });

                gender.forEach(element => {
                    element.removeAttribute('disabled');
                });
            } else {
                readonlyInput.forEach(element => {
                    element.setAttribute('readonly', "");
                });

                gender.forEach(element => {
                    element.setAttribute('disabled', "");
                });
            }
        });
    </script>


@endsection
