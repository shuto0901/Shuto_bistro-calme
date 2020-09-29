<?php get_header(); ?>

<?php if ( is_home()): ?>
	<div class="jumbotron">
		<div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
		<div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
		<div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
	</div>
<?php endif; ?>

<section class="sec">
		<div class="container">
			<header class="sec_header">
				<h2 class="title">最新情報<span>NEWS</span></h2>
			</header>

		<div class="row">
			<?php if ( have_posts()) : ?>
			<?php while (have_posts() ) : the_post(); ?>
			<div class="col-md-4">
					<?php get_template_part('template-parts/loop', 'news'); ?>
				</div>
			<?php endwhile; ?>
		    <?php endif; ?>	
		</div>

			<p class="sec_btn">
            <?php
        $news = get_term_by('slug' , 'news' , 'category');
        $news_link = get_term_link($news, 'category');
        ?>
				<a href="<?php echo $news_link; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
			</p>
		</div>
</section>

<section class="sec bg-gray">
		<div class="container">
			<header class="sec_header">
				<h2 class="title">店舗情報<span>INFORMATION</span></h2>
			</header>

			<div class="row">
				<div class="col-md-6">
					<a href="<?php echo get_permalink(20); ?>" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/bnr_about@2x.jpg')">
						<div class="bnr_inner">
							わたしたちについて<span>ABOUT</span>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a href="<?php echo get_permalink(32); ?>" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/bnr_access@2x.jpg')">
						<div class="bnr_inner">
							アクセス<span>ACCESS</span>
						</div>
					</a>
				</div>
			</div>
		</div>
</section>

<section class="sec sec-bg">
		<div class="sec_inner">
			<header class="sec_header">
				<h2 class="title">お問い合わせ<span>CONTACT</span></h2>
			</header>

			<div class="sec_body contact">
				<div class="contact_icon">
					<i class="fas fa-phone"></i>
				</div>
				<div class="contact_body">
					<p>
						お気軽にお問い合わせください
						<span>03-1234-5678</span>
					</p>
				</div>
			</div>

			<div class="sec_btn">
				<a href="<?php echo home_url('/contact/'); ?>" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
</section>

<?php get_footer(); ?>