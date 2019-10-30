<!-- Author Name Field -->
<div class="form-group">
    {!! Form::label('author_name', 'Author Name:') !!}
    <p>{!! $journals->author_name !!}</p>
</div>

<!-- Publish Year Field -->
<div class="form-group">
    {!! Form::label('publish_year', 'Publish Year:') !!}
    <p>{!! $journals->publish_year !!}</p>
</div>

<!-- Abstract Field -->
<div class="form-group">
    {!! Form::label('abstract', 'Abstract:') !!}
    <p>{!! $journals->abstract !!}</p>
</div>

<!-- Keyword Field -->
<div class="form-group">
    {!! Form::label('keyword', 'Keyword:') !!}
    <p>{!! $journals->keyword !!}</p>
</div>

<!-- Publisher Field -->
<div class="form-group">
    {!! Form::label('publisher', 'Publisher:') !!}
    <p>{!! $journals->publisher !!}</p>
</div>

<!-- Volume Field -->
<div class="form-group">
    {!! Form::label('volume', 'Volume:') !!}
    <p>{!! $journals->volume !!}</p>
</div>

