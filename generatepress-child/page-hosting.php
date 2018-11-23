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
		    <div class="naši-paketi">
		        <h2 class="text-center" data-aos="zoom-in">Naši paketi su pažljivo odabrani za sve potrebe korisnika.</h2>
		    </div>
		    <div class="row paketi zoomIn delay-1s animated">
		    <div class="col-lg-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3>Starter</h3>
                        </div>

                        <div class="price-value">
                            50KM
                            <img class="position-absolute slika" src="http://demo4.webmedia.ba/wp-content/uploads/2018/11/besplatna-com1.png" width="100px" height="auto" />
                            <span class="subtitle">godišnje</span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li><b>3GB</b> Diskovni prostor</li>
                                <li><b>30GB</b> Mjesečni promet</li>
                                <li><b>1</b> Webstranica</li>
                                <li><i class="fas fa-infinity"></i> Poddomena</li>
                                <li><i class="fas fa-infinity"></i> E-mail adresa</li>
                                <li><i class="fas fa-infinity"></i> MySql baza</li>
                                <li><b>99.9%</b> Dostupnost servera</li>
                                <li><i class="fas fa-check"></i> cPanel</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up"><!-- BUTTON BOX-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  data-whatever="Starter">Naruči</button>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="best-offer">Popularno</div>
                            <h3>Biznis</h3>
                        </div>

                        <div class="price-value">
                            70KM
                            <img class="position-absolute slika" src="http://demo4.webmedia.ba/wp-content/uploads/2018/11/besplatna-com1.png" width="100px" height="auto" />
                            <span class="subtitle">godišnje</span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li><b>5GB</b> Diskovni prostor</li>
                                <li><b>50GB</b> Mjesečni promet</li>
                                <li><b>1</b> Webstranica</li>
                                <li><i class="fas fa-infinity"></i> Poddomena</li>
                                <li><i class="fas fa-infinity"></i> E-mail adresa</li>
                                <li><i class="fas fa-infinity"></i> MySql baza</li>
                                <li><b>99.9%</b> Dostupnost servera</li>
                                <li><i class="fas fa-check"></i> cPanel</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up"><!-- BUTTON BOX-->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  data-whatever="Biznis">Naruči</button>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3>Profi</h3>
                        </div>

                        <div class="price-value">
                            120KM
                            <img class="position-absolute slika" src="http://demo4.webmedia.ba/wp-content/uploads/2018/11/besplatna-com1.png" width="100px" height="auto" />
                            <span class="subtitle">godišnje</span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li><b>25GB</b> Diskovni prostor</li>
                                <li><i class="fas fa-infinity"></i> Mjesečni promet</li>
                                <li><b>2</b> Webstranice</li>
                                <li><i class="fas fa-infinity"></i> Poddomena</li>
                                <li><i class="fas fa-infinity"></i> E-mail adresa</li>
                                <li><i class="fas fa-infinity"></i> MySql baza</li>
                                <li><b>99.9%</b> Dostupnost servera</li>
                                <li><i class="fas fa-check"></i> cPanel</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up"><!-- BUTTON BOX-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  data-whatever="Profi">Naruči</button>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3>Premium</h3>
                        </div>

                        <div class="price-value">
                            190KM
                            <img class="position-absolute slika" src="http://demo4.webmedia.ba/wp-content/uploads/2018/11/besplatna-com1.png" width="100px" height="auto" />
                            <span class="subtitle">godišnje</span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li><b>100GB</b> Diskovni prostor</li>
                                <li><i class="fas fa-infinity"></i> Mjesečni promet</li>
                                <li><b>5</b> Webstranica</li>
                                <li><i class="fas fa-infinity"></i> Poddomena</li>
                                <li><i class="fas fa-infinity"></i> E-mail adresa</li>
                                <li><i class="fas fa-infinity"></i> MySql baza</li>
                                <li><b>99.9%</b> Dostupnost servera</li>
                                <li><i class="fas fa-check"></i> cPanel</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up"><!-- BUTTON BOX-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  data-whatever="Premium">Naruči</button>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
		    </div>
            
            
            <div class="specifican text-center animated zoomInUp delay-4s">
                <h2>Trebate specifičan hosting paket za Vašu web stranicu?</h2><br>
                <a class="btn btn-custom" href="http://demo4.webmedia.ba/kontakt/">Kontaktirajte nas!</a>
            </div>
            
            <!---MODAL POPUP --->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hosting narudžba</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zatvori">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="230" title="Hosting"]') ?>
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