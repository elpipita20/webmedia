<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

              <div class="container">
                  <h3 class="text-center">Svaka webstranica ima specifične zahtjeve te Vas ljubazno molimo da izaberete tip stranice, i ako je potrebno u par rečenica opišete Vaše zahtjeve za<br><span style="color:#2593e5;">izradu webstranice</span></h3>
                  <div class="col-md-8 offset-md-2 d-flex justify-content-center">
                      <?php echo do_shortcode('[contact-form-7 id="227" title="Dizajn upit"]') ?>
                  </div>
            </div>

            </div><!-- .entry-content -->

          </article><!-- #post -->

    </div><!-- #content -->
  </div><!-- #primary -->
            
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || '0' != get_comments_number() ) : ?>

					<div class="comments-area">
						<?php comments_template(); ?>
					</div>

				<?php endif;

			endwhile;

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

get_footer();