<?php 

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
if ($conn-> connect_error) {
  die('connection failed:'. $conn-> connect_error);
}
      
$conn->set_charset('utf8');
  $tel = substr(htmlspecialchars($_POST["tel"]),1);
  $newtel = mysqli_real_escape_string($conn, $tel);
  $mail = mysqli_real_escape_string($conn, htmlspecialchars($_POST["mail"]));
  $mailadmin = mysqli_real_escape_string($conn, htmlspecialchars($_POST["mail-admin"]));
  $mailanim = mysqli_real_escape_string($conn, htmlspecialchars($_POST["mail-anim"]));

  $query = "UPDATE contact 
            SET valeur = \"$newtel\" WHERE libelle = \"tel\"";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }

  $query = "UPDATE contact 
            SET valeur = \"$mail\" WHERE libelle = \"mail\"";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }  

  $query = "UPDATE contact 
            SET valeur = \"$mailadmin\" WHERE libelle = \"mailadmin\"";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }  

  $query = "UPDATE contact 
            SET valeur = \"$mailanim\" WHERE libelle = \"mailanim\"";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }  

  header ('location: ../../paneladmin.php');
  $conn -> close();
  
?>