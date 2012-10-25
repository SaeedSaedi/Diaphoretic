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