<?php 

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
if ($conn-> connect_error) {
  die('connection failed:'. $conn-> connect_error);
}
      
$conn->set_charset('utf8');


$file1Delete = array("_", " ", "=", "+", "-");
$file2Delete = array("\\", "/", "=", "+", "-");

foreach( $_POST as $cle=>$value )
{
  $myFile = str_replace($file1Delete, ' ', mysqli_real_escape_string($conn, htmlspecialchars($cle." = ".$value)));
  $myNewFile = str_replace($file2Delete, ' ', $myFile);
  $query = "DELETE FROM fichiers WHERE nomFichier='".$myFile."'";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

header ('location: ../../paneladmin.php');
$conn -> close();
?>