<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Author Name</th>
        <th>Publish Year</th>
        <th>Publisher</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $books)
            <tr>
                <td>{!! $books->title !!}</td>
            <td>{!! $books->author_name !!}</td>
            <td>{!! $books->publish_year !!}</td>
            <td>{!! $books->publisher !!}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('books.show', [$books->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('books.edit', [$books->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
