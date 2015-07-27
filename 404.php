<?php get_header(); ?>

      <div class="container">

  			<div id="content">

					<div id="main" class="col-md-8 clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1>Uh oh.</h1>

							</header> <?php // end article header ?>

							<section class="entry-content">

								<p><?php _e( 'The page you were looking for was not found.', 'bonestheme' ); ?></p>

							</section> <?php // end article section ?>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section> <?php // end search section ?>

							<footer class="article-footer">

									<p>When the page you're trying to find isn't found, it's called a 404 error. May we suggest you use the search field above to try to find it. Or, <a href="/contact">contact us</a> if we can help you!. </p>

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

					</div> <?php // end #main ?>

  			</div> <?php // end #content ?>

      </div> <?php // end ./container ?>


<?php get_footer(); ?>
