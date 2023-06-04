<div class="container-ifs d-flex flex-column">
    <div class="p-5">
        <h1 class="mb-3 title">Mas como comparar?</h1>
        <p class="mt-2 mb-3">
            Para tudo funcionar, precisamos passar valores para a comparação no laço de seleção e também dizer o que
            queremos de comparação:
        </p>
        <div class="explicacao d-flex flex-row">

            <div class="tabela ml-4 mt-4">
                <img src="../../assets/img/TabelaIf.png" style="height: 200px;">
                <!-- TODO: CUIDADO AS IMAGENS ESTÃO BUGANDO {as vezes aparecem as vezes não, algo com o caminho [Verificar porque (isso em todas as imagens)]} -->
            </div>
            <div class="texto-explicacao m-4 fs-5">
                <p>SE (login_usuario == verdade){</p>
                <p class="ms-4">//Código caso verdadeiro</p>
                <p>} SENÃO {</p>
                <p  class="ms-4">//Código caso falso</p>
                <p>}</p>
            </div>
            <div class="imagem-explicacao d-flex">
                <img src="../../assets/img/balaozimIfTabela.png" style="height: 150px;" class="align-self-center"
                    alt="Tio gatas apontando para a palavra SE">
                <img src="../../assets/img/tioLu.png" style="height: 400px;"
                    alt="Balão de fala escrito: Note o uso da palavra 'SE' em português">
            </div>
        </div>
    </div>

</div>
<div class="loading-bar w-100">
    <div class="buttons d-flex flex-row justify-content-around">
        <div class="">
            <a href="<?= $url ?>/atividades/selecao/1" class="btn btn-primary btn-back">
                Voltar
            </a>
        </div>
        <div class="text-right">
            <a href="<?= $url ?>/atividades/selecao/3" class="btn btn-primary btn-back">
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
</div>