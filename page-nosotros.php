<?php get_header(); ?>


<body>


  <!-- Header -->
  <header>
    <img class="header__image header__image--default" src="<?php echo get_bloginfo('template_url') ?>/images/team-banner.jpg" alt="banner">
    <div class="header__content header__content--default">
      <h1>
        <?php echo get_field('titulo_del_banner'); ?>
      </h1>
    </div>
  </header>


  <!-- Workflow section -->
  <section class="workflow">

    <h2>
      <?php echo get_field('destacado'); ?>
    </h2>

    <div class="workflow__container">

      <div class="workflow__thumbnail">
        <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/images/circle__card.svg" alt=""/>
        <h4>
          Título etapa lorem ipsum dolor sit amet
        </h4>
        <p>
          Donec in nunc dictum, eleifend mauris, mattis turpis. Aenean nec nisl nec lorem
          condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet, eget molestie ligula maximus.
        </p>
      </div>

      <div class="workflow__thumbnail">
        <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/images/circle__beach.svg" alt=""/>
        <h4>
          Título etapa lorem ipsum dolor sit amet
        </h4>
        <p>
          Donec in nunc dictum, eleifend mauris, mattis turpis. Aenean nec nisl nec lorem
          condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet, eget molestie ligula maximus.
        </p>
      </div>

      <div class="workflow__thumbnail">
        <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/images/circle__surf.svg" alt=""/>
        <h4>
          Título etapa lorem ipsum dolor sit amet
        </h4>
        <p>
          Donec in nunc dictum, eleifend mauris, mattis turpis. Aenean nec nisl nec lorem
          condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet, eget molestie ligula maximus.
        </p>
      </div>
    </div>

  </section>

  <!-- Timeline section -->
  <section class="timeline">
    <h2>
      nuestra historia
    </h2>

    <div id="carouselExampleIndicators" class="carousel carousel--timeline slide" data-ride="carousel">

      <!-- timeline -->
      <ol class="carousel-indicators carousel__timeline">
        <li class="timeline__indicator active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li class="timeline__indicator"        data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      </ol>

      <div class="carousel-inner">

        <!-- slides -->
        <div class="carousel-item active">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="First slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Second slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Third slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Fourth slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Fifth slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Sixth slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Seventh slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-block w-100">
            <div class="carousel__slide">
              <img class="carousel__image" src="<?php echo get_bloginfo('template_url') ?>/images/team-image-1.jpg" alt="Eighth slide">
              <div class="carousel__content">
                <h4>
                  2008
                </h4>
                <h4 class="secondary">
                  título representativo lorem ipsum
                </h4>
                <p>
                  Illa tamen simplicia, vestra versuta. At, illa, ut vobis placet, partem quandam
                  tuetur, reliquam deserit. An hoc usque quaque, aliter in vita? Atqui iste locus
                  est, Piso, tibi etiam atque etiam confirmandus, inquam; His similes sunt omnes,
                  qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. An
                  hoc usque quaque, aliter in vita.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="icon-arrow-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="icon-arrow-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

    </div>

  </section>

  <!-- Team section -->
  <section class="team">
    <h2>
      nuestro equipo
    </h2>

    <div class="overlay__container">

      <div class="backgroundImage overlay__thumbnail team__thumbnail--1">
        <div class="overlay__content">
          <h3>
            nombre persona lorem ipsum
          </h3>
          <p class="secondary">
            Vitae autem degendae ratio maxime quidem illis placuit quieta. Primum cur ista res
            digna odio est, nisi quod est turpis. Atqui iste locus est, Piso, tibi etiam atque
            etiam confirmandus, inquam; His similes sunt omnes, qui virtuti student levantur vitiis.
          </p>
        </div>
        <div class="overlay overlay--yellow"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail team__thumbnail--2">
        <div class="overlay__content">
          <h3>
            nombre persona lorem ipsum
          </h3>
          <p class="secondary">
            Vitae autem degendae ratio maxime quidem illis placuit quieta. Primum cur ista res
            digna odio est, nisi quod est turpis. Atqui iste locus est, Piso, tibi etiam atque
            etiam confirmandus, inquam; His similes sunt omnes, qui virtuti student levantur vitiis.
          </p>
        </div>
        <div class="overlay overlay--yellow"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail team__thumbnail--3">
        <div class="overlay__content">
          <h3>
            nombre persona lorem ipsum
          </h3>
          <p class="secondary">
            Vitae autem degendae ratio maxime quidem illis placuit quieta. Primum cur ista res
            digna odio est, nisi quod est turpis. Atqui iste locus est, Piso, tibi etiam atque
            etiam confirmandus, inquam; His similes sunt omnes, qui virtuti student levantur vitiis.
          </p>
        </div>
        <div class="overlay overlay--yellow"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail team__thumbnail--4">
        <div class="overlay__content">
          <h3>
            nombre persona lorem ipsum
          </h3>
          <p class="secondary">
            Vitae autem degendae ratio maxime quidem illis placuit quieta. Primum cur ista res
            digna odio est, nisi quod est turpis. Atqui iste locus est, Piso, tibi etiam atque
            etiam confirmandus, inquam; His similes sunt omnes, qui virtuti student levantur vitiis.
          </p>
        </div>
        <div class="overlay overlay--yellow"></div>
      </div>

    </div>
  </section>

 <?php get_footer(); ?>
</body>
</html>
