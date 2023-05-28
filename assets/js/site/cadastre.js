/**
*
* Script de perfil
*
* @author Emprezaz
*
**/
(function ($, PATH, Helpers) {


    var check = function () {

        var username = $("#name").val().trim();
        var registration = $("#registration").val().trim();
        var password = $("#password").val().trim();
        var repassword = $("#repassword").val().trim();

        if (username == "") {
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira o seu nome',
            })
            return false;
        }
        if (registration == "") {
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira o seu login',
            })
            return false;
        }
        if (password == "") {
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Insira uma senha para o seu login',
            })
            return false;
        }
        if (repassword == "") {
            Swal.fire({
                icon: 'error',
                title: 'Dado Inválido',
                text: 'Confirme a senha de login',
            })
            return false;
        }
        if (repassword != password) {
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

        $('#loader-overlay').fadeIn(500, async function () {
            if (await check()) {
                $.ajax({
                    url: PATH + '/cadastreUser',
                    type: 'POST',
                    dataType: 'JSON',
                    contentType: 'multipart/form-data',
                    contentType: false,
                    cache: false,
                    processData: false,
                    async: false,
                    data: formData,
                    complete: function (res) {
                        $('#loader-overlay').fadeOut();


                        if (res.responseJSON.result) {

                            if (res.responseJSON.result == "sua conta já existe") {
                                if (res.responseJSON.email) {

                                    $('#email').focus();
                                    swal({
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
    }

    $(document).ready(function () {

        save();
    });

})($, PATH, Helpers);