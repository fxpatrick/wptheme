<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <!-- <?php is_front_page() ? bloginfo('description') : wp_title(); ?> -->
    </title>
    <title>Blog Template for Bootstrap</title>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) ); ?>
        </nav>
      </div>
    </div>
    
<section class="showcase">
        <div class="container">
            <h1>Customs Bootstrap Wordpress Theme</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fuga voluptatum praesentium soluta minus aliquam quasi. Eveniet, illo voluptatibus! Nostrum nisi doloribus laborum. Quia vero perspiciatis nostrum error dolores explicabo!</p>
            <a href="" class="btn btn-primary btn-lg">read more</a>
        </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
                <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
                <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
                <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name') ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer() ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>