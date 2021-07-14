@extends('layouts.template')


@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/news') }}">最新消息管理首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增最新消息</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>新增最新消息</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ asset('admin/news/store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="media" class="col-md-3 col-form-label text-md-right">最新訊息圖片或影片</label>
                                <div class="col-md-6">
                                    <input id="media" type="file" multiple class="form-control" name="media">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-md-3 col-form-label text-md-right">{{ __('最新訊息主旨') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                        value="{{ old('title') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="summary" class="col-md-3 col-form-label text-md-right">{{ __('訊息概要') }}</label>
                                <div class="col-md-6">
                                    <input id="summary" type="text" class="form-control" name="summary"
                                        value="{{ old('summary') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="news_type_id" class="col-md-3 col-form-label text-md-right">訊息種類</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="news_type_id" name='news_type_id'>
                                        @foreach ($newsType as $item)
                                            <option value= {{ $item->id }}>{{ $item->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-3 col-form-label text-md-right">{{ __('發布日期') }}</label>
                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date"
                                        value="{{ old('date') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="readmore" class="col-md-3 col-form-label text-md-right">{{ __('訊息知道更多連結') }}</label>
                                <div class="col-md-6">
                                    <input id="readmore" type="readmore" class="form-control" name="readmore"
                                        value="{{ old('readmore') }}" >
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
