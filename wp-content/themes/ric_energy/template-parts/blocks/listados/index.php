<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/listados_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$noticias = get_field('noticias');
?>

    <section class="main__bloqueListados">
        <div class="container">
            <div class="bloqueListados__bloque" data-aos="fade-up">
                <?php
                foreach ($noticias as $noticia) {
                ?>
                <div class="bloque__listItem">
                    <div class="listItem__date">
                        <a class="date__enlace" href="<?php echo esc_url($noticia['noticia_link']['url']); ?>">
                            <?php echo $noticia['noticia_link']['title']; ?>
                        </a>
                        <span class="date__fecha">
                            <?php echo $noticia['fecha']; ?>
                        </span>
                    </div>
                    <h3 class="listItem__title">
                        <?php echo $noticia['titulo']; ?>
                    </h3>
                    <div class="listItem__imgBox">
                        <div class="imgBox__contenedor">
                            <img class="contenedor__img"
                                 src="<?php echo esc_url($noticia['imagen']['sizes']['large']); ?>"
                                 alt="<?php echo esc_url($noticia['imagen']['title']); ?>"/>
                        </div>
                    </div>
                    <a class="bloque__listLink" href="<?php echo esc_url($noticia['noticia_link']['url']); ?>"></a>
                </div>
                <?php
                }
                ?>

            </div>
            <div class="bloqueListados__loadButton">
                <a class="loadButton__link" href="#">
                    CARGAR MÁS
                    <img class="carga__row" src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/carga.png" alt="flecha" />
                </a>
            </div>
        </div>
    </section>
</body>
</html>
