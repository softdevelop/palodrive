<?php

/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppModel', 'Model');
/**
 * Users Plugin User Model
 *
 * @package User
 * @subpackage User.Model
 */

class Tournament extends AppModel {

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = 'Tournament';

	/**
	 * Displayfield
	 *
	 * @var string $displayField
	 */
	public $displayField = 'username';

	/**
	 * Validation parameters
	 *
	 * @var array
	 */
	
	/**
	 * Relationships
	 */
	public $hasMany = 'TournamentsDefaultDetail';
	

	public $validate = array();

	/**
	 * reveice all records of tournaments table
	 */
	public function getAll()
	{
		return $this->find('all');
	}
	
}
