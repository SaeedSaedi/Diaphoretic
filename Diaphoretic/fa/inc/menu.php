	<div class="container-head">
		<a href="mailto:info@miraclewood.ir" title=""><div class="corner"></div></a>
		<div class="head">
			<div class="logo"><img src="<?php bloginfo('template_url') ?>/image/logo.png" alt=""></div>
			<div class="header">
				<div class="right">
					<h1>اعجاز چوب</h1>
					<h2>هنر معرق کاری چوب</h2>
				</div>
				<div class="left">
					<div class="img">
						<a href="http://miraclewood.ir/"><img src="<?php bloginfo('template_url') ?>/image/iran.png" alt=""></a>
						<a href="http://miraclewood.ir/en"><img src="<?php bloginfo('template_url') ?>/image/usa.png" alt=""></a>
					</div>
				</div>
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