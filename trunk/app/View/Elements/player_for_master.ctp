<form method="POST" action="/signups">
	<input name="step" type="hidden" value="24" />
	<table class="player_limit" border="0" cellpadding="0" cellspacing="1" width="100%">
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
			<tr class="treegrid-1">
				<td><?php echo $this->Session->read('users.master.handle_name');?></td>
				<td><?php echo $this->Session->read('users.master.user_name');?></td>
				<td><?php echo $this->Session->read('users.master.password');?></td>
				<td>Master</td>
			</tr>
			<?php 
				$playerForMaster = $this->Session->read('users.master.player');
				foreach ($playerForMaster as $key => $player) {
			?>
				<tr>
					<td><?php echo $player['handle_name'];?></td>
					<td><?php echo $player['user_name'];?></td>
					<td><?php echo $player['password'];?></td>
					<td>Player</td>
				</tr>
			<?php 
				} 
			?>
			
		</tbody>
	</table>
	<div style="padding-top:10px;"><input name="send" class="back" onclick="javascript:history.go(-1)" value="Back" type="button">&nbsp;&nbsp;<input name="send" class="next" value="Next" type="submit"></div>
</form>
