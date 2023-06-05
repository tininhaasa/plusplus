<div class="container-variables d-flex flex-column">
    <div class="">
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
</div>