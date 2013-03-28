<footer  role="contentinfo">
			
<div class="row">
	<div class="three columns">
		<h5>CleverSys Inc</h5>
		<nav>
			<?php  wp_nav_menu( array( 'menu' => 'footer_nav', 'menu_class' => 'hide-for-small') ); ?>
			
		</nav>
	</div>
<div class="column four">
	<div class="panel callout column twelve round">
		<h5>Support &amp; Sales</h5>
		<p>We want to make your experiance with us as easy as possible. So please reach out if you have any questions</p>
		<div class="button-bar"><a href="mailto:support@cleversysinc.com" class="button small secondary">Email Support</a><a href="mailto:sales@cleversysinc.com" class="button small secondary">Email Sales</a></div>
	</div>
</div>
<div class="column five">
	<div class="panel callout column twelve round">
		<h5 >Contact Us Directly</h5>
		
		<p class="column six"> 11425 Isaac Newton Square - Suite 202 <br> Reston, VA 20190</p>
		<p class="column six">Tel: <span class="phone">(703) 787 6946</span><br>
		Fax: <span class="fax">(703) 757 7467</span></p>
		<p class="column twelve" style="text-align:center;">CleverSys, Inc. © 2010</p>
	</div>
</div>

				
</footer> <!-- end footer -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.clearing.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/app.js"></script>

	
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>