<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/contacto_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$contenido = get_field('contenido');
$enlace = get_field('enlace');
?>

<section class="main__contacto">
    <div class="container">
        <div class="contacto__divContenido">
            <div class="divContenido__bloqueTitulos" data-aos="fade-right">
                <h2 class="bloqueTitulos__contacto">
                    <?php echo $titulo;?>
                </h2>
                <h3 class="bloqueTitulos__pregunta">
                    <?php echo $subtitulo;?>
                </h3>
            </div>
            <div class="divContenido__bloqueTexto">
                <div class="bloqueTexto__textoEnlace" data-aos="fade-left">
                    <?php echo $contenido;?>
                    <div class="textoEnlace__enlaceContacto">
                        <a class="enlaceContacto__link" href="<?php echo esc_url($enlace['url']); ?>">
                            <?php echo $enlace['title']; ?>
                            <img class="contacto__row"
                                 src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/row.png"
                                 alt="flecha"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="contacto__mountains" src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/mountains.png" alt="mountains"/>
</section>
</body>
</html>
