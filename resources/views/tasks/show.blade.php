@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr>
				<h1>{{ $tasks->title }}</h1>
				<hr>
				{{ strip_tags($tasks->body)}}
				<hr>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Priority</td>
							<td>Completed</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="{{ $tasks->priority }}">{{ $tasks->priority }}</td>
							<td class="text-center">{{ $tasks->completed}}</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
@endsection