<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			

			<!-- Home Main -->
			
			
			
			<?php 
			$renderItem = '';
			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- Carousal Wrapper -->
				<?php 
				$renderItem .= '<div class="row clearfix"><div id="Carousal" class="twelve columns"><div class="wrapper" style="border:1px solid #333;"> <div id="featuredContent">';
				$gallery = get_field("gallery_panel");
					foreach($gallery as $galleryPanel):
						$renderItem .= '<div class="';
						$renderItem .= $galleryPanel["light_text"] ? 'light':'dark';
						$renderItem .= '" style="background-image:url( '.$galleryPanel["image"].');background-repeat: no-repeat;">';
						$renderItem .= '<h3 class="column four">'.$galleryPanel["title"].'</h3>';
						$renderItem .= '<p class="column four">'.$galleryPanel["explination"].'</p>';
						$renderItem .='<a href="'.$galleryPanel["link"].'">'.$galleryPanel["link_label"].'</a>';
						$renderItem .= '</div>';
					endforeach;
				$renderItem .= '</div></div></div></div></div><!-- End of Rotation -->	';
				$renderItem .= '<div id="home-main" class="row">';
				$renderItem .= '<div class="columns six"><p>'.get_the_content().'</p></div>';
				echo $renderItem;
				endwhile; endif; ?>
			<!-- End of Carousal Wrapper -->
					<script type="text/javascript"> 
					
					   $(window).load(function() {
					   	
					       $('#featuredContent').orbit({ 
					       	   animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
					           animationSpeed: 800,                // how fast animtions are
					           timer: true, 			 // true or false to have the timer
					           resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
					           advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
					           pauseOnHover: false, 		 // if you hover pauses the slider
					           startClockOnMouseOut: false, 	 // if clock should start on MouseOut
					           startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
					           directionalNav: true, 		 // manual advancing directional navs
					           captions: true, 			 // do you want captions?
					           bullets: false,			 // true or false to activate the bullet navigation
					           bulletThumbs: false,		 // thumbnails for the bullets
					           bulletThumbLocation: '',		 // location from this file where thumbs will be
					           fluid: '16x6' });
					   });
					  $(document).ready(function() {
						   $(document).foundationTabs();
					  });
					  
					</script>
				
			
			<aside class="columns six">
		
			<div id="search" class="">
				<div class="panel">
					<h3>Behavioral Tasks:</h3> 
					<p>Search for software programs and hardware apparatuses for a particular behavioral task.</p>
					<div class="drop">
						<form action="../cgi-bin/redirect.pl" method="POST" onsubmit="return dropdown(this.gourl)">
							<select name="gourl" class="columns ten">
								<option value="">Choose:
								</option><option value="products/behavioral-tasks/home-cage-monitoring">Home Cage Monitoring
								</option><option value="products/behavioral-tasks/morris-water-maze">Morris Water Maze
								</option><option value="products/behavioral-tasks/pair-associated-spatial-task">Pair Associated Spatial Task
								</option><option value="products/behavioral-tasks/t-maze">T-Maze
								</option><option value="products/behavioral-tasks/y-maze">Y-Maze
								</option><option value="products/behavioral-tasks/barnes-maze">Barnes Maze
								
								</option><option value="products/behavioral-tasks/odor-recognition-descrimination">Odor Recognition/Discrimination
								</option><option value="products/behavioral-tasks/radial-arm-maze">Radial Arm Maze
								</option><option value="products/behavioral-tasks/delayed-fear-conditioningextinction">Delayed Fear Conditioning/Extinction
								
								
								</option><option value="products/behavioral-tasks/trace-fear-conditioning">Trace Fear Conditioning
								</option><option value="products/behavioral-tasks/novel-object-recognition">Novel Object Recognition
								</option><option value="products/behavioral-tasks/passiveactive-avoidance">Passive/Active Avoidance
								</option><option value="products/behavioral-tasks/social-recognition">Social Recognition
								</option><option value="products/behavioral-tasks/attention-set-shift">Attention Set Shift
								
								</option><option value="products/behavioral-tasks/forced-walking">Forced Walking
								</option><option value="products/behavioral-tasks/free-walking">Free Walking
								</option><option value="products/behavioral-tasks/four-limb-asymmetry">Four Limb Asymmetry
								</option><option value="products/behavioral-tasks/parallel-bar">Parallel Bar
								
								</option><option value="products/behavioral-tasks/seizure-test">Seizure Test
								</option><option value="products/behavioral-tasks/open-field">Open Field
								</option><option value="products/behavioral-tasks/lightdark-box">Light/Dark Box
								</option><option value="products/behavioral-tasks/vocalization">Vocalization
								
								</option><option value="products/behavioral-tasks/social-reference-recognition">Social Preference Recognition
								</option><option value="products/behavioral-tasks/group-home-cage">Group Home Cage
								</option><option value="products/behavioral-tasks/dominant-submissive-behavior">Dominant Submissive Behavior
								
								</option><option value="products/behavioral-tasks/operant-conditioning">Operant Conditioning
								</option><option value="products/behavioral-tasks/conditioned-place-preference">Conditioned Place Preference
								
								</option><option value="products/behavioral-tasks/elevated-plus-maze">Elevated Plus Maze
								</option><option value="products/behavioral-tasks/tail-suspension">Tail Suspension
								</option><option value="products/behavioral-tasks/zero-maze">Zero Maze
								</option><option value="products/behavioral-tasks/porsolts-forced-swim">Porsolt's Forced Swim

							</option></select>
							<input type="SUBMIT" value="Go" class="button small">
						</form>
					</div>
				</div>
			</div> 
			<!-- End of row-->
			
			<div id="advert" class="hide-for-small">
				<div class="panel callout radius">
					<h3>Advert</h3>
					<h5 class="subheader">sub call to action</h5>
				</div>
			</div>
			<div id="support" class="">
				<div class="panel callout radius">
					<h3>Need Help?</h3>
					<h5 class="subheader">Contact Our Help Desk!</h5>
					<p>By Phone: <span class="phone">555-555-5555</span> or Online: <a href="mailTo:support@cleversysinc.com">Click Here</a></p>
				</div>
			</div>
			
			</aside>
			</div>
				<!-- End of Home Main -->
			<? 
			$args = array('taxonomy' => 'custom_product_cat' );  
			$custom_cat =  get_categories( $args );
		
			$module ="<div id='product-buckets'><div class='row'><ul class='column twelve'>";
			foreach ($custom_cat as $product) {
				
				$module .= "<li class='column four'>";
				$module .= "<h3>".$product->name."</h3>";
				$module .= "<p>".$product->description."</p>";
				$module .= "<a href='".$product->taxonomy."/".$product->slug."' class='button'>Read More »</a></li>";
				}
			$module .= "</ul></div></div>	";
			echo $module;
			?>	
			<div id="news" class="row container">
				<h4 class="column twelve" >Recent News</h4>
			<?php 
			$args = array(
			    'numberposts'     => 6,
				'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'post', ); 
			$news_arrya = get_posts( $args );
			$newsItem="";
			$binary=0;
			foreach ($news_arrya as $news) {
				$newsItem .='<article class="column four"role="article"';
				
				$newsItem .= '><div class="panel radius " style="height:17em;"><h5 style=" max-height: 3.25em;   overflow: hidden;line-height: 1.5em;">'.$news->post_title.'</h5>';
				$newsItem .='<section class="post_content"><p style="height:6.5em;overflow:hidden;display:block">'.$news->post_content.'</p>';
				$newsItem .='<a class="tiny button" href="'.$news->guid.'">Read More</a></section></div></article>';
				++ $binary;
				}
			$newsItem .='<div class="clearfix"></div>';
			echo $newsItem;
			 ?>
			</div> <!-- end #main -->
			</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>