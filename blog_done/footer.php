    </div>
</div>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner"> 
        <?php
        wp_nav_menu(
            array(
              'theme_location' => 'moje-menu',
              'container' => 'nav',
              'container_id' => 'menu',
              'items_wrap' => '<h2>Menu</h2><ul class="%2$s">%3$s</ul>'
            ));
          ?>            
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("menu-sidebar") ) : ?>
          <?php endif;?>
            <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                </footer>
        </div>
</div>

		<!-- Scripts -->
			<?php wp_footer(); ?>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/browser.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

	</body>
</html>