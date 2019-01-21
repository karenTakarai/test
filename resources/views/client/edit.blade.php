<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

@include('client.nav')

<h1>Edit {{ $client->name }}</h1>


{{ Form::model($client, array('route' => array('clients.update', $client->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('occupation', 'Ocupacion') }}
        {{ Form::text('occupation', Input::old('occupation'), array('class' => 'form-control')) }}
    </div>
    <div>
        {{ Form::label('gender', 'Femenino') }}
        {{ Form::radio('gender', 0) }}
    </div>
    <div>
        {{ Form::label('gender', 'Masculino') }}
        {{ Form::radio('gender', 1) }}
    </div>

    {{ Form::submit('Edit the client', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>