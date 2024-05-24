<?php

add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types() {

    // Verifica que la función acf_register_block_type exista.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'seccionppal_home',
            'title'             => __('seccionppal_home'),
            'description'       => __('Bloque sección principal de la home'),
            'render_template'   => 'template-parts/blocks/index_seccionppal/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-text',
            'keywords'          => array( 'seccionppal_home', 'block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'somos',
            'title'             => __('somos'),
            'description'       => __('Bloque somos'),
            'render_template'   => 'template-parts/blocks/somos/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-text',
            'keywords'          => array( 'somos', 'block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'nosotros',
            'title'             => __('nosotros'),
            'description'       => __('Bloque nosostros'),
            'render_template'   => 'template-parts/blocks/nosotros/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'format-aside',
//            'icon'              => 'media-text',
            'keywords'          => array( 'nosotros', 'block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'tecnologias',
            'title'             => __('tecnologias'),
            'description'       => __('Bloque tecnologias'),
            'render_template'   => 'template-parts/blocks/tecnologias/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'media-spreadsheet',
            'keywords'          => array( 'tecnologias', 'block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'presencia',
            'title'             => __('presencia'),
            'description'       => __('Bloque presencia'),
            'render_template'   => 'template-parts/blocks/presencia/index.php',
            'category'          => 'ric_energy',
            'icon'              => 'admin-site-alt',
            'keywords'          => array( 'presencia', 'block' ),
        ));
    }
}
