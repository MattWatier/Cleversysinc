<?php
/*
Template Name: NormalPage
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
				include 'blocks/block-advert.php';
				include 'blocks/block-contact.php';
				include 'blocks/block-software_suite.php';
				
				
				//get_template_part( 'content', 'advert_block' ); 
			 ?>


	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>