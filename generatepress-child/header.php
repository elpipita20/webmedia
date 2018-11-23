<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta property="fb:app_id" content="265486217500051" />
	<?php if (is_page('Hosting')): ?>
	<meta property="og:description" content="Izaberite jedan od naših pažljivo odabranih paketa za sve potrebe korisnika." />
	<meta property="og:image" content="http://demo4.webmedia.ba/wp-content/uploads/2018/11/Hosting-paketi.png" />
	<meta name="keywords" content="Hosting, Web hosting, Web Media, webmedia, hosting paketi" />
	<?php elseif (is_page('dostupnost-domene')): ?>
	<meta property="og:description" content="Provjerite da li je vaša željena domena dostupna za kupovinu!" />
	<meta name="keywords" content="domene, dostupnost domene" />
	<?php elseif (is_page('kontakt')): ?>
	<meta property="og:description" content="Ukoliko imate pitanja kontaktirajte nas putem telefona ili emaila!" />
	<?php elseif (is_page('web-dizajn')): ?>
	<meta property="og:description" content="Pošaljite upit za izradu webstranice i odgovoriti ćemo Vam u što kraćem roku!" />
    <?php	endif;
	wp_head(); ?>
	
</head>
<body <?php generate_body_schema();?> <?php body_class(); ?>>
	<?php
	/**
	 * generate_before_header hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_do_skip_to_content_link - 2
	 * @hooked generate_top_bar - 5
	 * @hooked generate_add_navigation_before_header - 5
	 */
	do_action( 'generate_before_header' );

	/**
	 * generate_header hook.
	 *
	 * @since 1.3.42
	 *
	 * @hooked generate_construct_header - 10
	 */
	do_action( 'generate_header' );
	
	/**
	 * generate_after_header hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_featured_page_header - 10
	 */
	do_action( 'generate_after_header' );
	?>

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php
			/**
			 * generate_inside_container hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_inside_container' );
