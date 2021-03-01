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
        <a href="#categories" class="banner_bttn">Ver catálogo</a>
      </div>
    </section>

    <!--CATEGORIES CARDS-->
    <section class="categories" id="categories">
      <div class="categories_title">
        <h2>Conoce nuestras categorías</h2>
      </div>
      <section class="categories_cards">
        <div class="categories_card cat1">
          <h4>Insumos: Agricultura Protegida</h4>
          <a href="./agricultura-protegida">Ver más></a>
        </div>
        <div class="categories_card cat2">
          <h4>Insumos: Campo Abierto</h4>
          <a href="./campo-abierto">Ver más></a>
        </div>
        <div class="categories_card cat3">
          <h4>Venta y renta de montacargas</h4>
          <a href="./montacargas">Ver más></a>
        </div>
      </section>
      </section>

      <!--CATEGORIES DESCRIPTION-->
      <section class="categories_description">
        <div class="category_description category_1">
          <div class="category_description_info">
            <h2>1 -</h2>
            <h3>Insumos: Agricultura Protegida</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio eveniet vitae tempora amet distinctio temporibus similique aliquam recusandae a sunt earum minima illo vel iure aut rem cupiditate, culpa fugit!</p>
            <div class="button-border button-border-1">
              <a href="./agricultura-protegida" class="category_description_button description_button_1">Ver catálogo</a>
            </div>
            <img src="./assets/img/cat_des_2_mb.png" alt="Imagen de invernadero con plantas color" class="category_description_img">
          </div>
        </div>
        <div class="category_description category_2">
          <div class="category_description_info">
            <div class="category_description_info_text">
              <h2>2 -</h2>
              <h3>Insumos: Campo Abierto</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio eveniet vitae tempora amet distinctio temporibus similique aliquam recusandae a sunt earum minima illo vel iure aut rem cupiditate, culpa fugit!</p>
              <div class="button-border button-border-2">
                <a href="./campo-abierto" class="category_description_button description_button_2">Ver catálogo</a>
              </div>
            </div>
            <img src="./assets/img/cat_des_3_mb.png" alt="Imagen de un tractor grande, color verde con llantas negras con rines rojos" class="category_description_img">
          </div>
        </div>
        <div class="category_description category_3">
          <div class="category_description_info">
            <h2>3 -</h2>
            <h3>Venta y renta de montacargas</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio eveniet vitae tempora amet distinctio temporibus similique aliquam recusandae a sunt earum minima illo vel iure aut rem cupiditate, culpa fugit!</p>
            <div class="button-border button-border-3">
              <a href="./montacargas" class="category_description_button description_button_3">Ver catálogo</a>
            </div>
            <img src="./assets/img/cat_des_3.1_mb.png" alt="Imagen de un tractor grande, color verde con llantas negras con rines rojos" class="category_description_img">
          </div>
        </div>
      </section>

      <!--BRAND LOGOS-->
      <section class="brand_carousel">
        <h2>Nuestro catálogo de marcas</h2>
        <hr>
        <section class="carousel">
          <div class="carousel_list">
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_1_c.jpg" alt="Logo Azteca" class="carousel_img img1">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_2_c.jpg" alt="Logo Bison" class="carousel_img img2">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_3_c.jpg" alt="Logo Case In" class="carousel_img img3">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_4_c.jpg" alt="Logo Famaq" class="carousel_img img4">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_5_c.jpg" alt="Logo Amssa International" class="carousel_img img5">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_6_c.jpg" alt="Logo Broch" class="carousel_img img6">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_7_c.jpg" alt="Logo Jympa" class="carousel_img img7">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_8_c.jpg" alt="Logo Kimball" class="carousel_img img8">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_9_c.jpg" alt="Logo New Holland Agriculture" class="carousel_img img9">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_10_c.jpg" alt="Logo Norte Implementos" class="carousel_img img10"> 
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_11_c.jpg" alt="Logo BKT" class="carousel_img img11">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_12_c.jpg" alt="Logo Kubota" class="carousel_img img12">
            </div>
            <div class="carousel_item">
              <img src="./assets/img/brands_logos/b_13_c.jpg" alt="Logo Swissmex" class="carousel_img img13">
            </div>
          </div>
        </section>
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
