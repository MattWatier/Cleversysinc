<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="seven columns clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							<h1><?php the_title(); ?></h1>
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content(); ?>
						</section> <!-- end article section -->
					</article> <!-- end article -->
				</div> <!-- end #main -->
				<div id="sidebar" class="columns five">
					<div class="panel"> 
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
						
					
						
					</div>
					<div class="panel">
						<h3>Detectable Behaviors</h3>
						<? 
						$detectable_behaviors = wp_get_object_terms( get_the_ID() , 'behaviors');
						
						if(!empty($detectable_behaviors)){
						  if(!is_wp_error( $detectable_behaviors )){
						    echo '<ul>';
						    foreach($detectable_behaviors as $term){
						      echo '<li><a href="'.get_term_link($term->slug, 'behaviors').'">'.$term->name.'</a></li>'; 
						    }
						    echo '</ul>';
						  }
						}
						
						
						?>
						
						
					</div>
					
				</div>
			</div> <!-- end #content -->
<div class="row">
<dl class="tabs">
  <dd class="active"><a href="#simple1">Applications</a></dd>
  <dd><a href="#simple2">Unique Capablities</a></dd>
  <dd><a href="#simple3">Results</a></dd>
  <dd> <a href="#simple4">Production Options</a></dd>
  <dd><a href="#simple5">Requirements</a></dd>
  <dd><a href="#simple6">Screen Grabs</a></dd>
</dl>

<ul class="tabs-content">
  <li class="active" id="simple1Tab"><? $field = get_field("application");  echo $field;?></li>
  <li id="simple2Tab"><? $field = get_field("unique_capabilities");echo $field; ?></li>
  <li id="simple3Tab"><? $field = get_field("results");echo $field; ?></li>
    <li class="active" id="simple4Tab"><? $field = get_field("product_options");  echo $field;?></li>
  <li id="simple5Tab"><? $field = get_field("requirements");echo $field; ?></li>
  <li id="simple6Tab"><? $field = get_field("screen_grabs");echo $field; ?></li>
</ul>
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