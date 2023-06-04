<section class="area_do_cadastro">
        <div class="cadastro">
            <div>
                <img src="<?= $url ?>/assets/img/logo.png">
            </div>

            <form id="cadastre-form">
                <input type="text" name="username" placeholder="Nome:" autofocus>
                <input type="email" name="email" placeholder="E-mail:">
                <input type="password" name="password" placeholder="Senha:">
                <input type="password" name="repassword" placeholder="Confirmar Senha:">
                <button type="button"  value="cadastrar" id="cadastre">CADASTRAR</button>
            </form>
            <P>Voltar para o <a href="<?=$url?>/login">Login</a></P>
        </div>
    </section>