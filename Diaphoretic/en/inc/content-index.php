<div class="container-content">
		<div class="content">
			<div class="sidebar">
				<div class="title">
					<p>test test test test test</p>
				</div>
				<div class="txt">
					<p>test test test test test test</p>
				</div>
				<div class="title">
					<p>test test test test test</p>
				</div>
				<div class="form">
					<form action="<?php bloginfo('template_url') ?>/sendmail.php" method="post" target="ifrm" class="contact">
							<input type="text" id="firstname" name="firstname" class="text" placeholder="name"><br>
							<input type="email" id="email" name="email" class="text" placeholder="email"><br>
							<input type="text" id="subject" name="subject" class="text" placeholder="subject"><br>
							<textarea name="message" id="message"rows="5" cols="10" placeholder="Project Description"></textarea><br />	
							<div class="submit">
								<input type="image" name="submit"  src="<?php bloginfo('template_url') ?>/image/send.gif" />
							</div>
							<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
					</form>
				</div>
				<div class="clear"></div>
			</div>
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
					<!-- Selector for slideshow (Disable)
					<div class="selector">
						<ul>
							<!-- make li tag with php (selector of image) -->
							<?php
							/*	for ($j=0; $j < $i ; $j++) { 
									echo '<li></li>';
								};*/
							?>
					<!--</ul>
					</div> -->
				</div>
				<div class="previous" onclick="previouspic();"></div>
				<div class="next" onclick="nextpic();"></div>
			</div>
			<div class="foot">
				<h1>Lastwork</h1>
				
			<?php
				$i = 0;
				query_posts(array('post_type' => 'product'));
				while(have_posts() && $i < 2){
				the_post();
			?>


				<div class="lastwork">
					<?php the_post_thumbnail() ?>
					<div class="boxt">
						<p><b><?php the_title() ?></b></p>
						<p><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>">بیشتر</a>
					</div>
				</div>


			<?php
				$i++;
				};
			?>


				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>