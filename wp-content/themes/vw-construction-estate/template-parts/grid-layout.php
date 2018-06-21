<?php
/**
 * The template part for displaying slider
 *
 * @package VW Construction Estate
 * @subpackage vw-construction-estate
 * @since VW Construction Estate 1.0
 */
?>
<div class="col-md-6 col-sm-6">
	<div class="postbox smallpostimage">
      <?php 
        if(has_post_thumbnail()) { ?>
        <div class="padd-box">
            <div class="box-image">
              <?php the_post_thumbnail();  ?>
              <div class="overlay">
                <div class="text"><i class="fas fa-camera"></i></div>
              </div>
            </div>
        </div>
      <?php } ?>
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
            <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_construction_estate_string_limit_words( $excerpt,20 ) ); ?></p>
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
      <div class="clearfix"></div> 
  </div>
</div>