<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Diaphoretic</title>
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="jquery.js" ></script>
	<script type="text/javascript">
		$(function(){
			m = 0;
			path = Array();

			<?php 
				/*--Folder address for image file--*/
				$img_path = "./slideshow";

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
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container-head">
		<div class="corner"></div>
		<div class="head">
			<div class="logo"></div>
			<div class="header">
				<div class="right">
					<h1>به سایت ما خوش امدید</h1>
					<h2>در اینجا مطلب خود را پیدا کنید</h2>
				</div>
				<div class="left"></div>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">product</a></li>
					<li><a href="#">gallery</a></li>
					<li><a href="#">about us</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-content">
		<div class="content">
			<div class="sidebar"></div>
			<div class="container-slideshow">
				<div class="slideshow">
					<div class="slidebar">
						<!-- make 32 Div tag with php (the slideshow Square) -->
						<?php
							for ($m=0; $m < 32; $m++) { 
								echo "<div></div>";
							};
						?>
					</div>
					<div class="selector">
						<ul>
							<!-- make li tag with php (selector of image) -->
							<?php
								for ($j=0; $j < $i ; $j++) { 
									echo '<li></li>';
								};
							?>
						</ul>
					</div>
				</div>
				<div class="previous" onclick="previouspic();"></div>
				<div class="next" onclick="nextpic();"></div>
			</div>
			<div class="foot">
				<h1>LAST WORK</h1>
				<div class="lastwork"></div>
				<div class="lastwork"></div>
				<div class="lastwork"></div>
			</div>
		</div>
	</div>
	<div class="container-footer">
		<div class="footer">
			<div class="right">
				<div class="facebook"></div>
				<div class="twitter"></div>
			</div>
			<div class="left">
				<div class="copyright"></div>
				<div class="info"></div>
			</div>
		</div>
	</div>
</body>
</html>