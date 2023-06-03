<div class="container-variables d-flex flex-column">
    <div class="p-5">
        <div class="title">
            <h1 class="mb-3 title">Teste você</h1>
        </div>
        <div class="desafio-variavel-4">
            <p class="mt-4 mb-3">
                Declare uma variável, colocando tipo e nome.
            </p>
           
        </div>
    </div>
    <div class="variavelDeclarada d-flex justify-content-center align-itens-center ">
        <input class="variavel-input" type="text" id="input-variable">
    </div>
    <div class="footer d-flex flex-column justify-content-end" style="height:100%;">

        <div class="buttons p-4 d-flex justify-content-around">
            <a href="<?= $url ?>/atividades/variavel/3" class="btn btn-lg btn-footer rounded-4">Voltar</a>
            <button class="btn btn-lg btn-footer btn-correct rounded-4" onclick="CorrectVariableExercise4()">Corrigir</button>
            <a href="<?= $url ?>/atividades/premiacao" class="btn btn-lg btn-footer btn-next rounded-4 disabled">Proximo</a>
        </div>
        <div class="progress m-4" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">
            <div class="progress-bar" style="width: 50%"></div>
        </div>
    </div>
</div>