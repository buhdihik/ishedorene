<!DOCTYPE html>
    <html<?php language_attributes();?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width">
           
            <link rel="stylesheet" type="text/css" href="http://ishedorene.com/wp-content/themes/ishesite/css/main.css">
            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
			
			<link rel="stylesheet" href="http://ishedorene.com/wp-content/themes/ishesite/css/bootstrap-social.css" >
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<?php wp_head(); ?>
        </head>
    <body style="background-color: #5aebc4;">
        <nav class=" navbar navbar-default navbar-fixed-top " id="menu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="http://ishedorene.com/wp-content/themes/ishesite/images/logo.png">
				
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
    </div>
</nav>
    