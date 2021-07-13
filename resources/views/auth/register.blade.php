@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 會員註冊 Registration')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/member.css') }}">
@endsection

@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>會員註冊</h1>
            <h5>Registration</h5>
        </div>

        <div class="regi-area" >
            <form action="{{ route('register') }}" method="POST" class="container">
            @csrf
                <div class="form-group row">
                    <label id="email" type="email" class="col-md-2 col-form-label mytag">帳號：</label>

                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email格式，請盡量避免使用免費信箱。">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label mytag">密碼：</label>
                    <div class="col-md-4">
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <label for="password-confirm" class="col-md-3 col-form-label mytag">確認密碼：&nbsp;&nbsp;</label>
                    <div class="col-md-3">
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label mytag">姓名：</label>
                    <div class="col-md-4">
                        <input name="name" type="name" class="form-control" id="name">
                    </div>
                    <label for="gender" class="col-md-2 col-form-label mytag">稱謂：</label>
                    <div class="col-md-4">
                        <input type="radio" value="先生" name="gender"><span class="txt"> 先生</span>
                        &nbsp; &nbsp; &nbsp;
                        <input type="radio" value="小姐" name="gender"><span class="txt"> 小姐</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthday" class="col-md-2 col-form-label mytag">生日：</label>
                    <div class="col-md-4">
                        <input name="birthday" type="date" class="form-control" id="birthday" placeholder="西元年 / 月 / 日">
                    </div>
                    <label for="phone" class="col-md-2 col-form-label mytag">電話：</label>
                    <div class="col-md-4">
                        <input name="phone" type="phone" class="form-control" id="phone">
                    </div>
                </div>

                <div class="form-group row city-selector-set">
                    <label for="address" class="col-md-2 col-form-label mytag ">地址：</label>
                    <div class="col-md-4 col-4">
                        <select class="county form-control"></select>
                    </div>
                    <div class="col-md-3 col-4">
                        <select class="district form-control"></select>
                    </div>
                    <div class="col-md-3 col-4">
                        <input class="zipcode form-control" name="zipcode" type="text" size="3" readonly placeholder="郵遞區號">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-2 col-form-label mytag"> </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="address" name="address" placeholder="詳細地址">
                    </div>
                </div>
                <div class="form-group row button-area">
                    <a href="{{ route('login') }}" type="submit" class="btn mybtn back">返回登入</a>
                    <button type="submit" class="btn mybtn">註冊會員</button>
                </div>
            </form>
        </div>

    </main>
@endsection



@section('js')
    <script src="{{ asset('/js/tw-city-selector.js') }}"></script>
    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county',
            elDistrict: '.district',
            elZipcode: '.zipcode'
        });
    </script>
@endsection


</body>

</html>
