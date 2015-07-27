<?php
/*
Template Name: Stories Page
*/
?>

<?php get_header(); ?>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            <!-- UNCOMMENT FOR BREADCRUMBS
            <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?> -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
              <header>
                
                <div class=""><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
              
              </header> <!-- end article header -->
            
              <section class="post_content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
                
                <!-- Stories from Vimeo -->
                
                <p><style id="badge-styles" type="text/css">
        /* You can modify these CSS styles */
        .vimeoBadge { margin: 0; padding: 0; font: normal 11px verdana,sans-serif; }
        .vimeoBadge img { border: 0; }
        .vimeoBadge a, .vimeoBadge a:link, .vimeoBadge a:visited, .vimeoBadge a:active { color: #3A75C4; text-decoration: none; cursor: pointer; }
        .vimeoBadge a:hover { color:#00CCFF; }
        .vimeoBadge #vimeo_badge_logo { margin-top:10px; width: 57px; height: 16px; }
        .vimeoBadge .credit { font: normal 11px verdana,sans-serif; }
        .vimeoBadge .clip { padding:0; float:left; margin:0 10px 10px 0; line-height:0; }
        .vimeoBadge.vertical .clip { float: none; }
        .vimeoBadge .caption { font: normal 11px verdana,sans-serif; overflow:hidden; width: auto; height: 30px; }
        .vimeoBadge .clear { display: block; clear: both; visibility: hidden; }
        .vimeoBadge .s160 { width: 160px; } .vimeoBadge .s80 { width: 80px; } .vimeoBadge .s100 { width: 100px; } .vimeoBadge .s200 { width: 200px; }
    </style></p>
<div id="badge">
<div class="vimeoBadge horizontal"><script src="https://vimeo.com/nrcc/badgeo/?script=1&badge_layout=horizontal&badge_quantity=27&badge_size=160&badge_stream=album&show_titles=no&badge_album=213499&badge_channel=4953&badge_group=46040"></script></div>
</div></span></p>

<!-- End Vimeo Stories -->
            
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
      
          <div id="sidebar" class="col-md-4">
            <?php dynamic_sidebar('grow-page-sidebar'); ?>
          </div>
      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>