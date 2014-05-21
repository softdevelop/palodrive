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
App::uses('Tournament', 'Model');
App::uses('WagerType', 'Model');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class WagerTypeHelper extends AppHelper 
{

	public function getWagerTypeName( $id = null )
	{
		$wagerType = new WagerType;
		$wagerTypeNames = $wagerType->find('all');

		if(isset($wagerTypeNames))
		{
			foreach ($wagerTypeNames as $key => $wagerTypeName) 
			{
				if ($wagerTypeName['WagerType']['id'] == $id)
					return $wagerTypeName['WagerType']['name'];
			}
		}

		return null;
		
	}

	public function getWagerTypeAlias( $id = null )
	{
		$wagerType = new WagerType;
		$wagerTypeNames = $wagerType->find('all');

		if(isset($wagerTypeNames))
		{
			foreach ($wagerTypeNames as $key => $wagerTypeName) 
			{
				if ($wagerTypeName['WagerType']['id'] == $id)
					return $wagerTypeName['WagerType']['alias'];
			}
		}

		return null;
		
	}

	public function getHeader($wagerType = array())
	{
		$str = '';
		if(!empty($wagerType))
		{
			foreach ($wagerType as $key => $value) 
			{
				if ( $key != 'id' && $key != 'tournament_id' && $key != 'wager_type_id' && $value != -1) 
				{
					if ($key != 'prop')
					$str .= '<td class="header" width="70px;">' . ucfirst($key) . ' </td>';
					else
						$str .= '<td class="header" width="70px;" style="background-color:#dcdcdc;">' . ucfirst($key) . ' </td>';
				}
				
			}
			
		}
		return $str;
	}
}
