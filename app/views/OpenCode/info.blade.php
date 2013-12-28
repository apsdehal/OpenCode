@extends('master')

@section('styles')
 	{{ HTML::style('assets/code-prettify/prettify.css');}}
@stop
@section('container')
    <pre class="prettyprint linenums"><p class="heading">OpenCode online editor</p>
    <?php echo htmlentities('An online code editor created just for the purpose of sharing code.
    Just type in, grab the url and share in whichever way you want.
    You can also fork an existing one, and start using it.

    Examples:
    After saving codes will look like these:

    <?php

    echo \'Hi there\';

    ?>')
     ?>



    Copyright {{HTML::mailto('apsdehal@gmail.com','Amanpreet Singh');}} 2013. All rights reserved.
    Creator is henceforth not responsible any kind of results related to use of the software by others.
     </pre>
    <div class="btn-group nav">
    {{ HTML::linkRoute('new_code', 'New', null, array('class'=>'btn btn-success'))}}
    </div>
@stop

@section('scripts')
{{HTML::script('assets/code-prettify/prettify.js')}}
<script>
prettyPrint()
</script
@endsection