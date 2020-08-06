<?php

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
if ($conn-> connect_error) {
  die('connection failed:'. $conn-> connect_error);
}
      
$conn->set_charset('utf8');

$target_dir = "src/pdf/";
$target_file = $target_dir . basename($_FILES["file_add"]["name"]);
$uploadOk = 1;
$uploadFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$typeFile = mysqli_real_escape_string($conn, htmlspecialchars($_POST["type_file"]));
$titleFile = mysqli_real_escape_string($conn, htmlspecialchars($_POST["file_title"]));


if(intval($_SERVER['CONTENT_LENGTH'])>0 && count($_POST)===0){
  throw new Exception('PHP discarded POST data because of request exceeding post_max_size.');
}

if(!isset($_POST["submit"])) {
  $uploadOk = 0;
}

if($uploadFileType != "pdf" ) {
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  header ('location: ../../paneladmin.php');
  $conn -> close();
  return;
} else {
    if (move_uploaded_file($_FILES["file_add"]["tmp_name"], $target_file)) {
      $query = "INSERT INTO fichiers (type, nomFichier, urlFichier)
      VALUES ('".$typeFile."', '".$titleFile."', 'src/php/".$target_file."')";
      if (!mysqli_query($conn, $query)) {
        header ('location: ../../paneladmin.php');
        $conn -> close();
        return;
      }
    } else {
      header ('location: ../../paneladmin.php');
      $conn -> close();
      return;
    }
}
header ('location: ../../paneladmin.php');
$conn -> close(); 
?>