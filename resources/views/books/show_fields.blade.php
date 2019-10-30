<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $books->title !!}</p>
</div>

<!-- Author Name Field -->
<div class="form-group">
    {!! Form::label('author_name', 'Author Name:') !!}
    <p>{!! $books->author_name !!}</p>
</div>

<!-- Publish Year Field -->
<div class="form-group">
    {!! Form::label('publish_year', 'Publish Year:') !!}
    <p>{!! $books->publish_year !!}</p>
</div>

<!-- Publisher Field -->
<div class="form-group">
    {!! Form::label('publisher', 'Publisher:') !!}
    <p>{!! $books->publisher !!}</p>
</div>

