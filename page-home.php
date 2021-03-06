<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div id="home-main-container">
  <div id="home-main-content" class="container">
    <div class="row">
      <div class="col-md-8">
    <?php
	/* Get all sticky posts */
	$sticky = get_option( 'sticky_posts' );

	/* Sort the stickies with the newest ones at the top */
	rsort( $sticky );

	/* Get the 2 newest stickies (change 2 for a different number) */
	$sticky = array_slice( $sticky, 0, 1 );

	/* Query sticky posts */
	query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
	
	/* Start the loop */
	if ( have_posts()) : while ( have_posts() ) : the_post(); 
    ?>
           
            <div id="home-heading">Latest Blog Post</div>
            <!--div id="home-blogpost-container" style="color:white">
                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div-->
            <div id="home-excerpt"><?php the_excerpt(); ?></div>
            <button id="readmore-btn" class="btn btn-primary btn-lg" onclick="window.open('<?php the_permalink(); ?>','_blank')">Read More</button>
            <div id="home-service-invite"><p>VISIT US IN LAKE WYLIE THIS SUNDAY!</p></div>
            <div id="home-service-invite-times"><p>8:30 a.m., 10:00 a.m., 11:30 a.m., 5:00 p.m.</p></div>
            <div style="clear:both">&nbsp;</div>
          <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; wp_reset_query(); ?>
      </div> <!-- col-md-8 -->
      <div class="col-md-4 home-feature-image-container" style="text-align:right;">
        <a href="<?php echo of_get_option('home_featured_link_01'); ?>"><img class="home-feature-image" src="<?php echo of_get_option('home_featured_01'); ?>"></a><br>
        <a href="<?php echo of_get_option('home_featured_link_02'); ?>"><img class="home-feature-image" src="<?php echo of_get_option('home_featured_02'); ?>"></a><br>
        <a href="<?php echo of_get_option('home_featured_link_03'); ?>"><img class="home-feature-image" src="<?php echo of_get_option('home_featured_03'); ?>"></a><br>
      </div>
    </div> <!-- row -->
  </div> <!-- home-main-content -->
</div> <!-- home-main-container -->

<!-- Weather Popup -->

<button type="button" id="weathermodalbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#weathermodal" style="display:none">

</button>

<div class="modal fade" id="weathermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inclement Weather Notification</h4>
      </div>
      <div class="modal-body">
<p style="font-size:16px">All Growth Groups and paid childcare are canceled for tonight, Thursday February 26</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<!-- End Weather Popup -->


<div id="home-second-container">
  <div class="container home-three">
    <div class="row">
      <div class="featured col-md-4">
        <a href="<?php echo of_get_option('home_secondary_link_01'); ?>"><img class="img-responsive" src="<?php echo of_get_option('home_secondary_01'); ?>"></a>
      </div><!-- /.col-lg-4 -->
      <div class="featured col-md-4">
        <a href="<?php echo of_get_option('home_secondary_link_02'); ?>"><img class="img-responsive" src="<?php echo of_get_option('home_secondary_02'); ?>"></a>
      </div><!-- /.col-lg-4 -->
      <div class="featured col-md-4">
        <a href="<?php echo of_get_option('home_secondary_link_03'); ?>"><img class="img-responsive" src="<?php echo of_get_option('home_secondary_03'); ?>"></a>
      </div><!-- /.col-lg-4 -->
    </div> <!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- home-second-container -->


<div class="container" id="home-third-container">
    <div class="row" id="home-events-container">
        <div class="col-md-3">
            <h3>Upcoming Events</h3>
<?php require('home-events-list.php'); ?>
        </div>
        <div class="col-md-2">
            <h3>Connect</h3>
            <a href="https://twitter.com/newrivercc">Twitter</a><br>
            <a href="https://www.facebook.com/pages/New-River-Community-Church/254662134877">Facebook</a><br>
            <a href="/updates/">Email Updates</a><br>
            <a href="/life-change/">Share Your Story</a><br>
            <a href="/sermons/">Listen To Sermons</a>
        </div>
        <div class="col-md-2">
            <h3>Need Help?</h3>
            <a href="/pastoral-care/">Pastoral Care</a><br>
            <a href="/decision/">About Jesus</a><br>
            <a href="/get-started/staff/">Staff Contact Info</a>
        </div>
        <div class="col-md-2">
            <h3>Quick Links</h3>
            <a href="/grow/river-kidz/">River Kidz</a><br>
            <a href="/grow/kidz-kove/">Kids Kove</a><br>
            <a href="grow/new-river-students/">New River Students</a><br>
            <a href="/grow/grow/">Growth Groups</a><br>
            <a href="/grow/ladies/">Ladies</a><br>
            <a href="/grow/men/">Men</a>
        </div>
        <div class="col-md-2" style="">
            <!-- <h3>Twitter Feed</h3> -->
            <!-- Begin Twitter Widget -->
            <a class="twitter-timeline" href="https://twitter.com/newrivercc" data-widget-id="531904639499640832">Tweets by @newrivercc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- End Twitter Widget -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
