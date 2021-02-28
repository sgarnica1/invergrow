<?php
/**
 * Main Header
*/
  include 'header-values.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="robots" content="<?php echo $should_index?>"/>
  <meta property="og:title" content="<?php echo $ruta; ?>">
  <meta property="og:image" content="https://parainvernaderos.mx/assets/logo/invergrow_logo_recortado.png">
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
  <script defer src="./assets/js/products.js"></script>

</head>
<body>

  <!--HEADER-->

  <header class="header">
    <nav class="navbar">
      <a href="./" class="navbar_logo" id="home_logo">
        <img src="./assets/logo/invergrow_logo_recortado_blanco.png" alt="Logo Invergrow" >
      </a>
      <ul class="navbar_list">
        <li class="icon cancel-btn">
        </li>
        <li class="navbar_list_item navbar_item"><a href="./" class="activeSection">Inicio</a></li>
        <li class="navbar_list_item navbar_item navbar_submenu_parent">
          <a href="#">Catálogo</a>
          <span id="dropdown-menu"></span>
          <ul class="navbar_submenu hide">
            <li class="navbar_submenu_item navbar_item"><a href="./agricultura-protegida"><span class="navbar_submenu_item_arrow"></span>Insumos: Agricultura protegida</a></li>
            <li class="navbar_submenu_item navbar_item"><a href="./campo-abierto"><span class="navbar_submenu_item_arrow"></span>Insumos: Campo abierto</a></li>
            <li class="navbar_submenu_item navbar_item"><a href="./montacargas"><span class="navbar_submenu_item_arrow"></span>Venta y renta de montacargas</a></li>
          </ul>
        </li>
        <li class="navbar_list_item navbar_item"><a href="./#nosotros" class="nosotros_link">Nosotros</a></li>
        <li class="navbar_list_item navbar_item"><a href="./contacto">Contacto</a></li>
        <li class="navbar_list_item navbar_item"><a href="./assets/catalog/catalogo_invergrow.pdf" target="_blank" download="Catálogo Invergrow 2021">Descargar catálogo</a></li>
        <li class="mobile_nav_social_media">
          <a href="https://www.facebook.com/invergrow" target="_blank" class="facebook social_media_nav"></a>
          <a href="https://www.instagram.com/inver.grow/" target="_blank" class="instagram  "></a>
        </li>
      </ul>
      <div class="icon menu-btn">
        <span></span>
      </div>
    </nav>
  </header>

    <!--MAIN SECTION-->

    <main>

    <!--FIXED BUTTONS-->

    <div class="to_top_bttn hide" id="top-bttn">
      <a href="#inicio"><img src="./assets/icon/angle-up-white.svg" alt=""></a>
    </div>
    <div class="whatsapp-btn hidew" id="whatsapp-bttn">
      <a href="https://wa.link/hyuyal" target="_blank"><img src="./assets/icon/whatsapp_2.svg" alt=""></a>
    </div>