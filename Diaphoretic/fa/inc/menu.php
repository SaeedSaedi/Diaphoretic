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
				<div class="clear"></div>
			</div>
			<div class="menu">
					<?php
						wp_nav_menu(array(
							'theme_location'  => 'mainmenu',
							'container'       => false, 
							'container_class' => '', 
							'menu_class'      => '', 
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
						));
					?>
			</div>
			<div class="clear"></div>
		</div>
	</div>