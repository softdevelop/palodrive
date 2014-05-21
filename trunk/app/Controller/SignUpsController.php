<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class SignUpsController extends AppController {

/**
 * This controller use XmlFunctions component
 * @var array
 */

	public $components = array('XmlFunctions', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array(
		'TournamentsDefaultDetail', 
		'HorsesPark',
		);

	public $step;

	public $active;
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
	
	public function index() 
	{
		$this->layout = 'signup';
		if(!$this->Session->check('step.active'))
		{
			$this->Session->write('step.active', 1);
			$this->set('active', 1);
		}
		else
		{
			$this->set('active', $this->Session->read('step.active'));
		}
			
		if(!isset($_POST['step']))
		{
			// When user reload page signup we will remove all first session and entry info from scratch
			$this->Session->delete('users');
			$this->Session->delete('step.active');
		}
		else
		{
			switch ($_POST['step']) {
				case '12':
					$this->Session->write('step.active', 1);
					$this->step = 'setup12';
					$this->render('setup12');
					break;
				case '13':
					$this->step = 'setup13';
					$this->{$this->step}();
					$this->render('setup13');
					break;
				case '14':
					$this->step = 'setup14';
					$this->Session->write('step.active', 2);
					$this->render('setup14');
					break;

				case '21':
					$this->step = 'setup21';
					$this->{$this->step}();
					$this->render('setup21');
					break;

				case '22':
					$this->step = 'setup22';
					$this->{$this->step}();
					$this->render('setup22');
					break;

				case '23':
					$this->step = 'setup23';
					$this->{$this->step}();
					$this->render('setup23');
					break;
				case '24':
					$this->step = 'setup24';
					$this->{$this->step}();
					$this->render('setup24');
					break;
				default:
					# code...
					break;
			}
		}
	}

	public function setup11()
	{
		$this->autoLayout = false; 
		if( isset( $_POST['data']['User'] ) )
		{
			if (!$this->Session->check('master'))
			{
				foreach ($_POST['data']['User'] as $key => $value)
				{
					$this->Session->write('users.master.' . $key, $value );
				}
			}
		}
		
	}

	/**
	 * This action only show master detail
	 * @return avoid
	 */
	public function setup12()
	{
		
	}

	/**
	 * This step allow choose only master or more agent
	 */
	public function setup13()
	{
		if(isset($_POST['data']['des_type']))
		{
			// No agent users, only players 
			if($_POST['data']['des_type'] == 1)
			{
				$this->Session->write('users.numagent', 0);
			}
			// Having agent users
			elseif($_POST['data']['des_type'] == 2)
			{
				$this->Session->write('users.numagent', $_POST['data']['player_count']);
				$this->createUser('agent');
			}
		}
	}

	/**
	 * Show agents or players create form
	 * @return avoid
	 */
	public function setup14()
	{

	}

	/**
	 * create sub agents if there are agents or create players if there are not agents
	 * @return avoid
	 */
	public function setup21()
	{
		if(!empty($_POST['data']['player_count']))
		{
			$this->createUser('player', $_POST['data']['player_count']);
		}
		elseif(!empty($_POST['data']['subagent_count_1']))
		{
			$numberAgents = $this->Session->read('users.numagent');
			for ($i = 1; $i <= $numberAgents; $i++)
			{
				$this->createUser('subagent', $_POST['data']['subagent_count_' . $i], $i);
			}
			
		}
	}

	/**
	 * step no agent
	 * entry players of each agent, sub agent and master 
	 * @return avoid
	 */
	public function setup22()
	{

	}


	/**
	 * create player users of sub agents, agents, master
	 */
	public function setup23()
	{
		// create player for master
		if(!empty($_POST['data']['player_count']))
		{
			$this->createUser('player', $_POST['data']['player_count']);
		}

		// create player for agent
		if(!empty($_POST['data']['agent']))
		{
			$numberAgents = $numberAgents = $this->Session->read('users.numagent');
			for ($i = 1; $i <= $numberAgents ; $i++) 
			{ 
				$this->createUser('player_for_agent', $_POST['data']['agent']['player_count_' . $i], $i);

				//create player for sub agent
				$numberSubAgent = $this->Session->read('users.agent.' . $i . '.subagent');

				for ($j = 1; $j <= count($numberSubAgent) ; $j++) 
				{ 
					$this->createUser('player_for_subagent', $_POST['data']['subagent'][$i]['player_count_' . $j], $i, $j);
				}
				
			}
			
		}
	}

	public function setup24()
	{
		$this->set('tournaments', $this->TournamentsDefaultDetail->getAllTour());
		$this->set('horsesparks', $this->HorsesPark->getParks());
	}
	/**
	 * create agent users or players users then save to session array..
	 * @return avoid
	 */
	public function createUser($type = '', $numberUser = 0, $belongAgent = null, $belongSubAgent = null)
	{
		// create agents
		if($type == 'agent')
		{
			$numberAgents = $this->Session->read('users.numagent');
			for ($i = 1; $i <= $numberAgents; $i++)
			{
				$this->Session->write('users.agent.' . $i . '.user_name', $this->randomString());
				$this->Session->write('users.agent.' . $i . '.password', $this->randomString());
				$handle_name_master = $this->Session->read('users.master.handle_name');
				$this->Session->write('users.agent.' . $i . '.handle_name', $handle_name_master . '-A' . $i);
			}
		}
		// create players for master
		elseif($type == 'player')
		{
			for ($i = 1; $i <= $numberUser; $i++)
			{
				$this->Session->write('users.master.player.' . $i . '.user_name', $this->randomString());
				$this->Session->write('users.master.player.' . $i . '.password', $this->randomString());
				$this->Session->write('users.master.player.' . $i . '.handle_name', $i);
			}
		}
		// create sub agents
		elseif($type == 'subagent')
		{

			for ($i = 1; $i <= $numberUser; $i++)
			{
				$this->Session->write('users.agent.' . $belongAgent .  '.subagent.' . $i . '.user_name', $this->randomString());
				$this->Session->write('users.agent.' . $belongAgent .  '.subagent.' . $i . '.password', $this->randomString());
				$handle_name_master = $this->Session->read('users.master.handle_name');
				$this->Session->write('users.agent.' . $belongAgent .  '.subagent.' . $i . '.handle_name', $handle_name_master . '-A' . $belongAgent . '-S' . $i);
			}
		}
		elseif($type == 'player_for_agent')
		{
			for ($i = 1; $i <= $numberUser; $i++)
			{
				$this->Session->write('users.agent.' . $belongAgent .  '.player.' . $i . '.user_name', $this->randomString());
				$this->Session->write('users.agent.' . $belongAgent .  '.player.' . $i . '.password', $this->randomString());
				$this->Session->write('users.agent.' . $belongAgent .  '.player.' . $i . '.handle_name', $i);
			}
		}
		elseif($type == 'player_for_subagent')
		{
			
			for ($i = 1; $i <= $numberUser; $i++)
			{
				$this->Session->write('users.agent.' . $belongAgent .  '.subagent.' . $belongSubAgent . '.player.' . $i . '.user_name', $this->randomString());
				$this->Session->write('users.agent.' . $belongAgent .  '.subagent.' . $belongSubAgent . '.player.' . $i . '.password', $this->randomString());
				$this->Session->write('users.agent.' . $belongAgent .  '.subagent.' . $belongSubAgent . '.player.' . $i . '.handle_name', $i);
			}
		}
	}

	public function randomString($length = 8)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
	/**
	 * 
	 */
	public function setUpMaster12()
	{
		$this->render('setup_master12');
	}

	
}
