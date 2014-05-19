<?php 

	if($this->Session->check('users.agent'))
	{
		echo $this->element('agents');
	}
	else
	{
		echo $this->element('noagents');
	}

?>