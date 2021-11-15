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
  <meta name="description" content="La Malla antiáfidos es una barrera física encargada de la protección de los invernaderos ante la posible entrada de insectos o microorganismos que puedan causar una pérdida en el cultivo.">
  <meta name="robots" content="index"/>
  <meta property="og:title" content="Mallas antiáfidos - Invergrow | Soluciones Agrícolas">
  <meta property="og:image" content="https://parainvernaderos.mx/imagenes/productos/mallas-antiafidos-min.jpg">
  <meta property="og:url" content="https://parainvernaderos.mx/">
  <meta property="og:description" content="La Malla antiáfidos es una barrera física encargada de la protección de los invernaderos ante la posible entrada de insectos o microorganismos que puedan causar una pérdida en el cultivo.">
  <title>Mallas antiáfidos - Invergrow | Soluciones Agrícolas</title>

  <!--MAIN CSS-->
  <link rel="stylesheet" href="./assets/css/mobile.css">
  <link rel="stylesheet" href="./assets/css/products.css">

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
<?php
  include "./header-fixed.php";
?>

    <!--MAIN BANNER-->

      <div class="wrapper" id="inicio">
        <section class="product__container">
          <div class="product__image-container">
            <div class="product__image-main">
              <img id="template-img" src="https://parainvernaderos.mx/imagenes/productos/mallas-antiafidos-min.jpg" alt="Mallas antiáfidos">
            </div>
            <div class="prodcut__image-gallery">
              <img src="https://parainvernaderos.mx/imagenes/productos/mallas-antiafidos-min.jpg" alt="Mallas antiáfidos" class="product__image-gallery-article">
              <img src="https://parainvernaderos.mx/imagenes/productos/mallas-antiafidos-2-min.jpg" alt="Mallas antiáfidos" class="product__image-gallery-article">
            </div>
          </div>
          <div class="product__info">
            <h1 class="product__title">Mallas antiáfidos</h1>
            <div class="product__divider"></div>
            <div class="product__description">
              <p>
                La Malla antiáfidos es una barrera física encargada de la protección de los invernaderos ante la posible entrada de insectos o microorganismos que puedan causar una pérdida en el cultivo ya sea por virus, plagas o ataque a las raíces.
                Gracias a esta malla se reduce el uso de los agroquímicos y permite controlar el nivel de humedad dentro del invernadero, es una alternativa natural para impedir que el cultivo sea infestado de insectos.
                <br><br>¡Utiliza esta malla para evitar el ingreso de insectos a tu invernadero!
              </p>  
            </div>
          <a href="https://wa.link/hyuyal" target="_blank" class="product__button">Cotizar</a>
          </div>
          
        </section>
        <section class="related-products__container">
          <h2 class="related-products__title">También te puede interesar</h2>
          <div class="related-products__list">
            <a href="./geomembrana" class="related-products__item">
              <img src="https://parainvernaderos.mx/imagenes/productos/geomembrana-min.jpg" alt="Geomembrana">
              <h4>Geomembrana</h4>
            </a>
            <a href="./charolas-propagacion" class="related-products__item">
              <img src="https://parainvernaderos.mx/imagenes/productos/charolas-de-propagacion-2-min.jpg" alt="Charolas de propagación">
              <h4>Charolas de propagación</h4>
            </a>
            <a href="./ground-cover" class="related-products__item">
              <img src="https://parainvernaderos.mx/imagenes/productos/ground-cover-2-min.jpg" alt="Ground cover">
              <h4>Ground cover</h4>
            </a>
            <a href="./clip-tutoreo" class="related-products__item">
              <img src="https://parainvernaderos.mx/imagenes/productos/clip-para-tutoreo-min.jpg" alt="Clip para tutoreo">
              <h4>Clip para tutoreo</h4>
            </a>
          </div>
          <a href="./productos" class="relate-products__back-btn">&larr; Volver al catálogo completo</a>
        </section>
      </div>
  </main>

  <script src="./assets/js/products.js"></script>

  <!--FOOTER-->
  <?php
    include './footer.php'
  ?>