<main>
  <div id="title-principal">
    <img src="src/img/logo-ehpad.svg" alt="logo de l'EHPAD André Blanc">
    <h1>EHPAD André Blanc<br/>Connexion Admin</h1>
  </div>
  <section>
    <form action="src/php/admin_connexion.php" method="POST"><!--
    --><h3>Se connecter</h3><!--
    --><hr><!--
    --><label for="form_login">Login :</label><!--
    --><input type="text" name="form_login" id="form_login" placeholder="Login administrateur ..." required><!--
    --><label for="form_mdp">MDP :</label><!--
    --><input type="password" name="form_mdp" id="form_mdp" placeholder="Mot de passe administrateur ..." required><!--
    --><button class="en-savoir-plus" type="submit">Envoyer</button><!--
    --></form>
  </section>
</main>