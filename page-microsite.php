<?php
/*
Template Name: Microsite Page
*/
?>

<?php get_header(); ?>

      <div class="container">
          
            <?php if( get_field('page_featured_image')) { ?>
            <img class="page-featured-image" src="<?php the_field('page_featured_image'); ?>" />
            <?php } ?>

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-12 clearfix" role="main">

            <!-- UNCOMMENT FOR BREADCRUMBS
            <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?> -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                      
              <section class="post_content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
            
              </section> <!-- end article section -->
              
              <footer>
        
                <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
                
              </footer> <!-- end article footer -->
            
            </article> <!-- end article -->
            
            <!-- ?php comments_template('',true); ? -->
            
            <?php endwhile; ?>    
            
            <?php else : ?>
            
            <article id="post-not-found">
                <header>
                  <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                </header>
                <section class="post_content">
                  <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                </section>
                <footer>
                </footer>
            </article>
            
            <?php endif; ?>
        
          </div> <!-- end #main -->
      
          <!--div id="sidebar" class="col-md-4">
            <?php dynamic_sidebar('grow-page-sidebar'); ?>
          </div-->
      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>