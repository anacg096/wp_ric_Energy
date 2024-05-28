<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$contenido = get_field('contenido');
$enlace = get_field('enlace');
?>
<section class="main__somos">
    <div class="somos__informacion" data-aos="fade-right">
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
                     src="<?php echo get_template_directory_uri();?>/assets/images/row.png"
                     alt="flecha"/>
            </a>
        </div>
        <div class="bottom__waves">
            <img class="waves__image"
                 src="<?php echo get_template_directory_uri();?>/assets/images/WAVES.png"
                 alt="waves"/>
        </div>
    </div>
</section>