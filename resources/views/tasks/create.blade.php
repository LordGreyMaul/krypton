@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create a Task</h1>
			<hr>
			{!! Form::open(['url' => 'tasks'] ) !!}
			@include ('tasks.partials.form', ['submitButtonText' => 'Add Task'])
			{!! Form::close() !!}
			@include ('errors.list')
		</div>
	</div>
</div>
<script>
// This is the script for the WYSIWIG Editor
CKEDITOR.replace( 'editor1' );
</script>
@endsection