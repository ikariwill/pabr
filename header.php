<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(' | ',true,'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/ads.js"></script>
                <!-- SLIDE -->
        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('#fade').cycle({
            fx: 'fade' 
            });
            });
        </script>
        
        <?php wp_head(); ?>
    </head>


<body> 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1035782563118520";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="topo"></div>
<div class="nav"><div style="float:left;"><?php wp_nav_menu(); ?></div><?php get_search_form(); ?></div>
<div class="about">Sua melhor fonte no Brasil sobre a cantora e compositora Norueguesa <b>AURORA</b>. Seguidos e Reconhecidos pela própria.</div>
