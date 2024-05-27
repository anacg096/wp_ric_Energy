<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/block-header.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// Obtener los campos de ACF.
$logo = get_field('logo', 'option');
$navbar = get_field('navbar', 'option');
$idioma = get_field('idioma', 'option');
$boton_contactar = get_field('boton_contactar', 'option');
$boton_USA = get_field('boton_USA', 'option');

?>
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="nav__logotipo mobile_logo">
            <a href="<?php echo home_url(); ?>">
                <img class="nav_logoImg" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['title']); ?>"/>
            </a>
        </div>
        <div class="nav__menu">
            <div class="mobile_logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="nav_logoImg" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['title']); ?>"/>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ric_navbar"
                    aria-controls="ric_navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="menu__top">
                <div class="top__language dropdown-center">
                    <?php
                    foreach ($idioma as $idiomaItem) {
                    ?>
                    <a class="language__toggle dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <?php echo $idiomaItem['cabecera']; ?>
                    </a>
                    <ul class="toggle__menu dropdown-menu" aria-labelledby="dropdownLanguage">
                        <?php
                        foreach ($idiomaItem['idiomas'] as $languageItem) {
                        ?>
                        <li class="menu__item">
                            <a class="item__option dropdown-item"
                               href="<?php echo esc_url($languageItem['idioma']['url']); ?>">
                                <?php echo $languageItem['idioma']['title']; ?>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <?php
                    }
                    ?>
                </div>

                <div class="top__contactar">
                    <a class="contactar__link" "<?php echo esc_url($boton_contactar['url']); ?>">
                        <?php echo $boton_contactar['title']; ?>
                    </a>
                </div>
            </div>

            <div class="collapse navbar-collapse nav__navbar" id="ric_navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar__ul">
                    <?php
                    foreach ($navbar as $navbarItem) {
                        if (empty($navbarItem['dropdown'])){
                    ?>
                    <li class="nav-item ul__list">
                        <a class="nav-link list__link" href="<?php echo esc_url($navbarItem['item']['url']); ?>">
                            <?php echo $navbarItem['item']['title']; ?>
                        </a>
                    </li>
                    <?php
                        } else {
                    ?>
                    <li class="nav-item dropdown ul__list">
                        <a class="list__link dropdown-toggle" id="dropdown_navItem" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <?php echo $navbarItem['item']['title']; ?>
                        </a>
                        <ul class="list__ulDropdown dropdown-menu" aria-labelledby="dropdownLanguage">
                            <?php
                            foreach ($navbarItem['dropdown'] as $dropdownItem) {
                            ?>
                            <li class="ulDropdown__li">
                                <a class="li__optionLink dropdown-item" href="<?php echo esc_url($dropdownItem['item']['url']); ?>">
                                    <?php echo $dropdownItem['item']['title']; ?>
                                </a>
                            </li>
                            <?php
                            } // foreach dropdown
                            ?>
                        </ul>
                    </li>
                    <?php
                        } //else
                    ?>
                    <?php
                    } //foreach navbar
                    ?>
                    <li class="ul__list mobile__list">
                        <div class="list__navbar">
                            <?php
                            foreach ($boton_USA as $boton) {
                            ?>
                            <a class="navbar__usa" href="<?php echo esc_url($boton['link']['url']); ?>">
                                <img class="button__image"
                                     src="<?php echo esc_url($boton['icono']['url']); ?>"
                                     alt="<?php echo esc_url($boton['icono']['title']); ?>"/>
                                <?php echo $boton['link']['title']; ?>
                            </a>
                            <?php
                            } //foreach botón usa
                            ?>
                            <a class="contactar__link mobile_contactar" "<?php echo esc_url($boton_contactar['url']); ?>">
                            <?php echo $boton_contactar['title']; ?>
                            </a>
                        </div>
                        <div class="top__language dropdown-center mobile_lenguaje">
                            <?php
                            foreach ($idioma as $idiomaItem) {
                            ?>
                            <a class="language__toggle dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <?php echo $idiomaItem['cabecera']; ?>
                            </a>
                            <ul class="toggle__menu dropdown-menu" aria-labelledby="dropdownLanguage">
                                <?php
                                foreach ($idiomaItem['idiomas'] as $languageItem) {
                                    ?>
                                    <li class="menu__item">
                                        <a class="item__option dropdown-item"
                                           href="<?php echo esc_url($languageItem['idioma']['url']); ?>">
                                            <?php echo $languageItem['idioma']['title']; ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>