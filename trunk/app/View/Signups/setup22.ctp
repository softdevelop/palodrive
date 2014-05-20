<form method="POST" action="/signups">
	<input type="hidden" name="step" id="step_num" value="23">
	<div style="padding-top:10px;"> 
		Master: <?php echo $this->Session->read('users.master.handle_name');?>, Username: <?php echo $this->Session->read('users.master.user_name');?>, Password: <?php echo $this->Session->read('users.master.password');?>	<br>
		<input class="text" style="width:140px" type="text" placeholder="Number of players" name="data[player_count]">
	</div>
	<?php
		$agents = $this->Session->read('users.agent'); 
		foreach ($agents as $key => $agent) 
		{
	?>	
			<div style="padding-top:10px;"> 
				<?php echo $key;?>.&nbsp;Agent: <?php echo $agent['handle_name'];?>, Username: <?php echo $agent['user_name'];?>, Password: <?php echo $agent['password'];?>	<br>
				<input class="text" style="width:140px" type="text" id="agent_count" placeholder="Number of players" name="data[agent][player_count_<?php echo $key;?>]">
			</div>
		<?php 
			foreach ($agent['subagent'] as $keySub => $subagent) 
			{
		?>
				<div style="padding-top:10px;"> 
					<?php echo $key;?>.<?php echo $keySub;?>&nbsp;Agent: <?php echo $subagent['handle_name'];?>, Username: <?php echo $subagent['user_name'];?>, Password: <?php echo $subagent['password'];?>	<br>
					<input class="text" style="width:140px" type="text" id="agent_count" placeholder="Number of players" name="data[subagent][<?php echo $key?>][player_count_<?php echo $keySub;?>]">
				</div>
		<?php
			}
		?>
	<?php	
		}
	?>
			                           
	<div style="padding-top:10px;"><input type="button" name="send" class="back" onclick="javascript:history.go(-1)" value="Back">&nbsp;&nbsp;<input type="submit" name="send" class="next" value="Next"></div>
</form>