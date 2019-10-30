<!-- Article Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article_title', 'Article Title:') !!}
    {!! Form::text('article_title', null, ['class' => 'form-control']) !!}
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

<!-- Abstract Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abstract', 'Abstract:') !!}
    {!! Form::text('abstract', null, ['class' => 'form-control']) !!}
</div>

<!-- Keyword Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keyword', 'Keyword:') !!}
    {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Organiser Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organiser', 'Organiser:') !!}
    {!! Form::text('organiser', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('conferences.index') !!}" class="btn btn-default">Cancel</a>
</div>
