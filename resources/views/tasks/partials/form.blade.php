<!--Task Title -->
<div class="form-group">
    {!! Form::label('title' , 'Title:') !!}
    {!! Form::text('title', null , ['class' => 'form-control']) !!}
</div>
<!-- Add the content to the task -->
<div class="form-group">
    {!! Form::label('body' , 'Content:') !!}
    {!! Form::textarea('body', null , ['class' => 'form-control', 'id' => 'editor1']) !!}
</div>
<!--Priority Level -->
<div class="form-group">
    <label for="priority">Priority:</label>
    <select id="priority" name="priority" class="form-control">
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option value="Low">Low</option>
        <option value="Not Applicable">Not Applicable</option>
    </select>
</div>
<!--Completed -->
<div class="form-group">
    <label for="completed">Completed:</label>
    <select id="completed" name="completed" class="form-control">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</div>
<!--Add the time and date -->
<div class="form-group">
    {!! Form::label('published_at' , 'Publish On:') !!}
    {!! Form::input('date' , 'published_at', date('Y-m-d') , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>