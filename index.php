<?php get_header(); ?>
<div class="container">

<div id="slide">
<div id="fade">
<?php
$catquery = new WP_Query( 'cat=116&posts_per_page=5' );
while($catquery->have_posts()) : $catquery->the_post();
?>

<div class="slide">
<img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php get_image_url(); ?>&amp;w=675&amp;h=361&amp;zc=1" />
<div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<div class="descri"><?php echo excerpt('20'); ?></div></div>
</div>

<?php endwhile; ?>
</div>
</div>
<div class="vdestaque"><iframe width="490" height="220" src="https://www.youtube.com/embed/qan11CKWFa4" frameborder="0" allowfullscreen></iframe></div>
<div class="spotify"><iframe src="https://embed.spotify.com/?uri=spotify%3Atrack%3A6qYrtNvNYFQzSGWndpEY9d" width="1080" height="80" frameborder="0" allowtransparency="true"></iframe></div>

</div>
<div id="ads">
    <!-- /7264022/Flaunt_bf728x90_Int -->
    <div id='div-gpt-ad-1441281518158-0' style='height:90px; width:728px;'>
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1441281518158-0'); });
    </script>
</div>
</div>
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php get_image_url(); ?>&amp;w=353&amp;h=250&amp;zc=1" />

	<div class="atitle"><div class="postDate"><?php the_time('d/m') ?></div><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
</article>

<?php endwhile; else: ?>
<?php endif; ?>
</div>

<div class="container">
<div class="rt"></div>

<div class="redes fb"><div class="fb-page" data-href="https://www.facebook.com/PortalAURORAbr/?fref=ts" data-tabs="timeline" data-width="353" data-height="440" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PortalAURORAbr/?fref=ts"><a href="https://www.facebook.com/PortalAURORAbr/?fref=ts">Portal AURORA Brasil</a></blockquote></div></div></div>

<div class="redes tt"><a class="twitter-timeline" data-width="353" data-height="440" href="https://twitter.com/PortalAURORAbr">Tweets by PortalAURORAbr</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>

<div class="redes ig">
<div class="rTitle">
  <h3> Instagram</h3><span>por  </span><a href="https://www.instagram.com/portalaurorabr/" target="_blank">@PortalAURORAbr</a>
</div>
<iframe src="https://snapwidget.com/embed/348090" class="snapwidget-widget" allowTransparency="false" frameborder="0" scrolling="yes" style="border:none; overflow:hidden; width:353px; height:440px"></iframe>
</div>
</div>

<?php get_footer(); ?>