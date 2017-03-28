<?php /*Template Name: Notíciasx*/ ?>
<?php get_header(); ?>
<div class="container">
<?php get_sidebar(); ?>
<div class="singlepost">
<?php
$temp = $wp_query; $wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=5'.'&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="post-header">
	<img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php get_image_url(); ?>&amp;w=700&amp;h=400&amp;zc=1" alt="" />
</div>
<div class="post-title"><?php the_title(); ?>
	<span class="autor">Postado por: <?php the_author(); ?> às <?php the_time('H:i') ?></span>
</div>
<div class="post-content"><?php the_content(); ?></div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<div class="paginacao"><?php pagination(); ?></div>
</div>
</div>
<?php get_footer(); ?>