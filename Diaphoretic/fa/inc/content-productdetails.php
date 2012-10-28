<div class="container-pd">
	<div class="pd">
		<div class="sidebar">
			<div class="information">
			<?php
				query_posts(array('post_type' => 'product'));

			?>
				<p>نام اثر :<b> <?php echo get_post_meta(get_the_ID(),'product_name',true); ?></b></p>
				<p>طراح اثر :<b> <?php echo get_post_meta(get_the_ID(),'product_author',true); ?></b></p>
				<p>نوع اثر :<b> <?php echo get_post_meta(get_the_ID(),'product_group',true); ?></b></p>
				<p>قیمت :<b> <?php echo get_post_meta(get_the_ID(),'product_price',true); ?></b></p>
			</div>
			<div class="submit">
				<div class="sidebar">
					<div class="title">
						<p>سفارش این کار</p>
					</div>
					<div class="txt">
						<p>برای سفارش این کار فرم زیر را پر کرده و سپس بر روی دکمه ارسال کلیک نمایید تیم ما در اولین فرصت با شما تماس خواهد گرفت</p>
					</div>
					<div class="form">
						<form action="<?php bloginfo('template_url') ?>/script/sendmail.php" method="post" target="ifrm" class="contact">
								<input type="text" id="firstname" name="firstname" class="text" placeholder="نام"><br>
								<input type="email" id="email" name="email" class="text" placeholder="ایمیل"><br>
								<input type="text" id="subject" name="subject" class="text" placeholder="شماره تماس"><br>
								<textarea name="message" id="message"rows="5" cols="10" placeholder="">
									<?php echo get_post_meta(get_the_ID(),'product_name',true); ?>
									<?php echo get_post_meta(get_the_ID(),'product_author',true); ?>
									<?php echo get_post_meta(get_the_ID(),'product_group',true); ?>
									<?php echo get_post_meta(get_the_ID(),'product_price',true); ?>
									<?php the_permalink() ?>
								</textarea><br />	
								<div class="submit">
									<input type="image" name="submit"  src="<?php bloginfo('template_url') ?>/image/send.png" />
								</div>
								<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
						</form>
					</div>
					<div class="clear"></div>
				</div>
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