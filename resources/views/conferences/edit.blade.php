@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Conferences
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($conferences, ['route' => ['conferences.update', $conferences->id], 'method' => 'patch']) !!}

                        @include('conferences.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection