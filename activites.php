<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="src/css/normalize.css">
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/header.css">
  <link rel="stylesheet" href="src/css/main-activites.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link rel="stylesheet" href="src/css/footer.css">
  <link rel="stylesheet" href="src/css/subfooter.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, notranslate"/>
  <meta name="theme-color" content="#FFBF00"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#FFBF00">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
  <link rel="canonical" href="xxx" />
  <meta charset="utf-8">
  <title>EHPAD André Blanc - Animations</title>
  <meta name="description" content="Retrouvez les différentes Animations proposées par l'EHPAD André Blanc à Pierrefeu-du-var, ainsi que le Planning d'Animation de la semaine." />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link rel="shortcut icon" href="src/img/logo-ehpad.ico" media="none" onload="if(media!='all')media='all'"/>
  <script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        mode: 'fade',
        slideWidth: 1105,
        speed: 300,
        infiniteLoop: true,
        responsive: true,
        auto: true,
        stopAutoOnClick: true,
        autoDelay: 1000
      });
    });
  </script>
</head>
<body>
  <?php
    include 'src/html/header.php';
    include 'src/html/main-activites.php';
    include 'src/html/footer.php';
    include 'src/html/subfooter.php';
  ?>
  <script type="text/javascript" async>
    document.getElementsByClassName("navElements")[3].style.fontStyle = "italic"
    document.getElementsByClassName("navElements")[3].style.borderColor = "#000";
  </script>
</body>
</html>
