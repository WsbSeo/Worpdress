<?php
/**
 * Template Name: Page with Right Sidebar
 */

get_header(); ?>

<?php do_action( 'vw_construction_estate_header_pageright' ); ?>

<div class="container">
    <div class="middle-align row">       
		<div class="col-md-9" id="content-vw" >
			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
            <?php
                //If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
            ?>
        </div>
        <div class="col-md-3">
			<?php get_sidebar('page'); ?>
		</div>
        <div class="clear"></div>    
    </div>
</div>

<?php do_action( 'vw_construction_estate_footer_pageright' ); ?>

<?php get_footer(); ?>