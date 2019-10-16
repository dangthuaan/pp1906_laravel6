@extends('layouts.shop')

@section('content')
@if ($message = Session::get('success'))
	<div class="alert alert-success">
	   <strong>{{ $message }}</strong>
	</div>
	<br>
	<br>
@endif

<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
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
					<p>Fill in all the following fields add book settings</p>
				</div>
			</div>
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
				<form method="POST" action="{{ route('products.store') }}">
					@csrf
					<div class="billing-fields">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="single-register">
										<label>{{ __('Book Title') }}<span>*</span></label>
										<input type="text" class="@error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
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
										<input type="text" class="@error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>
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
								<input type="text" class="@error('publisher') is-invalid @enderror" name="publisher" value="{{ old('publisher') }}" required autocomplete="publisher" autofocus>
								@error('publisher')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="single-register">
										<label>{{ __('Publisher Date') }}<span>*</span></label>
										<input type="text" id="datepicker" class="@error('publisher_date') is-invalid @enderror" name="publisher_date" value="{{ old('publisher_date') }}" required autocomplete="publisher_date" autofocus>
										@error('publisher_date')
                                    	<span class="invalid-feedback" role="alert">
                                        	<strong>{{ $message }}</strong>
                                    	</span>
                                		@enderror
								</div>
							</div>
							<div class="single-register">
								<label>{{ __('Language') }}<span>*</span></label>
								<select class="chosen-select" tabindex="1" style="width:96%;" data-placeholder="Default Sorting" class="@error('language') is-invalid @enderror" name="language" value="{{ old('language') }}" required autocomplete="language" autofocus>
									<option value="English">English</option>
									<option value="Vietnamese">Vietnamese</option>
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
								<input type="text" placeholder="VND" class="@error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
								@error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
						</div>
					</div>
					<div class="single-register text-center">
						<button type="submit">{{ __('ADD BOOK') }}</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- user-login-area-end -->

@endsection
