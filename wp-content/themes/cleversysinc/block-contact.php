
<div id="support" class="">
	<div class="panel callout radius">

		
		<?php 
			$advertID = 1001;
			$wp_page = get_page($advertID);
			$item = "";
			$item .= $wp_page ->post_content;
			echo $item;
		 ?>
	</div>
</div>
