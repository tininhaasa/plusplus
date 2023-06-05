<div class="loading-bar wrapper container">
    <input type="number" hidden value="<?= (!isset($part) || $part == '1') ? 1 : $part ?>" name="page" id="page">
    <div class="buttons row">
        <div class="col-4">
            <button class="btn btn-primary btn-back <?= (!isset($part) || $part == '1') ? "d-none" : "" ?>" data-bs-target="#carouselExample" data-bs-slide="prev">
                Voltar
            </button>
            <a href="<?= $url ?>/atividades" class="btn btn-primary btn-back btn-menu <?= (!isset($part) || $part == '1') ? "" : "d-none" ?>">
                Ir ao menu
            </a>
        </div>
        <div class="col-4 text-center">
            <button class="btn btn-light btn-correction  <?= ($part == 2) ? "" : "d-none" ?>">Corrigir</button>

        </div>
        <div class="col-4 text-end" data-bs-target="#carouselExample" data-bs-slide="next">
            <button class="btn btn-primary btn-next <?= ($part != 4) ? "" : "d-none" ?>">
                Próximo
            </button>
            <a href="<?= $url ?>/atividades" class="btn btn-primary btn-next btn-menu <?= ($part == 4) ? "" : "d-none" ?>">
                Ir ao menu
            </a>
        </div>
    </div>
    <section>

        <ol class="progress-bar">
            <li id="badge1" class="is-active"></li>
            <li id="badge2"></li>
            <li id="badge3"></li>
            <li id="badge4"></li>
            <li id="badge5"></li>
        </ol>
    </section>

</div>