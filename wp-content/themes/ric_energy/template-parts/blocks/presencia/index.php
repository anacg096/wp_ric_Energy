<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$bloques = get_field('bloques');
?>

<section class="main__presencia">
    <div class="container">
        <div class="presencia__title">
            <h1 class="title__global">
                <?php echo $titulo;?>
            </h1>
        </div>

        <div class="presencia__sectionMapa">
            <div class="sectionMapa__containerMapa">
                <img class="containerMapa__mapa" src="<?php echo get_template_directory_uri();?>/assets/images/map_countries.png" alt="mapa">
                <?php
                foreach ($bloques as $bloque) {
                ?>
                <div class="containerMapa__datos <?php echo $bloque['clase']; ?>">
                    <div class="datos__country">
                        <?php echo $bloque['pais']; ?>
                    </div>
                    <div class="datos__valor">
                        <?php echo $bloque['valor']; ?>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</section>