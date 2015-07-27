<?php
/*
Template Name: 2015 Home Page Template
*/
?> 

<?php get_header(); ?>

<?php
$link1 = 'http://newriver.church/wp-content/uploads/2015/04/background01.jpg';
$link2 = 'http://newriver.church/wp-content/uploads/2015/04/background02.jpg';
$link3 = 'http://newriver.church/wp-content/uploads/2015/04/background03.jpg';
$link4 = 'http://newriver.church/wp-content/uploads/2015/04/background04.jpg';
$link5 = 'http://newriver.church/wp-content/uploads/2015/04/background05.jpg';
$aimg = array($link1, $link2, $link3, $link4, $link5);
$i = rand(0, count($aimg)-1);
$selectedBg = "$aimg[$i]";
?>

<div id="home-main-container" style="background-image: url(<?php echo $selectedBg; ?>); background-size: cover;">
  <div id="home-main-content" class="container">
    <div class="row">
      <div class="col-md-8">
	      
	      <div class="mission">Leading people into a growing relationship with Jesus Christ.</div>	      
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

<!-- Email Signup Popup -->

<button type="button" id="emailmodalbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#emailmodal" style="display:none">

</button>

<div class="modal fade" id="emailmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Stay Up To Date</h4>
      </div>
      <div class="modal-body">
<p style="font-size:16px">Sign up for periodic updates (two or three times a month) with the latest New River news.<br>
	
	<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//nrcc.us8.list-manage.com/subscribe/post?u=4249d6e0b2a7c16ccb0e44447&amp;id=ecfa18acd3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_4249d6e0b2a7c16ccb0e44447_ecfa18acd3" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
	
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<!-- End Email Signup Popup -->

<div id="home-announcements-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				    <div class="whvideo">
					      <table><tr><td valign="middle"><img src="http://newriver.church/wp-content/uploads/2015/07/Whats-Happening-thumb.jpg"></td><td><a href="http://newriver.church/whnr">Click to watch this week's<br>What's Happening at New River announcements.</a></td></tr></table>
					</div>
			</div>
		</div>
	</div>
</div>

<?php if ( of_get_option('home_checkbox') == '0' ) { ?>

<div id="home-second-container" style="background-color:#252525;">
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

<?php } ?>

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
            <a href="/grow/men/">Men</a><br>
            <a href="/music">Music</a>
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
