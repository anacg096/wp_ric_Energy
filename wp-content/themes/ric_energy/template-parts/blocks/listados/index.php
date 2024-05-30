<?php
// Obtener los campos de ACF.
$noticias = get_field('noticias');
$query = new WP_Query(array('category_name' => 'Noticias', 'posts_per_page' => 11));
?>
<section class="main__bloqueListados">
    <div class="container">
        <div class="bloqueListados__bloque" data-aos="fade-up">
            <?php
            if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="bloque__listItem">
                        <div class="listItem__date">
                            <span class="date__enlace">
                                Noticias
                            </span>
                            <span class="date__fecha">
                                | <?php echo get_the_date('d/m/y'); ?>
                            </span>
                        </div>
                        <h3 class="listItem__title">
                            <?php echo the_title(); ?>
                        </h3>
                        <div class="listItem__imgBox">
                            <?php if(has_post_thumbnail()): ?>
                            <div class="imgBox__contenedor">
                                <img class="contenedor__img"
                                     src="<?php the_post_thumbnail_url('medium_large')?>"
                                     alt="<?php echo esc_attr(get_the_title()); ?>" />
                            </div>
                            <?php endif; ?>
                        </div>
                        <a class="bloque__listLink" href="<?php echo the_permalink(); ?>"></a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <div class="bloqueListados__loadButton">
            <a class="loadButton__link" href="#">
                CARGAR MÁS
                <img class="carga__row" src="<?php echo get_template_directory_uri();?>/assets/images/carga.png" alt="flecha" />
            </a>
        </div>
    </div>
</section>