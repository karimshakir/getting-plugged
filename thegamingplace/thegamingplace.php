<style>
	.tgp_product{
		float:left;
		width:190px;
		margin-right:15px;
	}
</style>
<?php
	/*
	Plugin Name: The Gaming Place
	Description: A bridge plugin for TheGamingPlace store products
	Author: Brad Traversy
	Version: 1.0
	*/

//Add Settings Menu Item
function tgp_admin_actions(){
	add_options_page("TGP Product Display","TGP Product Display",1, "TGP_Product_Display","tgp_admin");
}	

add_action('admin_menu', 'tgp_admin_actions');

function tgp_admin(){
	include('thegamingplace_admin.php');
}

//Get and Display Products
function tgp_get_products(){
	//Connect to TheGamingPlace database
	$db = new wpdb(get_option('db_user'),get_option('db_pass'),get_option('db_name'),get_option('db_host'));
	
	//Get Values
	$store_url 		= get_option('store_url');
	$img_folder 	= get_option('img_folder');
	$num_products 	= get_option('num_products');
	
	//Get Products
	$products = $db->get_results("SELECT * FROM products LIMIT ".$num_products);
	
	//Build Output
	$output = '';
	if($products){
		foreach($products as $product){
			$output .= '<div class="tgp_product">';
			$output .= '<h3>'.$product->title.'</h3>';
			$output .= '<img src="'.$store_url.'/'.$img_folder.'/'.$product->image.'" alt="'.$product->title.'">';
			$output .= '<div class="price">'.$product->price.'</div>';
			$output .= '<div class="desc">'.wp_trim_words($product->description, 10).'</div>';
			$output .= '<a href="'.$store_url.'products/details/'.$product->id.'">Buy Now</a>';
			$output .= '</div>';
		}
	} else {
		$output .= 'No products to list';
	}
	
	return $output;
}

//Add Shortcode
add_shortcode('show_products','tgp_get_products');

?>