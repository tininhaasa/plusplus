<div class="container-selecao d-flex flex-column">
    <div class="p-5">
        <h1 class="mb-3 title">E se tiver mais de uma condição?</h1>
        <p class="mt-2 mb-3">
        Se, por exemplo tivermos mais de uma condição e as apenas uma dela precisa ser verdadeiras usamos  OR que é representado por ||
        </p>
        <p class="mt-5 mb-3">
        SE(anos_contribuicao >= 15 || idade >= 65){
        </p>
        <p class="mt-2 ms-5 mb-3">
        posso me aposentar
        </p>
        <p class="mt-2 mb-3">
            }SE NÃO{
        </p>
        <p class="mt-2 ms-5 mb-3">
             não posso me aposentar
        </p>
        <p class="mt-2 mb-3">
            }
        </p>
        <!-- 
            Se, por exemplo tivermos mais de uma condição e as apenas uma dela precisa ser verdadeiras usamos  OR que é representado por ||

SE(anos_contribuicao >= 15 || idade >= 65){
         posso me aposentar
}SE NÃO{
         não  posso me aposentar
}
         -->
    </div>
    <div class="loading-bar w-100">
    <div class="buttons d-flex flex-row justify-content-around">
        <div class="">
            <a href="<?= $url ?>/atividades/selecao/2" class="btn btn-primary btn-back">
                Voltar
            </a>
        </div>
        <div class="text-right">
            <a href="<?= $url ?>/atividades/selecao/4" class="btn btn-primary btn-back">
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