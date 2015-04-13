<div class="form-group">
    {!! Form::open(array('files' => true)) !!}
    {!! Form::label('file','Upload File') !!}
    {!! Form::file('file') !!}
    <br />
    {!! Form::submit('save') !!}
    {!! Form::close() !!}
</div>