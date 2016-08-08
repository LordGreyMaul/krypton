@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-8 col-md-offset-2">
			<h1>Edit: {!! $tasks->title !!}</h1>
			<hr>
			{!! Form::model($tasks, ['method' => 'PATCH', 'url' => 'tasks/' . $tasks->id]) !!}
				@include ('tasks.partials.form', ['submitButtonText' => 'Update task'])
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