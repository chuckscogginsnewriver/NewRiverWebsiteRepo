<?php get_header(); ?>
      
    <div class="container">  

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-12 clearfix" role="main">

          <!-- UNCOMMENT FOR BREADCRUMBS
          <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?> -->

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header single-header">

								<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

							</header> <?php // end article header ?>

							<section class="entry-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
							</section> <?php // end article section ?>

							<footer class="article-footer">
                  <p class="tags"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="icon-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

							</footer> <?php // end article footer ?>

							<!-- <?php comments_template(); ?> -->

						</article> <?php // end article ?>

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
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>

				</div> <?php // end #main ?>

				<!-- <?php get_sidebar(); ?> -->

			</div> <?php // end #content ?>

    </div> <?php // end ./container ?>

<?php get_footer(); ?>
