<?php get_header(); ?>
<div class="container">
<?php get_sidebar(); ?>
<div class="singlepost">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="post-header">
	<img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php get_image_url(); ?>&amp;w=700&amp;h=400&amp;zc=1" alt="" />
</div>
<div class="post-title"><?php the_title(); ?>
	<span class="autor">Postado por: <?php the_author(); ?> às <?php the_time('H:i') ?></span>
</div>
<div class="post-content"><?php the_content(); ?></div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
<div class="paginacao"><?php pagination(); ?></div>
</div>
<?php get_footer(); ?>