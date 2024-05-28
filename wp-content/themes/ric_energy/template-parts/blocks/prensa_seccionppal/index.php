<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/prensa_seccionppal.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$breadcrumb_item = get_field('breadcrumb_item');
$fondo = get_field('fondo');
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
?>
<section class="seccionppal">
    <div class="seccionppal__breadcrumb">
        <div class="breadcrumb__crumbItem">
            <a class="crumbItem__enlace" href="<?php echo esc_url($breadcrumb_item['url']); ?>">
                <?php echo $breadcrumb_item['title']; ?>
            </a>
        </div>
        <span class="breadcrumb__separador"></span>
        <div class="breadcrumb__crumbItem">
            <span class="crumbItem__pagina">Sala de prensa</span>
        </div>
    </div>

    <div class="seccionppal__vector">
        <svg class="vector__svg" width="85" height="772" viewBox="0 0 85 772"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M53.6545 0C27.291 186.315 39.6157 295.39 51.6053
                  399.966C63.0815 500.048 73.9185 594.997 48.2949
                  771.98H85V772H0V0L53.6545 0Z"
                  fill="#0f5e42"></path>
        </svg>
    </div>
    <style>
        .seccionppal__imagen {
            background-image: url("<?php echo $fondo['url']; ?>");
        }
    </style>
    <div class="seccionppal__imagen"></div>
    <div class="container">
        <div class="seccionppal__cabeceraText">
            <h1 class="cabeceraText__title">
                <?php echo $titulo;?>
            </h1>
            <p class="cabeceraText__parrafo">
                <?php echo $subtitulo;?>
            </p>
        </div>
    </div>
</section>
</body>
</html>

