<?php
/** 
*
* @package Buttons menu MOD
* @author Kamahl www.phpbb3hacks.com
* @version 2.1.0
* @copyright (c) 2011 Kamahl www.phpbb3hacks.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

class acp_buttons_menu_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_buttons_menu',
			'title'		=> 'MENU_TITLE',
			'version'	=> '2.1.0',
			'modes'		=> array(
				'config_menu'		=> array('title' => 'MENU_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				'colors_menu'		=> array('title' => 'MENU_COLORS', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				'buttons_menu'		=> array('title' => 'MENU_BUTTONS', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
			),
		);
	}
}

?>