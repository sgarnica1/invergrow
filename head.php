<?php
/**
 * Main Header
*/
  include 'header-values.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- GOOGLE ADS -->
  
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-T3ZCRWX');</script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-24C5LSPHER"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-24C5LSPHER');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="robots" content="<?php echo $should_index?>"/>
  <meta property="og:title" content="<?php echo $ruta; ?>">
  <meta property="og:image" content="https://parainvernaderos.mx/imagenes/logo/favicon.jpg">
  <meta property="og:url" content="https://parainvernaderos.mx/">
  <meta property="og:description" content="<?php echo $description; ?>">
  <title><?php echo $ruta; ?></title>

  <!--MAIN CSS-->
  <link rel="stylesheet" href="./assets/css/mobile.css">

  <!--MEDIA QUERIES-->
  <link rel="stylesheet" href="./assets/css/tablet.css" media="screen and (min-width: 700px)">
  <link rel="stylesheet" href="./assets/css/desktop.css " media="screen and (min-width: 900px)">

  <!--FAVICON-->
  <link rel="shortcut icon" href="./assets/logo/favicon.png" type="image/x-icon">

  <!--GOOGLE FONT-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&display=swap" rel="stylesheet">  

  <!--SCRIPTS-->
  <script defer src="./assets/js/app.js"></script>

</head>
<body>

<!-- GOOGLE ADS -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3ZCRWX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

