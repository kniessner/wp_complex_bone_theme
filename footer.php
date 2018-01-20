<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 */
?>


        <footer id="footer">
            <div class="inner_header container">
                <div class="footer_content ">
                <?php get_template_part( 'wp_setup/menus/menu-subsidiary' ); ?>
                                          <!-- </div><div class=" l_square"></div> -->
                  <div class="credits container">
                    Sascha-Darius Knießner
                  </div>
                </div>
            </div>
        </footer>

        <div id="page_meta" data-type="" data-id="<?php the_ID() ;?>"></div>
        <?php wp_footer(); ?>
    </body>
</html>
