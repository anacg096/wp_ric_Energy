<?php
// Obtener los campos de ACF.
$contenido = get_field('contenido');
$fondo = get_field('fondo');
?>
<style>
    .cabecera__vector {
        background-image: url("<?php echo get_template_directory_uri();?>/assets/images/vector.png");
    }
    .section__cabecera {
        background-image: url("<?php echo $fondo['url']; ?>");
    }
</style>
<section class="section__cabecera">
    <div class="cabecera__vector">
        <div class="container">
            <?php
            echo $contenido;
            ?>
        </div>
    </div>
</section>