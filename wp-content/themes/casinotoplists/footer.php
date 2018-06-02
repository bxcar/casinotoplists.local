<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casinotoplists
 */

?>
<div id="bottom">
    <div class="footer_bg">
        <div class="footer pageCenterLayout grid_layout clearfix">

            <div class="clearfix">


                <div class="five fl">
                    <h3 class="section_heading"><?php the_field('footer_first_menu_title', 'option'); ?></h3>
                    <?php
                    echo wp_nav_menu(array(
                        'echo' => false,
                        'theme_location' => 'menu-2',
                        'items_wrap' => '<ul class="clearfix">%3$s</ul>',
                        'container' => 'false'
                    ));
                    ?>
                </div>


                <div class="three middle_menu fl">
                    <h3 class="section_heading"><?php the_field('footer_second_menu_title', 'option'); ?></h3>
                    <?php
                    echo wp_nav_menu(array(
                        'echo' => false,
                        'theme_location' => 'menu-3',
                        'items_wrap' => '<ul class="clearfix">%3$s</ul>',
                        'container' => 'false'
                    ));
                    ?>
                </div>


                <div class="five fl">
                    <p class="footerText">
                        <?php the_field('footer_text', 'option'); ?>
                    </p>
                </div>
            </div>
            <div class="full center_content">
                <br/><br/>
                <img src="<?php the_field('footer_img_1', 'option'); ?>"/>
                <img src="<?php the_field('footer_img_2', 'option'); ?>"/>
                <img src="<?php the_field('footer_img_3', 'option'); ?>"/>

            </div>
        </div>
    </div>
    <div class="center_content copyright">
        <p><?php the_field('footer_copyright', 'option'); ?></p>
    </div>

</div>
<div id="totop"></div>
</div>
<!-- Piwik -->
<script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/assets/js/casinotoplists_IndexPage.js"></script>

<?php wp_footer(); ?>
</body>

</html>

