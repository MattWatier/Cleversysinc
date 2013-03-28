<footer  role="contentinfo">
			
<div class="row">
	<div class="large-3 hide-for-small columns">
		<h5>CleverSys Inc</h5>
		<nav>
			<?php  wp_nav_menu( array( 'menu' => 'footer_nav', 'menu_class' => 'hide-for-small') ); ?>
			
		</nav>
	</div>
<div class="columns large-4 small-12">
<div class="row">	<div class="panel callout columns small-12 round">
		<h5>Support &amp; Sales</h5>
		<p>We want to make your experiance with us as easy as possible. So please reach out if you have any questions</p>
		<div class="button-bar"><a href="mailto:support@cleversysinc.com" class="button small secondary">Email Support</a><a href="mailto:sales@cleversysinc.com" class="button small secondary">Email Sales</a></div>
	</div></div>
</div>
<div class="columns large-5 small-12">
	<div class="row">
		<div class="panel callout columns small-12 round">
			<h5 >Contact Us Directly</h5>
			
			<p class="columns large-6 small-12"> 11425 Isaac Newton Square - Suite 202 <br> Reston, VA 20190</p>
			<p class="columns large-6 small-12">Tel: <span class="phone">(703) 787 6946</span><br>
			Fax: <span class="fax">(703) 757 7467</span></p>
			<p class="columns small-12" style="text-align:center;">CleverSys, Inc. © 2010</p>
		</div></div>
</div>

				
</footer> <!-- end footer -->
	<?php wp_footer(); // js scripts are inserted using this function ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.clearing.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/app.js"></script>
	<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<!-- Check for Zepto support, load jQuery if necessary -->
	<script>
  document.write('<script src=<?php echo get_template_directory_uri(); ?>/js/vendor/'
    + ('__proto__' in {} ? 'zepto' : 'jquery')
    + '.js><\/script>');
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
	<script>
  $(document).foundation();
</script>
</body>
</html>