<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="clearfix row ">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<header class="twelve column row"><h1 class="column"><?php the_title(); ?></h1></header>
        <div><?php the_content(); ?></div>
			
	<?php endwhile; endif; ?>
	
	<div id="sidebar" class="column four"></div>
	<div id="tumblelog" class="colum eight">

		<?php
			$args = array(
			    'numberposts'     =>  -1,
				'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'post', ); 
			$news_arrya = get_posts( $args );
			$newsItem="";
			foreach ($news_arrya as $news) {
				$newsItem .='<article class="';
				$random = rand(1,3);
				if($random == 1) $newsItem .= 'column four';
				if($random == 2) $newsItem .= 'column eight';
				if($random == 3) $newsItem .= 'column four';
				
				$newsItem .='" role="article"';
				
				$newsItem .= '><div class="post panel"><h4><a href="'.$news->guid.'">'.$news->post_title.'</a></h4>';
				$newsItem .='</div></article>';
				}
			$newsItem .='<div class="clearfix"></div>';
			echo $newsItem;
			?>
		
	</div> <!-- end #Maine-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/masonry.min.js"></script>
	<script type="text/javascript">
		window.onload = function() {
		  var wall = new Masonry( document.getElementById('tumblelog'), {
		      columnWidth: function( containerWidth ) {
    return containerWidth / 12;
  },isResizable:true
		  });
		};


	</script>
	<style>
	.post{border-top: 4px solid #ccc;padding: 10px 10px 20px; }
	</style>
	</div> <!-- end #content -->

<?php get_footer(); ?>