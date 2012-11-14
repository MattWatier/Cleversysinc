<?php
/*
Template Name: CONTACT Page
Pulls in two contact pages contact page & basic oncatct form.
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="content" class="contact clearfix row ">
    		<article class="main" role="main">
	    			<header><h1 class="column"><?php the_title(); ?></h1></header>
					<section class="post_content column"><?php the_content(); ?></section>
			</article> <!-- end #main -->
	<?php endwhile; ?>	
	<?php else : ?>
		<article id="post-not-found">
		    <header>
		    	<h1>Not Found</h1>
		    </header>
		    <section class="post_content">
		    	<p>Sorry, but the requested resource was not found on this site.</p>
		    </section>
		</article>
			
	<?php endif; ?>
	<div class="sidebar">
		<?php

		    $secondContent = new WP_Query('pagename=content-sidebar');
		    
		?>
		<?php while ($secondContent->have_posts()) : $secondContent->the_post(); ?>
		   <?php the_content(); ?>
		<?php endwhile; ?>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>