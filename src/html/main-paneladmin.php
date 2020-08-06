<main>
  <div id="title-principal">
    <img src="src/img/logo-ehpad.svg" alt="logo de l'EHPAD André Blanc">
    <h1>EHPAD André Blanc<br/>Panel Admin</h1>
  </div>
  <h2>Modifier les tarifs de l'EHPAD</h2>
  <hr>
  <h4 class="paragraphe-introduction">Modifiez les tarifs d'hébergement de l'EHPAD grâce au tableau ci-dessous.<br>Pour remplir le tableau, utilisez un "." pour séparer les euros et les centimes.<br>N'affichez seulement que le prix, sans le sigle €.</h4>
  <div style="overflow-x:auto;">
  <form action="src/php/push_tarifs.php" method="post" onsubmit="return confirmation();">
    <table>
      <thead>
          <tr>
              <th></th>
              <th>GIR 1/2</th>
              <th>GIR 3/4</th>
              <th>GIR 5/6</th>
              <th>Hébergement</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <td>Tarifs</td>
            <td>
              <input type="text" name="gir_12" contenteditable="true">
            </td>
            <td>
              <input type="text" name="gir_34" contenteditable="true">
            </td>
            <td>
              <input type="text" name="gir_56" contenteditable="true">
            </td>
            <td>
              <input type="text" name="gir_hebergement" contenteditable="true">
            </td>
        </tr>
      </tbody>
    </table>
    <button class="en-savoir-plus" type="submit">Modifier</button>
  </form>
  </div>
  <h2>Modifier les informations de contact</h2>
  <hr>
  <h4 class="paragraphe-introduction">Modifiez les informations de contact de l'EHPAD grâce au tableau ci-dessous.<br></h4>
  <div style="overflow-x:auto;">
  <form action="src/php/push_contact.php" method="post" onsubmit="return confirmation();">
    <table>
      <thead>
          <tr>
              <th></th>
              <th>Secrétariat</th>
              <th>Administration</th>
              <th>Animation</th>
              <th>Téléphone</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <td>Infos</td>
            <td>
              <input type="email" name="mail" contenteditable="true">
            </td>
            <td>
              <input type="email" name="mail-admin" contenteditable="true">
            </td>
            <td>
              <input type="email" name="mail-anim" contenteditable="true">
            </td>
            <td>
              <input type="tel" name="tel" contenteditable="true">
            </td>
        </tr>
      </tbody>
    </table>
    <button class="en-savoir-plus" type="submit">Modifier</button>
  </form>
  </div>
  <h2>Ajouter un fichier</h2>
  <hr>
  <h4 class="paragraphe-introduction">Cliquez sur parcourir pour rechercher le fichier que vous souhaitez ajouter sur le site.<br>Donnez lui un titre visible par les utilisateurs et un type pour définir sa fonction.<br>Vous ne pouvez ajouter que des fichiers au format PDF.<br>Si possible, supprimez les espaces, les chiffres et les majuscules du nom du fichier pour éviter des bugs.</h4>
  <div style="overflow-x:auto;">
  <table id="add-file-form">
    <thead>
        <tr>
            <th>Type</th>
            <th>Titre</th>
            <th>Fichier</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <form action="src/php/uploadfile.php" method="post" enctype="multipart/form-data" onsubmit="return confirmation();">
          <td><select name="type_file">
            <option value="Informations">Informations</option>
            <option value="Admission">Admission</option>
          </select></td>
          <td><input type="text" name="file_title"></td>
          <td><input type="file" name="file_add" accept="application/pdf"></td>
          <td><button class="en-savoir-plus" type="submit" name="submit">Ajouter</button></td>
      </form>
      </tr>
    </tbody>
  </table>
  </div>
  <h2>Supprimer un fichier</h2>
  <hr>
  <h4 class="paragraphe-introduction">Cliquez sur supprimer pour enlever un fichier de la liste des documents disponibles sur le site.<br></h4>
  <div style="overflow-x:auto;">
  <table>
    <thead>
          <tr>
              <th>Type</th>
              <th>Titre</th>
              <th>Action</th>
          </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM fichiers"; 
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
              echo "<tr><form action=\"src/php/deletefile.php\" method=\"POST\" onsubmit=\"return confirmation();\"/><td>".$row["type"]."</td>
                    <td class=\"fileselector\"><input name=\"".$row["nomFichier"]."\" type=\"hidden\" >".$row["nomFichier"]."</td>
                    <td><button class=\"suppression-button\" type=\"submit\">Supprimer</button></td></form></tr>";
            }
          }
      ?>
    </tbody>
  </table>
  </div>
</main>