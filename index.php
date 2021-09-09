<?php
/**
 * Include header
 * From header.php
*/

  include 'header.php'
?>

    <!--MAIN BANNER-->

    <section class="banner main_banner" id="inicio">
      <div class="banner_img">
        <h1 class="banner_title">¡Cotiza ya los mejores precios del mercado!</h1>
        <hr class="banner_divider">
        <h2 class="banner_subtitle">Conoce Invergrow</h2>
        <a href="./agricultura-protegida" class="banner_bttn">Ver Productos</a>
      </div>
    </section>

    <!--CATEGORIES CARDS-->
    <section class="categories" id="categories">
      <div class="categories_title">
        <h2>Conoce nuestras categorías</h2>
      </div>
      <section class="categories_cards">
        <a href="./agricultura-protegida" class="categories_card cat1">
          <h3>Insumos Agricultura Protegida</h4>
        </a>
      </section>
      </section>

      <!--CATEGORIES DESCRIPTION-->
      <section class="categories_description">
        <div class="category_description category_1">
          <div class="category_description_info">
            <h2>1</h2>
            <h3>Insumos: Agricultura Protegida</h3>
            <p>Conoce todos nuestros insumos para agricultura protegida, desde clips para tutoreo, rafias y ganchos hasta mezclas profesionales de sustratos, tijeras y navajas.</p>
            <div class="button-border button-border-1">
              <a href="./agricultura-protegida" class="category_description_button description_button_1">Ver catálogo</a>
            </div>
            <img src="./assets/img/cat_des_2_mb.png" alt="Imagen de invernadero con plantas color" class="category_description_img">
          </div>
        </div>
      </section>


      <!--NOSOTROS-->
      <section class="hero" id=nosotros>
        <p>Nuestra misión es ofrecer una experiencia de servicio con calidad de excelencia sin dejar de lado el contacto humano con humano en donde nos proponemos a empatizar con la problemática de nuestros clientes y ofrecerles una solución rápida e integral.</p>
        <img src="./assets/logo/invergrow_logo_recortado_blanco.png" alt="Logo invergrow color blanco">
      </section>

      <!--CONTACT BANNER-->
      <section class="contact_banner">
        <div class="contact_banner_divider"></div>
        <div class="contact_banner_text">
          <h3>Haz realidad tus proyectos.</br>Empieza hoy</h3>
          <a href="./contacto">Contactar</a>
        </div>
      </section>
  </main>

  <!--FOOTER-->
  <?php
    include 'footer.php'
  ?>
