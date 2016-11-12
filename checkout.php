<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Checkout Mirror Fashion</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/checkout.css">
</head>

<body>
	<h1>Mirror Fashion</h1>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="img/logo-rodape.png" alt="Logo Mirror Fashion"></a>
			<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><span class="glyphicon glyphicon-align-justify"></span></button>
		</div>

		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas Frequentes</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em Contato</a></li>
		</ul>
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h2>Ótima Escolha!</h2>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 class="panel-title">Sua Compra</h2>
					</div>
					<div class="panel-body">
						<img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive hidden-xs">

						<dl>
							<dt>Produto</dt>
							<dd><?= $_POST['nome'] ?></dd>

							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?></dd>

							<dt>Tamanho</dt>
							<dd><?= $_POST['tamanho'] ?></dd>

							<dt>Preço</dt>
							<dd id="preco">R$ <?= $_POST['preco'] ?></dd>
						</dl>

						<div class="form-group">
							<label for="qt">Quantidade</label>
							<input id="qt" class="form-control" type="number" min="1" max="99" value="1">
						</div>
						<div class="form-group">
							<label for="total">Total</label>
							<output id="total" class="form-control"><?= $_POST['preco'] ?></output>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-9 col-sm-8 col-xs-12">
				<form>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<fieldset>
								<legend>Dados Pessoais</legend>

								<div class="form-group">
									<label for="nome-completo">Nome Completo</label>
									<input type="text" class="form-control" id="nome" name="nome-completo" autofocus required>
								</div>

								<div class="form-group">
									<label for="email">E-Mail</label>

									<div class="input-group">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com.br">
									</div>
								</div>

								<div class="form-group">
									<label for="cpf">CPF</label>
									<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
								</div>

								<div class="checkbox">
									<input type="checkbox" value="sim" id="spam" name="spam" checked>
									<label for="spam">Quero receber spam da Mirror Fashion</label>
								</div>
							</fieldset>
						</div>

						<div class="col-md-6 col-sm-12">
							<fieldset>
								<legend>Cartão de Crédito</legend>

								<div class="form-group">
									<label for="numero-cartao">Número - CVV</label>
									<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
								</div>

								<div class="form-group">
									<label for="bandeira-cartao">Bandeira</label>
									<select class="form-control" id="bandeira-cartao" name="bandeira-cartao">
										<option value="visa">VISA</option>
										<option value="master">MasterCard</option>
										<option value="amex">American Express</option>
										<option value="elo">ELO</option>
									</select>
								</div>

								<div class="form-group">
									<label for="validade-cartao">Validade</label>
									<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
								</div>
							</fieldset>
						</div>
					</div>

					<button type="submit" class="btn btn-primary btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span> Confirmar pedido
					</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/inputmask-plugin.js"></script>
	<script type="text/javascript" src="js/checkout.js"></script>
</body>
</html>