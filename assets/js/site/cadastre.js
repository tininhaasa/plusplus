/**
*
* Script de perfil
*
* @author Emprezaz
*
**/
(function ($, PATH, Helpers) {


    var check = function () {

        var username = $("input[name='username']").val().trim();
        var email = $("input[name='email']").val().trim();
        var password = $("input[name='password']").val().trim();
        var repassword = $("input[name='repassword']").val().trim();

        if (username == "") {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira o seu nome',
            })
            return false;
        }
        if (email == "") {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira o seu e-mail para login',
            })
            return false;
        }
        if (password == "") {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira uma senha para o seu login',
            })
            return false;
        }
        if (repassword == "") {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Confirme a senha de login',
            })
            return false;
        }
        if (repassword != password) {
            $('#loader-overlay').fadeOut();
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Senhas divergentes',
            })
            return false;
        }

        return true;
    }

    var save = function () {
        console.log("aaaaa")
        $("body").on("click", "#cadastre", function () {
            $('#loader-overlay').fadeIn(500, async function () {
                if (await check()) {
                    $.ajax({
                        url: PATH + '/cadastreUser',
                        type: 'POST',
                        dataType: 'JSON',
                        data: $("#cadastre-form").serialize(),
                        complete: function (res) {
                            $('#loader-overlay').fadeOut();


                            if (res.responseJSON.result) {
                                if (res.responseJSON.result == "sua conta já existe") {
                                    if (res.responseJSON.email) {

                                        $('#email').focus();
                                        Swal.fire({
                                            type: 'warning',
                                            title: 'Ops!',
                                            text: 'Este email já está em uso.',
                                            confirmButtonText: 'Continuar',
                                        })
                                        return false;

                                    }

                                } else {
                                    window.location.href = PATH + '/atividades';
                                }

                            } else
                                swal({
                                    type: 'warning',
                                    title: 'Ops!',
                                    text: 'Ocorreu algum erro inesperado. Tente novamente mais tarde.',
                                    confirmButtonText: 'Continuar',
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