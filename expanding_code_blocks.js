jQuery(document).ready(function($) {
	// Select all <pre><code> elements...
	// On hover, check to see if the content is overflowing
	// horizontally.  If yes, make the box bigger.
	$("pre").has("code").hover(function() {
		var contentwidth = $(this).contents().width();
		var blockwidth = $(this).width();		
		if(contentwidth > blockwidth) {
			$(this).animate({ width: contentwidth}, 250);
			}
		}, function() {
			$(this).animate({ width: blockwidth }, 250);
	});
});
