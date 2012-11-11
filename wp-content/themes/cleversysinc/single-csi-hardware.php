<?php
/* Hardware Package

  Hardware Screen Shots
  Title
  Content
  Documents
  Dimensions
  Cite
  Associated Software


   */
?>

<?php get_header(); ?>
			
			<div class="clearfix row csi-products">
			
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header class="csi-product column twelve"><h1 class="column"><?php the_title(); ?></h1></header>
					<div class="main clearfix" role="main">
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						

						<section class="post_content clearfix">
                            <div class=" panel">
                                
                                <? $field = get_field("image");
                                	$items = '<img style="margin:0 auto;display:block;" src="'.$field["sizes"]["wpf-featured"].'" alt="'.$field["caption"].'">';
                                	echo $items;
                                 ?>
                            </div>
                            <div>
                            	<h4>Discription</h4>
								<?php the_content();
								 $postID = get_the_ID();?>
                            </div>
	                       <h4>Dimentions</h4>
                       		<? $field = get_field("dimenstions");
                       			$bool = true;
                       			$items = "";
                       			$items .= "<table cellspacing='0' cellpadding='0' class='dimensions'><thead><td>item</td><td>width</td><td>length</td><td>height</td><td>animal</td></thead><tbody>";
                       			foreach($field as $dimenstion):
									$items .= '<tr';
									$items .= ($bool)? " clas='even '" : " clas='odd' " ;
									$items .= '><td>'.$dimenstion["extra"].'</td><td>'.$dimenstion["width"].'<em>&nbsp;'.$dimenstion["scale"].'</em></td><td>'.$dimenstion["length"].'<em>&nbsp;'.$dimenstion["scale"].'</em></td><td>'.$dimenstion["height"].'<em>&nbsp;'.$dimenstion["scale"].'</em></td><td>'.implode(",", $dimenstion["animal"]).'</td></tr>';
                       				$bool = !$bool;


                       			endforeach;
                       			$items .= '</tbody></table>';
                       			echo $items;
                       		?>                            
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
								$items .= '<a target="_blank" href="'.$document["link_to_document"] .'" class="button">Download PDF</a>';
								}
							echo $items;
						?>
					</div> <!-- end .panel -->
					
						<?php 
							$field  = get_field('extra_photos');
							if($field != NULL || $field != ""){
								$items ='<div><h5 class="title">Images</h5><ul class="block-grid three-up" data-clearing>';
								foreach ($field as $image) {
									$image = $image["image"];
									$items .= '<li><a href="'.$image["sizes"]["wpf-featured"].'"><img src="'.$image["sizes"]["thumbnail"].'" data-caption="'.$image["caption"].'"></a></li>';
								}
								$items .= "</ul></div>";
								echo $items;
							}
						?>
					<? include 'blocks/renderer-related_products.php';

						$related_products = related_products($postID);
						echo $related_products;
					?>	
                    <div class="panel">
                       <h5 class="title">Behavior Recognition</h5>
                       		<? $field = get_field("behavior_recognition");  echo $field;?>
                    </div> 
				</div> <!-- end sidebar -->
			</div> <!-- end #content -->

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