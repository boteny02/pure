@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Books
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'books.store']) !!}

                        @include('books.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
