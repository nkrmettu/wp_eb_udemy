<?php
/**
 * The template part for displaying slider
 *
 * @package VW Blog Magazine 
 * @subpackage vw_blog_magazine
 * @since VW Blog Magazine 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="postbox smallpostimage">
      <?php 
          if(has_post_thumbnail()) { ?>
        <div class="col-md-5 padd-box">
          <div class="box-image">
            <?php the_post_thumbnail();  ?>
            <div class="overlay">
              <div class="text"><i class="fas fa-camera"></i></div>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="new-text <?php 
          if(has_post_thumbnail()) { ?>col-md-7"<?php } else { ?>col-md-12"<?php } ?>>
          <div class="box-content">
            <h4><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h4>
            <div class="metabox">
              <i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_date(); ?></span>
              <i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span>
              <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-blog-magazine'), __('0 Comments','vw-blog-magazine'), __('% Comments','vw-blog-magazine') ); ?></span>
            </div>
            <hr class="big">
            <hr class="small">
            <p><?php $excerpt = get_the_excerpt();
              echo esc_html( vw_blog_magazine_string_limit_words( $excerpt,30 ) ); ?></p>
            <div class="col-md-4">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'vw-blog-magazine' ); ?>"><?php esc_html_e('Read Full','vw-blog-magazine'); ?></a>
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