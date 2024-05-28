<?php
// Obtener los campos de ACF.
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$partners = get_field('partners');
?>
<style>
    .main__partners {
        background-image: url("<?php echo get_template_directory_uri();?>/assets/images/fondo.png");
    }
</style>
<section class="main__partners">
    <div class="container">
        <div class="partners__encabezado" data-aos="fade-up">
            <h2 class="encabezado__title">
                <?php echo $titulo;?>
            </h2>
            <p class="encabezado__parrafo">
                <?php echo $subtitulo;?>
            </p>
        </div>

        <div class="partners__slider slider">
                <?php
                foreach ($partners as $partner) {

                ?>
                <div class="slider__object">
                    <img class="object__partner" src="<?php echo $partner['imagen']['sizes']['medium']; ?>" alt="<?php echo $partner['imagen']['name']; ?>"/>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="controls__slider">
            <div class="slider__progressBar">
                <div id="progress_one" class="progressbar__section active_partners"></div>
                <div id="progress_two" class="progressbar__section"></div>
                <div id="progress_three" class="progressbar__section"></div>
            </div>
            <div class="slider__arrows">
                <div class="arrows__arrow">
                    <button id="prev_partners" class="arrow__btn opacity_partners">
                        <img class="btn__img" src="<?php echo get_template_directory_uri();?>/assets/images/left-arrow.png" alt="left_arrow"/>
                    </button>
                </div>
                <div class="arrows__arrow">
                    <button id="next_partners" class="arrow__btn">
                        <img class="btn__img" src="<?php echo get_template_directory_uri();?>/assets/images/right-arrow.png" alt="right_arrow"/>
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>