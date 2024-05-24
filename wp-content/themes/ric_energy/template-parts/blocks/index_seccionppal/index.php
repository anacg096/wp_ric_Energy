<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/index_seccionppal.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$contenido = get_field('contenido');
?>
<section class="section__cabecera">
    <div class="cabecera__vector">
        <div class="container">
            <?php
            echo $contenido;
            ?>
        </div>
    </div>
</section>
</body>
</html>

