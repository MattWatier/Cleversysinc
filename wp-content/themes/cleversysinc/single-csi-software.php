<?php
/* Software Package

  Software Screen Shots
  Title
  Content
  Documents
  Detectable Behaviors
  Cite
  Applications
  Unique Capablities
  Results
  Requirements
  Associated Hardware


   */
?>

<?php get_header(); ?>
			
			<div class="clearfix row csi-products">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
          <header class="csi-product column twelve"><h1 class="column"><?php the_title(); ?></h1></header>
          <div class="main clearfix" role="main">
          
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                                <? $field = get_field("featured_image");
                                  if($field!=''){
                                  $items = ' <div class=" panel"><img style="margin:0 auto;display:block;" src="'.$field["sizes"]["wpf-featured"].'" alt="'.$field["caption"].'"></div>';
                                  echo $items;}
                                 ?>

						<section class="post_content clearfix">
               <div class="row">
                  <? $field = get_field("image");
                    $item = '<img src="'.$field["sizes"]["wpf-featured"].'" alt="'.$field["caption"].'">';
                    echo $item;
                   ?>
              </div>
							<?php the_content(); ?>
                           
						</section> <!-- end article section -->
					</article> <!-- end article -->
				</div> <!-- end #main -->
				<div class="sidebar">
						<? 
            include 'blocks/block-document.php'; 
            include "blocks/block-extra_images.php";
            include 'blocks/block-detectable_behaviors.php';
						?>
					         
                    
                    <ul class="accordion">
                        <? $field = get_field("application");
                            if($field != ""){
                                echo '<li class="active" > <div class="title"> <h5>Applications</h5></div><div class="content">'.$field.'</div></li>';
                              }
                            $field = get_field("unique_capabilities");
                            if($field != ""){
                                 echo '<li><div class="title"><h5>Unique Capablities</h5> </div><div class="content">'.$field.'</div></li>'; 
                              } 
                            $field = get_field("results");
                             if($field !=''){
                                echo'<li><div class="title"><h5>Results</h5></div><div class="content">'.$field.'</div></li>';
                             } 
                            $field_r = get_field("requirements");
                            $field_p = get_field("product_options");  
                            if($field_r !='' && $field_p != ''){
                              $item = '<li><div class="title"><h5>Requirements &amp; Production Options</h5></div><div class="content">';
                              if($field_r != ""){
                                $item .= '<h6>Requirements</h6><div>'.$field_r.'</div>';
                              }
                              if($field_p != ""){
                                $item .= '<h6>Production Options</h6><div>'.$field_p.'</div>';
                              }
                              $item .='</div></li>';
                              echo $item;
                            } 
                         ?>
                    </ul>
                    <? include 'blocks/renderer-related_products.php';

                      $related_products = related_products($postID);
                      echo $related_products;
                    ?>  
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




<?php get_footer(); ?>