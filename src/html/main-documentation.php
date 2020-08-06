<?php include 'src/php/connexion.php'; ?>
<main>
  <div id="title-principal">
    <img src="src/img/logo-ehpad.svg" alt="logo de l'EHPAD André Blanc">
    <h1>EHPAD André Blanc<br/>Documentation</h1>
  </div>
  <h3 class="page-introduction">Nous vous mettons à disposition une liste complète de documents PDF à télécharger, en vue d'une admission à notre EHPAD, ou pour obtenir divers renseignements.</h3>
  <h2>Informations générales</h2>
  <hr>
  <h4 class="paragraphe-introduction">Retrouvez le règlement de l'EHPAD, et son fonctionnement général dans les différents documents ci-dessous.</h4>
  <div class="categories-content">
    <table>
    <?php
        $sql = "SELECT * FROM fichiers WHERE type = \"informations\""; 
        $getRows = mysqli_query($conn, $sql);
        $tmpCount = 0;
        while($row = mysqli_fetch_array($getRows)) {
          $tmpCount ++;
        }
        $result = $conn-> query($sql);
        $downloadDelete = array("src", "/", "pdf", "php");
          if ($result-> num_rows > 0 ) {
            for ($i = 0; $i<$tmpCount; $i++){
              $row = $result-> fetch_assoc();
              echo "<tr><td><a href=\"".$row["urlFichier"]."\" download=\"".str_replace($downloadDelete , "", $row["urlFichier"])."\" title=\"".$row["nomFichier"]."\" ><img src=\"src/img/pdf-svgrepo-com.svg\" alt=\"logo de fichier pdf important de l'EHPAD à télécharger\"></a></td>
                    <td>".$row["nomFichier"]."</td>
                    <td><a href=\"".$row["urlFichier"]."\" download=\"".str_replace($downloadDelete , "", $row["urlFichier"])."\" title=\"".$row["nomFichier"]."\" >Télécharger</a></td></tr>";
            }
          }
      ?>
    </table>
  </div>
  <h2>Documents d'admission</h2>
  <hr>
  <h4 class="paragraphe-introduction">Les documents ci-dessous sont nécessaires à l'inscription dans notre EHPAD. Il vous est possible de les remplir au préalable de toutes démarches, afin de faciliter et d'accélérer celles-ci.</h4>
  <div>
    <table>
    <?php
        $sql = "SELECT * FROM fichiers WHERE type = \"admission\""; 
        $getRows = mysqli_query($conn, $sql);
        $tmpCount = 0;
        while($row = mysqli_fetch_array($getRows)) {
          $tmpCount ++;
        }
        $result = $conn-> query($sql);
        $downloadDelete = array("src", "/", "pdf", "php");
          if ($result-> num_rows > 0 ) {
            for ($i = 0; $i<$tmpCount; $i++){
              $row = $result-> fetch_assoc();
              echo "<tr><td><a href=\"".$row["urlFichier"]."\" download=\"".str_replace($downloadDelete , "", $row["urlFichier"])."\" title=\"".$row["nomFichier"]."\" ><img src=\"src/img/pdf-svgrepo-com.svg\" alt=\"logo de fichier pdf important de l'EHPAD à télécharger\"></a></td>
                    <td>".$row["nomFichier"]."</td>
                    <td><a href=\"".$row["urlFichier"]."\" download=\"".str_replace($downloadDelete , "", $row["urlFichier"])."\" title=\"".$row["nomFichier"]."\" >Télécharger</a></td></tr>";
            }
          }
        $conn -> close();
      ?>
    </table>
  </div>
</main>