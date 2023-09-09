<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Labs
 */

?>
<footer>
    <section class="footer-widgets">
        <div class="container">
            <div class="row">
                <div>widgets Footer</div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">Copyright</div>
                <div class="footer-menu col-12 col-md-6 text-left text-md-end">
                    <nav><?php wp_nav_menu('fancy_lab_footer_menu'); ?></nav>
                </div>
            </div>
        </div>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>