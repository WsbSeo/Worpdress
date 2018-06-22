<?php
/**
 * The template part for displaying slider
 *
 * @package VW Construction Estate 
 * @subpackage vw_construction_estate
 * @since VW Construction Estate 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="postbox smallpostimage">
      <?php
        if ( ! is_single() ) {

          // If not a single post, highlight the gallery.
          if ( get_post_gallery() ) {
            echo '<div class="entry-gallery">';
              echo ( get_post_gallery() );
            echo '</div>';
          };
        };
      ?>
      <div class="new-text">
          <div class="box-content">
            <h4><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h4>
            <div class="metabox">
              <i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_date(); ?></span>
              <i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span>
              <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-construction-estate'), __('0 Comments','vw-construction-estate'), __('% Comments','vw-construction-estate') ); ?></span>
            </div>
            <hr class="big">
            <hr class="small">
            <p><?php $excerpt = get_the_excerpt();
              echo esc_html( vw_construction_estate_string_limit_words( $excerpt,30 ) ); ?></p>
            <div class="row">
              <div class="col-md-4">
                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'vw-construction-estate' ); ?>"><?php esc_html_e('Read Full','vw-construction-estate'); ?></a>
              </div>
              <div class="col-md-8">
                <div class="blog-icon">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                  <a href="https://plus.google.com/share?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a href="https://twitter.com/share?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a href="http://www.instagram.com/submit?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                </div> 
              </div>
            </div>
          </div>
      </div>
      <div class="clearfix"></div> 
  </div>
</div>