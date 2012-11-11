<?

function related_products($postid){
	$fields = get_field('related_products', $postid);
	$item = '<div class="panel"><h4>Related Products</h4><ul>';
	foreach ($fields as $post) {
		$item .= <<<BLOCK
			<li><a href="#">link</a></li>
BLOCK;
	}
	$item .= '</ul></div>';
	return $item;

}
?>