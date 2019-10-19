@extends('layouts.shop');

@section('content')
    <!-- breadcrumbs-area-start -->
    <div class="breadcrumbs-area mb-70">
        @if (session('statusFailed'))
            <div class="alert alert-danger">
                <strong>{{ session('statusFailed') }}<strong>
            </div>
        @elseif (session('statusSuccess'))
            <div class="alert alert-success">
                <strong>{{ session('statusSuccess') }}<strong>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#" class="active">Books</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- user-login-area-start -->
    <div class="user-login-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-title text-center mb-30">
                        <h2>{{ __('BOOKS') }}</h2>
                        <p>Fill in all the following fields update book settings</p>
                    </div>
                </div>
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="billing-fields">
                                <div class="single-register">
                                    <label><strong>{{ __('Book ID') }}</strong></label>
                                    <input type="text" name="id" value="{{ $product->id }}" disabled style="background-color: #ebebe4; font-weight: bold; font-size: 18px">
                                </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">
                                        <label>{{ __('Book Title') }}<span>*</span></label>
                                        <input type="text" class="@error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $product->title }}" required autocomplete="title" autofocus>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">
                                        <label>{{ __('Author') }}<span>*</span></label>
                                        <input type="text" class="@error('author') is-invalid @enderror" name="author" value="{{ $product->author }}" required autocomplete="author">
                                        @error('author')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="single-register">
                                <label>{{ __('Publisher') }}<span>*</span></label>
                                <input type="text" class="@error('publisher') is-invalid @enderror" name="publisher" value="{{ $product->publisher }}" required autocomplete="publisher">
                                @error('publisher')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">
                                        <label>{{ __('Publish Date') }}<span>*</span></label>
                                        <input type="text" id="datepicker" class="@error('publish_date') is-invalid @enderror" name="publish_date" value="{{ $product->publish_date }}" required autocomplete="publish_date">
                                        @error('publish_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="single-register">
                                    <label>{{ __('Language') }}<span>*</span></label>
                                    <select class="chosen-select" tabindex="1" style="width:96%;" data-placeholder="Default Sorting" class="@error('language') is-invalid @enderror" name="language"required autocomplete="language">
                                        <option value="English" {{ $product->language == 'English' ? 'selected' : '' }}>English</option>
                                        <option value="Vietnamese" {{ $product->language == 'Vietnamese' ? 'selected' : '' }}>Vietnamese</option>
                                    </select>
                                    @error('language')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="single-register">
                                <label>{{ __('Price') }}<span>*</span></label>
                                <input type="text" id="currency" placeholder="VND" class="@error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="single-register text-center">
                            <button type="submit">{{ __('UPDATE BOOK') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- user-login-area-end -->
    <style type="text/css">
        .invalid-feedback > strong {
            color: red;
        }
    </style>
@endsection