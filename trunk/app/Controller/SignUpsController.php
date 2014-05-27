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
		'DefaultGamesCircle',
		'User',
		'WagerTypeAttribute',
		'HorsesWagerType',
		'GameCircle',
		'AgentProperty',
		'WagerLimitHorse',
		'WagerLimit'
		);

	public $step;

	public $active;

	public function index() 
	{
		$this->layout = 'signup';
			
		if(!isset($_POST['step']))
		{
			// When user reload page signup we will remove all first session and entry info from scratch
			$this->Session->destroy();
			$this->Session->write('step.active', 1);
			$this->Session->write('sidebar', 'sidebar1');
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
					$this->Session->write('sidebar', 'sidebar2');
					$this->Session->write('step.active', 2);
					$this->render('setup14');
					break;

				case '21':
					$this->step = 'setup21';
					$this->Session->write('sidebar', 'sidebar3');
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
					$this->Session->write('sidebar', 'sidebar4');
					$this->{$this->step}();
					$this->render('setup24');
					break;
				case '31':
					$this->step = 'setup31';
					$this->{$this->step}();
					$this->Session->write('step.active', 3);
					$this->render('setup31');
					break;		
				case '32':
					$this->step = 'setup32';
					$this->{$this->step}();
					$this->render('setup32');
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

	/** 
	 * show options as wager type, wager limit, game circles,...
	 */
	public function setup24()
	{
		$this->set('tournaments', $this->TournamentsDefaultDetail->getAllTour());
		$this->set('horsesparks', $this->HorsesPark->getParks());
		$this->set('gamescircle', $this->DefaultGamesCircle->getAll());
	}

	/**
	 * show some informations that selected in the steps before and then save to session array.
	 */
	public function setup31()
	{
		// Save wager type informations to session 
		if (!empty($_POST['data']['wager_type']))
		{
			foreach ($_POST['data']['wager_type'] as $tournament_id => $tournament) 
			{
				foreach ($tournament as $wager_type_id => $wager_type) 
				{
					if(!empty($wager_type))
					{
						foreach ($wager_type as $key => $value) 
						{

							$this->Session->write('wager_type.' . $tournament_id . '.' . $wager_type_id . '.' . $key, $value);
						}
					}
				}
			}
			
		}


		// save games circles informations to session array
		
		if (!empty($_POST['data']['game_circle']))
		{
			$this->Session->write('game_circle', $_POST['data']['game_circle']);
		}


		# save agent property options to db
		if (!empty($_POST['data']['agent_properties']))
		{
			$this->Session->write('agent_properties', $_POST['data']['agent_properties']);
		}

		// save games limit informations to session array
		if (($_POST['data']['select_wager_limit'] == 1)){

			if (!empty($_POST['data']['wager_limit']))
			{
				if (!empty($_POST['data']['wager_limit']['all']))
				{
					if (!empty($_POST['data']['wager_limit']['all']['limit']))
					{

						foreach ($_POST['data']['wager_limit']['all']['limit'] as $tournament_id => $tournament) 
						{
							foreach ($tournament as $wager_limit_id => $wager_limit) 
							{
								if(!empty($wager_limit))
								{
									foreach ($wager_limit as $key => $value)
									{
										if(!empty($value)){
										$this->Session->write('wager_limit.all.limit.' . $tournament_id . '.' . $wager_limit_id . '.' . $key, $value);
										}
									}
								}
							}
						}
					}
					if (!empty($_POST['data']['wager_limit']['all']['max-win']))
					{
						foreach ($_POST['data']['wager_limit']['all']['max-win'] as $tournament_id => $tournament) 
						{
							foreach ($tournament as $wager_limit_id => $wager_limit) 
							{
								if(!empty($wager_limit))
								{
									foreach ($wager_limit as $key => $value)
									{
										if(!empty($value)){
											$this->Session->write('wager_limit.all.max-win.' . $tournament_id . '.' . $wager_limit_id . '.' . $key, $value);
										}
									}
								}
							}
						}
					}
				}
			}
		}
		elseif (( $_POST['data']['select_wager_limit'] == 2 ))
		{
			if ( !empty($_POST['data']['wager_limit'] ))
			{
				if ( !empty($_POST['data']['wager_limit']['each_agent'] )) 
				{
					foreach ( $_POST['data']['wager_limit']['each_agent'] as $keyagent => $agent )
					{
						if ( !empty($agent['limit'] ))
						{
							foreach ( $agent['limit'] as $tournament_id => $tournament ) 
							{
								foreach ( $tournament as $wager_limit_id => $wager_limit ) 
								{
									if ( !empty( $wager_limit ) )
									{
										foreach ( $wager_limit as $key => $value )
										{
											if(!empty($value)){
												$this->Session->write('wager_limit.each_agent.'.$keyagent.'.limit.' . $tournament_id . '.' . $wager_limit_id . '.' . $key, $value);
											}
										}
									}
								}
							}
						}
						if (!empty($agent['max-win']))
						{
							foreach ( $agent['max-win'] as $tournament_id => $tournament ) 
							{
								foreach ( $tournament as $wager_limit_id => $wager_limit ) 
								{
									if( !empty($wager_limit ))
									{
										foreach ( $wager_limit as $key => $value )
										{
											if(!empty($value)){
												$this->Session->write('wager_limit.each_agent.'.$keyagent.'.max-win.' . $tournament_id . '.' . $wager_limit_id . '.' . $key, $value);
											}
										}
									}
								}
							}
						}
					}
				}
			}	
		}
	}

	/** 
	 * Transfer data from session to db
	 */
	
	public function setup32()
	{
		// Save master infomations to db
		
		if ( $this->Session->check('users.master') && !$this->Session->check('users.master.id') )
			$this->saveMaster();
		else
			throw new Exception( "Master Session not existing or master informations was saved to the database", 1 );

		// save agents infors
		if ( $this->Session->check( 'users.agent' ) )
		{
			$this->saveAgents( $this->Session->read( 'users.agent' ) );
		}

		// save wager types
		if ( $this->Session->check('wager_type') )
		{
			$wager_types = $this->Session->read('wager_type');
			foreach ( $wager_types as $key => $wager_type ) 
			{
				if ( $key != 'horses' )			
					$this->saveWType( $wager_type, $key );
				else
					$this->saveWTypeHorses( $wager_type );
			}
		}
		

		
		// save game circle
		if ( $this->Session->check('game_circle') )
		{
			$game_circles = $this->Session->read('game_circle');
			foreach ( $game_circles as $key => $games_circle ) 
			{
				$this->saveGCircle( $games_circle, $key );

			}
		}

		// HN
		// save agents properties to db
		if ( $this->Session->check('agent_properties') )
		{
			$agent_properties = $this->Session->read('agent_properties');
			$this->AgentProperty->create();
			$data = array_merge( $agent_properties, array(
						'user_id' => $this->Session->read('users.master.id')
				));
			$this->AgentProperty->save($data);
		}

		// by Khuong
		// save wager limit
		if ($this->Session->check('wager_limit') ){
			if ($this->Session->check('wager_limit.all') ){
				if ($this->Session->check('wager_limit.all.limit') ){
					$tournaments = $this->Session->read('wager_limit.all.limit');
					foreach($tournaments as $tournament_id => $tournament){
						if(!empty($tournament)){
							$user_id = $this->Session->read('users.master.id');
							if ($tournament_id == 'hourse'){
								$this->saveGLimitHourse( $tournament, $user_id  ,'all');
							}else{
								$this->saveGLimitForAll( $tournament, $user_id , $tournament_id , 'limit' ,'all' );
							}
						}
					}
				}
				if($this->Session->check('wager_limit.all.max-win') ){
					$tournaments = $this->Session->read('wager_limit.all.max-win');
					foreach($tournaments as $tournament_id => $tournament){
						if(!empty($tournament)){
							$user_id = $this->Session->read('users.master.id');
							$this->saveGLimitForAll( $tournament, $user_id , $tournament_id , 'max-win' ,'all');
						}
					}
				}
			}elseif ($this->Session->check('wager_limit.each_agent') ){
				$agents= $this->Session->read('wager_limit.each_agent');
				if(!empty($agents)){
					foreach($agents as $agent_name => $agent_info){
						if ($agent_name == $this->Session->read('users.master.handle_name')) {
							$user_id = $this->Session->read('users.master.id');
						}else{
							$agent = $this->User->find('first', array(
						        'conditions' => array(
						        	'User.handle_name' => $agent_name,
						        	'User.parent_id' => $this->Session->read('users.master.id')
						        )
						    ));
						    $user_id = $agent['User']['id'];
						}
						
					    if (!empty($agent_info['limit'])) {
					    	foreach($agent_info['limit'] as $tournament_id => $tournament){
								if(!empty($tournament)){
									if ($tournament_id == 'hourse'){
										$this->saveGLimitHourse( $tournament, $user_id ,'each_agent');
									}else{
										$this->saveGLimitForAll( $tournament, $user_id , $tournament_id , 'limit' ,'each_agent' );
									}
								}
							}
					    }
					    if (!empty($agent_info['max-win'])) {
					    	foreach($agent_info['max-win'] as $tournament_id => $tournament){
								if(!empty($tournament)){
									if(!empty($tournament)){
										$this->saveGLimitForAll( $tournament, $user_id , $tournament_id , 'max-win' ,'each_agent');
									}
								}
							}
					    }
					}
				}
			}
		}
		
	}
	
	/**
	 * Save game limit for All (except House league)
	 */
	public function saveGLimitForAll( $data = array(), $user_id ,$tournament_id = 0,$limit_maxwin = null,$type ){
		foreach ( $data as $key => $value ){
			$dataTmp = array_merge( $value, array(
				'users_id' => $user_id,
				'tournaments_id' => $tournament_id,
				'wager_types_id' => $key+1,
				'wager_limit_maxwin' => $limit_maxwin,
				'type' => $type
			));
			$this->WagerLimit->create();
			$this->WagerLimit->save( $dataTmp );
		}
	}
	/**
	 * Save game limit for  House league
	 */
	public function saveGLimitHourse( $data = array(), $user_id ,$type ){
		foreach ( $data as $key => $value ){
			$dataTmp = array_merge( $value, array(
				'users_id' => $user_id,
				'horses_park_id' => $key,
				'type' => $type
			));
			$this->WagerLimitHorse->create();
			$this->WagerLimitHorse->save( $dataTmp );
		}
	}
	/**
	 * Save games circle options to db
	 */
	public function saveGCircle( $data = array(), $tournament_id = 0 )
	{
		foreach ( $data as $key => $value )
		{
			$dataTmp = array_merge( $value, array(
						'tournament_id' => $tournament_id,
						'user_id' => $this->Session->read('users.master.id'),
						'limitions_type_id' => $key
			));

			$this->GameCircle->create();
			$this->GameCircle->save( $dataTmp );

		}


	}

	/**
	 * save normal wager type to db
	 */
	public function saveWType( $wagerType = array(), $tournament_id = 0 )
	{
		foreach ($wagerType as $key => $value) 
		{
			$valueTmp = array_merge($value, array(
					'wager_type_id' => $key,
					'user_id'       => $this->Session->read('users.master.id'),
					'tournament_id' => $tournament_id
				));
			$this->WagerTypeAttribute->create();
			$this->WagerTypeAttribute->save($valueTmp);
		}
		
	}

	/**
	 * save horses types to the db
	 */
	public function saveWTypeHorses($wagerType = array())
	{
		foreach ($wagerType as $key => $value) 
		{
			$valueTmp = array_merge($value, array(
					'horses_park_id' => $key,
					'user_id'       => $this->Session->read('users.master.id'),
				));
			$this->HorsesWagerType->create();
			$this->HorsesWagerType->save($valueTmp);
		}
		
	}

	/** 
	 * Save agents and subagent's players to users table..
	 */
	public function saveAgents($data = array())
	{
		if (!empty($data))
		{
			foreach ($data as $key => $agent) 
			{
				$this->User->create();
				$dataAgent = array(
						'user_name' => $agent['user_name'],
						'handle_name' => $agent['handle_name'],
						'password' => $this->User->hash($agent['password'], 'sha1', true),
						'type' => 2,
						'created_date' => time(),
						'parent_id' => $this->Session->read('users.master.id')
					);

				$this->User->save($dataAgent);
				$this->Session->write('users.agent.' . $key . 'id', $this->User->id);

				// Save players of each agent
				if (!empty($agent['player']))
				{
					$this->_savePlayer($agent['player'], $this->Session->read('users.agent.' . $key . 'id'));
				}

				// save subagent and players
				if (!empty($agent['subagent']))
				{
					foreach ($agent['subagent'] as $keySub => $subAgent) 
					{
						$this->User->create();
						$dataSubAgent = array(
								'user_name' => $subAgent['user_name'],
								'handle_name' => $subAgent['handle_name'],
								'password' => $this->User->hash($subAgent['password'], 'sha1', true),
								'type' => 3,
								'created_date' => time(),
								'parent_id' => $this->Session->read('users.agent.' . $key . 'id')
							);

						$this->User->save($dataSubAgent);
						$this->Session->write('users.agent.subagent' . $keySub . 'id', $this->User->id);
						
						// Save player of subagent
						if (!empty($subAgent['player']))
						{
							$this->_savePlayer($subAgent['player'], $this->Session->read('users.agent.subagent' . $keySub . 'id'));
						}
					}
					
				}
			}
		}
	}
	/** 
	 * Save master and master's players to users table..
	 */
	public function saveMaster()
	{
		$this->User->create();
		$dataMaster = array(
				'user_name' => $this->Session->read('users.master.user_name'),
				'handle_name' => $this->Session->read('users.master.handle_name'),
				'password' => $this->User->hash($this->Session->read('users.master.password'), 'sha1', true),
				'created_date' => time(),
				'type' => 1,
			);

		$this->User->save($dataMaster);
		$this->Session->write('users.master.id', $this->User->id);
		
		// Save players of master
		if ($this->Session->check('users.master.player'))
		{
			$players = $this->Session->read('users.master.player');

			$this->_savePlayer($players, $this->Session->read('users.master.id'));
			
		}

	}

	/**
	 * save list player
	 * @param  array  $data container players informations
	 * @param  int $parent_id is parent of specify player
	 */
	private function _savePlayer($data = array(), $parent_id = NULL)
	{
		$dataPlayer = array();
		foreach ($data as $key => $player) 
		{
			$info = array(
					'user_name' => $player['user_name'],
					'handle_name' => $player['handle_name'],
					'password' => $this->User->hash($player['password'], 'sha1', true),
					'created_date' => time(),
					'type' => 4,
					'parent_id' => $parent_id
				);

			array_push($dataPlayer, $info);
		}
		
		$this->User->saveMany($dataPlayer);
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
