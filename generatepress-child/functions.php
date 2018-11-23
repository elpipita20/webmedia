<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */


function generatepress_child_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100 );

add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );

 /*** Enqueue Font Awesome.*/
 
function custom_load_font_awesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.3.1/css/all.css' );

}

function bootstrap_integration() {
    wp_enqueue_style('bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_integration' );


/*Logo in menu*/
add_action('generate_inside_navigation','generate_navigation_logo');
function generate_navigation_logo()
{
?>
	<div class="logo">
		<a href="/"><img src="http://demo4.webmedia.ba/wp-content/uploads/2018/09/logotip-webmedia-1.png" alt="" /></a>
	</div>
<?php
}
/*Dodavanje klase na excerpt*/
add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="card-text"', $excerpt);
}
/*Duzina excerpta*/
add_filter( 'excerpt_length', function($length) {
    return 21;
} );


/*Share buttons*/

function crunchify_social_sharing_buttons($content) {
	global $post;
	if(is_singular('post')) {
	
		// Get current page URL 
		$webmediaURL = urlencode(get_permalink());
 
		// Get current page title
		$webmediaTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
		// $crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$webmediaThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$webmediaTitle.'&amp;url='.$webmediaURL.'&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$webmediaURL;
		$googleURL = 'https://plus.google.com/share?url='.$webmediaURL;

		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$webmediaURL.'&amp;media='.$webmediaThumbnail[0].'&amp;description='.$webmediaTitle;
 
		// Add sharing button at the end of page/page content
		$content .= '<center><div class="webmedia-social">';
		$content .= '<h3 style="margin-left: 8px">PODIJELI</h3> <a class="social-btn-flip" href="'. $twitterURL .'" target="_blank"><div class="social-btn-cube">
                    <i class="social-btn-face default fa fa-lg fab fa-twitter twitter"></i>
                    <i class="social-btn-face active fa fa-lg fab fa-twitter twitter"></i>
                    </div></a>';
		$content .= '<a class="social-btn-flip" href="'.$facebookURL.'" target="_blank"><div class="social-btn-cube">
                    <i class="social-btn-face default fa fa-lg fab fa-facebook-f facebook"></i>
                    <i class="social-btn-face active fa fa-lg fab fa-facebook-f facebook"></i>
                    </div></a>';
		$content .= '<a class="social-btn-flip" href="'.$googleURL.'" target="_blank"><div class="social-btn-cube">
                    <i class="social-btn-face default fa fa-lg fab fa-google-plus-g google"></i>
                    <i class="social-btn-face active fa fa-lg fab fa-google-plus-g google"></i>
                    </div></a>';
		$content .= '<a class="social-btn-flip" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank"><div class="social-btn-cube">
                    <i class="social-btn-face default fa fa-lg fab fa-pinterest-p pinterest"></i>
                    <i class="social-btn-face active fa fa-lg fab fa-pinterest-p pinterest"></i>
                    </div></a>';
		$content .= '</div></center>';
		
		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
};
add_filter( 'the_content', 'crunchify_social_sharing_buttons');


/*category bellow title*/

add_action( 'after_setup_theme','tu_move_posted_on' );
function tu_move_posted_on() {
    remove_action( 'generate_after_entry_title', 'generate_post_meta' );
    add_action( 'generate_after_entry_title', 'generate_post_meta' );
    add_filter( 'generate_category_list_output', '__return_false' );
}

add_filter( 'generate_post_date_output', 'tu_categories_to_date' );
function tu_categories_to_date( $output ) {
    $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'generatepress' ) );
    $categories_list = sprintf( '<span class="cat-links"><i class="far fa-folder"></i> <span class="screen-reader-text">%1$s </span>%2$s</span>',
        _x( 'Categories', 'Used before category names.', 'generatepress' ),
        $categories_list
    );

    return $categories_list . $output;
}


if ( ! function_exists( 'generate_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function generate_content_nav( $nav_id ) {

	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
		<h6 class="screen-reader-text"><?php _e( 'Post navigation', 'generate' ); ?></h6>

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="navigacija-prev"><span class="prev" title="' . __('Prethodna','generate') . '">%link</span></div>', __('<i class="fas fa-arrow-alt-circle-left"></i> Prethodna','generate') ); ?>
		<?php next_post_link( '<div class="navigacija-next"><span class="next" title="' . __('Naredna','generate') . '">%link</span></div>', __('<i class="fas fa-arrow-alt-circle-right"></i> Naredna','generate') ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><span class="prev" title="<?php _e('Previous','generate');?>"><?php next_posts_link( __( 'Older posts', 'generate' ) ); ?></span></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><span class="next" title="<?php _e('Next','generate');?>"><?php previous_posts_link( __( 'Newer posts', 'generate' ) ); ?></span></div>
		<?php endif; ?>
		
		<?php generate_paging_nav(); ?>
		<?php do_action('generate_paging_navigation'); ?>

	<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // generate_content_nav


