<?php get_header(); ?>

 <!-- Header -->
  <header>
    <img class="header__image header__image--home" src="<?php echo get_field('banner')['url']; ?>" alt="<?php echo get_field('banner')['alt']; ?>">
    <div class="header__content header__content--home">
      <h1 class="header__title--home">
        <?php echo get_field('titulo_del_banner'); ?>
      </h1>
      <a href="#highlights" class="link link--tertiary header__icon">
        <i class="icon-arrow-down"></i>
      </a>
    </div>
  </header>

<!-- Highlights section -->
  <section id="highlights" class="highlights">
    <h2>
      <?php echo get_field('destacados'); ?>
    </h2>

    <div class="overlay__container">

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--1">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--2">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--3">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--4">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

    </div>
  </section>

  <!-- Latest events -->
  <section class="latest">

    <h2>últimos eventos</h2>
    <a class="link link--secondary link--center" href="events.html">Ver todos los eventos<i class="icon-arrow-right-circle"></i></a>

    <div class="highlight__container container-fluid">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--1 backgroundImage"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
          <div class="highlight__content">
            <h4>
              título evento lorem ipsum dolor sit amet.
            </h4>
            <p>
              Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
              eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
            </p>
            <a class="link link--primary " href="events_single.html">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
          <div class="highlight__content">
            <h4>
              título evento lorem ipsum dolor sit amet.
            </h4>
            <p>
              Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
              eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
            </p>
            <a class="link link--primary" href="events_single.html">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--2 backgroundImage"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--3 backgroundImage"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
          <div class="highlight__content">
            <h4>
              título evento lorem ipsum dolor sit amet.
            </h4>
            <p>
              Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
              eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
            </p>
            <a class="link link--primary" href="events_single.html">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- brands section -->
  <section class="brands">
    <img class="brands__banner" src="<?php echo get_bloginfo('template_url') ?>/images/bg.jpg" alt="logos de marcas">
  </section>

  <?php get_footer(); ?>