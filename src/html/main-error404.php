<?php include 'src/php/connexion.php'; ?>
<main>
  <div id="title-principal">
    <img src="src/img/logo-ehpad.svg" alt="logo de l'EHPAD André Blanc">
    <h1>EHPAD André Blanc<br/>Error 404</h1>
  </div>
  <h3 class="page-introduction">La page que vous avez souhaité visiter n'existe pas. Vous allez être redirigé vers l'accueil dans <span id="secondCompteur"></span> secondes</h3>
  <script>
    let value = 5;
    document.getElementById("secondCompteur").innerHTML = value;
    let myVar = setInterval(myTimer, 1000);
    function myTimer() {
      if (value == 0){
        return;
      }
      value--;
      document.getElementById("secondCompteur").innerHTML = value;
    }
  </script>
</main>