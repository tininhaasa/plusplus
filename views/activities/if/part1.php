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
                <img src="../assets/img/comUsuario.png"><!-- TODO: CUIDADO AS IMAGENS ESTÃO BUGANDO {as vezes aparecem as vezes não [Verificar porque (isso em todas)]} -->
                
            </p>
            <p class="mt-4 mb-2">
                Se não, verá assim:
            </p>
            <img src="../assets/img/semUsuario.png" alt="">    
        </div>
        <div class="tiogatas d-flex">
            <img src="../assets/img/pointergatas.png" style="height: 450px;" alt="Tio gatas apontando para a palavra SE">
            <img src="../assets/img/balaozim.png" style="height: 200px;" class="mt-4" alt="Balão de fala escrito: Note o uso da palavra 'SE' em português">
        </div>
    </div>
        
    </div>
    <div class="footer d-flex flex-column justify-content-end" style="height:100%;">

        <div class="buttons p-4 d-flex justify-content-around">
            <a href="<?= $url ?>/atividades" class="btn btn-lg btn-footer rounded-4">Voltar</a>
            <a href="<?= $url ?>/atividades/selecao/2" class="btn btn-lg btn-footer btn-next rounded-4">Proximo</a>
        </div>
        <div class="progress m-4" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">
            <div class="progress-bar" style="width: 25%"></div>
        </div>
    </div>
</div>