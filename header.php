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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php if(is_home()) { echo bloginfo("name"); echo " # "; echo bloginfo("description"); } else { echo wp_title(" >> ", false, 'right'); echo bloginfo("name"); } ?></title>
<link rel="icon" type="image/png" href="https://karibe.co.ke/wp-content/uploads/2015/06/fav.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="publisher" href="https://plus.google.com/114924397218378555489" />
<?php do_atomic( 'head' ); // @deprecated 0.9.0. Use 'wp_head'. ?>
<?php wp_head(); // wp_head ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33443399-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
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
<style>
/*adjust quick latex image paddings to make everything visible :)*/
.ql-img-inline-formula {
padding:0 15px 0 10px !important;
}

.ql-img-displayed-equation {
padding:0 15px 0 10px !important;
}
#comments-template{
padding-top:20px;
}
</style>
		<?php do_atomic( 'before_container' ); // hybrid_before_container ?>
		