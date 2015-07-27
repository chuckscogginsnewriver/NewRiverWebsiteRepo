<?php
/*
Template Name: Happenings Page
*/
?>

<?php get_header(); ?>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-12 clearfix" role="main">
          
  			<header>
			
				<div class=""><h1 class="page-title" itemprop="headline">Happenings at New River</h1></div>
			
			</header> <!-- end article header -->

            <!-- UNCOMMENT FOR BREADCRUMBS
            <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?> -->

            <?php $args = array( 'post_type' => 'events', 'posts_per_page' => 80 , 'orderby' => 'event_date', 'meta_key' => 'event_date', 'orderby' => 'meta_value', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				if ($loop->have_posts()) { while ( $loop->have_posts() ) : $loop->the_post();

				//set the exp_date variable
				
				// if the Hide Event Date is set, use it for the expiration date
				if (get_field('hide_event_date')) {
					$exp_date = get_field('hide_event_date'); }
				
				// if the Hide Event Date is not set, use the end event date.
				elseif( get_field('event_end_date')) {
					$exp_date = get_field('event_end_date'); } 
						   
				// if neither the Hide Event date is set nor the event end date is set, use the event start date
				else { $exp_date = get_field('event_date'); }
				
				// check to see if the event is expired
				if (time() < strtotime("$exp_date")) {
				
			?>
			
			<div class="row happenings-event-list">
			
			<div class="col-md-3 happenings-featured-image">
				<a href="<?php echo the_permalink(); ?>">
			
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
				} 
				?>
				
				</a>
			</div>
			
			<div class="col-md-9">
            
				<div class="happenings-event-title">
					
	            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	            
	            <header>
                
	                <div class=""><h1 class="page-title" itemprop="headline"><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h1></div>
				
					<?php // Check to see if date is not blank ?>
								<?php if( get_field('event_date') ): 
								// Retreive date object
								$start_date = DateTime::createFromFormat('Ymd', get_field('event_date'));
								endif; ?>
								
								<?php if( get_field('event_end_date') ):
								$end_date = DateTime::createFromFormat('Ymd', get_field('event_end_date'));
								endif; ?>
								
								<?php // Print the date in the proper format ?>
								<strong class="event-meta">
									<?php if(get_field('event_date')) { ?>
										<?php echo $start_date->format('F d, Y');?>
									<?php } ?>
									<?php if(get_field('event_end_date')) { ?>
										 - <?php echo $end_date->format('F d, Y');?>
									 <?php } ?>
								 </strong>
					
					<?php // Check to see if time is not blank ?>
								<?php if( get_field('event_time') ): ?>
								<strong class="event-meta"> // <?php the_field('event_time') ?></strong>
					<?php endif; //end time ?>
					
				</div> <!-- end happenings-event-title -->
				
				</header>
            
              <section class="post_content clearfix" itemprop="articleBody">
                <!-- ?php $event_content = get_the_content(); 
	                 $trimmed_event_content = wp_trim_words($event_content, $num_words=50, $more=null);
	                 echo '<p>'.$trimmed_event_content.'</p>';
                ?-->
                
                <?php the_excerpt(); ?>
                
                <br>
                <a href="<?php the_permalink(); ?>" class="pull-right"><i class="fa fa-angle-double-right"></i> Details &amp; Registration</a>
            
              </section> <!-- end article section -->
              
              <footer>
        
                <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
                
              </footer> <!-- end article footer -->
            
            </article> <!-- end article -->
            
            <!-- ?php comments_template('',true); ? -->
            
			</div> <!-- col-md-11 -->
			
			</div> <!-- container -->
			
			<hr>
			
			<?php } ?>
            
            <?php endwhile; } wp_reset_query();?>    
        
          </div> <!-- end #main -->
      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>