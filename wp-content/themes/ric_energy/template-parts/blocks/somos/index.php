<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/somos_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$contenido = get_field('contenido');
$enlace = get_field('enlace');
?>
<section class="main__somos">
    <div class="somos__informacion" data-aos="fade-right">
        <!--        <div class="somos__informacion">-->
        <h1 class="informacion__titulo">
            <?php
            echo $titulo;
            ?>
        </h1>
        <?php
        echo $contenido;
        ?>
    </div>
    <div class="somos__bottom">
        <div class="bottom__enlace" data-aos="fade-right">
            <a class="enlace__link" href="<?php echo esc_url($enlace['url']); ?>">
                <?php echo $enlace['title']; ?>
                <img class="verMas__row"
                     src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/row.png"
                     alt="flecha"/>
            </a>
        </div>
        <div class="bottom__waves">
            <img class="waves__image"
                 src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/WAVES.png"
                 alt="waves"/>
        </div>
    </div>
</section>
</body>
</html>
