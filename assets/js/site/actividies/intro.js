/**
 *
 * Script de perfil
 *
 * @author Emprezaz
 *
 **/
(function ($, PATH, Helpers) {

    var addLine = function(){
        $("body").on("click", ".add-line", function(){
            var line =$(this).parent().parent().clone();

            var index = line.attr("data-index");
            index = parseInt(index)
            console.log(index)
            index = index+1;
            console.log(index)

            line.attr("data-index", index);
            line.find(".input-group-text").text(index);
            line.find(".input-group-text").attr('id', "basic-addon"+index);
            line.find(".form-control").attr('aria-describedby', "basic-addon"+index);

            console.log(line);

            $(".cake-recipe").append(line);
            $(this).remove();

        })
    }

    var correct = function () {
        $("body").on("click", ".btn-correction", function(){
            var verify = true;
            $(".form-control").each(function(i){
                console.log($(this).val())
                if($(this).val() == ""){
                    let index = $(this).parent().parent().parent().attr("data-index");
                    Swal.fire({
                        type: 'warning',
                        title: 'Opa!',
                        html: 'Não deixe a linha '+index+' da receita vazia!',
                        confirmButtonText: 'Continuar',
                    }) 
                    verify = false;
                }
            })
            if(verify == true){
                Swal.fire({
                    type: 'success',
                    title: 'É isso!',
                    html: '<p style="color:#545454">Uma receita é uma receita, se seu bolo é esse está tudo certo <span style="font-size: 34px">&#9786;</span></p>',
                    confirmButtonText: 'Continuar',
                }) 
            }
        })
    }

    var chest = function(){
        $("body").on("click", ".price-chest", function(){
            Swal.fire({
                html: `<div class="text-center"><h4>Você desbloqueou: <br />
                Tio Lu “tente de novo”</h4><img style="width: 70%; margin-top: 35px" src="${PATH}/assets/img/tiolutry.png"></div>`,
                showConfirmButton: false
            }).then(function(){
                window.location.href = PATH + "/atividades";
            })
        })
    }

    $(document).ready(function () {
        addLine();
        correct();
        chest();
    });
})($, PATH, Helpers);