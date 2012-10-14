	<div class="container-head">
		<div class="corner"></div>
		<div class="head">
			<div class="logo"></div>
			<div class="header">
				<div class="right">
					<h1>
						<?php
							if($lang == 'en') echo "welcome to our site";
							if($lang == 'pr') echo "به سایت ما خوش امدید";
						?>
					</h1>
					<h2>
						<?php
							if($lang == 'en') echo "find your subject here";
							if($lang =='pr') echo "در اینجا مطلب خود را پیدا کنید";
						?>
					</h2>
				</div>
				<div class="left"></div>
				<div class="clear"></div>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="./index.php">
							<?php
								if($lang == 'en') echo "Home";
								if($lang == 'pr') echo "خانه";
							?>
						</a>
					</li>
					<li>
						<a href="./product.php">
							<?php
								if($lang == 'en') echo "Product";
								if($lang == 'pr') echo "محصولات";
							?>
						</a>
					</li>
					<li>
						<a href="#">
							<?php
								if($lang == 'en') echo "Diaphoretic";
								if($lang == 'pr') echo "معرق کاری";
							?>
						</a>
					</li>
					<li>
						<a href="#">
							<?php
								if($lang == 'en') echo "About Us";
								if($lang == 'pr') echo "درباره ما";
							?>
						</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>