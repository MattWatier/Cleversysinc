<footer  role="contentinfo">
			
<div class="row">

	<div class="twelve columns clearfix">
 
		<nav >
			<?php  wp_nav_menu( array( 'menu' => 'main_nav', 'menu_class' => 'eight columns utility-nav nav-bar hide-for-small') ); ?>
			
		</nav>

		
	</div>

					</div>
					
</footer> <!-- end footer -->
		
		
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>