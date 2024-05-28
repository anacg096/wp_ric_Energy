<?php
// Obtener los campos de ACF.
$logo_footer = get_field('logo_footer', 'option');
$enlaces_footer = get_field('enlaces_footer', 'option');
$enlaces_titulo_footer = get_field('enlaces_titulo_footer', 'option');
$politicas = get_field('politicas', 'option');
$redes_sociales = get_field('redes_sociales', 'option');

?>

<footer class="footer">
    <section class="footer__sectionppal">
        <div class="sectionppal__logotipo">
            <img class="logotipo__ric" src="<?php
            echo esc_url($logo_footer['url']);?>" alt="<?php echo esc_attr($logo_footer['title']); ?>"/>
        </div>
        <div class="sectionppal__enlaces">
            <?php
            foreach ($enlaces_footer as $enlace) {
            ?>
            <div class="enlaces__columna">
                <a class="columna__linkTitle" href="<?php echo esc_url($enlace['enlace_titulo']['url']); ?>">
                    <h3 class="columna__title">
                        <?php echo $enlace['enlace_titulo']['title']; ?>
                    </h3>
                </a>
                <?php
                    foreach ($enlace['enlace_parrafo'] as $item) {
                ?>
                    <a class="columna__link" href="<?php echo esc_url($item['item']['url']); ?>">
                        <p><?php echo $item['item']['title']; ?></p>
                    </a>
                <?php
                }// foreach enlace_parrafo
                ?>
            </div>
            <?php
            } // foreach enlaces_footer
            ?>
            <div class="enlaces__columna">
            <?php
            foreach ($enlaces_titulo_footer as $enlace_titulo) {
            ?>
                <a class="columna__linkTitle" href="<?php echo esc_url($enlace_titulo['enlace_titulo']['url']); ?>">
                    <h3 class="columna__title">
                        <?php echo $enlace_titulo['enlace_titulo']['title']; ?>
                    </h3>
                </a>
            <?php
            } // foreach enlaces_titulo_footer
            ?>
            </div>
        </div>
    </section>

    <section class="footer__sectionFinal">
        <div class="sectionFinal__politicas">
            <?php
            foreach ($politicas as $link) {
            ?>
            <div class="politicas__bloque">
                <a class="bloque__enlacePoliticas" href="<?php echo esc_url($link['link']['url']); ?>">
                    <?php echo $link['link']['title']; ?>
                </a>
            </div>
            <?php
            } // foreach politicas
            ?>
        </div>

        <div class="sectionFinal__redesSociales">
            <?php
            foreach ($redes_sociales as $red_social) {
            ?>
            <a class="redesSociales__bloque <?php echo $red_social['clase']; ?>" href="<?php echo esc_url($red_social['enlace']['url']); ?>">
                <div class="bloque__enlaceRedesSociales">
                    <img class="nav_logoImg" src="<?php echo esc_url($red_social['imagen']['url']); ?>" alt="<?php echo esc_attr($red_social['imagen']['title']); ?>"/>
                </div>
            </a>
            <?php
            } // foreach politicas
            ?>
        </div>
    </section>
</footer>
<?php
wp_footer();
?>
</body>
</html>

