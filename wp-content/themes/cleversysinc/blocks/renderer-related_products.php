<?

function related_products($postid){
	$fields = get_field('related_products', $postid);
	$item = '<div class="panel"><h4>Related Products</h4><ul>';
		$itemSoftware="";
		$itemHardware="";
		$itemServices="";
	foreach ($fields as $post) {
	
		$title = $post->post_title;
		$link = $post->guid;
		$tax = get_the_term_list( $post->ID, 'custom_product_cat' , '', ', ', '' );
		
		$group = strip_tags( $tax );
		if($group == 'CRO/Research Services'){$group ="Services";}
		echo $group;
		//make a grouped list of item vars
		switch ($group) {
			case 'Software':
				$itemSoftware .= '<li class="'.$group.'" >'.$tax.' > <a href="'.$link.'">'.$title.'</a></li>';
				break;
			case 'Services':
				$itemServices .= '<li class="'.$group.'" >'.$tax.' > <a href="'.$link.'">'.$title.'</a></li>';
				break;
			case 'Hardware':
				$itemHardware .= '<li class="'.$group.'" >'.$tax.' > <a href="'.$link.'">'.$title.'</a></li>';
				break;
			default:
				# code...
				break;
		}

	}
	$item .= $itemSoftware.$itemHardware.$itemServices;
	$item .= '</ul></div>';
	return $item;

	}
?>