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
        Swal.fire({
            type: "warning",
            title: "Ops!",
            text: "Revise a questão, se precisar leia novamente a explicação clicando no botão voltar.",
            confirmButtonText: "Continuar",
        });
    }
}

function CorrectVariableExercise4() {
    var regex = /^(string|float|decimal|char|int)\s+([a-zA-Z_][a-zA-Z0-9_-]*)$/;
    var inputVariable = document.querySelector("#input-variable");
    if (regex.test(inputVariable.value)) {
        var btnNext = document.querySelector(".btn-next");
        btnNext.classList.remove("disabled");
    } else {
        Swal.fire({
            type: "warning",
            title: "Ops!",
            text: "Revise a questão, se precisar leia novamente a explicação clicando no botão voltar.",
            confirmButtonText: "Continuar",
        });
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

function ChangeLightOnOrExercise(){
    var inputSwitch1 = document.querySelector("#switch-or-1");
    var inputSwitch2 = document.querySelector("#switch-or-2");
    var lampadaImagem = document.querySelector("#lampada-or");
    if (inputSwitch1.checked || inputSwitch2.checked) {
        lampadaImagem.src = "../../assets/img/luz-ativo.png"
    }else{
        lampadaImagem.src = "../../assets/img/Luz-apagada.png"
    }
}

function ChangeLightOnAndExercise(){
    var inputSwitch1 = document.querySelector("#switch-and-1");
    var inputSwitch2 = document.querySelector("#switch-and-2");
    var lampadaImagem = document.querySelector("#lampada-and");
    if (inputSwitch1.checked && inputSwitch2.checked) {
        lampadaImagem.src = "../../assets/img/luz-ativo.png"
    }else{
        lampadaImagem.src = "../../assets/img/Luz-apagada.png"
    }
}