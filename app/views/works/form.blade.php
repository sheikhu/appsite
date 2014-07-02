
{{ Form::model($work, ['method' => $method, 'route' => $route, 'files' => 'true']) }}


<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="form-group @if($errors->has('title')) has-error @endif">
        {{ Form::label('title', 'Titre') }}
        {{ Form::text('title', null, ['class' => 'form-control'] )}}
        <p class="help-block">{{$errors->first('title')}}</p>
    </div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="form-group @if($errors->has('client')) has-error @endif">
        {{ Form::label('client', 'Client') }}
        {{ Form::text('client', null, ['class' => 'form-control'] )}}
        <p class="help-block">{{$errors->first('client')}}</p>
    </div>
    
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="form-group @if($errors->has('date_project')) has-error @endif">
        {{ Form::label('date_project', 'Date project') }}
        {{ Form::text('date_project', null, ['class' => 'form-control datepicker'] )}}
        <p class="help-block">{{$errors->first('date_project')}}</p>

    </div>
</div>
</div>
<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control'] )}}
</div>




<div class="form-group">
    {{ Form::label('service', 'Service') }}
    {{ Form::text('service', null, ['class' => 'form-control'] )}}
</div>

<div class="form-group">
    {{ Form::label('image', 'Image') }}
    {{ Form::file('image', null, ['class' => 'form-control'] )}}
</div>

<div class="form-group">
    {{ Form::submit('Submit',  ['class' => 'btn btn-success btn-block'])}}
</div>
{{ Form::close() }}
