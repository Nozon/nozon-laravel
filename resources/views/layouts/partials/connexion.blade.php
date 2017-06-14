<section>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <form method="POST">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="pass" placeholder="Mot de passe">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                </form>

                <div class="login-help">
                    <a href="" data-toggle="modal" data-target="#mdp-modal">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mdp-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <form>
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Récupérer mon mot de passe">
                </form>
            </div>
        </div>
    </div>
</section>