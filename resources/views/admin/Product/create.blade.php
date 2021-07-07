@extends('layouts.template')


@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/product') }}">產品首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增產品</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>新增產品</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ asset('admin/product/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">產品名稱</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('name') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo" class="col-md-3 col-form-label text-md-right">產品照片</label>
                                <div class="col-md-6">
                                    <input id="photo" type="file" multiple class="form-control" name="photo">
                                </div>
                            </div>
                            {{-- todo 關聯式資料庫 --}}
                            <div class="form-group row">
                                <label for="product_type_id" class="col-md-3 col-form-label text-md-right">產品種類</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="product_type_id" name='product_type_id'>
                                        <option value= 1>巧克力脆片</option>
                                        {{-- @foreach ($newsType as $item)
                                            <option value= {{ $item->id }}>{{ $item->type_name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-3 col-form-label text-md-right">產品價格</label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price"
                                        value="{{ old('price') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="unit" class="col-md-3 col-form-label text-md-right">產品內容物單位(1片)</label>

                                <div class="col-md-6">
                                    <input id="unit" type="text" class="form-control" name="unit"
                                        value="{{ old('unit') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ingredient" class="col-md-3 col-form-label text-md-right">產品成分</label>
                                <div class="col-md-6">
                                    <input id="ingredient" type="text" class="form-control" name="ingredient"
                                        value="{{ old('ingredient') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="weight" class="col-md-3 col-form-label text-md-right">產品重量</label>
                                <div class="col-md-6">
                                    <input id="weight" type="text" class="form-control" name="weight"
                                        value="{{ old('weight') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="EXP" class="col-md-3 col-form-label text-md-right">產品保存期限</label>
                                <div class="col-md-6">
                                    <input id="EXP" type="text" class="form-control" name="EXP"
                                        value="{{ old('EXP') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="temp" class="col-md-3 col-form-label text-md-right">產品適存溫度</label>
                                <div class="col-md-6">
                                    <input id="temp" type="text" class="form-control" name="temp"
                                        value="{{ old('temp') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sort" class="col-md-3 col-form-label text-md-right">產品推薦權重</label>
                                <div class="col-md-6">
                                    <input id="sort" type="number" class="form-control" name="sort"
                                        value="{{ old('sort') }}" >
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="remark"
                                    class="col-md-3 col-form-label text-md-right">備註</label>
                                <div class="col-md-6">
                                    <textarea name="remark" id="remark" class="form-control"></textarea>
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
