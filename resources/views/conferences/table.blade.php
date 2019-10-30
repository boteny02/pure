<div class="table-responsive">
    <table class="table" id="conferences-table">
        <thead>
            <tr>
                <th>Article Title</th>
        <th>Author Name</th>
        <th>Publish Year</th>
        <th>Abstract</th>
        <th>Keyword</th>
        <th>Location</th>
        <th>Organiser</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($conferences as $conferences)
            <tr>
                <td>{!! $conferences->article_title !!}</td>
            <td>{!! $conferences->author_name !!}</td>
            <td>{!! $conferences->publish_year !!}</td>
            <td>{!! $conferences->abstract !!}</td>
            <td>{!! $conferences->keyword !!}</td>
            <td>{!! $conferences->location !!}</td>
            <td>{!! $conferences->organiser !!}</td>
                <td>
                    {!! Form::open(['route' => ['conferences.destroy', $conferences->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('conferences.show', [$conferences->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('conferences.edit', [$conferences->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
