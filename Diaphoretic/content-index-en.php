<div class="container-content">
		<div class="content">
			<div class="sidebar">
				<div class="title"><p>what kuhboom can do</p></div>
				<div class="txt"><p>Kuhboom Creative is the portfolio of Neil Wills, a graphic / web designer based in Toronto, Ontario.
Kuhboom caters to busy design companies, as well as individuals, in need of great creative and standards compliant web design.</p></div>
				<div class="title"><p>this is a paragraph</p></div>
				<div class="form">
					<form action="sendmail.php" method="post">
							 <input type="text" name="firstname" class="text" placeholder="name"><br>
							 <input type="email" name="email" class="text" placeholder="email"><br>
							 <input type="text" name="subject" class="text" placeholder="subject"><br>
							<textarea rows="5" cols="7" placeholder="Project Description"></textarea><br />	
							<div class="submit">
								<input type="image" name="submit"  src="./image/send.gif" />
							</div>
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
				<h1>latest works</h1>
				<div class="lastwork"></div>
				<div class="lastwork"></div>
				<div class="lastwork"></div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>