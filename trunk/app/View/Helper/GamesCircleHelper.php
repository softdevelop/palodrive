<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppHelper', 'View/Helper');
App::uses('DefaultGamesCircle', 'Model');
App::uses('Tournament', 'Model');
/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class GamesCircleHelper extends AppHelper 
{
	public function getAllGamesCircle()
	{
		$game_circle = new DefaultGamesCircle();
		return $game_circle->getAll();
	}
	
	public function getHeader( $circle = array() )
	{
		$str = '';
		foreach ( $circle as $key => $value )
		{
			if ( $key != 'id' && $key != 'tournament_id' && $value != -1 )
			{
				$header = ucfirst(str_replace('_', ' ', $key));
				$str .= '<td class="header" width="90px;">' .$header. '</td>';
			}
			
		}
		return $str;
	}

	/**
	 * This function helper will return name of tournament	 
	 */
	public function getTourName( $id = null )
	{
		if ( $id )
		{
			$tour = new Tournament;
			$tourName = $tour->getName( $id );
			return $tourName;
		}
		return '';
	}
}