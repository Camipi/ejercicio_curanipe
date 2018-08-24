<body>
<html>
<!-- footer -->
  <footer class="backgroundImage">
    <div class="container">
      <div class="row">

        <div class="offset-xl-0 col-xl-2 offset-lg-0 col-lg-2 offset-md-0 col-md-2 offset-sm-0 col-sm-4 offset-3 col-6 footer__brandContainer">
          <img class="footer__brand" src="<?php echo get_bloginfo('template_url') ?>/images/logo.svg" />
        </div>

        <nav class="offset-xl-1 col-xl-2 offset-lg-1 col-lg-2 offset-md-1 col-md-2 offset-sm-0 col-sm-4 offset-2 col-4 footer__navigation">
          <div class="footer__item"><a class="link--tertiary" href="team.html">Nosotros</a></div>
          <div class="footer__item"><a class="link--tertiary" href="events.html">Eventos y Galería</a></div>
          <div class="footer__item"><a class="link--tertiary" href="services.html">Servicios</a></div>
          <div class="footer__item"><a class="link--tertiary" href="news.html">Noticias</a></div>
        </nav>

        <div class="offset-xl-0 col-xl-3 offset-lg-0 col-lg-3 offset-md-0 col-md-3 offset-sm-0 col-sm-4 offset-0 col-6 footer__contact">
          <div class="footer__item">Contacto</div>
          <div class="footer__item footer__item--secondary"><i class="fab fa-whatsapp"></i> +56 9 81 965 127</div>
          <div class="footer__item footer__item--secondary">Síguenos <a class="link--tertiary" href=""><i class="fab fa-facebook-f"></i></a> <a class="footer__link link--tertiary" href=""><i class="fab fa-instagram"></i></a> </div>
        </div>

        <form class="offset-xl-0 col-xl-4 offset-lg-0 col-lg-4 offset-md-0 col-md-4 offset-sm-1 col-sm-10 offset-1 col-10 footer__form">

          <input type="text" class="form__input form-control" id="inputName" placeholder="Nombre">
          <input type="email" class="form__input form-control" id="inputMail" placeholder="Mail" aria-describedby="emailHelp">
          <input type="text" class="form__input form-control" id="inputMessage" placeholder="Mensaje">

          <button type="submit" class="form__button btn">Enviar</button>
        </form>

      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>
  </html>