<?php include 'src/php/connexion.php'; ?>
<?php 
session_start();
if (!empty($_SESSION['tetst'])) {
  header ('location: paneladmin.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="src/css/normalize.css">
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/header.css">
  <link rel="stylesheet" href="src/css/main-admin.css">
  <link rel="stylesheet" href="src/css/footer.css">
  <link rel="stylesheet" href="src/css/subfooter.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow, notranslate"/>
  <meta name="theme-color" content="#FFBF00"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#FFBF00">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
  <meta charset="utf-8">
  <title>EHPAD André Blanc - Notre EHPAD</title>
  <link rel="shortcut icon" href="src/img/logo-ehpad.ico" media="none" onload="if(media!='all')media='all'"/>
</head>
<body>
  <?php
    include 'src/html/header.php';
    include 'src/html/main-admin.php';
    include 'src/html/subfooter.php';
  ?>
</body>
</html>
