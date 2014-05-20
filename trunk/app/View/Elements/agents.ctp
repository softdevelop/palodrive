<form method="POST" action="/signups">
	<input type="hidden" name="step" id="step_num" value="21">
	<?php 
		$agents  = $this->Session->read('users.agent');
		foreach ($agents as $key => $agent) :
	?>
		<div style="padding-top:10px;"> Agent: <?php echo $this->Session->read('users.agent.' . $key . '.handle_name')?></div>
		<div style="padding-top:10px;"> 
			<input style="width:50px;" class="text" value="0" type="text" id="agent_count" placeholder="Number of subagents" name="data[subagent_count_<?php echo $key?>]">&nbsp;Sub Agents
		</div>
	<?php endforeach;?>
		                           
	<div style="padding-top:10px;"><input type="button" name="send" class="back" onclick="javascript:history.go(-1)" value="Back">&nbsp;&nbsp;<input type="submit" name="send" class="next" value="Next"></div>
</form>