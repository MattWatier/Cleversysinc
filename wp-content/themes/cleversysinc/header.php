<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.accordion.js"></script>
	

	</head>
	
	<body <?php body_class(); ?>>
<header role="banner" id="top-header" class="">
		<div class="row">		
				<nav id="top-nav" class="twelve columns">
					<?php  wp_nav_menu( array( 'menu' => 'main_nav', 'menu_class' => 'utility-nav nav-bar hide-for-small') ); ?>
					<?php  wp_nav_menu( array( 'menu' => 'utility_nav', 'menu_class' => 'utility-nav nav-bar hide-for-small') ); ?>
					<div class="show-for-small menu-action">
				  	    <a href="#sidebar" id="mobile-nav-button" class="sidebar-button small secondary button">
							<svg xml:space="preserve" enable-background="new 0 0 48 48" viewBox="0 0 48 48" height="18px" width="18px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1">
								<line y2="8.907" x2="48" y1="8.907" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
								<line y2="24.173" x2="48" y1="24.173" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
								<line y2="39.439" x2="48" y1="39.439" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
								Menu
							</svg>
						</a>
					</div>

				</nav>
			

					<?php bones_mobile_nav(); ?>
	</div>
</header> <!-- end header -->
<div id="product_collection">
		<div id="drop-down"><div class="row">
			<ul id="collapse-nav" class="tabs-content" >
			<?php	$args = array('taxonomy' => 'custom_product_cat' );  
						$custom_cat =  get_categories( $args );
					
						$menu ="<li  id='blankTab'class='row'>&nbsp;</li>";
						$tabs ="";
						foreach ($custom_cat as $product) {
							$tabs .= '<dd><a href="#'.$product->slug.'">'.$product->name.'</a></dd>';
							$menu .= "<li id='".$product->slug."Tab' class='columns twelve'>";
							$menu.="<ul class='column twelve'>";
							$args = array(
							   'numberposts' => -1,
							   'post_type' => 'csi_products',
							   'custom_product_cat' => $product->slug
							);
							$links = get_posts ( $args );
							$linkList = "";
							foreach($links as $link){
							
								$linkList .='<li class="column three"><a href="'.get_bloginfo(wpurl).'/?'.$link->post_type.'='.$link->post_name.'#blank">'.$link->post_title.'</a></li>';
								

								
							}
							
							$linkList .="</ul>";
							$menu .= $linkList;
							$menu .= "</li>";
							
							}
						echo $menu;
				?>
			</ul>
		</div>
	</div>
	<div class="row">
		<dl class="tabs">
		 <dd class="active" ><a href="#blank">Close</a></dd> <?php echo $tabs; ?><dt>Products: </dt>
		</dl>
	</div>
</div>
<div class="row" style="overflow:visible;">
		<div class="logo"><h1>Cleversys Inc</h1><cite class="cite">behavior recognition technology of the next generation</cite></div>
</div>
		