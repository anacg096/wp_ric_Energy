<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/presencia_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$bloques = get_field('bloques');
?>

<section class="main__presencia">
    <div class="container">
        <div class="presencia__title">
            <h1 class="title__global">
                <?php echo $titulo;?>
            </h1>
        </div>

        <div class="presencia__sectionMapa">
            <div class="sectionMapa__containerMapa">
                <img class="containerMapa__mapa" src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/map_countries.png" alt="mapa">
                <?php
                foreach ($bloques as $bloque) {
                ?>
                <div class="containerMapa__datos <?php echo $bloque['clase']; ?>">
                    <div class="datos__country">
                        <?php echo $bloque['pais']; ?>
                    </div>
                    <div class="datos__valor">
                        <?php echo $bloque['valor']; ?>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</section>
</body>
</html>
