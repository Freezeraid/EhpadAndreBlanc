<?php

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'j7E6KbAi', 'ehpad_table');
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

if(!isset($_POST["submit"])) {
  echo "6test";
  return;
}

if ($_FILES["file_add"]["size"] > 50000000) {
  echo "4";
  return;
}

if($uploadFileType != "pdf" ) {
  echo "5";
  return;
}


if ($uploadOk == 0) {
  echo "false";
  return;
} else {
    if (move_uploaded_file($_FILES["file_add"]["tmp_name"], $target_file)) {
      $query = "INSERT INTO fichiers (type, nomFichier, urlFichier)
      VALUES ('".$typeFile."', '".$titleFile."', '".$target_file."')";
      if (!mysqli_query($conn, $query)) {
        echo "22";
        return;
      }
    } else {
        echo "6";
        return;
    }
}
echo "7";
return;
?>