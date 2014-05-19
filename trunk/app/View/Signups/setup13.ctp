<form method="POST" action="">
<input type="hidden" name="step" id="step" value="14">
	<table width="100%px" border="0" align="left" cellspacing="0" cellpadding="5" class="tree">
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
				<td><span></span><?php echo $this->Session->read('users.master.handle_name');?></td>
				<td><?php echo $this->Session->read('users.master.user_name');?></td>
				<td><?php echo $this->Session->read('users.master.password');?></td>
				<td>Master</td>
			</tr>
			<?php

				if($this->Session->check('users.agent'))
				{	
					$userAgents =  $this->Session->read('users.agent');
					foreach ($userAgents as $key => $agent) {
			?>
				<tr>
					<td><span></span><?php echo $agent['handle_name'];?></td>
					<td><?php echo $agent['user_name'];?></td>
					<td><?php echo $agent['password'];?></td>
					<td>Agent</td>
				</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
	<div style="padding-top:10px;"><input type="button" name="send" class="back" onclick="javascript:history.go(-1)" value="Back">&nbsp;&nbsp;<input type="submit" name="send" class="next" value="Next"></div>
</form>
<script type="text/javascript">
      $(document).ready(function() {
        $('.tree').treegrid();
      });
</script>