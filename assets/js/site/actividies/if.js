/**
 *
 * Script de perfil
 *
 * @author Emprezaz
 *
 **/
(function ($, PATH, Helpers) {
    $(document).ready(function () {

        $("body").on("click", ".price-chest", function(){
            Swal.fire({
                html: `<div class="text-center"><h4>Você desbloqueou: <br />
                Sabrina “incrivel”</h4><img style="width: 70%; margin-top: 35px" src="${PATH}/assets/img/sabrinain.png"></div>`,
                showConfirmButton: false
            }).then(function(){
                window.location.href = PATH + "/atividades";
            })
        })

        $("body").on("click", ".btn-back", function () {

            current_page = parseInt($("#page").val());
            $("#badge" + current_page).removeClass("is-active");
            current_page = current_page - 1;
            $("#page").val(current_page);

            $(".btn-correction").addClass("d-none");
            $(".btn-menu").addClass("d-none");
            $(".btn-next:not(.btn-menu)").removeClass("d-none");
            $(".btn-back:not(.btn-menu)").removeClass("d-none");
            switch (current_page) {
                case 9:
                    $(".btn-correction").removeClass("d-none")
                    break;
                case 10:
                    console.log("a")
                    $(".btn-next").addClass("d-none");
                    $(".btn-menu").removeClass("d-none");

                    break;

            }
        });

        $("body").on("click", ".btn-next", function () {

            current_page = parseInt($("#page").val());

            current_page = current_page + 1;

            $("#page").val(current_page);

            $(".btn-correction").addClass("d-none");
            $(".btn-menu").addClass("d-none");
            $(".btn-next:not(.btn-menu)").removeClass("d-none");
            $(".btn-back:not(.btn-menu)").removeClass("d-none");
            switch (current_page) {
                case 9:
                    $(".btn-correction").removeClass("d-none")
                    break;
                case 10:
                    console.log("a")
                    $(".btn-next").addClass("d-none")
                    $(".btn-next:is(.btn-menu)").removeClass("d-none")

                    break;

            }

            $("#badge" + current_page).addClass("is-active");

        });
        $('body').on('mouseover', ".no-button", function () {
            $(this).css({
                'position': 'fixed',
                'top': Math.random() * window.innerHeight + "px",
                'left': ((Math.random() * window.innerWidth) - 89) + "px"
            });
        });
        $(".piece").draggable();
        $(".fitting").droppable({
            drop: function (event, ui) {
                console.log(event)
                console.log(ui)
                console.log($(this))
                    
            }
        });
    });


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

function ChangeLightOnOrExercise() {
    var inputSwitch1 = document.querySelector("#switch-or-1");
    var inputSwitch2 = document.querySelector("#switch-or-2");
    var lampadaImagem = document.querySelector("#lampada-or");
    if (inputSwitch1.checked || inputSwitch2.checked) {
        lampadaImagem.src = PATH + "/assets/img/luz-ativo.png"
    } else {
        lampadaImagem.src = PATH + "/assets/img/Luz-apagada.png"
    }
}

function ChangeLightOnAndExercise() {
    var inputSwitch1 = document.querySelector("#switch-and-1");
    var inputSwitch2 = document.querySelector("#switch-and-2");
    var lampadaImagem = document.querySelector("#lampada-and");
    if (inputSwitch1.checked && inputSwitch2.checked) {
        lampadaImagem.src = PATH + "/assets/img/luz-ativo.png"
    } else {
        lampadaImagem.src = PATH + "/assets/img/Luz-apagada.png"
    }
}