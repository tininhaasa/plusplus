<div class="container-ifs d-flex flex-column">
    <div class="p-5">
        <h1 class="mb-3 title">Estrutura de seleção</h1>
        <p class="mt-2 mb-3">
            Essa é definitivamente uma das partes mais usadas no momento da programação, por diversos motivos.
            Elas ditam como o código irá seguir dependendo das condições apresentadas para o programa.
        </p>
        <div class="explicacao d-flex flex-row">

            <div class="texto-explicacao">
                <p class="mt-2 mb-3">
                    Por exemplo:
                </p>
                <p class="mt-2 mb-3">
                    Se você estiver logado aparecerá algo assim:
                </p>
                <img src="../assets/img/comUsuario.png">
                <!-- TODO: CUIDADO AS IMAGENS ESTÃO BUGANDO {as vezes aparecem as vezes não [Verificar porque (isso em todas)]} -->

                </p>
                <p class="mt-4 mb-2">
                    Se não, verá assim:
                </p>
                <img src="../assets/img/semUsuario.png" alt="">
            </div>
            <div class="tiogatas d-flex">
                <img src="../assets/img/pointergatas.png" style="height: 450px;"
                    alt="Tio gatas apontando para a palavra SE">
                <img src="../assets/img/balaozim.png" style="height: 200px;" class="mt-4"
                    alt="Balão de fala escrito: Note o uso da palavra 'SE' em português">
            </div>
        </div>

    </div>
    <div class="loading-bar w-100">
        <div class="buttons d-flex flex-row justify-content-around">
            <div class="">
                <a  href="<?= $url ?>/atividades" class="btn btn-primary btn-back">
                    Voltar
                </a>
            </div>
            <div class="text-right">
                <a  href="<?= $url ?>/atividades/selecao/2" class="btn btn-primary btn-back">
                    Próximo
                </a>
            </div>
        </div>
        <section>
            <ol class="progress-bar">
                <li class="is-active"></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </section>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg">
    <symbol id="checkmark-bold" viewBox="0 0 24 24">
        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
    </symbol>
</svg>
</div>