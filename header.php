<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<?php if ( is_front_page() ) { ?>
		<title>New River Church</title>
		<?php } else { ?>
		<title><?php wp_title(''); ?> - New River Church</title>
		<?php } ?>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<meta name="google-site-verification" content="jvY5IHbd_GIsgOdgHlBrxow8b4OeiTHWbNnd5_APlls" />
		
		<meta name="keywords" content="Lake Wylie, Church, York, Clover, Jesus, come, connect, grow, serve, go, jesus christ salvation, preschool, childre,n middle school, high school, college, adults, seniors, what to do" />

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=3">
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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-57869742-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<?php // end analytics ?>
		
		<!-- Modal -->

		<!-- Uncomment the script below to show the modal window -->
		<!--script>
		jQuery(document).ready(function() {
		    $("#weathermodalbutton").trigger('click');
		});
		</script-->
		
		
		<!-- Old Modal -->

		<!--script>
		jQuery(document).ready(function() {
		    $("#emailmodalbutton").trigger('click');
		});
		</script-->
		
		<!--script>
jQuery(document).ready(function () {
    //if cookie hasn't been set...
    if (document.cookie.indexOf("ModalShown=true")<0) {
        jQuery("#myModal").modal("show");
        //Modal has been shown, now set a cookie so it never comes back
        jQuery("#myModalClose").click(function () {
            jQuery("#myModal").modal("hide");
        });
        document.cookie = "ModalShown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    }
});
</script-->

	</head>

	<body <?php body_class(); ?>>

    <header class="header">

      <nav role="navigation">
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><img style="width:310px; height:auto;" src="<?php bloginfo('template_directory'); ?>/library/images/header-logo@2x.png" id="main-logo" alt="<?php bloginfo( 'name' ) ?>"></a>

            </div>

            <div id="home-menu" class="navbar-collapse collapse navbar-responsive-collapse pull-right">
              <span style="width:200px; margin-left:30px;" class="pull-right"><?php get_search_form(); ?></span>
              <?php bones_main_nav(); ?>
            </div>
          </div>
        </div> 
        
      </nav>

		</header> <?php // end header ?>
