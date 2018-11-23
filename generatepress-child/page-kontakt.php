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
    
	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?>>
		    <div class="row">
    		    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2419.496910363586!2d18.378730827436264!3d43.849963902473334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c913bbf03611%3A0x32018a320156cf20!2sWeb+Media+d.o.o.!5e0!3m2!1sbs!2sba!4v1541717192123" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 text-center mb-5">
                        <h2 class="mb-2">Web Media d.o.o.</h2>
                        <i class="fas fa-map-marker-alt"></i> Azize Šaćirbegović 2,71000 Sarajevo<br>
                        ID broj: 4202206190007 <br>
                        Račun: 3387202206536312  UniCredit bank
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-center mb-4 kontakt-lijevo">
                            <h3 class="text-center kontakt-headline">Ured</h3>
                                <i class="fas fa-phone mt-2 mb-2"></i> +387 33 932-831<br>
                                <i class="fas fa-fax mt-2 mb-2"></i> +387 33 932-831<br>
                                <i class="fas fa-envelope mt-2 mb-2"></i> info@webmedia.ba
                                <br><br>
                            <h3 class="text-center kontakt-headline">Finansije</h3>
                                <i class="fas fa-phone mt-2 mb-2"></i> +387 61 528 430<br>
                                <i class="fas fa-envelope mt-2 mb-2"></i> finansije@webmedia.ba
                        </div>
                        
                        <div class="col-md-6 text-center mb-4 kontakt-desno">
                            <h3 class="text-center kontakt-headline">Tehnička podrška</h3>
                                <i class="fas fa-phone mt-2 mb-2"></i> +387 61 619 636<br>
                                <i class="fas fa-phone mt-2 mb-2"></i> +387 60 34 99 763<br>
                                <i class="fas fa-envelope mt-2 mb-2"></i> web.webmedia@gmail.com
                                <br><br>
                            <h3 class="text-center kontakt-headline">Socijalne mreže</h3>
                                <a style="color:#3B5998;" href="https://www.facebook.com/webmediasarajevo/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                                <a style="color:#3F729B;" href="https://www.instagram.com/webmediasarajevo/?target_user_id=5356717405&ndid=577c56d767c15G24bc2e1a43455dG577c5b70c7ee7G34b&utm_medium=email&utm_campaign=ig_recap_digest&__bp=1" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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