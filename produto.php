<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Mirror Fashion</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo_index.css">
	<link rel="stylesheet" href="css/produto.css">
	<link rel="stylesheet" href="css/estilo_index_mobile.css" media="(max-width: 939px)">
</head>

<body>
	<?php include("header.php"); ?>

	<div class="produto-black">
		<div class="container">
			<section class="produto">
				<h2>Camiseta Ecko Caveira Bad to the Bone</h2>
				<span>por apenas R$ 129,00</span>

				<form  action="checkout.php" method="POST">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>

						<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde">
						</label>

						<input type="radio" name="cor" value="rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa">
						</label>

						<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul">
						</label>
					</fieldset>

					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>

						<input type="range" name="tamanho" value="42" min="36" max="46" step="2" id="tamanho">
						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>

					<fieldset class="Item">
						<input type="hidden" name="nome" value="Camiseta Ecko Caveira Bad to the Bone">
					</fieldset>

					<fieldset class="ID">
						<input type="hidden" name="id" value="2">
					</fieldset>

					<fieldset class="preco">
						<input type="hidden" name="preco" value="129,00">
					</fieldset>

					<input type="submit" class="comprar" value="comprar">
				</form>
			</section>

			<section class="detalhes">
				<h2>Detalhes do produto</h2>
				<p>Esse é o melhor casaco de Cargidã que você já viu. Escelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>

				<table>
					<thead>
						<tr>
							<th>Características</th>
							<th>Detalhe</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e Poliéster</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, rosa e verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar à mão</td>
						</tr>
					</tbody>
				</table>

			</section>
		</div>
	</div>

	<?php include("footer.php"); ?>

	<script type="text/javascript" src="js/produto.js"></script>
</body>
</html>