<?php

add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types() {

    // Verifica que la función acf_register_block_type exista.
    if( function_exists('acf_register_block_type') ) {

        // HOME

        acf_register_block_type(array(
            'name'              => 'seccionppal_home',
            'title'             => __('seccionppal_home'),
            'description'       => __('Bloque sección principal de la home'),
            'render_template'   => 'template-parts/blocks/index_seccionppal/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-text',
            'keywords'          => array( 'seccionppal_home', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/index_seccionppal.css',
        ));

        acf_register_block_type(array(
            'name'              => 'somos',
            'title'             => __('somos'),
            'description'       => __('Bloque somos'),
            'render_template'   => 'template-parts/blocks/somos/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-text',
            'keywords'          => array( 'somos', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/somos_section.css',
        ));

        acf_register_block_type(array(
            'name'              => 'nosotros',
            'title'             => __('nosotros'),
            'description'       => __('Bloque nosostros'),
            'render_template'   => 'template-parts/blocks/nosotros/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'format-aside',
            'keywords'          => array( 'nosotros', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/nosotros_section.css',
        ));

        acf_register_block_type(array(
            'name'              => 'tecnologias',
            'title'             => __('tecnologias'),
            'description'       => __('Bloque tecnologias'),
            'render_template'   => 'template-parts/blocks/tecnologias/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-spreadsheet',
            'keywords'          => array( 'tecnologias', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/tecnologias_section.css',
        ));

        acf_register_block_type(array(
            'name'              => 'presencia',
            'title'             => __('presencia'),
            'description'       => __('Bloque presencia'),
            'render_template'   => 'template-parts/blocks/presencia/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'admin-site-alt',
            'keywords'          => array( 'presencia', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/presencia_section.css',
        ));

        acf_register_block_type(array(
            'name'              => 'partners',
            'title'             => __('partners'),
            'description'       => __('Bloque partners'),
            'render_template'   => 'template-parts/blocks/partners/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'slides',
            'keywords'          => array( 'partners', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/partners_section.css',
        ));

        acf_register_block_type(array(
            'name'              => 'noticias',
            'title'             => __('noticias'),
            'description'       => __('Bloque noticias'),
            'render_template'   => 'template-parts/blocks/noticias/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'slides',
            'keywords'          => array( 'noticias', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/noticias_section.css',
        ));

        acf_register_block_type(array(
            'name'              => 'contacto',
            'title'             => __('contacto'),
            'description'       => __('Bloque contacto'),
            'render_template'   => 'template-parts/blocks/contacto/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'testimonial',
            'keywords'          => array( 'contacto', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/contacto_section.css',
        ));

        // SALA DE PRENSA

        acf_register_block_type(array(
            'name'              => 'seccionppal_prensa',
            'title'             => __('seccionppal_prensa'),
            'description'       => __('Bloque sección principal de la página de prensa'),
            'render_template'   => 'template-parts/blocks/prensa_seccionppal/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-text',
            'keywords'          => array( 'seccionppal_prensa', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/prensa_seccionppal.css',
        ));

        acf_register_block_type(array(
            'name'              => 'listados',
            'title'             => __('listados'),
            'description'       => __('Bloque listados'),
            'render_template'   => 'template-parts/blocks/listados/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'list-view',
            'keywords'          => array( 'listados', 'block' ),
            'enqueue_style' => get_template_directory_uri() . '/assets/css/listados_section.css',
        ));
    }
}
