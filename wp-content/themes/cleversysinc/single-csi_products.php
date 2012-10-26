<?php
/* Single-csi_products.php   */
?>

<?php get_header(); ?>
			
			<div class="clearfix row csi-products">
			
				<div class="main clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header>
							<h1><?php the_title(); ?></h1>
						</header> <!-- end article header -->

						<section class="post_content clearfix">
                            <div class="row">
                                <h5>Screen Grabs</h5>
                                <? $field = get_field("screen_grabs");print_r($field); ?>
                            </div>
							<?php the_content(); ?>
                           
						</section> <!-- end article section -->
					</article> <!-- end article -->
				</div> <!-- end #main -->
				<div class="sidebar">
					<div class="panel callout"> 
						<h3>Documents</h3>
						<? 
						$items ="";
						$field = get_field("documents");
						foreach($field as $document){
							$items .= '<p>'.$document["name_of_document"].'</p>';
							$items .= '<a href="'.$document["link_to_document"] .'" class="button">Download PDF</a>';
						}
						echo $items;
						?>
					</div> <!-- end .panel -->
                    <div class="panel behaviors">
                               <h5>Detectable Behaviors</h5>
                                <?php 
                                $detectable_behaviors = wp_get_object_terms( get_the_ID() , 'behaviors');
                                
                                if(!empty($detectable_behaviors)){
                                  if(!is_wp_error( $detectable_behaviors )){
                                    echo '<ul>';
                                    foreach($detectable_behaviors as $term){
                                      echo '<li><a href="'.get_term_link($term->slug, 'behaviors').'">'.$term->name.'</a></li>'; 
                                    }
                                    echo '</ul>';
                                  }
                                } ?>
                            </div> 
                    
                    <ul class="accordion">
                        <li class="active" >
                              <div class="title">
                                <h5>Applications</h5>
                              </div>
                              <div class="content">
                                 <? $field = get_field("application");  echo $field;?>
                              </div>
                        </li>
                        <li>
                              <div class="title">
                                <h5>Unique Capablities</h5>
                              </div>
                              <div class="content">
                                 <? $field = get_field("unique_capabilities");echo $field; ?>
                              </div>
                        </li>   
                        <li>
                              <div class="title">
                                <h5>Results</h5>
                              </div>
                              <div class="content">
                                <? $field = get_field("results");echo $field; ?>
                              </div>
                        </li> 
                        <li>
                              <div class="title">
                                <h5>Requirements &amp; Production Options</h5>
                              </div>
                              <div class="content">
                                  <h6>Requirements</h6>
                                  <div><? $field = get_field("requirements");  echo $field;?></div>                                  
                                  <hr>
                                  <h6>Production Options</h6>
                                  <div><? $field = get_field("product_options");  echo $field;?></div>
                              </div>
                        </li> 
                    </ul>
				</div> <!-- end sidebar -->
			</div> <!-- end #content -->
<div class="row">

</div>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			   <script>
                $(document).ready(function() {
              $(document).foundationTabs();
                          $(document).foundationAccordion();
            });
        </script>



<?php get_footer(); ?>