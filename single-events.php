<?php ?>

<?php get_header(); ?>

      <div class="container">

  			<div id="content" class="clearfix row">

					<div id="main" class="col-md-8 clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

							<header class="article-header">

								<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

							</header> <?php // end article header ?>

							<section class="entry-content clearfix">

								<?php the_content(); ?>
								
							</section> <?php // end article section ?>
							
						</article> <?php // end article ?>
						
					</div> <?php // end main ?>
					
					<div class="col-md-4 pull-right">
					
								<div class="events-featured-image">
								
								<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('full');
								} 
								?>
								
								</div> <?php // end events-featured image ?>
								
								<div class="events-meta-box-header">
									<strong>Event Details</strong>
								</div>
								
								<div class="events-meta-box">
								
								<ul>
								
								<li>
								<?php // Check to see if date is not blank ?>
								<?php if( get_field('event_date') ): 
								// Retreive date object
								$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
								
								// If end date is set, set an $end_date variable
								if(get_field('event_end_date')) { $end_date = DateTime::createFromFormat('Ymd', get_field('event_end_date')); }
								
								?>
								<?php // Print the date in the proper format ?>
								<strong><i class="fa fa-angle-double-right"></i> Date:</strong> <?php echo $date->format('F d, Y'); ?> <?php if(get_field('event_end_date')) { ?> - <?php echo $end_date->format('F d, Y'); ?> <?php } ?><br>
								<?php endif; //end date ?>
								</li>
								
								<li>
								<?php // Check to see if time is not blank ?>
								<?php if( get_field('event_time') ): ?>
								<strong><i class="fa fa-angle-double-right"></i> Time:</strong> <?php the_field('event_time') ?><br>
								<?php endif; //end time ?>
								</li>
								
								<li>
								<?php // Check to see if location is not blank ?>
								<?php if( get_field('event_location') ): ?>
								<strong><i class="fa fa-angle-double-right"></i> Location:</strong> <?php the_field('event_location') ?><br>
								<?php endif; //end location ?>
								</li>
								
								<li>
								<?php // Check to see if cost is not blank ?>
								<?php if( get_field('event_cost') ): ?>
								<strong><i class="fa fa-angle-double-right"></i> Cost:</strong> <?php the_field('event_cost') ?><br>
								<?php endif; //end cost ?>
								</li>
								
								<li>
								<?php // Check to see if who is not blank ?>
								<?php if( get_field('event_who') ): ?>
								<strong><i class="fa fa-angle-double-right"></i> Who:</strong> <?php the_field('event_who') ?><br>
								<?php endif; //end time ?>
								</li>
								
								</ul>
								
								<div class="event-register-button">
								<?php // Check to see if registration is not blank ?>
								<?php if( get_field('event_register') ): ?>
								<?php $event_link = get_field('event_register'); ?>
								<button style="text-align:center" class="btn btn-primary" onclick="window.open('<?php echo $event_link ?>','_blank')">Register Now</button>
								<?php endif; //end time ?>
								</div> <?php // end event-register-button ?>
								
								</div> <?php // end events meta box ?>
								
					</div> <?php //end right column ?>

						<?php endwhile; ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

  			</div> <?php // end #content ?>

      </div> <?php // end ./container ?>

<?php get_footer(); ?>
