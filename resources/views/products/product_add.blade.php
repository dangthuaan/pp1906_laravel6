@extends('layouts.shop')

@section('content')

<h1>ADD BOOK:</h1>

<form method="POST" action="/shop/store/store-product">
	@csrf
	
	Book title: <input type="text" name="book_title">
<!-- 	Book title: <input type="text" name="book_title">
	Book title: <input type="text" name="book_title">
	Book title: <input type="text" name="book_title"> -->
	
	<input type="submit" name="" value="submit" class="@error('book_title') is-invalid @enderror">
	<br>
	@error('book_title')
		<br>
	    <div class="alert alert-danger">
	    	<strong>{{ $message }}</strong>
	    </div>
	    <br>
	@enderror
	<br>

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
		   <strong>{{ $message }}</strong>
		</div>
		<br>
		<br>
	@endif

</form>

@endsection

