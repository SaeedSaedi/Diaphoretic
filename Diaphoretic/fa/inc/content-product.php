<div class="container-product">
	<div class="product">
		<div class="sidebar">
			<div class="sidemenu">
				<ul>
					<li><a href="#bird">گل و مرغ</a></li>
					<li><a href="#mini">مینیاتور</a></li>
					<li><a href="#khatoon">خاتون</a></li>
					<li><a href="#khat">خط</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="title" id="bird">
				<h1>گل و مرغ</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "گل و مرغ" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">...بیشتر</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
		<div class="title" id="mini">
				<h1>مینیاتور</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "مینیاتور" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">...بیشتر</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
			<div class="title" id="khatoon">
				<h1>خاتون</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "خاتون" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">...بیشتر</a>
					</div>
				</div>
			<?php
					};
				};
			?>
			<div class="clear"></div>
			</div>
			<div class="title" id="khat">
				<h1>خط</h1>
			</div>
			<div class="work-container">
			<?php
				query_posts(array('post_type' => 'product'));
				while(have_posts()){
				the_post();
				if( get_post_meta(get_the_ID(),'product_group',true) == "خط" ){
			?>
				<div class="work">
					<?php the_post_thumbnail(); ?>
					<div class="hid">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">...بیشتر</a>
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