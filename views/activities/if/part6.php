<div class="container-selecao d-flex flex-column">
    <div class="p-5">
        <h1 class="mb-3 title">Veja como funciona AND e OR</h1>
        <div class="svg d-flex flex-row mt-5">

            <div class="lines d-flex flex-column justify-content-around">
                <div class="switch-line d-flex">
                    <div class="form-check form-switch">
                        <input onclick="ChangeLightOnAndExercise()" class="form-check-input switch" type="checkbox" role="switch" id="switch-and-1">
                    </div>
                    <svg width="240" height="17" viewBox="0 0 240 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                    </svg>
                </div>
                <div class="switch-line d-flex">
                    <div class="form-check form-switch">
                        <input onclick="ChangeLightOnAndExercise()" class="form-check-input switch" type="checkbox" role="switch" id="switch-and-2">
                    </div>
                    <svg width="240" height="17" viewBox="0 0 240 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                        <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                    </svg>
                </div>
            </div>

            <svg width="267" height="216" viewBox="0 0 267 216" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M157.734 9.16968H9V207.481H157.734" stroke="#7E23BE" stroke-width="17"
                    stroke-linecap="round" />
                <path
                    d="M159.908 9C177.235 8.99999 194.252 13.6319 209.229 22.4244C224.206 31.217 236.609 43.8565 245.174 59.057C253.74 74.2576 258.164 91.4768 257.995 108.963C257.827 126.449 253.072 143.578 244.215 158.608C235.358 173.637 222.714 186.031 207.571 194.528C192.427 203.024 175.323 207.321 158 206.981"
                    stroke="#7E23BE" stroke-width="17" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>

            <svg width="240" class="align-self-center" height="17" viewBox="0 0 240 17" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
                <path d="M0 8.5H239.019" stroke="#7E23BE" stroke-width="17" />
            </svg>
            <img src="<?= $url ?>/assets/img/Luz-apagada.png" style="height: 250px;" id="lampada-and">
        </div>
    </div>
    <div class="loading-bar w-100">
        <div class="buttons d-flex flex-row justify-content-around">
            <div class="">
                <a href="<?= $url ?>/atividades/selecao/5" class="btn btn-primary btn-back">
                    Voltar
                </a>
            </div>
            <div class="text-right">
                <a href="<?= $url ?>/atividades/selecao/7" class="btn btn-primary btn-back">
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