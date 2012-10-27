<div class="sidebar">
	<div class="title">
		<p>سفارش کار اختصاصی</p>
	</div>
	<div class="txt">
		<p>برای سفارش یک کار اختصاصی بعد از تهیه عکس از کار مورد نظر و اپلود آن فرم زیر را پر کرده و  متنی شامل ادرس عکس مورد نظر و شماره تلفن خود برای ما ارسال نمایید تیم ما در اولین فرصت با شما تماس خواهد گرفت</p>
	</div>
	<div class="title">
		<p>نظر خود را به اطلاع ما برسانید</p>
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