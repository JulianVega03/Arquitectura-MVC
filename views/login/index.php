<section class="login">
    <article class="login__content">
        <div class="login__form">
            <div class="login__form__content">
                <h2 class="login__form__content--h2">Iniciar sesión</h2>
                <div class="login__form__container-cmp">
                    <input class="login__form__content--cmp" type="number" id="codigo" name="codigo" placeholder="Código" required>
                </div>
                <div class="login__form__container-cmp">
                    <input class="login__form__content--cmp" type="number" id="documento" name="documento" placeholder="Documento" required>
                </div>
                <div class="login__form__container-cmp">
                    <input class="login__form__content--cmp" type="password" id="clave" name="clave" placeholder="Contraseña" required>
                </div>
                <input class="login__form__content--btn" type="button" id="continuar" value="Continuar">
                <a class="login__form__content--a" href="">¿Olvidaste tu clave?</a>
            </div>
        </div>
        <figure class="login__fig">
            <img class="login__img" src="<?=URL?>public/imagen/imglogin.jpg">
        </figure>
    </article>
</section>