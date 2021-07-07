@extends('layouts.template')




@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/user') }}">會員首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增會員</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>新增會員</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ asset('admin/user/store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">會員姓名</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">會員信箱</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-3 col-form-label text-md-right">會員性別</label>

                                <div class="col-md-6">
                                    <input id="gender" type="text" class="form-control" name="gender"
                                        value="{{ old('gender') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthday" class="col-md-3 col-form-label text-md-right">會員生日</label>
                                <div class="col-md-6">
                                    <input id="birthday" type="date" class="form-control" name="birthday"
                                        value="{{ old('birthday') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact" class="col-md-3 col-form-label text-md-right">聯絡資訊</label>
                                <div class="col-md-6">
                                    <input id="contact" type="phone" class="form-control" name="contact"
                                        value="{{ old('contact') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="EXP" class="col-md-3 col-form-label text-md-right">地址資訊</label>
                                <div class="col-md-6">
                                    <div class="row p-0 city-selector-set">
                                        <div class="col-4 p-0">
                                            <!-- 縣市選單 -->
                                            <select class="county form-control"></select>
                                        </div>
                                        <div class="col-4 p-0">
                                            <!-- 區域選單 -->
                                            <select class="district form-control"></select>
                                        </div>
                                        <div class="col-4 p-0">
                                            <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                                            <input class="zipcode form-control" name="zipcode" type="text" size="3" readonly
                                                placeholder="郵遞區號">
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <input id="zone" name="zone" type="text" class="form-control"
                                            placeholder="地址">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('新增') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tw-city-selector.js') }}"></script>

    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
    </script>
@endsection
