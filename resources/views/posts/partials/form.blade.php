<div class="form-group">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-group">
    {!! Form::label('subject', 'subject:') !!}
    {!! Form::text('subject') !!}
</div>
<div class="form-group">
    {!! Form::label('status', 'status:') !!}
    {!! Form::checkbox('status') !!}
</div>

<div class="form-group">
    {!! Form::label('completed', 'Completed:') !!}
    {!! Form::checkbox('completed') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>