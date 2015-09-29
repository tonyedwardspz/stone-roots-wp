// Called once the document has fully loaded
jQuery(document).ready(function(){
	applyBackstretchImage();
	setFitText();
});


// Called when the browser window resizes
jQuery(window).resize(function() {
	applyBackstretchImage();
});


// apply different image depending on screen width
var applyBackstretchImage = function() {
	if (window.innerWidth < 480) {
		jQuery.backstretch("wp-content/themes/stone-roots-wp/images/stone-roots-mobile.jpg");
	} else if (window.innerWidth <= 768 || isPortrait) {
		jQuery.backstretch("wp-content/themes/stone-roots-wp/images/stone-roots-tablet.jpg");
	} else {
		jQuery.backstretch("wp-content/themes/stone-roots-wp/images/stone-roots-home.jpg");
	}
}


// Use match media for orientation detection.
// Returns true if portait
var isPortrait = function() {
	return window.matchMedia("(orientation: portrait)").matches;
}


// Determins if touch features are available.
// Returns true/false
var isTouchDevice = function() {
  return 'ontouchstart' in window || 'onmsgesturechange' in window; 
}


// Apply fit-text to title
var setFitText = function() {
	jQuery("#home-title").fitText();
}
