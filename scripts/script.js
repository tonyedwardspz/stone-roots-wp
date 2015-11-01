// Called once the document has fully loaded
jQuery(document).ready(function(){
	// applyBackstretchImage();
	setFitText();
});


// Called when the browser window resizes
jQuery(window).resize(function() {
	// applyBackstretchImage();
});


// apply different image depending on screen width
var applyBackstretchImage = function() {
	var path = window.location.pathname;
	var width = window.innerWidth;

	if (path === "/wordpress/" || path === "/"){
		// Were on the homepage, show the band pic
		if (width < 480) {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/stone-roots-mobile.jpg");
		} else if (width <= 768 || isPortrait()) {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/stone-roots-tablet.jpg");
		} else if (width < 1000) {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/desktop-landscape-1000.jpg");
		} else if (width < 1500){
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/desktop-landscape-1500.jpg");
		} else if (width < 2000) {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/desktop-landscape-2000.jpg");
		} else {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/desktop-landscape-3000.jpg");
		}
	} else {
		// Were not on the homepage, display the white wall background
		if (width < 1000) {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/whitewall-background-1000.jpg");
		} else if (width < 1500){
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/whitewall-background-1500.jpg");
		} else if (width < 2000) {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/whitewall-background-2000.jpg");
		} else {
			jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/whitewall-background-3000.jpg");
		}
	}
};


// Use match media for orientation detection.
// Returns true if portait
var isPortrait = function() {
	return window.matchMedia("(orientation: portrait)").matches;
};


// Determins if touch features are available.
// Returns true/false
var isTouchDevice = function() {
  return 'ontouchstart' in window || 'onmsgesturechange' in window;
};


// Apply fit-text to title
var setFitText = function() {
	jQuery("#home-title").fitText(1.0, {maxFontSize: '70px'});
};
