var precoUnitario = document.querySelector('#preco');
var quantidade = document.querySelector('#qt');
var precoFinal = document.querySelector('#total');

function resultadoFinal() {
	var precoAlterado = precoUnitario.textContent.replace("R$ ","");
	precoAlterado = precoAlterado.replace(",",".");
	precoAlterado = parseFloat(precoAlterado);

	var resultado = precoAlterado * quantidade.value;

	resultado = resultado.toFixed(2);
	resultado = "R$ " + resultado.replace(".",",");

	precoFinal.textContent = resultado;
};

quantidade.oninput = resultadoFinal;