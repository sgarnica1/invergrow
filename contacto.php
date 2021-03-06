<?php
/**
 * Include header
 * From header.php
*/

  include 'header.php'
?>

    <!--MAIN BANNER-->

    <section class="banner contact_banner" id="inicio">
      <div class="banner_img">
        <h1 class="banner_title">Contáctanos</h1>
      </div>
    </section>

    <!--CONTACT FORM-->
    <section class="contact">
      <section class="contact_form_container">
        <div class="contact_form_title_container">
          <h2 class="contact_form_title">¿Cómo podemos ayudarte?</h2>
          <p class="contact_form_description">Ponemos a tu disposición nuestro formulario de contacto, teléfono y correo electrónico para que te comuniques con nosotros para cualquier duda o cotización.<br></p>
          <p class="contact_form_description">Si quieres saber más sobre nosotros puedes también seguirnos en nuestras redes sociales.</p>
        </div>
        <div class="contact_form">
          <form action="./assets/php/contact.php" method="POST" novalidate onsubmit="return validation()">
            <div class="input_container">
              <input type="text" id="name" name="name" required>
              <label for="name">Nombre</label>
            </div>
            <div class="input_container email">
              <input type="email" id="email" name="email" required>
              <label for="email">Correo electrónico</label>
            </div>
            <div class="input_container">
              <input type="number" id="phone" name="phone" required>
              <label for="phone">Número telefónico</label>
            </div>
            <div class="input_container">
              <input type="text" id="subject" name="subject" required>
              <label for="subject">Asunto</label>
            </div>
            <div class="input_container textarea">
              <textarea name="message" id="message" cols="30" rows="10" required></textarea>
              <label for="message">¿Cómo podemos ayudarte?</label>
            </div>
            <span class="error_message">Uno o más campos son inválidos. Por favor revísalos e intenta de nuevo</span>
            <span class="success_message">Tu mensaje fue enviado con éxito. En breve nos pondremos en contacto contigo</span>
            <div>
              <input type="submit" value="Enviar" class="submit_bttn" id="submit_bttn">
            </div>
          </form>
        </div>
      </section>
      <section class="contact_info_container">
        <h4>Contáctanos</h4>
        <ul class="contact_link_list">
          <li class="contact_link whatsapp">
            <a href="https://wa.link/hyuyal" target="_blank"> 
              <svg width="35" height="40" viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.7578 7.58594C26.4844 4.30469 22.125 2.5 17.4922 2.5C7.92969 2.5 0.148438 10.2812 0.148438 19.8437C0.148438 22.8984 0.945312 25.8828 2.46094 28.5156L0 37.5L9.19531 35.0859C11.7266 36.4687 14.5781 37.1953 17.4844 37.1953H17.4922C27.0469 37.1953 35 29.4141 35 19.8516C35 15.2188 33.0312 10.8672 29.7578 7.58594ZM17.4922 34.2734C14.8984 34.2734 12.3594 33.5781 10.1484 32.2656L9.625 31.9531L4.17188 33.3828L5.625 28.0625L5.28125 27.5156C3.83594 25.2187 3.07812 22.5703 3.07812 19.8437C3.07812 11.8984 9.54688 5.42969 17.5 5.42969C21.3516 5.42969 24.9688 6.92969 27.6875 9.65625C30.4062 12.3828 32.0781 16 32.0703 19.8516C32.0703 27.8047 25.4375 34.2734 17.4922 34.2734ZM25.3984 23.4766C24.9688 23.2578 22.8359 22.2109 22.4375 22.0703C22.0391 21.9219 21.75 21.8516 21.4609 22.2891C21.1719 22.7266 20.3438 23.6953 20.0859 23.9922C19.8359 24.2812 19.5781 24.3203 19.1484 24.1016C16.6016 22.8281 14.9297 21.8281 13.25 18.9453C12.8047 18.1797 13.6953 18.2344 14.5234 16.5781C14.6641 16.2891 14.5937 16.0391 14.4844 15.8203C14.375 15.6016 13.5078 13.4688 13.1484 12.6016C12.7969 11.7578 12.4375 11.875 12.1719 11.8594C11.9219 11.8438 11.6328 11.8438 11.3438 11.8438C11.0547 11.8438 10.5859 11.9531 10.1875 12.3828C9.78906 12.8203 8.67188 13.8672 8.67188 16C8.67188 18.1328 10.2266 20.1953 10.4375 20.4844C10.6562 20.7734 13.4922 25.1484 17.8438 27.0312C20.5938 28.2187 21.6719 28.3203 23.0469 28.1172C23.8828 27.9922 25.6094 27.0703 25.9688 26.0547C26.3281 25.0391 26.3281 24.1719 26.2188 23.9922C26.1172 23.7969 25.8281 23.6875 25.3984 23.4766Z" fill="#7FD9BD"/>
              </svg>
              442.123.4567
            </a>
          </li>
          <li class="contact_link phone">
            <a href="tel:4421249783" target="_blank">
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
              442.123.4567
            </a>
          </li>
          <li class="contact_link email">
            <a href="mailto:info@parainvernaderos.mx" target="_blank">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.2422 14.9062C39.5469 14.6641 40 14.8906 40 15.2734V31.25C40 33.3203 38.3203 35 36.25 35H3.75C1.67969 35 0 33.3203 0 31.25V15.2812C0 14.8906 0.445312 14.6719 0.757812 14.9141C2.50781 16.2734 4.82812 18 12.7969 23.7891C14.4453 24.9922 17.2266 27.5234 20 27.5078C22.7891 27.5312 25.625 24.9453 27.2109 23.7891C35.1797 18 37.4922 16.2656 39.2422 14.9062ZM20 25C21.8125 25.0312 24.4219 22.7188 25.7344 21.7656C36.1016 14.2422 36.8906 13.5859 39.2812 11.7109C39.7344 11.3594 40 10.8125 40 10.2344V8.75C40 6.67969 38.3203 5 36.25 5H3.75C1.67969 5 0 6.67969 0 8.75V10.2344C0 10.8125 0.265625 11.3516 0.71875 11.7109C3.10938 13.5781 3.89844 14.2422 14.2656 21.7656C15.5781 22.7188 18.1875 25.0312 20 25Z" fill="#7FD9BD"/>
              </svg>                
              info@parainvernaderos.mx
            </a>
          </li>
          <li class="contact_link location">
            <a href="https://goo.gl/maps/x4bznyGDfoqmNyCcA" target="_blank">
              <svg width="36" height="50" viewBox="0 0 36 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M32.8026 8.5622C29.7682 3.32548 24.3783 0.12616 18.3847 0.00389404C18.1288 -0.00137939 17.8713 -0.00137939 17.6153 0.00389404C11.6218 0.12616 6.23192 3.32548 3.19735 8.5622C0.0955966 13.9149 0.0107335 20.3446 2.9703 25.7617L15.369 48.4557C15.3746 48.4658 15.3802 48.4759 15.3859 48.4858C15.9314 49.434 16.9087 50 18.0002 50C19.0916 50 20.0688 49.4339 20.6142 48.4858C20.62 48.4759 20.6256 48.4658 20.6311 48.4557L33.0299 25.7617C35.9892 20.3446 35.9044 13.9149 32.8026 8.5622ZM18 22.6562C14.1229 22.6562 10.9687 19.502 10.9687 15.625C10.9687 11.7479 14.1229 8.59374 18 8.59374C21.877 8.59374 25.0312 11.7479 25.0312 15.625C25.0312 19.502 21.8771 22.6562 18 22.6562Z" fill="#7FD9BD"/>
              </svg>
              Circuito Azaleas 1200-A int. 67 Residencial Zizana. El Marqués, Querétaro.
            </a>
          </li>
        </ul>
        <div class="map">
          <iframe title="Circuito Azaleas 1200-A int. 67 Residencial Zizana. El Marqués, Querétaro." src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.580649011024!2d-100.30726533576137!3d20.645943056113982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35c51fd6e3e69%3A0x3f9ce0c9cb0b2715!2sZizana%20Residencial!5e0!3m2!1ses-419!2smx!4v1613755654904!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <ul class="social_media_contact">
          <li class="social_media_link fb">
            <a href="https://www.facebook.com/invergrow/" target="_blank">
              <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
            </a>
          </li>
          <li class="social_media_link ig">
            <a href="https://www.instagram.com/inver.grow/" target="_blank">
              <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
            </a>
          </li>
        </ul>
      </section>
    </section>

  </main>

  <script defer src="./assets/js/validation.js"></script>

  <!--FOOTER-->
  <?php
    include 'footer.php'
  ?>
