@extends('master')

@section('container')

	{{Form::open(array('url'=>'/'))}}
		{{Form::textarea('code', $code, array('placeholder'=>$placeholder,'autofocus'))}}
		<div class="btn-group nav">
		{{Form::submit('Save', array('class'=>'btn btn-success'))}}
		{{HTML::linkRoute('show_info', 'What\'s this?', null, array('class'=>'btn btn-warning'))}}
		{{HTML::linkRoute('new_code','Start Over',null, array('class'=>'btn btn-danger'))}}
		</div>
	{{Form::close()}}
@stop

@section('scripts')

	<script>
	$('textarea').tabby();
	$('textarea').height( $(window).height() -50);
	</script>

@stop