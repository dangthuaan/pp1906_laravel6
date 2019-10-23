<!DOCTYPE html>
<html class="no-js" lang="en">
	@include('layouts.includes.header')

	<body>
		@yield('content')
		@yield('css')

		@include('layouts.includes.footer')

		@include('layouts.includes.script')

	</body>
</html>
