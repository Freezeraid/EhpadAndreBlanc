<?php 

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
if ($conn-> connect_error) {
  die('connection failed:'. $conn-> connect_error);
}
      
$conn->set_charset('utf8');

  $plat1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_1"]));
  $plat2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_2"]));
  $plat3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_3"]));
  $plat4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_4"]));
  $plat5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_5"]));
  $plat6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_6"]));
  $plat7 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_7"]));
  $plat8 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_8"]));
  $plat9 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_9"]));
  $plat10 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_10"]));
  $plat11 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_11"]));
  $plat12 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_12"]));
  $plat13 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_13"]));
  $plat14 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_14"]));
  $plat15 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_15"]));
  $plat16 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_16"]));
  $plat17 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_17"]));
  $plat18 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_18"]));
  $plat19 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_19"]));
  $plat20 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_20"]));
  $plat21 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_21"]));
  $plat22 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_22"]));
  $plat23 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_23"]));
  $plat24 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_24"]));
  $plat25 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_25"]));
  $plat26 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_26"]));
  $plat27 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_27"]));
  $plat28 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_28"]));
  $plat29 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_29"]));
  $plat30 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_30"]));
  $plat31 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_31"]));
  $plat32 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_32"]));
  $plat33 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_33"]));
  $plat34 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_34"]));
  $plat35 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_35"]));
  $plat36 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_36"]));
  $plat37 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_37"]));
  $plat38 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_38"]));
  $plat39 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_39"]));
  $plat40 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_40"]));
  $plat41 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_41"]));
  $plat42 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["plat_42"]));

  $query = "UPDATE repas 
            SET contenu = \"$plat1\" WHERE id = 1";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }

  $query = "UPDATE repas 
            SET contenu = \"$plat2\" WHERE id = 2";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }     
  
  $query = "UPDATE repas 
  SET contenu = \"$plat3\" WHERE id = 3";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat4\" WHERE id = 4";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat5\" WHERE id = 5";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat6\" WHERE id = 6";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat7\" WHERE id = 7";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat8\" WHERE id = 8";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat9\" WHERE id = 9";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat10\" WHERE id = 10";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat11\" WHERE id = 11";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  } 

  $query = "UPDATE repas 
  SET contenu = \"$plat12\" WHERE id = 12";
  if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat13\" WHERE id = 13";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat14\" WHERE id = 14";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat15\" WHERE id = 15";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat16\" WHERE id = 16";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat17\" WHERE id = 17";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat18\" WHERE id = 18";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat19\" WHERE id = 19";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat20\" WHERE id = 20";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat21\" WHERE id = 21";
     if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat22\" WHERE id = 22";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat23\" WHERE id = 23";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat24\" WHERE id = 24";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat25\" WHERE id = 25";
      if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat26\" WHERE id = 26";
    if (!mysqli_query($conn, $query)) {
      echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat27\" WHERE id = 27";
    if (!mysqli_query($conn, $query)) {
      echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
    SET contenu = \"$plat28\" WHERE id = 28";
    if (!mysqli_query($conn, $query)) {
      echo "Error updating record: " . mysqli_error($conn);
  }    

  $query = "UPDATE repas 
  SET contenu = \"$plat29\" WHERE id = 29";
   if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
  }    

$query = "UPDATE repas 
  SET contenu = \"$plat30\" WHERE id = 30";
    if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat31\" WHERE id = 31";
   if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat32\" WHERE id = 32";
   if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat33\" WHERE id = 33";
    if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat34\" WHERE id = 34";
   if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat35\" WHERE id = 35";
    if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat36\" WHERE id = 36";
    if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat37\" WHERE id = 37";
    if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat38\" WHERE id = 38";
    if (!mysqli_query($conn, $query)) {
  echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat39\" WHERE id = 39";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat40\" WHERE id = 40";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
}    

$query = "UPDATE repas 
  SET contenu = \"$plat41\" WHERE id = 41";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
}   

$query = "UPDATE repas 
  SET contenu = \"$plat42\" WHERE id = 42";
  if (!mysqli_query($conn, $query)) {
    echo "Error updating record: " . mysqli_error($conn);
}  
 
header ('location: ../../paneladmin.php');
$conn -> close();
?>