@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            propositions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'patch' , 'files'=>true]) !!}

                        @include('projects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection