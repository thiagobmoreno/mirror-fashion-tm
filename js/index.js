$('.painel').addClass('painel-compacto');

var novidades = $('.novidades');
var maisVendidos = $('.mais-vendidos');

var botaoMaisNovidades = $('.vernovidades');
var botaoMaisVendidos = $('.vervendidos');
var botaoEsconderNovidades = $('.escondernovidades');
var botaoEsconderVendidos = $('.escondervendidos');

function verMaisNovidades() {
	novidades.removeClass('painel-compacto');
	novidades.addClass('painel-estendido');
};

function verMaisVendidos() {
	maisVendidos.removeClass('painel-compacto');
	maisVendidos.addClass('painel-estendido');
};

botaoMaisVendidos.on("click", verMaisVendidos);
botaoMaisNovidades.on("click", verMaisNovidades);

function esconderNovidades() {
	novidades.removeClass('painel-estendido');
	novidades.addClass('painel-compacto');
};

function esconderMaisVendidos() {
	maisVendidos.removeClass('painel-estendido');
	maisVendidos.addClass('painel-compacto');
};

botaoEsconderVendidos.on("click", esconderMaisVendidos);
botaoEsconderNovidades.on("click", esconderNovidades);