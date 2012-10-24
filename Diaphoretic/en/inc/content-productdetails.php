<div class="container-pd">
	<div class="pd">
		<div class="sidebar">
			<div class="information">
			<?php
				query_posts(array('post_type' => 'product'));

			?>
				<p>Product Name:<b> <?php echo get_post_meta(get_the_ID(),'product_name',true); ?></b></p>
				<p>Product Designer:<b> <?php echo get_post_meta(get_the_ID(),'product_author',true); ?></b></p>
				<p>Product Group:<b> <?php echo get_post_meta(get_the_ID(),'product_group',true); ?></b></p>
				<p>Product Price:<b> <?php echo get_post_meta(get_the_ID(),'product_price',true); ?></b></p>
			</div>
			<div class="submit">
				<input type="button" value="Order" />
			</div>
		</div>
		<div class="content">
			<div class="image">
			<?php
				$args = array( 
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $post->ID ); 
				$attachments = get_posts($args);
				if ($attachments) {
					$i = 0;
					foreach ( $attachments as $attachment ) {
						if($i == 0){
							the_attachment_link( $attachment->ID , true );
							$i = 1;
						}
					}
				}
			?>
			</div>
			<div class="clear"></div>
			<div class="explain">
				<p>
				<?php 
					$postsubtitrare = get_post_meta($post->ID, 'id-subtitrare', true);
					$post_subtitrare = get_post($postsubtitrare);
					$content = $post_subtitrare-> post_content; echo $content;
				?>
				</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>