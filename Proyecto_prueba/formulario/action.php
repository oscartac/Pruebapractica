<!doctype html>
<html lang="es">
<head>

	<meta charset="utf-8"/>

	<title>Formulari per validar</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<h2>validacion js</h2>
			<form onsubmit="return valida_form();">

				<div class="question">
					<input type="text" name="item" id="item" placeholder="Debes escribir un nombre" onblur="valida_item();"><br>
					<div class="error" id="message_item"></div>
				</div>

				<div class="question">
					<input type="number" name="stock" id="stock" placeholder="Debes escribir una cantidad" onblur="valida_stock();"><br>
					<div class="error" id="message_stock"></div>
				</div>

				<input type="submit" value="Enviar" >
			</form>
		</article>
	</section>
	<footer></footer>
</body>
</html>
