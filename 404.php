<?php get_header(); ?>

	<h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2>
    
    <?php get_template_part('template-parts/breadcrumb'); ?>

	<div class="main">
		<div class="container">
			<p>お探しのページが見つかりませんでした。</p>
			<p>申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
		</div>
	</div>

<?php get_footer(); ?>