<?php
/*
 *	Header Template
 *
 *	necessary only because i wanted to position the site-title and description ( header )
 *	outside the body container
 *
 * @package Hybrid Light
 * @subpackage Template
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php do_atomic( 'head' ); // @deprecated 0.9.0. Use 'wp_head'. ?>
<?php wp_head(); // wp_head ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

<?php do_atomic( 'before_html' ); // hybrid_before_html ?>

<?php do_atomic( 'before_header' ); // hybrid_before_header ?>

	<div id="header-container">

		<div id="header">

			<?php do_atomic( 'header' ); // hybrid_header ?>

		</div><!-- #header -->

	</div><!-- #header-container -->

	<?php do_atomic( 'after_header' ); // hybrid_after_header ?>
	

<div id="body-top"></div>
<div id="body-container">
	
	<div id="container">

		<?php do_atomic( 'before_container' ); // hybrid_before_container ?>
		