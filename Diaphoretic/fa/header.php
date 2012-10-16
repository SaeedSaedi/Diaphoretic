<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Diaphoretic</title>
	<link type="text/css" rel="stylesheet" href="../1styles.css" />
	<link type="text/css" rel="stylesheet" href="../style.css" />
	<script type="text/javascript" src="../jquery.js" ></script>
	<?php
		if($page == 'home'){
	?>
	<script type="text/javascript">
		$(function(){
			m = 0;
			path = Array();

			<?php 
				/*--Folder address for image file--*/
				$img_path = "../slideshow";

				$images = scandir($img_path);
				$i = 0;
				foreach($images as $image){
					$img_exp = explode('.',$image);
					$img_type = strtolower(end($img_exp));
				/*--Acceptable File type | example : ($img_type == 'jpg' || $img_type == 'png') > for JPG or PNG --*/
					if($img_type == 'jpg'){
						$path[$i] = $img_path."/".$image;
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
	<script type="text/javascript" src="../script.js"></script>
	<?php
		};
	?>
</head>
<body>