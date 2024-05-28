<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$contenido = get_field('contenido');
$enlace = get_field('enlace');
?>

<section class="main__contacto">
    <div class="container">
        <div class="contacto__divContenido">
            <div class="divContenido__bloqueTitulos" data-aos="fade-right">
                <h2 class="bloqueTitulos__contacto">
                    <?php echo $titulo;?>
                </h2>
                <h3 class="bloqueTitulos__pregunta">
                    <?php echo $subtitulo;?>
                </h3>
            </div>
            <div class="divContenido__bloqueTexto">
                <div class="bloqueTexto__textoEnlace" data-aos="fade-left">
                    <p class="textoEnlace__dudas">
                        <?php echo $contenido;?>
                    </p>
                    <div class="textoEnlace__enlaceContacto">
                        <a class="enlaceContacto__link" href="<?php echo esc_url($enlace['url']); ?>">
                            <?php echo $enlace['title']; ?>
                            <img class="contacto__row"
                                 src="<?php echo get_template_directory_uri();?>/assets/images/row.png"
                                 alt="flecha"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="contacto__mountains" src="<?php echo get_template_directory_uri();?>/assets/images/mountains.png" alt="mountains"/>
</section>