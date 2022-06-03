<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description');?>">

    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>

   </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>
    <style>
      .bg-image {
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'./img/bgfront.png');?>) no-repeat center center;
      }
    </style>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
      <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
        if ( has_custom_logo() ) {
          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
      }?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  </form>
    </div>
</nav>
      </div>
    </div>
<section class="showcase bg-image">
  <div class="container">
    <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
  </div>
</section>

<section class="boxes" id="boxes">
  <div class="container">
    <div class="row">
      <div class="col">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
      <div class="col">
          <?php if(is_active_sidebar('box4')) : ?>
            <?php dynamic_sidebar('box4'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
  <a href="<?php echo get_theme_mod('btn_url', 'http://google.com'); ?>" class="btn btn-primary btn-lg btn-front"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
</section>

<section>

  <div class="container-fluid">
    <div class="row">
      <div class="main-content"></div>
    </div>
  </div>
</section>
<?php get_footer();?>