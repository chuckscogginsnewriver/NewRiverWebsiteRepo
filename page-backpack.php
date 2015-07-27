<?php
/*
Template Name: Backpack Page Template
*/
 get_header(); ?>

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
              
              <header>
              
              </header> <!-- end article header -->
            
              <section class="post_content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
                
                <img src="http://newriver.church/wp-content/uploads/2015/06/backpack-attack-header@2x.jpg" />
                <br><br>
                This year, we&rsquo;re providing backpacks filled with school supplies for under-resourced students in the Clover School District. Would you consider purchasing a new backpack and fill it with the school supplies listed below and bring it to New River by August 2? We&rsquo;ll gather them up and deliver them to Clover School District for distribution.<br />
<br><br>
<div class="col-md-6">
<ul>
<li>Mead Composition Notebooks *Please, NO SPIRAL notebooks.*</li>
<li>Loose-leaf paper (wide &amp; college ruled)</li>
<li>#2 Pencils</li>
<li>Pencil Cap Erasers</li>
<li>5 assorted colors of 3 bendable-prong folders</li>
<li>Expo Dry-Erase Markers</li>
<li>Elmer&rsquo;s Glue Sticks</li>
<li>Scissors (child safe)</li>
<li>Crayola Markers</li>
<li>Crayola Crayons</li>
<li>3 ring binders: 1 in &amp; 1 &frac12; in</li>
<li>Binder dividers</li>
<li>Ear buds</li>
</ul>
<a href="http://newriver.church/wp-content/uploads/2015/06/supplylist.pdf">Download a printable supply list.</a>
</div>
<div class="col-md-6">
Or, order from one of the handy Amazon wish list and have your backpack delivered to the church.
<h2><a class="btn btn-primary" style="width: 325px; min-width: 325px;" href="http://www.amazon.com/gp/registry/wishlist/E5OFRU2RHREA/?ie=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=newrivchu-20&linkId=UYNJ5IAJLC5ZXPM7">Girls Backpack Attack Wishlist</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=newrivchu-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
</h2>
<h2><a class="btn btn-primary" style="width: 325px; min-width: 325px;" href="http://www.amazon.com/gp/registry/wishlist/3QP9OSWOZQ5NY/?ie=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=newrivchu-20&linkId=ENAB2P6T624E6W42">Boys Backpack Attack Wishlist</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=newrivchu-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
</h2>
<h2><a class="btn btn-primary" style="width: 325px; min-width: 325px;" href="https://nrcccltsc.infellowship.com/UserLogin/Index?ReturnUrl=%2fonlinegiving%2fgivenow%2fstep1">Give A Cash Donation Toward Backpack Attack</a>
</div>            
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
      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>