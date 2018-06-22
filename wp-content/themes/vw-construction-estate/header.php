<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Construction Estate
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>  
  <div id="header">
    <div class="row m-0">
      <div class="social col-md-3">
        <?php if( get_theme_mod( 'vw_construction_estate_facebook_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_construction_estate_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_construction_estate_twitter_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_construction_estate_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
        <?php } ?>              
        <?php if( get_theme_mod( 'vw_construction_estate_insta_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_construction_estate_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_construction_estate_linkdin_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_construction_estate_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_construction_estate_youtube_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_construction_estate_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
        <?php } ?>
      </div>
      <div class="col-md-9 top-header">
        <div class="row m-0">
          <div class="col-md-3 col-sm-3">
            <?php if( get_theme_mod( 'vw_construction_estate_location','' ) != '') { ?>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-md-10 col-sm-10">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_location','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_location1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-md-3 col-sm-3">
            <?php if( get_theme_mod( 'vw_construction_estate_call','' ) != '') { ?>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <i class="fas fa-tty"></i>
                </div>
                <div class="col-md-10 col-sm-10">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_call','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_call1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-md-3 col-sm-3">
            <?php if( get_theme_mod( 'vw_construction_estate_mail','' ) != '') { ?>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <i class="far fa-envelope-open"></i>
                </div>
                <div class="col-md-10 col-sm-10">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_mail','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_mail1','') ); ?></p>
                </div>
              </div>
            <?php }?>        
          </div>
          <div class="col-md-3 col-sm-3">
            <?php if( get_theme_mod( 'vw_construction_estate_time','' ) != '') { ?>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <i class="far fa-clock"></i>
                </div>
                <div class="col-md-10 col-sm-10">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_time','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_time1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="row m-0">
      <div class="logo col-md-3 col-sm-3">
        <?php if( has_custom_logo() ){ vw_construction_estate_the_custom_logo();
           }else{ ?>
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?> 
            <p class="site-description"><?php echo esc_html($description); ?></p>       
        <?php endif; }?>
      </div>
      <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-construction-estate'); ?></a></div>
      <div class="col-sm-9 col-sm-9 menu-searh">
        <div class="row m-0">
          <div class="col-md-9 col-sm-9 menu">
            <div class="nav">
              <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div>
          </div>
          <div class="search-box col-md-3 col-sm-3">
            <?php get_search_form(); ?>
          </div>
       </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <?php if ( is_singular() && has_post_thumbnail() ) : ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'vw-construction-estate-post-image-cover' );
      $post_image = $thumb['0'];
    ?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">
      <?php the_post_thumbnail( 'vw-construction-estate-post-image' ); ?>
    </div>

    <?php elseif ( get_header_image() ) : ?>
    <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
      </a>
    </div>
  <?php endif; // End header image check. ?>