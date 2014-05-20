<form method="POST" action="/signups">
<input name="step" id="step_num" value="21" type="hidden">
<div style="padding-top:10px;"> 
	Master: <?php echo $this->Session->read('users.master.handle_name');?>, Username: <?php echo $this->Session->read('users.master.user_name');?>, Password: <?php echo $this->Session->read('users.master.password');?><br>
	<input class="text" style="width:140px" placeholder="Number of players" name="data[player_count]" type="text">
	</div>
		                           
	<div style="padding-top:10px;"><input name="send" class="back" onclick="javascript:history.go(-1)" value="Back" type="button">&nbsp;&nbsp;<input name="send" class="next" value="Next" type="submit"></div>
</form>
