<!DOCTYPE html>
<html>
<head>
	<title>OpenCode</title>
	<style>
	</style>
	{{HTML::style('assets/css/bootstrap.css')}}
	{{HTML::style('assets/css/main.css')}}
	@yield('styles')
</head>
<body>
<div class="container">
@yield('container')
</div>


{{HTML::script('assets/js/jquery.js');}}
{{HTML::script('assets/js/tabby.js');}}

@yield('scripts')

</body>
</html>