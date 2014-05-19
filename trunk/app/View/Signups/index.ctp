<h2>Choose Username, Login, Handle</h2>
<form method="POST" id="register_form" action="">
	<p>You will be able to modify your account name and password after the account is set-up</p>
	<div class="info">
	    <div class="input" style="background-image:url(img/Name.png);">
	    	<input type="text" id="usename" placeholder="Usename" name="data[User][user_name]" value=""></div>
	    <div class="input" style="background-image:url(img/Pass.png);"><input type="password" required="" id="password" placeholder="Password" name="data[User][password]" value=""></div>
	    <div class="input" style="background-image:url(img/Handle.png);"><input type="text" required="" id="handle_name" placeholder="Handle name" name="data[User][handle_name]" value=""></div>
	</div>
	<div style="clear:both;"></div>
	<button id="next_btn" type="button" class="next" onclick="javascript:checkAvailability();" style="background-position: 175px 8px;width: 210px;text-align: left;">Check availability</button>
</form>
</div>
<script>
	function checkAvailability(){
		var postData = {
			'data[User][user_name]':$("#usename").val(),
			'data[User][handle_name]':$("#handle_name").val(),
			'data[User][password]':$("#password").val()
		};
		$.ajax({ // create an AJAX call...
			type: 'POST', // GET or POST
			data: postData,
			url: '<?php echo FULL_BASE_URL ?>/signups/setup11', // the file to call
			beforeSend: function(){
			},
			success: function(response) { // on success..
				$('.cleft').empty();
				$('.cleft').html(response); // update the DIV - should I use the DIV id?
			}
		});
	}
</script>	