<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>404 Página no encontrada</title>

	<style>
		div.logo {
			height: 200px;
			width: 155px;
			display: inline-block;
			opacity: 0.08;
			position: absolute;
			top: 2rem;
			left: 50%;
			margin-left: -73px;
		}

		body {
			height: 100%;
			background: #fafafa;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: #777;
			font-weight: 300;
		}

		h1 {
			font-weight: lighter;
			letter-spacing: 0.8;
			font-size: 3rem;
			margin-top: 0;
			margin-bottom: 0;
			color: #222;
		}

		.wrap {
			max-width: 1024px;
			margin: 5rem auto;
			padding: 2rem;
			background: #fff;
			text-align: center;
			border: 1px solid #efefef;
			border-radius: 0.5rem;
			position: relative;
		}

		pre {
			white-space: normal;
			margin-top: 1.5rem;
		}

		code {
			background: #fafafa;
			border: 1px solid #efefef;
			padding: 0.5rem 1rem;
			border-radius: 5px;
			display: block;
		}

		p {
			margin-top: 1.5rem;
		}

		.footer {
			margin-top: 2rem;
			border-top: 1px solid #efefef;
			padding: 1em 2em 0 2em;
			font-size: 85%;
			color: #999;
		}

		a:active,
		a:link,
		a:visited {
			color: #5BAFDE;
		}

		.text-center {
			text-align: center !important;
		}

		.mt-4,
		.my-4 {
			margin-top: 12rem !important;
		}

		.btn {
			display: inline-block;
			font-weight: 400;
			color: #212529;
			text-align: center;
			vertical-align: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: transparent;
			border: 1px solid transparent;
			padding: 0.375rem 0.75rem;
			font-size: 1rem;
			line-height: 1.5;
			border-radius: 0.25rem;
			transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}

		.btn-outline-danger {
			color: black;
			border-color: #5BAFDE;
		}

		.btn-outline-danger:hover {
			color: #fff;
			background-color: #244B61;
			border-color: #5BAFDE;
		}
	</style>
</head>

<body>
	<!-- <div class="wrap">
		<h1>404 - Archivo no encontrado</h1>

		<p>
			<?php if (!empty($message) && $message !== '(null)') : ?>
				<?= nl2br(esc($message)) ?>
			<?php else : ?>
				¡Lo siento! Parece que no puede encontrar la página que estaba buscando.
			<?php endif ?>
		</p> -->
	<!-- <a class="btn" href="<?php echo base_url() ?>"> Volver al sitio</a> -->
	<!-- </div> -->
	<div class="col-md-12 error-page text-center mt-4">
		<div id="error-page-content"><img src="https://www.gstatic.com/youtube/src/web/htdocs/img/monkey.png" alt="">
			<p>Esta página no está disponible. Disculpa las molestias.</p>
			<p>Prueba a realizar otra acción</p>
			<a class="btn btn-outline-danger" href="<?php echo base_url() ?>/CUsuario/Panel">Ir al panel principal</a>
		</div><span id="error-page-vertical-align"></span>
	</div>
</body>

</html>