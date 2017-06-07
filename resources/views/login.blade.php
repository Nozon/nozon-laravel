<!DOCTYPE html>
<html lang="fr">
  <head>
  <title>Connexion</title>
  <meta charset="UTF-8">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/connexion.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/connexion.css">


  </head>
  <body>
  <div class="container">
    <header>
      <h1>Connexion</h1>
    </header>

    <main>
      <div class='nomUtilisateur'>
      <div class="msg_error msg_error_text">Le nom d'utilisateur ou le mot de passe est incorrect</div>
      Nom utilisateur <input type="text" name="username" class="form_username" required placeholder=" ">
      </div>
      <div class='motDePasse'>

      Mot de passe <input type="text" name="password" class="form_password" required placeholder=" ">
      </div>
      <button class="btn_connexion">
      Se connecter
      </button>
    </main>
  </div>
  </body>
</html>
