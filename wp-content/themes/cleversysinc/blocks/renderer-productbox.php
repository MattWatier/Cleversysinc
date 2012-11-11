<?php
/**
* 
*/

	function productbox($prodcutItem)
	{
	$item_ID = $prodcutItem->ID;
	$item_title = $prodcutItem->post_title;
	$item_excerpt = get_field('excerpt',$linkID);
	$item_slug = $prodcutItem->post_name;
	$item_type = $prodcutItem->post_type;

	$item= "";


	$item .= <<<BLOCK
			<div class="prodcut_item revealer">
			<div class="reveal-holder">
			<img alt="$item_title $item_type" src="http://placehold.it/350x150/333333/ffffff">
			<h2 class="title">$item_title</h2><span class="$item_type icon brain">$item_slug</span>
			</div>
			<div class="reveal-slide">
			<h2 class="title">$item_title</h2>
			<p>$item_excerpt</p>
			<a href="/?$item_type=$item_slug" class="button" title="learn more about $item_title">Learn More »</a>
			</div>
			<div class="toggle"><span class="icon">toggle</span></div>
			</div>
BLOCK;

			return $item;
	}



?>
