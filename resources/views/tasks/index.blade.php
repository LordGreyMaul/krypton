@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<hr>
			<h1>Task List</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Title</td>
						<td>Task</td>
						<td>Priority</td>
						<td>Completed</td>
						<td>Edit | View</td>
						<td>Delete</td>
					</tr>
				</thead>
				<tbody>
					@foreach($tasks as $task)
					<tr>
					<td>{{ $task->title }}</td>
					<td> {{ strip_tags($task->body)}}</td>
					<td class="{{ $task->priority }} text-center">{{ $task->priority }}</td>
					<td class="text-center">{{ $task->completed}}</td>
					<td>
						<a class="btn btn-primary" href="tasks/{{$task->id}}/edit"><i class="fa fa-pencil"></i> Edit</a>
						<a class="btn btn-secondary" href="tasks/{{$task->id}}"><i class="fa fa-eye"></i> View</a>
					</td>
					<td>
					{!! Form::open([ 'method'  => 'delete', 'route' => [ 'tasks.destroy', $task->id ] ]) !!}
						<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
					{!! Form::close() !!}
					</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection