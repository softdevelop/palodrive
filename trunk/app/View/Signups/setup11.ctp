<form method="post" action="/signups">
	<input type="hidden" name="step" value="12" />
	<p>Congrats! Your UserName and Handle were available!</p>
	<p>Remember if you dont finish this all at once you can log back in anytime and infinity will take you back to where you left off! You have 48 hours to complete the registration or you will have to restart</p>

	<?php if($this->Session->check('users.master')) :?>
		<p>Username: <?php echo $this->Session->read('users.master.user_name');?></p>
		<p>Password: <?php echo $this->Session->read('users.master.password');?></p>
		<p>Handle: <?php echo $this->Session->read('users.master.handle_name');?></p>
	<?php else : ?>
		<p> Informations master not existing</p>
	<?php endif; ?>	
	<input type="submit" id="next_btn" class="next" value="Next" />
</form>
