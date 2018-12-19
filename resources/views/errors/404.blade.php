<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Mixen: Boosting Brands">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error 404 | RCF Group</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/errors.css') }}">
</head>
<body>
	<div>
		<h1>No se encontró la página</h1>
		<sub>Serás redirigido</sub>
	</div>
	<div style="background-image: url('{{ asset('assets/images/cabecera/fondo.jpg') }}');"></div>
	<script>
		function redireccionarPagina() {
			window.location.href = "{{ url('/') }}";
		}

		setTimeout("redireccionarPagina()", 5000);
	</script>
</body>
</html>