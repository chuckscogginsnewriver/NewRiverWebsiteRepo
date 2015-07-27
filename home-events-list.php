            <?php $args = array( 'post_type' => 'events', 'posts_per_page' => 525 , 'orderby' => 'event_date', 'meta_key' => 'event_date', 'orderby' => 'meta_value', 'order' => 'ASC');
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
				
			//end setting the exp_date variable
				
				// check to make sure the event is not expired
				if (time() <= strtotime($exp_date)) :
				
								if( get_field('event_date') ) {
									
				        			// Retreive date object
				        			$start_date = DateTime::createFromFormat('Ymd', get_field('event_date'));
				        			
				        		}
				        			
							?>
						
							<ul id="home-events-sub">
								<li>
									<div class="home-events-sub-left">
						        			<strong class="event-meta">
						        				<?php if(get_field('event_date')) { ?>
						            					<span class="event-date-m"><?php echo $start_date->format('M');?></span><br><?php echo $start_date->format('d');?>
						        				<?php } ?>
						        			 </strong>
									</div>
									<div class="home-events-sub-right">
										<?php if (get_field('event_short_name')) { ?>
											<a href="<?php echo the_permalink() ?>"><?php the_field('event_short_name'); ?></a>
										<?php } else { ?>
											<a href="<?php echo the_permalink() ?>">
												<?php
												$thetitle = get_the_title();
												$getlength = strlen($thetitle);
												$thelength = 18;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
												?>
											</a>
										<?php } ?>
									</div>
								</li>
							</ul>

				<?php endif; ?>
				
<?php endwhile; } wp_reset_query();?> 