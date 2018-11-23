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

    <?php
    
   if(isset($_POST['submit']) && $_POST['submit'] == 'Pretraga'){

    // set error message by default
    $msg = '<h3 class="text-center alert alert-danger">Upišite validnu domenu</h3>';

    // string replace or clean $_POST['domain'] to ensure its nothing but domain and tld
    $_POST['domain'] = str_replace('www.', '', $_POST['domain']);
    $_POST['domain'] = str_replace('www', '', $_POST['domain']);
    $_POST['domain'] = str_replace('/', '', $_POST['domain']);
    $_POST['domain'] = str_replace(':', '', $_POST['domain']);
    $_POST['domain'] = str_replace('https', '', $_POST['domain']);
    $_POST['domain'] = str_replace('http', '', $_POST['domain']);
    $_POST['domain'] = trim($_POST['domain']);
    $_POST['domain'] = filter_var($_POST['domain'], FILTER_SANITIZE_URL);


    // if $_POST['domain'] is NOT empty, means contains a value
    if(!empty($_POST['domain'])){

        // see GoDaddy API documentation - https://developer.godaddy.com/doc
        // url to check domain availability
        $url = "https://api.godaddy.com/v1/domains/available?domain=".$_POST['domain'];

        // see GoDaddy API documentation - https://developer.godaddy.com/doc
        // set your key and secret
        $header = array(
            'Authorization: sso-key 9ER591udY9i_URhLtX6pKeZKWj2B6PCitW:URhShrQjc8C2UmQXx3Z8rJ'
        );

        //open connection
        $ch = curl_init();
        $timeout=60;

        //set the url and other options for curl
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        //execute post and return response data.
        $result = curl_exec($ch);

        //close curl connection
        curl_close($ch);

        // decode the json response
        $dn = json_decode($result, true);

        // check if error code
        if(isset($dn['code'])){

            $msg = explode(":",$dn['message']);

            $msg = '<h3 style="text-align:center;" class="alert alert-danger">Domena nije pravilno unesena</h3>';

        // proceed if no error
        } else {

            // the domain is available
            if(isset($dn['available']) && $dn['available'] == true){

                $msg = '<h3 style="text-align:center;" class="alert alert-success">'.$_POST['domain'].' je <span style="color:green">dostupna!</span></h3>';

            // else the domain is NOT available
            } else {

                $msg = '<h3 style="text-align:center;" class="alert alert-danger"> '.$_POST['domain'].' je <span style="color:red">zauzeta!</span></h3>';

            }
        
        }

    }

}
    
    
    
    ?>
    
        
    <div class="col-md-6 offset-md-3">
        <h2 class="text-center">Provjera dostupnosti domene</h2>
        <?php echo $msg; ?>
        <form action="" method="POST">
            
            <input type="text" class="form-control" name="domain" placeholder="Pretraga domene..." value="<? echo @$_POST['domain']; ?>">
            <center>
                <small class="text-center text-muted">Pretraga domene ne važi za .ba domene.</small><br>
            <input type="submit" class="btn btn-success text-center" name="submit" value="Pretraga">
            </center>
            </div>
        </form>
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