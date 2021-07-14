@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 訂單狀態查詢 Order List')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/member.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection


@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>會員中心</h1>
            <h5>Member Center</h5>
        </div>

        <div class="link-group">
            <div class="edit">
                <h4>修改會員資料</h4>
            </div>
            <a href="{{ asset('/member/order') }}" class="order-list">
                <h4>訂單狀態查詢</h4>
            </a>

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <h4>會員登出</h4>
            </a>
        </div>

        <div class="regi-area">
            <form action="{{ asset('/member/editData') }}" method="POST" id="shipment" class="container">
                @csrf
                <div class="form-group row">
                    <label for="account" class="col-md-2 col-form-label mytag">帳號：</label>
                    <div class="col-md-10">
                        <input type="email" readonly value="{{ $data->email }}" class="form-control" id="account"
                            name='email' placeholder="Email格式，請盡量避免使用免費信箱。">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label mytag p-0">修改密碼：</label>
                    <div class="col-md-4">
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <label for="password-confirm" class="col-md-3 col-form-label mytag">確認密碼：&nbsp;&nbsp;</label>
                    <div class="col-md-3">
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label mytag">姓名：</label>
                    <div class="col-md-4">
                        <input name="name" value="{{ $data->name }}" type="name" class="form-control" id="name">
                    </div>
                    <label for="gender" class="col-md-2 col-form-label mytag">稱謂：</label>
                    <div class="col-md-4">
                        @if ($data->gender == '先生')
                            <input type="radio" checked value="先生" name="gender"><span class="txt"> 先生</span>
                            &nbsp; &nbsp; &nbsp;
                            <input type="radio" value="小姐" name="gender"><span class="txt"> 小姐</span>
                        @endif
                        @if ($data->gender == '小姐')
                            <input type="radio" checked value="先生" name="gender"><span class="txt"> 先生</span>
                            &nbsp; &nbsp; &nbsp;
                            <input type="radio" value="小姐" name="gender"><span class="txt"> 小姐</span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthday" class="col-md-2 col-form-label mytag">生日：</label>
                    <div class="col-md-4">
                        <input name="birthday" value="{{ $data->birthday }}" type="birthday" class="form-control"
                            id="birthday" placeholder="西元年 / 月 / 日">
                    </div>
                    <label for="phone" class="col-md-2 col-form-label mytag">電話：</label>
                    <div class="col-md-4">
                        <input name="phone" value="{{ $data->phone }}" type="phone" class="form-control" id="phone">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="address" class="col-md-2 col-form-label mytag">地址： </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="{{ $data->address }}" id="address" name="address"
                            placeholder="詳細地址">
                    </div>
                </div>

                <div class="form-group row button-area">
                    <button type="submit" class="btn mybtn">確認修改</button>
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

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
