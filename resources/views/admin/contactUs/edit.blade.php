@extends('layouts.template')


@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/contactus') }}">聯繫我們管理首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">檢視聯繫訊息</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>檢視聯繫訊息</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ asset('admin/contactus/update') }}/{{ $record->id }}" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('姓名') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $record->name }}" readonly >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('信箱') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ $record->email }}" readonly >
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
