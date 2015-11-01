		 </div>
    <?php wp_footer(); ?>

    <script>
			jQuery(document).ready(function(){
				applyBackStretch();
			});

			jQuery(window).resize(function() {
				applyBackStretch();
			});

			function applyBackStretch() {
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
			}

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57176124-2', 'auto');
		  ga('send', 'pageview');

    </script>
  </body>
</html>
