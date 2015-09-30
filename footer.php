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
				if (window.innerWidth < 480) {
						jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/stone-roots-mobile.jpg");
				} else if (window.innerWidth <= 768 || isPortrait()) {
						jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/stone-roots-tablet.jpg");
				} else {
						jQuery.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/images/stone-roots-home.jpg");
				}
			}
    </script>
  </body>
</html>
