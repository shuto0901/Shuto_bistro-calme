<?php get_header(); ?>
    
    <h2 class="pageTitle">メニュー<span>MENU</span></h2>
    
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <?php
    $kinds = get_terms(array('taxonomy' => 'kind'));
    if(!empty($kinds)):
    ?>
    <div class="pageNav">
        <ul>
            <?php foreach($kinds as $kind): ?>
                <li>
                    <a href="<?php echo get_term_link($kind); ?>"><?php echo $kind->name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <main class="main">
        <?php
        $kinds =get_terms(array('taxonomy' =>'kind'));
        if(!empty($kinds) ):
        ?>
        <?php foreach($kinds as $kind): ?>
        <section class="sec">
            <div class="container">
                <div class="sec_header">
                    <h2 class="title title-jp"><?php echo $kind->name; ?></h2>
                    <span class="title title-en"><?php echo strtoupper($kind->slug); ?></span>
                </div>
                <div class="row justify-content-center">
                    
                <?php
                $args =array(
                    'post_type' => 'menu',
                    'post_per_page' => -1,
                );
                $taxquerysp = array('relation' => 'AND');
                $taxquerysp[] = array(
                    'taxonomy' => 'kind',
                    'terms' => $kind->slug,
                    'field' => 'slug',
                );
                $args['tax_query'] = $taxquerysp;

                $the_query = new WP_Query($args);

                if($the_query->have_posts()) :
                ?> 
                    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-md-3">
                        <?php get_template_part('template-parts/loop', 'menu'); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                    
                </div>
            </div>
        </section>
        <?php endforeach; ?>
        <?php endif; ?>
    </main>
    
    <?php get_footer(); ?>