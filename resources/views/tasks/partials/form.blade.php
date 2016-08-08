<!-- Set Title for Task -->
<div class="form-group">
	{!! Form::label('title' , 'Title:') !!}
	{!! Form::text('title', null , ['class' => 'form-control']) !!}
</div>
<!-- Add the content for the task  -->
<div class="form-group">
	{!! Form::label('body' , 'Content:') !!}
	{!! Form::textarea('body', null , ['class' => 'form-control']) !!}
</div>
<!-- Set Priority level -->
<div class="form-group">
	<label for="priority">Priority:</label>
	<select id="priority" name="priority" class="form-control">
		<option value="High">High</option>
		<option value="Medium">Medium</option>
		<option value="Low">Low</option>
		<option value="Not Applicable">Not Applicable</option>
	</select>
</div>
<!-- set to complete -->
<div class="form-group">
	<label for="complete">Complete:</label>
	<select id="complete" name="complete" class="form-control">
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	</select>
</div>
<!--Add the time and date -->
<div class="form-group">
	{!! Form::label('published_at' , 'Publish On:') !!}
	{!! Form::input('date' , 'published_at', date('Y-m-d') , ['class' => 'form-control']) !!}
</div>
<!-- Submit button to add article -->
<div class="form-group">
	
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	<hr>
</div>
<script>
CKEDITOR.replace( 'body' );
</script>