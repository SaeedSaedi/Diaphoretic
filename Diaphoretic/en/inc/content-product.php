<div class="container-product">
	<div class="product">
		<div class="sidebar">
			<div class="sidemenu">
				<ul>
					<li><a href="#">Flower and Bird</a></li>
					<li><a href="#">Line Style</a></li>
					<li><a href="#">Miniature</a></li>
					<li><a href="#">khatoon</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="title">
				<h1>Flower and Bird</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "flower and bird" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">more</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
		<div class="title">
				<h1>Line Style</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "line style" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">more</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
			<div class="title">
				<h1>Miniature</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "miniature" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">more</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
			<div class="title">
				<h1>khatoon</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "khatoon" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">more</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>