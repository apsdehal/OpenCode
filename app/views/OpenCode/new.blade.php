@extends('master')

@section('container')

	{{Form::open(array('url'=>'/'))}}
		{{Form::textarea('code')}}
		{{HTML::linkRoute('new_code','Start Over')}}
		{{Form::submit('Save')}}
	{{Form::close()}}

@stop