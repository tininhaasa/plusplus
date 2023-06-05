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
            <button class="btn btn-light btn-correction  <?= ($part == 9) ? "" : "d-none" ?>">Corrigir</button>

        </div>
        <div class="col-4 text-end" data-bs-target="#carouselExample" data-bs-slide="next">
            <button class="btn btn-primary btn-next <?= ($part != 10) ? "" : "d-none" ?>">
                Próximo
            </button>
            <a href="<?= $url ?>/atividades" class="btn btn-primary btn-next btn-menu <?= ($part == 10) ? "" : "d-none" ?>">
                Ir ao menu
            </a>
        </div>
    </div>
    <section>

        <ol class="progress-bar">
            <li id="badge1"  class="is-active"></li>
            <li id="badge2"  class="<?= ($part >= 2) ? "is-active" : "" ?>"></li>
            <li id="badge3"  class="<?= ($part >= 3) ? "is-active" : "" ?>"></li>
            <li id="badge4"  class="<?= ($part >= 4) ? "is-active" : "" ?>"></li>
            <li id="badge5"  class="<?= ($part >= 5) ? "is-active" : "" ?>"></li>
            <li id="badge6"  class="<?= ($part >= 6) ? "is-active" : "" ?>"></li>
            <li id="badge7"  class="<?= ($part >= 7) ? "is-active" : "" ?>"></li>
            <li id="badge8"  class="<?= ($part >= 8) ? "is-active" : "" ?>"></li>
            <li id="badge9"  class="<?= ($part >= 9) ? "is-active" : "" ?>"></li>
            <li id="badge10" class="<?= ($part >= 10) ? "is-active" : "" ?>"></li>
        </ol>
    </section>

</div>