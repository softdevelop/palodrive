<?php 
	
	if($this->Session->check('users.agent'))
	{
		echo $this->element('sub_agents');
	}
	else
	{
		echo $this->element('player_for_master');
	}

?>