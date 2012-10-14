<div class="container-content">
		<div class="content">
			<div class="sidebar">
				<div class="title">
					<p>
						<?php
							if($lang == 'en') echo "tes test test test";
							if($lang == 'pr') echo "تست تست تست تست تست";
						?>
					</p>
				</div>
				<div class="txt">
					<p>
						<?php
							if($lang == 'en') echo "tes test test test";
							if($lang == 'pr') echo "تست تست تست تست تست";
						?>
					</p>
				</div>
				<div class="title">
					<p>
						<?php
							if($lang == 'en') echo "tes test test test";
							if($lang == 'pr') echo "تست تست تست تست تست";
						?>
					</p>
				</div>
				<div class="form">
					<?php
						if($lang == 'en'){
					?>
					<form action="sendmail.php" method="post">
							 <input type="text" name="firstname" class="text" placeholder="name"><br>
							 <input type="email" name="email" class="text" placeholder="email"><br>
							 <input type="text" name="subject" class="text" placeholder="subject"><br>
							<textarea rows="5" cols="7" placeholder="Project Description"></textarea><br />	
							<div class="submit">
								<input type="image" name="submit"  src="./image/send.gif" />
							</div>
					</form>
					<?php
						};
						if($lang == 'pr'){
					?>

					<form action="sendmail.php" method="post">
							 <input type="text" name="firstname" class="text" placeholder="نام"><br>
							 <input type="email" name="email" class="text" placeholder="ایمیل"><br>
							 <input type="text" name="subject" class="text" placeholder="موضوع"><br>
							<textarea rows="5" cols="10" placeholder="پیشنهادات و انتقادات خود را بیان کنید"></textarea><br />	
							<div class="submit">
								<input type="image" name="submit"  src="./image/send.png" />
							</div>
					</form>
					<?php 
						};
					?>
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
				<h1>
					<?php
								if($lang == 'en') echo "LastWork";
								if($lang == 'pr') echo "اخرین کارها";
					?>
				</h1>
				<div class="lastwork">
					<img src="./product/1.jpg" width="200" height="200" alt="" />
					<div class="boxt">
						<p>
							<?php
								if($lang == 'en') echo "tes test test test";
								if($lang == 'pr') echo "تست تست تست تست تست";
							?>
						</p>
						<a href="#">
							<?php
								if($lang == 'en') echo "more";
								if($lang == 'pr') echo "بیشتر";
							?>
						</a>
					</div>
				</div>
				<div class="lastwork">
					<img src="./product/2.jpg" width="200" height="200" alt="" />
					<div class="boxt">
						<p>
							<?php
								if($lang == 'en') echo "tes test test test";
								if($lang == 'pr') echo "تست تست تست تست تست";
							?>
						</p>
						<a href="#">
							<?php
								if($lang == 'en') echo "more";
								if($lang == 'pr') echo "بیشتر";
							?>
						</a>
					</div>
				</div>
				<div class="lastwork">
					<img src="./product/3.jpg" width="200" height="200" alt="" />
					<div class="boxt">
						<p>
							<?php
								if($lang == 'en') echo "tes test test test";
								if($lang == 'pr') echo "تست تست تست تست تست";
							?>
						</p>
						<a href="#">
							<?php
								if($lang == 'en') echo "more";
								if($lang == 'pr') echo "بیشتر";
							?>
						</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>