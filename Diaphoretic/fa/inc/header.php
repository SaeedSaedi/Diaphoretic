<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Diaphoretic</title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style/1styles.css" />
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/script/jquery.js" ></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/script/validator.js"></script>
	<script type="text/javascript">
		$(function(){
			m = 0;
			path = Array();
			<?php 
				/*--Folder address for image file--*/
				$template_path = get_template_directory();
				$template_url = get_bloginfo('template_url');
				$img_path = "/slideshow";

				$images = scandir($template_path . $img_path);
				$i = 0;
				foreach($images as $image){
					$img_exp = explode('.',$image);
					$img_type = strtolower(end($img_exp));
				/*--Acceptable File type | example : ($img_type == 'jpg' || $img_type == 'png') > for JPG or PNG --*/
					if($img_type == 'jpg'){
						$path[$i] = $template_url.$img_path."/".$image;
			?>
			path[m] = <?php echo "'$path[$i]'"; ?>;
			m++;
			
			<?php

						$i++;
					};
				};
			?>
			Length = <?php echo "$i"; ?>;
		});
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/script/script.js"></script>
</head>
<body>