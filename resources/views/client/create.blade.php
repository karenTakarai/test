<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    @include('client.nav')

<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::open(array('url' => 'clients')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
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

    {{ Form::submit('Create new client', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>