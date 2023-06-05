<div class="container-selecao d-flex flex-column">
    <div class="p-5">
        <h1 class="mb-3 title">Veja como funciona AND e OR</h1>
        <div class="svg d-flex flex-row mt-5">

            <div class="lines d-flex flex-column justify-content-around">
                <div class="switch-line d-flex">
                    <div class="form-check form-switch">
                        <input id="switch-or-1" onclick="ChangeLightOnOrExercise()" class="form-check-input switch" type="checkbox" role="switch">
                    </div>
                    <svg width="240" height="17" viewBox="0 0 240 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                    </svg>
                </div>
                <div class="switch-line d-flex">
                    <div class="form-check form-switch">
                        <input id="switch-or-2" onclick="ChangeLightOnOrExercise()" class="form-check-input switch" type="checkbox" role="switch">
                    </div>
                    <svg width="240" height="17" viewBox="0 0 240 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                    </svg>
                </div>
            </div>

            <svg width="285" height="229" viewBox="0 0 285 229" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M276 114.448C257.49 146.508 230.867 173.13 198.807 191.64C166.747 210.15 130.38 219.895 93.3599 219.895"
                    stroke="#7E23BE" stroke-width="17" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M93.3584 9C130.378 9 166.746 18.7447 198.806 37.2545C230.866 55.7644 257.489 82.3874 275.999 114.447"
                    stroke="#7E23BE" stroke-width="17" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M9.0752 9C27.5851 41.0601 37.3297 77.4277 37.3297 114.447C37.3297 151.467 27.5851 187.835 9.0752 219.895"
                    stroke="#7E23BE" stroke-width="17" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9 9H93.358" stroke="#7E23BE" stroke-width="17" stroke-linecap="round" />
                <path d="M9 219.895H93.358" stroke="#7E23BE" stroke-width="17" stroke-linecap="round" />
            </svg>
            <svg width="240" class="align-self-center" height="17" viewBox="0 0 240 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                    </svg>
            <img src="<?= $url ?>/assets/img/Luz-apagada.png" id="lampada-or">
        </div>
    </div>
    <div class="loading-bar w-100">
        <div class="buttons d-flex flex-row justify-content-around">
            <div class="">
                <a href="<?= $url ?>/atividades/selecao/4" class="btn btn-primary btn-back">
                    Voltar
                </a>
            </div>
            <div class="text-right">
                <a href="<?= $url ?>/atividades/selecao/6" class="btn btn-primary btn-back">
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