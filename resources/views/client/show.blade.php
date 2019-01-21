<!DOCTYPE html>
<html>
<head>
    <title>clients</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

@include('client.nav')

<h1>Showing {{ $client->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $client->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $client->email }}<br>
            <strong>Ocupacion:</strong> {{ $client->occupation }}<br>
        </p>
    </div>

</div>
</body>
</html>