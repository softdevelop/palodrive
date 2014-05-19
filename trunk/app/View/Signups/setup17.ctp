<form method="POST" action="">
	<input type="hidden" name="data[step]" id="step_num" value="setup_client_players_review">
	<table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
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
				$playerMaster = $this->Session->read('users.master.player');

				foreach ($playerMaster as $key => $player) 
				{
			?>
					<tr class="treegrid-2 treegrid-parent-1">
						<td><?php echo $player['handle_name']?></td>
						<td><?php echo $player['user_name']?></td>
						<td><?php echo $player['password']?></td>
						<td>Player</td>
					</tr>
			<?php					
				}
			?>
			
		</tbody>
	</table>
	<br>
	<?php 
		$agents = $this->Session->read('users.agent');
		foreach ($agents as $key => $agent) 
		{
	?>

		<table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
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
					<td><?php echo $agent['handle_name']?></td>
					<td><?php echo $agent['user_name']?></td>
					<td><?php echo $agent['password']?></td>
					<td>Agent</td>
				</tr>
				<?php 
					foreach ($agent['player'] as $key => $player) 
					{
				?>
					<tr>
						<td><?php echo $player['handle_name']?></td>
						<td><?php echo $player['user_name']?></td>
						<td><?php echo $player['password']?></td>
						<td>Player</td>
					</tr>
				<?php
					}

				?>
				

				<?php 
					foreach ($agent['subagent'] as $key => $subagent) 
					{
				?>
					<tr>
						<td><?php echo $subagent['handle_name']?></td>
						<td><?php echo $subagent['user_name']?></td>
						<td><?php echo $subagent['password']?></td>
						<td>Agent</td>
					</tr>

					<?php 
						foreach ($subagent['player'] as $key => $playerSub) 
						{
						

					?>
						<tr>
							<td><?php echo $playerSub['handle_name']?></td>
							<td><?php echo $playerSub['user_name']?></td>
							<td><?php echo $playerSub['password']?></td>
							<td>Player</td>
						</tr>
					<?php		
						}

					?>
				<?php
					}

				?>
				
				
			</tbody>
		</table>
		<?php
			}
		?>
	<br>
	<div style="padding-top:10px;"><input type="button" name="send" class="back" onclick="javascript:history.go(-1)" value="Back">&nbsp;&nbsp;<input type="submit" name="send" class="next" value="Next"></div>
</form>