<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$enlace = get_field('enlace');
$relacionados = get_field('noticias');
$query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6));
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
                         src="<?php echo get_template_directory_uri();?>/assets/images/row.png"
                         alt="flecha"/>
                </a>
            </div>
        </div>

        <div class="noticias__slider slider" data-aos="fade-up">
            <?php
            if ($relacionados): ?>
                <?php foreach ($relacionados as $post): ?>
                    <div class="slider__container">
                        <div class="container__newsInformation">
                            <div class="newsInformation__encabezado">
                                <p class="encabezado__comunicados">
                                    Noticias
                                </p>
                            </div>
                            <div class="newsInformation__line"></div>
                            <div class="newsInformation__date">
                                <p class="date">
                                    <?php echo get_the_date('d/m/y', $post->ID); ?>
                                </p>
                            </div>
                        </div>

                        <div class="container__newsContent">
                            <div class="newsContent__bloque">
                                <p class="bloque__newsParrafo">
                                    <?php
                                    // Obtener y mostrar el título del post relacionado
                                    echo get_the_title($post->ID);
                                    ?>
                                </p>
                            </div>
                            <div class="newsContent__enlaceDiv">
                                <a class="enlaceDiv__enlace" href="<?php echo get_the_permalink($post->ID); // Obtener y mostrar el enlace del post relacionado ?>">
                                    <?php if (has_post_thumbnail($post->ID)): ?>
                                        <div class="enlace__img" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'medium_large'); ?>');">
                                            <div class="img__containerLink">
                                                <button class="containerLink__leer">
                                                    LEER MÁS
                                                    <img class="leer__row"
                                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/row.png"
                                                         alt="flecha"/>
                                                </button>
                                            </div>
                                        </div>
                                    <?php else: // En caso de que no haya miniatura ?>
                                        <div class="enlace__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.png');">
                                            <div class="img__containerLink">
                                                <button class="containerLink__leer">
                                                    LEER MÁS
                                                    <img class="leer__row"
                                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/row.png"
                                                         alt="flecha"/>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

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
                        <img class="flecha__news" src="<?php echo get_template_directory_uri();?>/assets/images/black-left-arrow.png" alt="left_arrow"/>
                    </button>
                </div>
                <div class="arrows__btn">
                    <button id="next_news" class="btn__flecha">
                        <img class="flecha__news" src="<?php echo get_template_directory_uri();?>/assets/images/black-right-arrow.png" alt="right_arrow"/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>