<?php
/*
Template Name: Products Page
*/
?>

<?php get_header(); ?>

<div id="content" class="clearfix row">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<header class="twelve column row"><h1 class="column"><?php the_title(); ?></h1></header>
		<div class="main">
			<section class="post_content">
				<?php the_content(); ?>
			</section> <!-- end article section -->

		</div> <!-- end #main -->			

	<?php endwhile; else : ?>

		<div id="main" class="twelve columns clearfix" role="main">
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
		</div> <!-- end #main -->

	<?php endif; ?>
	<div class="sidebar">
		<?php
				include 'block-contact.php';
				include 'block-software_suite.php';
			 ?>


	</div>
</div> <!-- end #content -->	
<div class="full-width row">
	<? 
			$args = array('taxonomy' => 'custom_product_cat' );  
			$custom_cat =  get_categories( $args );
		
			$module ="<div class='row'><ul class='column twelve'>";
			foreach ($custom_cat as $product) {
				
				$module .= "<li class='column four'>";
				$module .= "<h3>".$product->name."</h3>";
				$module .= "<p>".$product->description."</p>";
				$module .= "<a href='".$product->taxonomy."/".$product->slug."' class='button'>Filter »</a></li>";
				}
			$module .= "</ul></div>";
			echo $module;
			?>	
	</div>


<?php get_footer(); ?>