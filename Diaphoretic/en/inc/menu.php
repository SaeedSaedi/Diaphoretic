	<div class="container-head">
		<div class="corner"></div>
		<div class="head">
			<div class="logo"></div>
			<div class="header">
				<div class="right">
					<h1>welcome to our site</h1>
					<h2>find your subject here</h2>
				</div>
				<div class="left">
					<div class="img">
						<a href=""><img src="<?php bloginfo('template_url') ?>/image/iran.png" alt=""></a>
						<a href=""><img src="<?php bloginfo('template_url') ?>/image/usa.png" alt=""></a>
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