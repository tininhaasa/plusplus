<div class="container-variables d-flex flex-column">
    <div class="p-5">
        <div class="title">
            <h1 class="mb-3 title">Identifique</h1>
        </div>
        <div class="desafio-variavel-2">
            <p class="mt-4 mb-3">
                MeuNome = “Thomas”;
            </p>
            <div class="d-flex w-75 justify-content-evenly">
                <button class="btn button-chellange m-2 col-sm-3 col-md-4 col-lg-3 fs-4" id="btn-string-1" onclick="SelectButton(['#btn-string-1', '#btn-int-1', '#btn-char-1'])">String</button>
                <button class="btn button-chellange m-2 col-sm-3 col-md-4 col-lg-3 fs-4" id="btn-int-1" onclick="SelectButton(['#btn-int-1','#btn-char-1', '#btn-string-1'])">Int</button>
                <button class="btn button-chellange m-2 col-sm-3 col-md-4 col-lg-3 fs-4" id="btn-char-1" onclick="SelectButton(['#btn-char-1','#btn-string-1', '#btn-int-1'])">Char</button>
            </div>
        </div>
        <div class="desafio-variavel-2">
            <p class="mt-4 mb-3">
                Salario = 1200.00;
            </p>
            <div class="d-flex w-75 justify-content-evenly">
                <button class="btn button-chellange m-2 col-sm-3 col-md-4 col-lg-3 fs-4" id="btn-int-2" onclick="SelectButton(['#btn-int-2', '#btn-float-2', '#btn-string-2'])">Int</button>
                <button class="btn button-chellange m-2 col-sm-3 col-md-4 col-lg-3 fs-4" id="btn-float-2" onclick="SelectButton(['#btn-float-2', '#btn-string-2', '#btn-int-2'])">Float</button>
                <button class="btn button-chellange m-2 col-sm-3 col-md-4 col-lg-3 fs-4" id="btn-string-2" onclick="SelectButton(['#btn-string-2', '#btn-int-2', '#btn-float-2'])">String</button>
            </div>
        </div>

    </div>
    <div class="footer d-flex flex-column justify-content-center" style="height:100%;"><!-- TODO: Verificar se fica melhor o center, end, evenly ou around isso para todas as barras -->

        <div class="buttons p-4 d-flex justify-content-around">
            <a href="<?= $url ?>/atividades/variavel/1" class="btn btn-lg btn-footer rounded-4">Voltar</a>
            <button class="btn btn-lg btn-footer btn-correct rounded-4" onclick="CorrectVariableExercise2()">Corrigir</button>
            <a href="<?= $url ?>/atividades/variavel/3" class="btn btn-lg btn-footer btn-next rounded-4 disabled">Proximo</a>
        </div>
        <div class="progress m-4" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">
            <div class="progress-bar" style="width: 50%"></div>
        </div>
    </div>
</div>