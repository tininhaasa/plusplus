/**
*
* Script de perfil
*
* @author Emprezaz
*
**/
(function($, PATH, Helpers){


	$(document).ready(function() {


	});

})($, PATH, Helpers);

function Corrigir() {
    var btnNext = document.querySelector('.btn-next');
	btnNext.removeAttribute("disabled");
}

function SelectButton(array) {
	var btnClicked = document.querySelector(array[0]);//Sempre vai ser o botao que foi clicado
	var btnNotClicked = document.querySelector(array[1]);
	var btnNotClicked2 = document.querySelector(array[2]);

	if (!btnClicked.classList.contains("selected")) {
		btnClicked.classList.add("selected")
		btnNotClicked.classList.remove("selected")
		btnNotClicked2.classList.remove("selected")
	}
}