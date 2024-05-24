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

?>
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="nav__logotipo mobile_logo">
            <a href="<?php echo home_url(); ?>">
                <?php if ($logo && !empty($logo['url'])): ?>
                    <img class="nav_logoImg" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"/>
                <?php else: ?>
                    <!--                        --><?php //$default_logo_url = 'http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/logotipo-1.png'; ?>
                    <!--                        <img class="nav_logoImg" src="--><?php //echo esc_url($default_logo_url); ?><!--" alt="logotipo_ric"/>-->
                <?php endif; ?>
            </a>
        </div>
        <!--            <div class="nav__menu">-->
        <!--                <div class="mobile_logo">-->
        <!--                    <a href="--><?php //echo home_url(); ?><!--">-->
        <!--                        --><?php //if ($logo && !empty($logo['url'])): ?>
        <!--                            <img class="nav_logoImg" src="--><?php //echo esc_url($logo['url']); ?><!--" alt="--><?php //echo esc_attr($logo['alt']); ?><!--"/>-->
        <!--                        --><?php //else: ?>
        <!--                            --><?php //$default_logo_url = 'http://localhost/proyectos_wordpress/wordpress/wp-content/uploads/2024/05/logotipo-1.png'; ?>
        <!--                            <img class="nav_logoImg" src="--><?php //echo esc_url($default_logo_url); ?><!--" alt="logotipo_ric"/>-->
        <!--                        --><?php //endif; ?>
        <!--                    </a>-->
        <!--                </div>-->
        <!--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ric_navbar"-->
        <!--                        aria-controls="ric_navbar" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--                    <span class="navbar-toggler-icon"></span>-->
        <!--                </button>-->
        <!---->
        <!--                <div class="menu__top">-->
        <!--                    <div class="top__language dropdown-center">-->
        <!--                        <a class="language__toggle dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown"-->
        <!--                           aria-expanded="false">-->
        <!--                            ES-->
        <!--                        </a>-->
        <!--                        <ul class="toggle__menu dropdown-menu" aria-labelledby="dropdownLanguage">-->
        <!--                            <li class="menu__item">-->
        <!--                                <a class="item__option dropdown-item seleccionado" href="#">ES</a>-->
        <!--                            </li>-->
        <!--                            <li class="menu__item">-->
        <!--                                <a class="item__option dropdown-item" href="#">EN</a>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                    <div class="top__contactar">-->
        <!--                        <a class="contactar__link" href="#">-->
        <!--                            CONTACTAR-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--                <div class="collapse navbar-collapse nav__navbar" id="ric_navbar">-->
        <!--                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar__ul">-->
        <!--                        --><?php //if ($menu_items): ?>
        <!--                            --><?php //foreach ($menu_items[0] as $key => $value): ?>
        <!--                                --><?php //if (strpos($key, 'texto_') === 0 && isset($menu_items[0]["enlace_" . substr($key, 6)])): ?>
        <!--                                    --><?php //if (strpos($key, 'que_hacemos') !== false && isset($menu_items[0]["submenu_items"])): ?>
        <!--                                        <li class="nav-item dropdown ul__list">-->
        <!--                                            <a class="list__link dropdown-toggle" id="dropdown_navItem" data-bs-toggle="dropdown"-->
        <!--                                               aria-expanded="false">-->
        <!--                                                --><?php //echo esc_html($value); ?>
        <!--                                            </a>-->
        <!---->
        <!--                                            --><?php
        //    //                                        var_dump($menu_items);
        //    //                                        var_dump($menu_items[0]["submenu_items"]);
        //                                             ?>
        <!--                                        --><?php //if (isset($menu_items[0]["submenu_items"])): ?>
        <!--                                            <ul class="list__ulDropdown dropdown-menu" aria-labelledby="dropdownLanguage">-->
        <!--                                                --><?php //foreach ($menu_items[0]["submenu_items"] as $submenu_item): ?>
        <!--                                                    <li class="ulDropdown__li">-->
        <!--                                                        <a class="li__optionLink dropdown-item" href="--><?php //echo esc_url($submenu_item['enlace']); ?><!--">-->
        <!--                                                            --><?php //echo esc_html($submenu_item['texto']); ?>
        <!--                                                        </a>-->
        <!--                                                    </li>-->
        <!--                                                --><?php //endforeach; ?>
        <!--                                            </ul>-->
        <!--                                        --><?php //endif; ?>
        <!--                                        </li>-->
        <!--                                    --><?php //else: ?>
        <!--                                        <li class="nav-item ul__list">-->
        <!--                                            <a class="nav-link list__link" href="--><?php //echo esc_url($menu_items[0]["enlace_" . substr($key, 6)]); ?><!--">-->
        <!--                                                --><?php //echo esc_html($value); ?>
        <!--                                            </a>-->
        <!--                                        </li>-->
        <!--                                    --><?php //endif; ?>
        <!--                                --><?php //endif; ?>
        <!--                            --><?php //endforeach; ?>
        <!--                        --><?php //endif; ?>
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
    </nav>
</header>
<?php wp_body_open(); ?>

			<?php
//			wp_nav_menu(
//				array(
//					'theme_location' => 'menu-1',
//					'menu_id'        => 'primary-menu',
//				)
//			);
			?>


</body>
</html>

