<!doctype html>
<html lang="es">
<head>

	<meta charset="utf-8"/>

	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<style type="text/css">

	</style>

	<script  type="text/javascript" src="js/javascript.js"></script>

	<title>Evaluacion MF0492_3</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<h2>Evaluacio</h2>
			<form onsubmit="return validar_form();" action="action/action.php" method="POST">
				<label>Item: </label>
				<input type="text" name="nombre" id="nombre" onblur="validar_item()">
				<p id="mensaje_item"></p>
				<label>stock: </label>
				<input type="text" name="stock" id="stock" onblur="validar_stock()">
				<p id="mensaje_stock"></p>
				<input type="submit">
			</form>
		</article>
	</section>
	<section>
		<article>
			<h2>Evaluacio</h2>
			<form action="action/action.php" method="POST">
				<label>id: </label>
				<input type="text" name="numero" id="numero">
				<label>item: </label>
				<input type="text" name="texto" id="comida">
				<label>stock: </label>
				<input type="number" name="numero" id="cantidad">
				<label>eliminar: </label>
				<input type="text" name="texto" id="eliminar">
			</form>
		</article>
	</section>
	<footer></footer>
</body>
</html>
