<?php include 'src/php/connexion.php'; ?>
<main>
  <div id="title-principal">
    <img src="src/img/logo-ehpad.svg" alt="logo de l'EHPAD André Blanc">
    <h1>EHPAD André Blanc<br/>Admission</h1>
  </div>
  <h3 class="page-introduction">Retrouvez ici les différentes étapes nécessaires pour procéder à une admission dans l'établissement.</h3>
  <h2>Déroulement de l'admission</h2>
  <hr>
  <div class="categories-content"><!--
    --><img src="src/img/batiment-ehpad.jpg"  
            alt="test"><!--
    --><p><!--
      -->Avant de débuter une procédure d'admission, il vous est possible de demander une visite préalable des lieux au secrétariat de notre résidence.<br/><br/><!--
      -->Puis, un médecin coordonnateur de l'EHPAD ainsi que l'infirmière coordinatrice donneront leur avis sur l'admission de la personne au sein de notre établissement.<br/><br/><!--
      -->En fonction du degré d'autonomie et de l'état de santé du demandeur vérifiés par ses deux collaborateurs, le Directeur prononcera sa décision.<br/><br/><!--
      -->Ensuite, il vous sera demandé de vous rapprocher du secrétariat pour constituer votre dossier administratif. Le contrat de séjour, le règlement de fonctionnement et d'autres documents règlementaires vous seront remis pour signature.<br/><br/><!--
      -->Enfin, la date d'entrée sera fixée d'un commun accord, et votre trousseau de linge marqué à votre nom vous sera remis.<br/><br/><!--
    --></p><!--
  --></div>
  </div>
  <a class="anchor" title="Contacter l'EHPAD André Blanc" id="tarifs"></a>
  <h2>Les Tarifs</h2>
  <hr>
  <h4 class="paragraphe-introduction">Les tarifs journaliers de l'EHPAD sont fixés annuellement par arrêté du Conseil Départemental suivant le niveau de dépendance. Voir la grille  <a title="lien vers la grille tarifaire AGGIR" rel="noreferrer" href="https://www.mutuelle-miltis.fr/wp-content/uploads/2016/09/AGGIR.png" style="text-decoration: underline;" title="" target="_blank">AGGIR</a>.</h4>
    <div class="Bloc-tarifs"><!--
      <?php
        $sql = "SELECT * FROM prix WHERE libelle = 'gir' ORDER BY id DESC"; 
        $sql2 = "SELECT * FROM prix WHERE libelle = 'hebergement'";
        $result = $conn-> query($sql);
        $result2 = $conn-> query($sql2);
        $hebergementPrice = mysqli_fetch_array($result2);

        if ($result-> num_rows > 0):?>
    --><h5>Tarif<br>GIR 5 et 6</h5><!--
      --><hr><!--
      --><p>Correspond au tarifs pour personnes relativement autonomes, ou nécessitant une aide ponctuelle pour les différentes activités de la vie.<p><!--
      --><div class="sousbloc-tarifs"><!--
        --><p><strong>Tarif hébergement :</strong> <?php echo $hebergementPrice["price"]."€/j"; $hebergementPriceAdd = $hebergementPrice["price"]; ?><p><!--
        --><p>+<p><!--
        --><p><strong>Tarif dépendance :</strong> <?php for ($i = 2; $i<3; $i++){$row = $result-> fetch_assoc();echo $row["price"]."€/j"; $thirdGirAdd = $row["price"];}?><p><!--
        --><p><strong class="true-price"><?php echo $hebergementPriceAdd+$thirdGirAdd."€/j"?></strong><p><!--<?php endif;?>
      --></div><!--
    --></div><!--
    --><div class="Bloc-tarifs"><!--
      --><h5>Tarif<br>GIR 3 et 4</h5><!--
      --><hr><!--
      --><p>Correspond au tarifs pour personnes nécessitant une présence du staff plusieurs fois par semaine pour l'habillage, les soins corporels, et les repas.<p><!--
      --><div class="sousbloc-tarifs"><!--
        --><p><strong>Tarif hébergement :</strong> <?php echo $hebergementPrice["price"]."€/j"; ?><p><!--
        --><p>+<p><!--
        --><p><strong>Tarif dépendance :</strong> <?php for ($i = 1; $i<2; $i++){$row = $result-> fetch_assoc();echo $row["price"]."€/j"; $secondGirAdd = $row["price"];}?><p><!--
        --><p>-<p><!--
        --><p><strong>*Part APA :</strong> <?php echo $secondGirAdd-$thirdGirAdd."€/j"?><p><!--
        --><p><strong class="true-price"><?php echo $hebergementPriceAdd+$thirdGirAdd."€/j"?></strong><p><!--
        --><p class="note-basdepage">*La part APA est une aide délivrée par le Conseil Départemental. Consultez le site officiel du <a title="lien vers le site du service public pour vérifier son éligibilité à l'APA" rel="noreferrer" href="https://www.service-public.fr/particuliers/vosdroits/F10009" style="text-decoration: underline;" target="_blank">service public</a> pour savoir si vous êtes éligible à celle-ci. Hors aides, le montant journalier est de <?php echo $hebergementPriceAdd+$secondGirAdd ?>€/j.</p><!--
      --></div><!--
    --></div><!--
  --><div class="Bloc-tarifs"><!--
    --><h5>Tarif<br>GIR 1 et 2</h5><!--
      --><hr><!--
      --><p>Correspond aux tarifs pour personnes requérant une présence continue, et une assistance obligatoire pour la plupart des activités de la vie.<p><!--
      --><div class="sousbloc-tarifs"><!--
        --><p><strong>Tarif hébergement :</strong> <?php echo $hebergementPrice["price"]."€/j"; ?><p><!--
        --><p>+<p><!--
        --><p><strong>Tarif dépendance :</strong> <?php for ($i = 0; $i<1; $i++){$row = $result-> fetch_assoc();echo $row["price"]."€/j"; $firstGirAdd = $row["price"];}?><p><!--
        --><p>-<p><!--
        --><p><strong>*Part APA :</strong> <?php echo $firstGirAdd-$thirdGirAdd."€/j"?><p><!--
        --><p><strong class="true-price"><?php echo $hebergementPriceAdd+$thirdGirAdd."€/j"?></strong><p><!--
        --><p class="note-basdepage">*La part APA est une aide délivrée par le Conseil Départemental. Consultez le site officiel du <a title="lien vers le site du service public pour vérifier son éligibilité à l'APA" rel="noreferrer" href="https://www.service-public.fr/particuliers/vosdroits/F10009service" style="text-decoration: underline;" target="_blank">service public</a> pour savoir si vous êtes éligible à celle-ci. Hors aides, le montant journalier est de <?php echo $hebergementPriceAdd+$firstGirAdd ?>€/j.</p><!--
      --></div><!--
  --></div><!--
  --><h2>Documents d'admission</h2>
  <hr>
  <h4 class="paragraphe-introduction">Les documents ci-dessous sont nécessaires à l'inscription dans notre EHPAD. Il vous est possible de les remplir au préalable de toutes démarches, afin de faciliter et d'accélérer celles-ci. Vous pouvez également retrouver la liste complète des documents téléchargeables sur le site dans la rubrique <a title="" id="admissionHref" style="text-decoration: underline;" href="documentation.php">Documentation</a>.</h4>
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