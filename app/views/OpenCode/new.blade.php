@extends('master')

@section('container')

	{{Form::open(array('url'=>'/'))}}
		{{Form::textarea('code', $code, array('placeholder'=>'Start Typing Here','autofocus'))}}
		<div class="btn-group nav">
		{{HTML::linkRoute('new_code','Start Over',null, array('class'=>'btn btn-danger'))}}
		{{Form::submit('Save', array('class'=>'btn btn-success'))}}
		</div>
	{{Form::close()}}
@stop

@section('scripts')

	<script>
	$('textarea').tabby();
	$('textarea').height( $(window).height() -50);
	</script>

@stop