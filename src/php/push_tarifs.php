<?php 

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
      if ($conn-> connect_error) {
        die('connection failed:'. $conn-> connect_error);
      }
            
      $conn->set_charset('utf8');

  $tarif_gir12 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["gir_12"]));
  $tarif_gir34 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["gir_34"]));
  $tarif_gir56 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["gir_56"]));
  $tarif_heber = mysqli_real_escape_string($conn, htmlspecialchars($_POST["gir_hebergement"]));

  $query = "UPDATE prix 
            SET price = \"$tarif_heber\" WHERE id = 1";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }

  $query = "UPDATE prix 
            SET price = \"$tarif_gir12\" WHERE id = 2";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }     
  
  $query = "UPDATE prix 
  SET price = \"$tarif_gir34\" WHERE id = 3";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE prix 
  SET price = \"$tarif_gir56\" WHERE id = 4";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  header ('location: ../../paneladmin.php');
  $conn -> close();
?>