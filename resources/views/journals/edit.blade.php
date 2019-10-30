@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Journals
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($journals, ['route' => ['journals.update', $journals->id], 'method' => 'patch']) !!}

                        @include('journals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection