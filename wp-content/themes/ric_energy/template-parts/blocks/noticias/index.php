<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/noticias_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$enlace = get_field('enlace');
$noticias = get_field('noticias');
?>

<section class="main__noticias">
    <div class="container">
        <div class="noticias__encabezado">
            <div class="encabezado__bloqueTitle" data-aos="fade-right">
                <h1 class="bloqueTitle">
                    <?php echo $titulo; ?>
                </h1>
            </div>
            <div class="encabezado__bloqueLink" data-aos="fade-left">
                <a class="bloqueLink__enlace" href="<?php echo esc_url($enlace['url']); ?>">
                    <?php echo $enlace['title']; ?>
                    <img class="noticias__row"
                         src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/row.png"
                         alt="flecha"/>
                </a>
            </div>
        </div>

        <div class="noticias__slider slider" data-aos="fade-up">
            <?php
            foreach ($noticias as $noticia) {
                ?>
            <div class="slider__container">
                <div class="container__newsInformation">
                    <div class="newsInformation__encabezado">
                        <p class="encabezado__comunicados">
                            <?php echo $noticia['encabezado']; ?>
                        </p>
                    </div>
                    <div class="newsInformation__line"></div>
                    <div class="newsInformation__date">
                        <p class="date">
                            <?php echo $noticia['fecha']; ?>
                        </p>
                    </div>
                </div>

                <div class="container__newsContent">
                    <div class="newsContent__bloque">
                        <?php echo $noticia['contenido']; ?>
                    </div>
                    <div class="newsContent__enlaceDiv">
                        <a class="enlaceDiv__enlace" href="<?php echo esc_url($noticia['link']['url']); ?>">
                            <style>
                                .<?php echo $noticia['clase']; ?> {
                                    background-image: url('<?php echo $noticia['imagen']['url']; ?>');
                                }
                            </style>
                            <div class="enlace__img <?php echo $noticia['clase']; ?>">
                                <div class="img__containerLink">
                                    <button class="containerLink__leer">
                                        <?php echo $noticia['link']['title']; ?>
                                        <img class="leer__row"
                                             src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/row.png"
                                             alt="flecha"/>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="noticias__controller">
            <div class="controller__progressBar">
                <div id="news_one" class="progressbar__bloque active_news"></div>
                <div id="news_two" class="progressbar__bloque"></div>
                <div id="news_three" class="progressbar__bloque"></div>
                <div id="news_four" class="progressbar__bloque"></div>
                <div id="news_five" class="progressbar__bloque"></div>
                <div id="news_six" class="progressbar__bloque"></div>
            </div>
            <div class="controller__panel">
                <div class="arrows__btn">
                    <button id="prev_news" class="btn__flecha opacity_news">
                        <img class="flecha__news" src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/left-arrow.png" alt="left_arrow"/>
                    </button>
                </div>
                <div class="arrows__btn">
                    <button id="next_news" class="btn__flecha">
                        <img class="flecha__news" src="http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/right-arrow.png" alt="right_arrow"/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
