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
App::uses('Security', 'Utility');
App::uses('AppModel', 'Model');
/**
 * Users Plugin User Model
 *
 * @package User
 * @subpackage User.Model
 */

class User extends AppModel {

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = 'User';

	/**
	 * Validation parameters
	 *
	 * @var array
	 */
	
	public $validate = array();

	/**
	 * Create a hash from string using given method.
	 * Fallback on next available method.
	 *
	 * Override this method to use a different hashing method
	 *
	 * @param string $string String to hash
	 * @param string $type Method to use (sha1/sha256/md5)
	 * @param boolean $salt If true, automatically appends the application's salt
	 * 	 value to $string (Security.salt)
	 * @return string Hash
	 */
	public function hash($string, $type = null, $salt = false) {
		return Security::hash($string, $type, $salt);
	}

	/** 
	 * beforeSave()
	 */
	
	public function beforeSave($options = array())
	{
		if($this->step == 1)
		{
			$this->data['User']['password'] = $this->hash($this->data['User']['password'], 'sha1', true);
			$this->data['User']['role_id'] = 2;
		}
		
		
	}
	
}
