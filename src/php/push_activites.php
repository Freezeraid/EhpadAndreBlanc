<?php 
$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
if ($conn-> connect_error) {
  die('connection failed:'. $conn-> connect_error);
}
      
$conn->set_charset('utf8');

  $activite1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_1"];));
  $activite2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_2"];));
  $activite3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_3"];));
  $activite4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_4"];));
  $activite5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_5"];));
  $activite6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_6"];));
  $activite7 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_7"];));
  $activite8 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_8"];));
  $activite9 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_9"];));
  $activite10 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_10"];));
  $activite11 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_11"];));
  $activite12 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_12"];));
  $activite13 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_13"];));
  $activite14 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_14"];));
  $activite15 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_15"];));
  $activite16 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_16"];));
  $activite17 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_17"];));
  $activite18 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_18"];));
  $activite19 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_19"];));
  $activite20 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_20"];));
  $activite21 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_21"];));
  $activite22 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_22"];));
  $activite23 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_23"];));
  $activite24 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_24"];));
  $activite25 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_25"];));
  $activite26 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_26"];));
  $activite27 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_27"];));
  $activite28 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["activite_28"];));

  $query = "UPDATE activites 
            SET activite = \"$activite1\" WHERE id = 1";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }

  $query = "UPDATE activites 
            SET activite = \"$activite2\" WHERE id = 2";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }     
  
  $query = "UPDATE activites 
  SET activite = \"$activite3\" WHERE id = 3";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite4\" WHERE id = 4";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite5\" WHERE id = 5";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite6\" WHERE id = 6";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite7\" WHERE id = 7";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite8\" WHERE id = 8";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite9\" WHERE id = 9";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite10\" WHERE id = 10";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
  SET activite = \"$activite11\" WHERE id = 11";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  } 

  $query = "UPDATE activites 
  SET activite = \"$activite12\" WHERE id = 12";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite13\" WHERE id = 13";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite14\" WHERE id = 14";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite15\" WHERE id = 15";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite16\" WHERE id = 16";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite17\" WHERE id = 17";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite18\" WHERE id = 18";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite19\" WHERE id = 19";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite20\" WHERE id = 20";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite21\" WHERE id = 21";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite22\" WHERE id = 22";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite23\" WHERE id = 23";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite24\" WHERE id = 24";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite25\" WHERE id = 25";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite26\" WHERE id = 26";
    if (!mysqli_query($conn, $query)) {
      echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite27\" WHERE id = 27";
    if (!mysqli_query($conn, $query)) {
      echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE activites 
    SET activite = \"$activite28\" WHERE id = 28";
    if (!mysqli_query($conn, $query)) {
      echo "Error updating record: " . mysqli_error($conn);
  }      

header ('location: ../../paneladmin.php');
$conn -> close();

?>