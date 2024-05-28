<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/nosotros_section.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.

$titulo = get_field('titulo');
$bloques = get_field('bloques');
?>
<section class="main__nosotros">
    <div class="container">
        <div class="nosotros__cabecera">
            <h1 class="cabecera__titulo">
                <?php echo $titulo;?>
            </h1>
        </div>

        <div class="nosotros__bloques" data-aos="fade-up">
            <?php
            foreach ($bloques as $bloque) {
            ?>
            <style>
                .<?php echo $bloque['clase']; ?> {
                    background-image: url('<?php echo $bloque['fondo']['url']; ?>');

                    &:hover {
                        .resumen__background {
                            background-image: url('<?php echo $bloque['hover']['url']; ?>');
                        }
                    }
                }
            </style>
            <div class="bloques__resumen <?php echo $bloque['clase']; ?>">
                <div class="resumen__background "></div>
                <h1 class="resumen__title">
                    <?php echo $bloque['titulo_bloque']; ?>
                </h1>
                <?php if (!empty($bloque['subtitulo'])): ?>
                <h3 class="resumen_subtitle">
                    <?php echo $bloque['subtitulo']; ?>
                </h3>
                <?php endif; ?>
                <?php if (!empty($bloque['contenido'])): ?>
                <p class="resumen__contenido">
                    <?php echo $bloque['contenido']; ?>
                </p>
                <?php endif; ?>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
</body>
</html>
