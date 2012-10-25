<div class="sidebar">
	<div class="title">
		<p>تست تست تست تست تست</p>
	</div>
	<div class="txt">
		<p>تست تست تست تست تست</p>
	</div>
	<div class="title">
		<p>تست تست تست تست تست</p>
	</div>
	<div class="form">
		<form action="<?php bloginfo('template_url') ?>/script/sendmail.php" method="post" target="ifrm" class="contact">
				<input type="text" id="firstname" name="firstname" class="text" placeholder="نام"><br>
				<input type="email" id="email" name="email" class="text" placeholder="ایمیل"><br>
				<input type="text" id="subject" name="subject" class="text" placeholder="موضوع"><br>
				<textarea name="message" id="message"rows="5" cols="10" placeholder="پیشنهادات و انتقادات خود را بیان کنید"></textarea><br />	
				<div class="submit">
					<input type="image" name="submit"  src="<?php bloginfo('template_url') ?>/image/send.png" />
				</div>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
		</form>
	</div>
	<div class="clear"></div>
</div>