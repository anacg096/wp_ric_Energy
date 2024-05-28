<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$bloques = get_field('bloques');
?>
<style>
    .main__tecnologias {
        background-image: url("<?php echo get_template_directory_uri();?>/assets/images/base_2.png");
    }
</style>
<section class="main__tecnologias">
    <img class="tecnologias__vector" src="<?php echo get_template_directory_uri();?>/assets/images/vector_blanco.png" alt="vector_blanco"/>

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
                <style>
                    .<?php echo $bloque['clase']; ?> {
                        background-image: url('<?php echo $bloque['fondo']['url']; ?>');
                    }
                </style>
            <div class="tabs__tab <?php echo $bloque['clase']; ?>">
                <div class="tab__title">
                    <h1 class="title__tech">
                        <?php echo $bloque['titulo_bloque']; ?>
                    </h1>
                </div>
                <?php echo $bloque['contenido']; ?>
                <div class="tab__button">
                    <?php $enlace = $bloque['enlace']; ?>
                    <a class="button__enlace" href="<?php echo esc_url($enlace['url']); ?>">
                        <?php echo $enlace['title']; ?>
                        <img class="ampliar__row"
                             src="<?php echo get_template_directory_uri();?>/assets/images/row.png"
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