@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Videos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($videos, ['route' => ['videos.update', $videos->id], 'method' => 'patch']) !!}

                        @include('videos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection