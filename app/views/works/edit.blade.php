@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">    
        <h1>Edit a work</h1>
        @include('works.form', ['method' => 'PUT', 'route' => ['works.update', $work->id] ])
    </div>
</div>
@stop