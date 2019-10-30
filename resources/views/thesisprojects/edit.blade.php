@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Thesisprojects
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($thesisprojects, ['route' => ['thesisprojects.update', $thesisprojects->id], 'method' => 'patch']) !!}

                        @include('thesisprojects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection