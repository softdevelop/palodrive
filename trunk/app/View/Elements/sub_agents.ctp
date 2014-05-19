
<form method="POST" action="/signups">
	<input name="step" id="step_num" value="16" type="hidden">
	<table class="tree" align="left" border="0" cellpadding="5" cellspacing="0" width="100%px">
		<tbody>
			<tr>
				<td class="header">
				Acc#
				</td>
				<td class="header">
				Username
				</td>
				<td class="header">
				Password
				</td>
				<td class="header">
				Acocunt Type
				</td>
			</tr>
			<tr>
				<td><span></span><?php echo $this->Session->read('users.master.handle_name'); ?></td>
				<td><?php echo $this->Session->read('users.master.user_name'); ?></td>
				<td><?php echo $this->Session->read('users.master.password'); ?></td>
				<td>Master</td>
			</tr>

			<?php
				$agents = $this->Session->read('users.agent'); 
				foreach ($agents as $key => $agent) 
				{
			?>
				<tr>
					<td><?php echo $agent['handle_name'];?></td>
					<td><?php echo $agent['user_name'];?></td>
					<td><?php echo $agent['password'];?></td>
					<td>Agent</td>
				</tr>
			<?php
					foreach ($agent['subagent'] as $key => $subagent) 
					{
			?>
				<tr>
					<td><?php echo $subagent['handle_name'];?></td>
					<td><?php echo $subagent['user_name'];?></td>
					<td><?php echo $subagent['password'];?></td>
					<td>Agent</td>
				</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>				
<div style="padding-top:10px;"><input name="send" class="back" onclick="javascript:history.go(-1)" value="Back" type="button">&nbsp;&nbsp;<input name="send" class="next" value="Next" type="submit"></div>
</form>
