@extends('layouts.template')


@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/contactus') }}">聯繫我們管理首頁</a></li>
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
                        <form method="POST" action="{{ asset('admin/contactus/store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-3 col-form-label text-md-right">{{ __('主旨') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                        value="{{$record->title}}" readonly autocomplete="title" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('姓名') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $record->name }}" readonly autocomplete="title" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('信箱') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ $record->email }}" readonly autocomplete="title" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('電話') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="phone" class="form-control" name="phone"
                                        value="{{ $record->phone }}" readonly autocomplete="title" autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="content"
                                    class="col-md-3 col-form-label text-md-right">{{ __('內容') }}</label>
                                <div class="col-md-6">
                                    <textarea name="content" id="content" readonly class="form-control">{{ $record->content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('確認') }}
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
