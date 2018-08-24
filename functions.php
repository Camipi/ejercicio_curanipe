<?php 

	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		//Registrar estilos
		wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, $theme_data->get('1.0'));

		//Llamar estilos
		wp_enqueue_style('main');
	}

	add_action('wp_enqueue_scripts', 'dl_enqueue_style');


	function dl_enqueue_scripts() {

		//Registrar js
		wp_enqueue_script('scripts', get_parent_theme_file_uri('/js/script.js'), null, '1.0', true);

		//Llamar escripts
		wp_enqueue_script('scripts');
	}

	add_action('wp_enqueue_scripts', 'dl_enqueue_scripts');



	