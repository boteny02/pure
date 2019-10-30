<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Murl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('murl', 'Murl:') !!}
    {!! Form::text('murl', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('videos.index') !!}" class="btn btn-default">Cancel</a>
</div>
