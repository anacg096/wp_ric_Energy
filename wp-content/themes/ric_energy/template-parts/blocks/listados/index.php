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
                <img class="carga__row" src="<?php echo get_template_directory_uri();?>/assets/images/carga.png" alt="flecha" />
            </a>
        </div>
    </div>
</section>