<section id="contact" role="form">
	<div class="container">
	
		<h2>Contact</h2>
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/pixiefan.eu/inc/form.php'; ?>
		<form class="contact-form"  method="post" action="#contact" novalidate onsubmit="myFunc()">
			<p>Full name * <input type="text" id="name" name="name" value="<?php echo (isset($name) ? $name : ''); ?>"></p>
			<p>E-mail * <input type="text" id="email" name="email" value="<?php echo (isset($email) ? $email : ''); ?>"></p>
			<p>Subject * <input type="text" id="subject" name="subject" value="<?php echo (isset($subject) ? $subject : ''); ?>"></p>
			<p>Message * <br>
			<textarea id="message" name="message"><?php echo (isset($message) ? $message : ''); ?></textarea></p>
			<p><input  type="submit" name="submit" class="submit" value="Send Message" ></p>
			
			<div class="contact-message"><?php echo $contactMessage; ?></div>
		</form>
	</div>
</section>
<footer>
	<div class="container footer">
		<ul>
			<li>
				<a href="">
					<img src="images/fb.png" alt="facebook app developer">
				</a>
			</li>
			<li>
				<a href="">
					<img src="images/g+.png" alt="google plus app developer">
				</a>
			</li>
			<li>
				<a href="">
					<img src="images/tw.png" alt="tweet app developer">
				</a>
			</li>
		</ul>
		<div class="copyright">
			<p>&copy; 2017 PixieFan - <a href="http://pixiefan.eu/privacy-policy">Privacy policy</a></p>
		</div>
	</div>
</footer>
<!-- ==================\\\ End Section Footer ///================== -->
<script src="js/myscript.js"></script>
</body>
</html>