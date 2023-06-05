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
                Gattino “belezinha”</h4><img style="width: 70%; margin-top: 35px" src="${PATH}/assets/img/gattinook.png"></div>`,
                showConfirmButton: false
            }).then(function(){
                window.location.href = PATH + "/atividades";
            })
        })

        $("body").on("click", ".btn-back", function () {

            current_page = parseInt($("#page").val());
            $("#badge"+current_page).removeClass("is-active");
            current_page = current_page-1;
            $("#page").val(current_page);
            
            $(".btn-correction").addClass("d-none");
            $(".btn-menu").addClass("d-none");
            $(".btn-next:not(.btn-menu)").removeClass("d-none");
            $(".btn-back:not(.btn-menu)").removeClass("d-none");
            switch (current_page) {
                case 1:
                    $(".btn-back").addClass("d-none");
                    $(".btn-back:is(.btn-menu)").removeClass("d-none");
                    break;
                case 2:
                    $(".btn-correction").removeClass("d-none");
                    break;
                case 4:
                    console.log("a")
                    $(".btn-next").addClass("d-none");
                    $(".btn-menu").removeClass("d-none");
                    
                    break;
            
            }
        });

        $("body").on("click", ".btn-next", function () {
            
            current_page = parseInt($("#page").val());

            current_page = current_page+1;

            $("#page").val(current_page);
            
            $(".btn-correction").addClass("d-none");
            $(".btn-menu").addClass("d-none");
            $(".btn-next:not(.btn-menu)").removeClass("d-none");
            $(".btn-back:not(.btn-menu)").removeClass("d-none");
            switch (current_page) {
                case 2:
                    $(".btn-correction").removeClass("d-none")
                    break;
                case 4:
                    console.log("a")
                    $(".btn-next").addClass("d-none")
                    $(".btn-next:is(.btn-menu)").removeClass("d-none")
                    
                    break;
            
            }

            $("#badge"+current_page).addClass("is-active");

        });

    });
})($, PATH, Helpers);