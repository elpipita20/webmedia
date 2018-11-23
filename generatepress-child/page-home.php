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
		    
		    
		    <!--- <div class="jumbotron p-3 p-md-5 text-black rounded bg-light bg-slika">
        <div class="col-md-6 px-0 leftside">
          <h1 class="font-italic slideInLeft animated" style="font-size: 30px;">Za Vašu web stranicu samo najbolje</h1>
          <h1 class="webmedia slow animated slideInLeft"><span style="color:#2593e5;">Najpovoljniji</span> HOSTING</h1>
          <p class="lead mb-3 text-black slow animated slideInLeft" style="font-size:18px;">Kvalitet i profesionalna podrška.<br> Uz svaki hosting <span class="besplatna-domena" style="color:#2593e5;text-shadow:1px 1px 1px, 1px 1px 3px;">BESPLATNA DOMENA</span></p>
          <a href="http://demo4.webmedia.ba/hosting/" class="btn btn-custom animated zoomIn slow delay-4s">Hosting paketi</a>
        </div>
        <div class="col-md-6 rightside animated zoomIn delay-2s">
            <img style="position:relative;top:-30px;width:80%;float:right;" src="http://buygood.space/static/img/animation_servers.gif" />
        </div>
            </div>-->
            
            <?php putRevSlider("home", "homepage") ?>
      
        

        <div class="container marketing"  data-aos="fade-up">
                  <h2 class="text-center headline text-dark">NAŠE USLUGE</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="img-margina" src="http://demo4.webmedia.ba/wp-content/uploads/2018/09/Web-hosting.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Web hosting</h2>
            <p>Hosting paketi na sigurnim i provjerenim serverima.</p>
            <p><a class="btn btn-custom" href="http://demo4.webmedia.ba/hosting/" role="button">Pogledaj &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-margina" src="http://demo4.webmedia.ba/wp-content/uploads/2018/09/web-design.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Web dizajn</h2>
            <p>Nudimo izradu različitih tipova web stranica po najsavremenijim standardima.</p>
            <p><a class="btn btn-custom" href="http://demo4.webmedia.ba/web-dizajn/" role="button">Pogledaj &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-margina" src="http://demo4.webmedia.ba/wp-content/uploads/2018/09/DTP.png" alt="Generic placeholder image" width="140" height="140">
            <h2>DTP</h2>
            <p>Dizajn i priprema za štampu plakata, brošura, časopisa itd.</p>
            <p><a class="btn btn-custom" href="http://demo4.webmedia.ba/dtp-2/" role="button">Pogledaj &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        
        </div>
        <!-- Reference -->
        
        <div class="col-md-12 col-12 mt-5 reference"  data-aos="fade-up">
                    <h2 class="text-center mt-5 mb-5 pb-2 text-uppercase text-dark rijec">Riječ klijenta</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner mt-4">
                        <div class="carousel-item text-center active">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-1.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong>Aleksandra Kuljanin</strong></h5>
                            <h6 class="text-dark m-0">UN Women BiH</h6>
                            <p class="m-0 pt-3 text-black font-italic">UN Women tim je u 2017.godini imao priliku raditi sa kompanijom Web Media, te ovom prilikom izražavamo zadovoljstvo uslugama koja je ova kompanija pružila.Izuzetna profesionalnost, kooperativnost, timski rad, inovacije u radu i spremnost da pruže najbolju moguću uslugu je temelj da komunikacijski odjel UN Women u BiH i u budućnosti razmatra saradnju sa Web Media timom.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-3.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong>Sanjin Galijašević</strong></h5>
                            <h6 class="text-dark m-0">Tropik d.o.o.</h6>
                            <p class="m-0 pt-3 text-black font-italic">Web media je nama uvijek nalazila riješenje za svaku situaciju, problem i zahtijeve. Komunikacija i ažurnost su na najboljem nivou i svakako ih možemo preporučiti svakome ko želi da napravi nešto ozbiljno sa svojim websajtom. Isto tako je prisutno "razmišljanje unaprijed", tako da ste vi uvijek sa Webmediom spremni na bilo šta što se može desiti sutra u svijetu interneta. Mi kada nešto želimo, znamo da će u Webmediji dati sve od sebe da se to i ispuni.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-7.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong>Duška Andrić</strong></h5>
                            <h6 class="text-dark m-0">Centar ženskih prava</h6>
                            <p class="m-0 pt-3 text-black font-italic">Izuzetno smo zadovoljne saradnjom sa Web Media. Osim na izradi i održavanja web stranice Centra, sarađivali smo i na izradi drugih online alata koje Centar koristi u svom radu.  Naše iskustvo pokazalo je da osoblje Web Media vrlo fleksibilno odgovara na potrebe i zahtjeve klijenta, ali da vodi računa o tome da zahtjevi klijenta ne ugroze kvalitet traženog proizvoda – čuvajući tako svoj profesionalni ugled i integritet, ali i ugled i integritet organizacije/klijenta za koji se proizvod izrađuje.</p>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Prethodna</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Naredna</span></a>
                      
                    </div>
                    
        </div> 
                
            <?php $loop = new WP_Query( array( 'posts_per_page' => 3 ) ); ?>
            <div class="row" data-aos="fade-up">
             <h2 class="text-center mt-5 mb-5 pb-2 text-uppercase text-dark blog">Blog</h2>
            <?php while($loop->have_posts()) : $loop->the_post(); ?>
                <div class="card" style="width: 21rem;">
               <center><?php the_post_thumbnail('large', array('class' => 'card-image-top')); ?></center> 
                <div class="card-body">
                <h2 class="card-title" style="font-size:25px"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small class="text-muted"><?php echo get_the_date(); ?></small>
               <?php the_excerpt();?>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Više</a>
                </div>
                </div>
            <?php endwhile; ?>
                <p><?php __('Nema članaka.'); ?></p>
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