<div class="table-responsive">
    <table class="table" id="journals-table">
        <thead>
            <tr>
                <th>Author Name</th>
        <th>Publish Year</th>
        <th>Abstract</th>
        <th>Keyword</th>
        <th>Publisher</th>
        <th>Volume</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($journals as $journals)
            <tr>
                <td>{!! $journals->author_name !!}</td>
            <td>{!! $journals->publish_year !!}</td>
            <td>{!! $journals->abstract !!}</td>
            <td>{!! $journals->keyword !!}</td>
            <td>{!! $journals->publisher !!}</td>
            <td>{!! $journals->volume !!}</td>
                <td>
                    {!! Form::open(['route' => ['journals.destroy', $journals->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('journals.show', [$journals->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('journals.edit', [$journals->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
