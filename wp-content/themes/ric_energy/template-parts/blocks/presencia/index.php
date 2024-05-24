<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/tecnologias_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$bloques = get_field('bloques');
?>

<section class="main__tecnologias">
    <img class="tecnologias__vector" src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/vector_blanco.png" alt="vector_blanco"/>

    <div class="tecnologias__container container">
        <div class="container__title">
            <h1 class="title">
                <?php echo $titulo;?>
            </h1>
        </div>

        <div class="container__tabs" data-aos="fade-up">
            <?php
            foreach ($bloques as $bloque) {
            ?>
            <div class="tabs__tab <?php echo $bloque['clase']; ?>">
                <div class="tab__title">
                <?php echo $bloque['titulo_bloque']; ?>
                </div>
                <?php echo $bloque['contenido']; ?>
                <div class="tab__button">
                    <?php $enlace = $bloque['enlace']; ?>
                    <a class="button__enlace" href="<?php echo esc_url($enlace['url']); ?>">
                        <?php echo $enlace['title']; ?>
                        <img class="ampliar__row"
                             src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/row.png"
                             alt="flecha"/>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
</body>
</html>
