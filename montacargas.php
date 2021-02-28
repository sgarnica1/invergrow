<?php
/**
 * Include header
 * From header.php
*/

  include 'header.php'
?>

<!--MAIN BANNER-->

<section class="banner banner--tractores banner_categorias" id="inicio">
  <div class="banner_img">
    <h1 class="banner_title">MONTACARGAS</h1>
    <hr>
    <p class="banner_description">Venta y renta</p>
  </div>
  <div class="banner_text">
    <a href="./assets/catalog/catalogo_invergrow.pdf" target="_blank" download="Catálogo Invergrow 2021">Descargar catálogo</a>
  </div>
</section>


<!--PRODUCT LIST-->

<section class="product_grid">
  <div class="pop_up-product hide">
    <span class="close_popup_bttn"></span>
    <img src="#" alt="#">
  </div>
  <section class="product_grid_cat product_grid_cat-1 product_tractores">
    <div class="product_cat_title">
      <h3>Montacargas Semi Nuevos</h3>
    </div>
    <section class="product_list single_product_list">
      <article class="product_element">
        <div class="product_img_container">
            <span class="bttn-prev_img carousel_bttn"></span>
            <div class="product_img">
              <img src="./assets/img/products/tractores/10.jpg" alt="Montacargas Semi Nuevos" class="img_front">
              <img src="./assets/img/products/tractores/9.jpg" alt="Montacargas Semi Nuevos" class="img_back">
            </div>
            <span class="bttn-next_img carousel_bttn"></span>
        </div>
        <div class="product_info">
          <h4 class="product_title">Montacargas Semi Nuevos</h4>
          <p class="product_description"></p>
        </div>
      </article>
    </section>
  </section>
  <section class="product_grid_cat product_grid_cat-1 product_tractores">
    <div class="product_cat_title slide">
      <h3>Renta de montacargas</h3>
    </div>
    <section class="product_list single_product_list">
      <article class="product_element">
        <div class="product_img_container">
            <span></span>
            <div class="product_img">
              <img src="./assets/img/products/tractores/17.jpg" alt="Renta de montacargas" class="img_front">
            </div>
            <span></span>
        </div>
        <div class="product_info">
          <h4 class="product_title">Renta de montacargas</h4>
          <p class="product_description"></p>
        </div>
      </article>
    </section>
  </section>
</section>  
</main>  

  <!--FOOTER-->
  <?php
    include 'footer.php'
  ?>