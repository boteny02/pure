<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Matric Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matric', 'Matric:') !!}
    {!! Form::text('matric', null, ['class' => 'form-control']) !!}
</div>

<!-- Candidate Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('candidate_name', 'Candidate Name:') !!}
    {!! Form::text('candidate_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Grad Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grad_year', 'Grad Year:') !!}
    {!! Form::text('grad_year', null, ['class' => 'form-control']) !!}
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

<!-- Supervisor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor', 'Supervisor:') !!}
    {!! Form::text('supervisor', null, ['class' => 'form-control']) !!}
</div>

<!-- Dept Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dept', 'Dept:') !!}
    {!! Form::text('dept', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty', 'Faculty:') !!}
    {!! Form::text('faculty', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('thesisprojects.index') !!}" class="btn btn-default">Cancel</a>
</div>
