<?

function related_products($postid){
	$fields = get_field('related_products', $postid);
	$item = '<div class="panel"><h4>Related Products</h4><ul>';
	foreach ($fields as $post) {
		print_r($post);
		$type = $post->post_title;
		$link = $post->guid;
		$obj = get_post_type_object($post->post_type);
		$args=array(
			'name' => $post->post_type
			);
		$tax = get_taxonomies( $args);

		print_r( $tax );
		$item .= <<<BLOCK
			<li><a href="#">link</a></li>
BLOCK;
	}
	$item .= '</ul></div>';
	return $item;

}
?>