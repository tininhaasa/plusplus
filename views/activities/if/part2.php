<div class="container-ifs d-flex flex-column">
    <div class="p-5">
        <h1 class="mb-3 title">Mas como comparar?</h1>
        <p class="mt-2 mb-3">
            Para tudo funcionar, precisamos passar valores para a comparação no laço de seleção e também dizer o que
            queremos de comparação:
        </p>
        <div class="explicacao d-flex flex-row">

            <div class="tabela ml-4">
                <img src="../../assets/img/TabelaIf.png"> <!-- TODO: CUIDADO AS IMAGENS ESTÃO BUGANDO {as vezes aparecem as vezes não, algo com o caminho [Verificar porque (isso em todas as imagens)]} -->
            </div>
            <div class="texto-explicacao m-5 fs-3">
                <p>SE (login_usuario == verdade){</p>
                    <p>//Código caso verdadeiro</p>
                <p>} SENÃO {</p>
                    <p>//Código caso falso</p>
                <p>}</p>
            </div>
        </div>

    </div>
    <div class="footer d-flex flex-column justify-content-end" style="height:100%;">

        <div class="buttons p-4 d-flex justify-content-around">
            <a href="<?= $url ?>/atividades/selecao/1" class="btn btn-lg btn-footer rounded-4">Voltar</a>
            <a href="<?= $url ?>/atividades/selecao/3" class="btn btn-lg btn-footer btn-next rounded-4">Proximo</a>
        </div>
        <div class="progress m-4" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">
            <div class="progress-bar" style="width: 25%"></div>
        </div>
    </div>
</div>