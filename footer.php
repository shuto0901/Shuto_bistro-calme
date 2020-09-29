<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

	<footer class="footer">
		<div class="container">
			<div class="footer_inner">
				<nav>
                <?php
				$args = array(
				'menu' => 'global-navigation',
				'menu_class' => '',
				'container' => false,
				);
				wp_nav_menu($args);
				?>
				</nav>
				<div class="footer_copyright">
					<small>&copy; BISTRO CALME All rights reserved.</small>
				</div>
			</div>
		</div>
	</footer>

<?php
if (is_home()){
    wp_enqueue_style( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_script( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );
    wp_enqueue_script( 'bistro-calme-home', get_template_directory_uri() . '/assets/js/home.js' );
}
?>    
<?php wp_footer(); ?>
</body>

</html>