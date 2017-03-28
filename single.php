<?php get_header(); ?>
<div id="ads">
    <!-- /7264022/Flaunt_bf728x90_Int -->
    <div id='div-gpt-ad-1441281518158-0' style='height:90px; width:728px;'>
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1441281518158-0'); });
    </script>
</div>
</div>
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
<div class="comentarios">
<div class="boxtitle">Comentários</div>
<div class="fb-comments" style="margin: 10px;" data-href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-width="680" data-numposts="5"></div></div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div></div>
<?php get_footer(); ?>