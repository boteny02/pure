<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_name', 'Author Name:') !!}
    {!! Form::text('author_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish_year', 'Publish Year:') !!}
    {!! Form::text('publish_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Publisher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publisher', 'Publisher:') !!}
    {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('books.index') !!}" class="btn btn-default">Cancel</a>
</div>
