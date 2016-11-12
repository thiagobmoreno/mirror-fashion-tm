<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Mirror Fashion</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo_index.css">
	<link rel="stylesheet" href="css/estilo_index_mobile.css" media="(max-width: 939px)">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|PT+Sans" rel="stylesheet">
</head>

<body>
	<?php include("header.php"); ?>

	<div class="container">
		<section class="busca">
			<h2>Busca</h2>

			<form>
				<input type="search">
				<input type="submit" value="Buscar">
			</form>
		</section>

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga Curta</a></li>
							<li><a href="#">Manga Comprida</a></li>
							<li><a href="#">Camisa Social</a></li>
							<li><a href="#">Camisa Casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>

		<img id="big_city" src="img/destaque-home.png" alt="Promoção: Big City Night">

		<section>
			<section class="painel novidades">
				<h2>Novidades</h2>

				<ol>
					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png" alt="Blusa Rosa">
								<figcaption>Blusa estampada floral rosa por R$ 99,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png" alt="Camiseta azul">
								<figcaption>Camiseta estampada caveira azul por R$ 39,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura3.png" alt="Cargigan Verde">
								<figcaption>Cardigan verde por R$ 59,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura4.png" alt="Casaco Vermelho">
								<figcaption>Casaco vermelho por R$ 69,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura5.png" alt="Top Azul">
								<figcaption>Top azul por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura6.png" alt="Camiseta sem manga rosa">
								<figcaption>Camiseta sem manga rosa por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png" alt="Blusa Rosa">
								<figcaption>Blusa estampada floral rosa por R$ 99,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png" alt="Camiseta azul">
								<figcaption>Camiseta estampada caveira azul por R$ 39,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura3.png" alt="Cargigan Verde">
								<figcaption>Cardigan verde por R$ 59,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura4.png" alt="Casaco Vermelho">
								<figcaption>Casaco vermelho por R$ 69,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura5.png" alt="Top Azul">
								<figcaption>Top azul por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura6.png" alt="Camiseta sem manga rosa">
								<figcaption>Camiseta sem manga rosa por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>

				<button type="button" class="button-mais vernovidades">Mais Produtos</button>
				<button type="button" class="button-menos escondernovidades">Menos Produtos</button>
			</section>

			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>

				<ol>
					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura1.png" alt="Blusa Rosa">
								<figcaption>Blusa estampada floral rosa por R$ 99,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura2.png" alt="Camiseta azul">
								<figcaption>Camiseta estampada caveira azul por R$ 39,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura3.png" alt="Cargigan Verde">
								<figcaption>Cardigan verde por R$ 59,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura4.png" alt="Casaco Vermelho">
								<figcaption>Casaco vermelho por R$ 69,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura5.png" alt="Top Azul">
								<figcaption>Top azul por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura6.png" alt="Camiseta sem manga rosa">
								<figcaption>Camiseta sem manga rosa por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png" alt="Blusa Rosa">
								<figcaption>Blusa estampada floral rosa por R$ 99,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png" alt="Camiseta azul">
								<figcaption>Camiseta estampada caveira azul por R$ 39,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura3.png" alt="Cargigan Verde">
								<figcaption>Cardigan verde por R$ 59,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura4.png" alt="Casaco Vermelho">
								<figcaption>Casaco vermelho por R$ 69,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura5.png" alt="Top Azul">
								<figcaption>Top azul por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<a href="#">
							<figure>
								<img src="img/produtos/miniatura6.png" alt="Camiseta sem manga rosa">
								<figcaption>Camiseta sem manga rosa por R$ 19,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>

				<button type="button" class="button-mais vervendidos">Mais Produtos</button>
				<button type="button" class="button-menos escondervendidos">Menos Produtos</button>
			</section>
		</section>
	</div>

	<?php include("footer.php"); ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>