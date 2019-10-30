<div class="table-responsive">
    <table class="table" id="thesisprojects-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Matric</th>
        <th>Candidate Name</th>
        <th>Grad Year</th>
        <th>Abstract</th>
        <th>Keyword</th>
        <th>Supervisor</th>
        <th>Dept</th>
        <th>Faculty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($thesisprojects as $thesisprojects)
            <tr>
                <td>{!! $thesisprojects->title !!}</td>
            <td>{!! $thesisprojects->matric !!}</td>
            <td>{!! $thesisprojects->candidate_name !!}</td>
            <td>{!! $thesisprojects->grad_year !!}</td>
            <td>{!! $thesisprojects->abstract !!}</td>
            <td>{!! $thesisprojects->keyword !!}</td>
            <td>{!! $thesisprojects->supervisor !!}</td>
            <td>{!! $thesisprojects->dept !!}</td>
            <td>{!! $thesisprojects->faculty !!}</td>
                <td>
                    {!! Form::open(['route' => ['thesisprojects.destroy', $thesisprojects->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('thesisprojects.show', [$thesisprojects->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('thesisprojects.edit', [$thesisprojects->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
