<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/products.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/products_add.css">
	
</head>
<body>
<div class="container margin">
	<div id="photos">
		<?php 
	        if (isset($product)){
	            foreach ($product as $key) {
	                ?>	
	                	<div >
					    	<a class="decor-a" href="<?php echo($key->path); ?>" ><img class="img-cursor" src="<?php echo($key->imageUrl); ?>" alt="">
					    	<span class="span-cursor"><?php echo($key->title); ?></span></a>
					    	<div class="span-cursor mar-buttom"><?php echo($key->viewCount); ?></div>
						</div>
	                <?php
	            }
	        }
	    ?>
	</div>
</div>
</body>
</html>
