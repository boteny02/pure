<div class="table-responsive">
    <table class="table" id="videos-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Murl</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videos as $videos)
            <tr>
                <td>{!! $videos->title !!}</td>
            <td>{!! $videos->murl !!}</td>
                <td>
                    {!! Form::open(['route' => ['videos.destroy', $videos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('videos.show', [$videos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('videos.edit', [$videos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
