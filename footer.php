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

<script type="text/javascript">
/*
function SelectText(element) {
    var doc = document
        , text = doc.getElementById(element)
        , range, selection
    ;    
        if (doc.body.createTextRange) {
            range = document.body.createTextRange();
            range.moveToElementText(text);
            range.select();
        } else if (window.getSelection) {
            selection = window.getSelection();        
            range = document.createRange();
            range.selectNodeContents(text);
            selection.removeAllRanges();
            selection.addRange(range);
        }
}

function Load(){
   var elements=document.getElementsByTagName('code');
    num=elements.length;
        for(var i=0; i<num; i++){
            elements[i].setAttribute('id',i);
        }
}

jQuery(document).ready(function($){
    $(function() {
        $('code').click(function() {
            SelectText(this.id);
        });
        Load();
    });
});

*/
</script>

<?php wp_footer(); // wp_footer ?>

</body>
</html>