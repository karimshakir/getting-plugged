<style>
	.tgp_admin{
		width:250px;
		display:inline-block;
	}
</style>

<?php
	if($_POST['tgp_hidden'] == 1){
		//Form Was Submitted
		$db_host = $_POST['db_host'];
		update_option('db_host', $db_host);
		
		$db_name = $_POST['db_name'];
		update_option('db_name', $db_name);
		
		$db_user = $_POST['db_user'];
		update_option('db_user', $db_user);
		
		$db_pass = $_POST['db_pass'];
		update_option('db_pass', $db_pass);
		
		$img_folder = $_POST['img_folder'];
		update_option('img_folder', $img_folder);
		
		$store_url = $_POST['store_url'];
		update_option('store_url', $store_url);
		
		$num_products = $_POST['num_products'];
		update_option('num_products', $num_products);
	} else {
		//Form Was NOT Submitted - Get Option Values
		$db_host 	= get_option('db_host');
		$db_name	= get_option('db_name');
		$db_user	= get_option('db_user');
		$db_pass 	= get_option('db_pass');
		$img_folder = get_option('img_folder');
		$store_url 	= get_option('store_url');
		$num_posts 	= get_option('num_posts');

	}
?>

<div class="wrap tgp_admin">
	<?php echo "<h2>" . __('TGP Product Display Options','tgp_trdom') . "</h2>"; ?>
	
	<form name="tgp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<?php echo "<h4>" . __('Database Settings','tgp_trdom') . "</h4>"; ?>
		<p>
			<label><?php echo _e("Database Host:"); ?></label>
			<input type="text" name="db_host" value="<?php echo $db_host; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database Name:"); ?></label>
			<input type="text" name="db_name" value="<?php echo $db_name; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database User:"); ?></label>
			<input type="text" name="db_user" value="<?php echo $db_user; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database Password:"); ?></label>
			<input type="text" name="db_pass" value="<?php echo $db_pass; ?>" size="20">
		</p>
		
		<?php echo "<h4>" . __('Store Settings','tgp_trdom') . "</h4>"; ?>
		<p>
			<label><?php echo _e("Store URL:"); ?></label>
			<input type="text" name="store_url" value="<?php echo $store_url; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Product Image Folder Path:"); ?></label>
			<input type="text" name="img_folder" value="<?php echo $img_folder; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Number of Products:"); ?></label>
			<input type="text" name="num_products" value="<?php echo $num_products; ?>" size="20">
		</p>
		<p>
			<input type="hidden" name="tgp_hidden" value="1">
			<input type="submit" name="Submit" value="<?php _e('Save','tgp_trdom'); ?>" />
		</p>
	</form>
</div>