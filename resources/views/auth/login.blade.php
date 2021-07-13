@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 會員登入 Login')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection


@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>會員登入</h1>
            <h5>Login</h5>
        </div>

        <div class="login-area">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    @error('email')
                        <span class="row" role="alert">
                            <strong>帳號密碼錯誤 </strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">

                    <label for="email" class="col-sm-3 col-form-labe mytag">帳號：</label>
                    <div class="col-sm-9">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label mytag">密碼：</label>
                    <div class="col-sm-9">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <a href="{{ route('register') }}">
                    <h4 class="regi">註冊會員</h4>
                </a>

                <div class="form-group row button-area">
                    <button type="submit" class="btn mybtn">送 出</button>
                </div>

            </form>
        </div>


    </main>
@endsection
