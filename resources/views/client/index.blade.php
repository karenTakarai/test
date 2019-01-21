<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    @include('client.nav')

<h1>All the Nerds</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Ocupacion</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->occupation }}</td>

            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('clients/' . $value->id) }}">Detalles</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('clients/' . $value->id . '/edit') }}">Editar</a>

                {{ Form::open(array('url' => 'clients/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>