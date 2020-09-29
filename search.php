<?php get_header(); ?>

	<h2 class="pageTitle">サイト内検索<span>SEARCH</span></h2>

    <?php get_template_part('template-parts/breadcrumb'); ?>

	<main class="main">
		<div class="container">
			<h2 class="main_title">「<?php the_search_query(); ?>」の検索結果</h2>
			<div class="row">
<?php if(have_posts() ) : ?>
	<?php while(have_posts() ) : the_post(); ?>
				<div class="col-md-4">
					<?php get_template_part('template-parts/loop', 'news'); ?>
				</div>
<?php endwhile; ?>
<?php else: ?>
	<div class="col-12 text-center">
		<p>検索結果はありませんでした</p>
	</div>
<?php endif; ?>

			</div>
			
			<?php if (function_exists( 'wp_pagenavi') ) { wp_pagenavi(); } ?>

		</div>

	</main>

<?php get_footer(); ?>