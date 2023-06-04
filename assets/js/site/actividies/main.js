/**
 *
 * Script de perfil
 *
 * @author Emprezaz
 *
 **/
(function ($, PATH, Helpers) {
    $(document).ready(function () {});
})($, PATH, Helpers);

function CorrectVariableExercise2() {
    var btnString = document.querySelector("#btn-string-1");
    var btnFloat = document.querySelector("#btn-float-2");
    if (
        btnString.classList.contains("selected") &&
        btnFloat.classList.contains("selected")
    ) {
        var btnNext = document.querySelector(".btn-next");
        btnNext.classList.remove("disabled");
    } else {
        alert(
            "Revise a questão, se precisar leia novamente a explicação clicando no botão voltar"
        );
    }
}

function CorrectVariableExercise4() {
	var regex = /^(string|float|decimal|char|int)\s+([a-zA-Z_][a-zA-Z0-9_-]*)$/;
    var inputVariable = document.querySelector("#input-variable");
    if (regex.test(inputVariable.value)) {
        var btnNext = document.querySelector(".btn-next");
        btnNext.classList.remove("disabled");
    } else {
        alert(
            "Revise a questão, se precisar leia novamente a explicação clicando no botão voltar"
        );
    }
}

function SelectButton(array) {
    var btnClicked = document.querySelector(array[0]); //Sempre vai ser o botao que foi clicado
    var btnNotClicked = document.querySelector(array[1]);
    var btnNotClicked2 = document.querySelector(array[2]);

    if (!btnClicked.classList.contains("selected")) {
        btnClicked.classList.add("selected");
        btnNotClicked.classList.remove("selected");
        btnNotClicked2.classList.remove("selected");
    }
}
