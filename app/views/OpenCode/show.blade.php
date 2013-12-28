@extends('master')

@section('styles')
 	{{ HTML::style('assets/code-prettify/prettify.css');}}
@stop
@section('container')
    <pre class="prettyprint linenums">{{htmlentities($code)}}</pre>
    <div class="btn-group nav">
    {{ HTML::linkRoute('fork_code', 'Fork', $id, array('class'=>'btn btn-warning'))}}
    {{ HTML::linkRoute('new_code', 'New', null, array('class'=>'btn btn-success'))}}
    </div>
@stop

@section('scripts')
{{HTML::script('assets/code-prettify/prettify.js')}}
<script>
prettyPrint()
</script
@endsection