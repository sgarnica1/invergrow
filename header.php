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
  <meta property="og:image" content="https://parainvernaderos.mx/assets/logo/favicon.png">
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
        <li class="navbar_list_item navbar_item"><a href="./assets/catalog/catalogo_invergrow.pdf" target="_blank" download="Catálogo Invergrow 2021">Catálogo</a></li>
        <li class="mobile_nav_social_media">
          <a href="https://www.facebook.com/invergrow" target="_blank" class="facebook social_media_nav" rel="noreferrer noopener"></a>
          <a href="https://www.instagram.com/inver.grow/" target="_blank" class="instagram" rel="noreferrer noopener"></a>
        </li>
      </ul>
      <a href="tel:4421249783" class="header_phone_link">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0)">
          <path d="M38.8586 28.2658L30.1086 24.5158C29.7348 24.3565 29.3194 24.3229 28.9248 24.4202C28.5303 24.5174 28.178 24.7401 27.9211 25.0549L24.0461 29.7892C17.9646 26.9219 13.0705 22.0278 10.2031 15.9463L14.9375 12.0713C15.2529 11.8148 15.4761 11.4625 15.5734 11.0678C15.6706 10.6731 15.6366 10.2574 15.4766 9.88377L11.7266 1.13377C11.5509 0.730964 11.2402 0.402087 10.848 0.203847C10.4557 0.0056078 10.0066 -0.0495685 9.57812 0.0478329L1.45312 1.92284C1.03998 2.01823 0.671363 2.25087 0.407449 2.58274C0.143535 2.91462 -9.51727e-05 3.32616 4.73142e-08 3.75018C4.73142e-08 23.7892 16.2422 40.0002 36.25 40.0002C36.6741 40.0004 37.0859 39.8569 37.4179 39.593C37.7499 39.329 37.9827 38.9603 38.0781 38.5471L39.9531 30.4221C40.0499 29.9914 39.9935 29.5406 39.7937 29.147C39.594 28.7535 39.2633 28.4418 38.8586 28.2658Z" fill="#7FD9BD"/>
          </g>
          <defs>
          <clipPath id="clip0">
          <rect width="40" height="40" fill="white"/>
          </clipPath>
          </defs>
        </svg>
        442.124.9783
      </a>
      <div class="header_social_media">
          <a href="https://www.facebook.com/invergrow" target="_blank" class="header_facebook" rel="noreferrer noopener"></a>
          <a href="https://www.instagram.com/inver.grow/" target="_blank" class="header_instagram" rel="noreferrer noopener"></a>
        </div>
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
    <div class="whatsapp-btn hide" id="whatsapp-bttn">
      <a href="https://wa.link/hyuyal" target="_blank"><img src="./assets/icon/whatsapp_1.svg" alt=""></a>
    </div>