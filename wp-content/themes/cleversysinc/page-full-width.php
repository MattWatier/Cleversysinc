<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
			
			
				</div>	

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
					<div id="banner">
						<div class="row container"><div id="image" class="<?php the_title(); ?> column twelve">
						<h1 class="column twelve"><?php the_title(); ?></h1>
						</div></div>
					</div>
				<div id="content" class="clearfix row">
					<div id="main" class="twelve columns clearfix" role="main">
						<section class="post_content">
							<?php the_content(); ?>
						</section> <!-- end article section -->
						
						<div>
							<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
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
			
				</div> <!-- end #main -->
    
			</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>