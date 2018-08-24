<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>CURANIPE SURF</title>
	<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/app.css"/>
  <?php wp_head(); ?>

</head>
<body>
  <!-- Navigation bar -->
  <nav class="navbar navbar-dark navbar-expand-lg">
    <a href="#">
      <img class="navbar-brand" src="<?php echo get_bloginfo('template_url') ?>/images/logo.svg" alt="curanipe-surf logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.html">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.html">Eventos y Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.html">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contacto</a>
        </li>

      </ul>
    </div>
  </nav>

 