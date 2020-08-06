<?php

$conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
if ($conn-> connect_error) {
  die('connection failed:'. $conn-> connect_error);
}
      
$conn->set_charset('utf8');

$admin_login = mysqli_real_escape_string($conn, $_POST["form_login"]);
$admin_pw = mysqli_real_escape_string($conn, $_POST["form_mdp"]);


if(isset($_POST) && !empty($admin_login) && !empty($admin_pw)) {
    extract($_POST);
    $query = "SELECT pass FROM comptes WHERE identifiant='".$admin_login."'";
    if (!mysqli_query($conn, $query)) {
        echo "Error updating record: " . mysqli_error($conn);
    }
    $req = mysqli_query($conn, $query);
  
    $data = mysqli_fetch_assoc($req);
  
    if($data['pass'] != $admin_pw) {
      echo '<p>Mauvais login / password. Merci de recommencer</p>';
      exit;
    }
    else {
      session_start();
      $_SESSION['tetst'] = $admin_login;
      header ('location: ../../paneladmin.php');
    }    
  }
else {
    echo 'fail !';
    exit;
}

$conn -> close();
?>