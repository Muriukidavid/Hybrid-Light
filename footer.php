<?php
/*
 *	Footer Template
 *
 *	necessary only because i wanted to position the copyright + powered by ( footer ) 
 * after the body container
 *
 * @package Hybrid Light
 * @subpackage Template
*/
?>

		<?php do_atomic( 'after_container' ); // hybrid_after_container ?>

	</div><!-- #container -->


</div><!-- #body-container -->
<div id="body-bottom"></div>
<div id="footer-container">

		<?php do_atomic( 'before_footer' ); // hybrid_before_footer ?>

		<div id="footer">

			<?php do_atomic( 'footer' ); // hybrid_footer ?>

		</div><!-- #footer -->

		<?php do_atomic( 'after_footer' ); // hybrid_after_footer ?>

	</div><!-- #footer-container -->

<?php do_atomic( 'after_html' ); // hybrid_after_html ?>

<?php wp_footer(); // wp_footer ?>

</body>
</html>