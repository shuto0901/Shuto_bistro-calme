<?php get_header(); ?>

<?php if(have_posts() ) : ?>
	<?php while (have_posts() ) : the_post(); ?>

	<main class="main main-lp">
		<div class="container">
			<section class="lp">
				<header class="lp_header">
					<h2 class="lp_title">3周年スペシャルデー</h2>
					<div class="lp_header_desc">
						<p>
							おかげさまで3周年。<br>
							特別なメニューをご用意しております。
						</p>
					</div>
				</header>

				<div class="lp_body">
					<div class="row">
						<div class="col-md-6">
							<div class="lp_pic lp_pic-sm"
								style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/special/pic-1.jpg')"></div>
							<div class="lp_pic lp_pic-sm"
								style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/special/pic-2.jpg')"></div>
						</div>
						<div class="col-md-6">
							<div class="lp_pic lp_pic-lg"
								style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/special/pic-3.jpg')"></div>
						</div>
					</div>
				</div>

	</main>
 <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>