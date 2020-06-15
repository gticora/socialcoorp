<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de usuarios - Socialcorp</title>
</head>
<body>
	<h1>{{$title}}</h1>
	<hr>
	@if (! empty($users))
		<ul>
		@foreach ($users as $user)
			<li>{{ $user }}</li> <!-- halper e() para protejer de inyeccion codigo -->
		@endforeach
		</ul>
	@else
		<p> No usuarios registrados</p>
	@endif
</body>
</html>