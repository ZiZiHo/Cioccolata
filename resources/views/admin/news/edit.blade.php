@extends('layouts.template')


@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/contactus') }}">最新消息管理首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">編輯最新消息</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>編輯最新消息</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ asset('admin/news/update')}}/{{ $record->id  }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-md-right">既有圖片</label>
                                @if ($record->media)
                                    <div class="col-md-6">
                                        <img class="col-md-3" src="{{ $record->media }}" alt="">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="media" class="col-md-3 col-form-label text-md-right">最新訊息圖片或影片</label>

                                <div class="col-md-6">
                                    <input id="media" type="file" multiple class="form-control" name="media">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title"
                                    class="col-md-3 col-form-label text-md-right">{{ __('最新訊息主旨') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                        value="{{ $record->title }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="summary"
                                    class="col-md-3 col-form-label text-md-right">{{ __('訊息概要') }}</label>
                                <div class="col-md-6">
                                    <input id="summary" type="text" class="form-control" name="summary"
                                        value="{{ $record->summary }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="news_type_id" class="col-md-3 col-form-label text-md-right">訊息種類</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="news_type_id" name='news_type_id'>
                                        @foreach ($newsType as $item)
                                            @if ($item->id == $record->news_type_id)
                                                <option selected value={{ $item->id }}>{{ $item->type_name }}</option>
                                            @else
                                                <option value={{ $item->id }}>{{ $item->type_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-3 col-form-label text-md-right">{{ __('發布日期') }}</label>
                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date"
                                        value="{{ $record->date }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="readmore"
                                    class="col-md-3 col-form-label text-md-right">{{ __('訊息知道更多連結') }}</label>
                                <div class="col-md-6">
                                    <input id="readmore" type="readmore" class="form-control" name="readmore"
                                        value="{{ $record->readmore }}">
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('確認編輯') }}
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
