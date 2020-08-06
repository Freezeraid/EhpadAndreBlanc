<?php include 'src/php/connexion.php'; ?>
<a class="anchor" title="Contacter l'EHPAD André Blanc" id="footer-anchor"></a>
<footer id="infos-footer">
  <h2>Vous souhaitez nous contacter ?</h2>
  <hr>
  <h3 class="page-introduction">Si vous avez une question, nous vous invitons à lire notre <a title="" id="admissionHref" href="faq.php" style="text-decoration: underline;" title="Lien vers la Foire aux Questions" target="_blank">FAQ</a> avant de nous envoyer un mail.</h3>
  <div class="footer-content"><!--
    --><form action="src/php/sendmail.php" method="post" onsubmit="return confirmation();"><!--
      --><label for="form_nom">Nom :</label><!--
      --><input type="text" name="form_nom" id="form_nom" placeholder="Votre nom ..." required><!--
      --><label for="form_prenom">Prénom :</label><!--
      --><input type="text" name="form_prenom" id="form_prenom" placeholder="Votre prénom ..." required><!--
      --><label for="form_mail">E-mail :</label><!--
      --><input type="email" name="form_mail" id="form_mail" placeholder="Votre e-mail ..." required><!--
      --><label for="form_tel">Téléphone :</label><!--
      --><input type="tel" name="form_tel" id="form_tel" placeholder="Votre téléphone ..." required><!--
      --><label for="form_adresse">Adresse :</label><!--
      --><input type="text" name="form_adresse" id="form_adresse" placeholder="Votre adresse ..." required><!--
      --><label for="form_msg">Message :</label><!--
      --><textarea name="form_msg" id="form_msg" cols="30" rows="10" placeholder="Votre message ..." required></textarea><!--
      --><button class="en-savoir-plus" type="submit">Envoyer</button><!--
    --></form><!--
  --></div><!--
  --><div class="footer-content"><!--
    --><div class="contact-informations"><!--
      --><h3>Contact</h3><!--
      --><hr><!--
      --><ul>
      <?php
        error_reporting(0);
        $sql = "SELECT * FROM contact ORDER BY id ASC"; 
        $result = $conn-> query($sql);
          
        if ($result-> num_rows > 0 ) {
          for ($i = 0; $i<1; $i++){
            $row = $result->fetch_assoc();
            echo "<a href=\"tel:+33".$row["valeur"]."\" title=\"Téléphoner à l'EHPAD André Blanc\" target=\"_blank\"><li>0".$row[valeur]."</li></a>";
          }
          for ($i = 1; $i<2; $i++){
            $row = $result->fetch_assoc();
            echo "<a href=\"mailto:".$row["valeur"]."\" title=\"Envoyer un mail au secrétariat de l'EHPAD André Blanc\" target=\"_blank\"><li>".$row[valeur]."</li></a>";
          }
          for ($i = 2; $i<3; $i++){
            $row = $result->fetch_assoc();
            echo "<a href=\"mailto:".$row["valeur"]."\" title=\"Envoyer un mail à l'administration de l'EHPAD André Blanc\" target=\"_blank\"><li>".$row[valeur]."</li></a>";
          }
          for ($i = 3; $i<4; $i++){
            $row = $result->fetch_assoc();
            echo "<a href=\"mailto:".$row["valeur"]."\" title=\"Envoyer un mail au service animation de l'EHPAD André Blanc\" target=\"_blank\"><li>".$row[valeur]."</li></a>";
          }
        }

      $conn -> close();
      ?>
        <li>23A Avenue Pierre Renaudel<br/>83390 Pierrefeu-du-Var</li><!--
      --></ul><!--
    --></div><!--
    --><div class="contact-informations"><!--
      --><h3>Informations</h3><!--
      --><hr><!--
      --><ul><!--
        --><a href="ehpad.php" title="En savoir plus sur l'ehpad"><li>Notre EHPAD</li></a><!--
        --><a href="equipe.php" title="En savoir plus sur l'équipe de l'EHPAD"><li>Notre équipe</li></a><!--
        --><a href="admission.php" title="Accédez à la page admission"><li>Admission</li></a><!--
        --><a href="admission.php#tarifs" title="Découvrez les tarifs de l'EHPAD André Blanc"><li>Tarifs</li></a><!--
        --><a href="activites.php" title="en savoir plus sur les animations de l'EHPAD"><li>Animations</li></a><!--
        --><a href="documentation.php" title="télécharger la documentation de l'EHPAD"><li>Documentation</li></a><!--
        --><a href="index.php#googlemap-ehpad-anchor" title="découvrez comment se rendre à l'EHPAD André Blanc"><li>Plan</li></a><!--
        --><a href="faq.php" title="Voir les questions les plus fréquentes dans la FAQ"><li>FAQ</li></a><!--
      --></ul><!--
    --></div><!--
  --></div>
</footer>
<script>
    function confirmation(){
      return confirm("Confirmer l'envoi du mail ?");
    }
</script>