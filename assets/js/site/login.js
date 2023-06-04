/**
*
* Script de perfil
*
* @author Emprezaz
*
**/
(function ($, PATH, Helpers) {


    var check = function () {

        var email = $("input[name='email']").val().trim();
        var password = $("input[name='password']").val().trim();

        if (email == "") {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira o seu e-mail da sua conta',
            })
            return false;
        }
        if (password == "") {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira a senha da sua conta',
            })
            return false;
        }

        return true;
    }

    var save = function () {
        $("body").on("click", "#login", function () {
            $('#loader-overlay').fadeIn(500, async function () {
                if (await check()) {
                    $.ajax({
                        url: PATH + '/loginUser',
                        type: 'POST',
                        dataType: 'JSON',
                        data: $("#form-login").serialize(),
                        complete: function (res) {
                            $('#loader-overlay').fadeOut();


                            if (res.responseJSON.result == "true" || res.responseJSON.result == true) {
                               
                                window.location.href = PATH + '/atividades';

                            } else
                                swal({
                                    type: 'warning',
                                    title: 'Ops!',
                                    text: 'Não foi possível fazer o login! Verifique as suas credenciais',
                                    confirmButtonText: 'Fechar',
                                })

                            return false

                        }

                    })
                }
            })

        })
    }

    $(document).ready(function () {

        save();
    });

})($, PATH, Helpers);