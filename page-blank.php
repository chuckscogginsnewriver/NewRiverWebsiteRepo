<?php
/*
Template Name: Blank Page
*/
?>

<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<?php if ( !is_page_template('page-home.php') ) { ?>
		<title><?php wp_title(''); ?> - New River Church</title>
		<?php } else { ?>
		<title>New River Church</title>
		<?php } ?>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"/>
		
		<meta name="google-site-verification" content="jvY5IHbd_GIsgOdgHlBrxow8b4OeiTHWbNnd5_APlls" />
		
		<meta name="keywords" content="Lake Wylie, Church, York, Clover, Jesus, come, connect, grow, serve, go, jesus christ salvation, preschool, childre,n middle school, high school, college, adults, seniors, what to do" />

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		
		<script src="<?php bloginfo('template_directory'); ?>/library/scripts/retina.min.js"></script>
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

		<?php // Google Analytics ?>
            <script>

                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                
                ga('create', 'UA-57869742-1', 'auto');
                ga('send', 'pageview');
            
            </script>
		<?php // end analytics ?>
		
		<style>
			body {padding-top:0 !important}
			input {display:block; width: 100%; max-width: 100%;}
		</style>

	</head>

	<body <?php body_class(); ?>>
		
		<div class="container">
          
            <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-12 clearfix" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <section class="post_content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
            
              </section> <!-- end article section -->
              
                         
            <?php endwhile; ?>    
            
            <?php endif; ?>
            
          </div>
          
            </div>
            
		</div>
		
   <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>


  </body>

</html> 
