<?php
/** 
*
* @package Buttons menu MOD
* @author Kamahl www.phpbb3hacks.com
* @version 2.3.0
* @copyright (c) 2011 Kamahl www.phpbb3hacks.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);

$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'Buttons menu MOD';
$version_config_name = 'buttons_menu_version';
$language_file = 'mods/info_acp_menu';

$versions = array(
	'2.0.0'	=> array(
		
		'config_add' => array(
			array('menu_enabled', '1'),
			array('menu_color_id', '1'),
		),        
		
		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'MENU_TITLE'),
			array('acp', 'MENU_TITLE', array(
				'module_basename'  => 'buttons_menu',
        'modes'   => array('config_menu'),
      ), ),
      array('acp', 'MENU_TITLE', array(
      	'module_basename'	=> 'buttons_menu',
        'modes'	=> array('buttons_menu'),
      ), ),
		),
		
		'table_add' => array(
			array(MENU_BUTTONS_TABLE, array(
				'COLUMNS'			=> array(
					'button_id'              => array('UINT', NULL, 'auto_increment'),
					'button_url'             => array('TEXT', ''),
					'button_name'            => array('VCHAR', ''),
					'button_external'        => array('BOOL', 0),
					'button_display'         => array('BOOL', 1),
					'button_only_registered' => array('BOOL', 0),
				),
				'PRIMARY_KEY' => array('button_id'),
			)),
			array(MENU_COLORS_TABLE, array(
				'COLUMNS'			=> array(
					'color_id'               => array('UINT', NULL, 'auto_increment'),
					'color_name'             => array('VCHAR', ''),
					'color_text'             => array('VCHAR', 'FFFFFF'),
					'color_text_hover'       => array('VCHAR', 'FFFFFF'),
					'color_text_hover_decor' => array('VCHAR', 'none'),
					'color_text_weight'      => array('VCHAR', 'bold'),
					'color_display_search'   => array('BOOL', 1),
					'color_text_transform'   => array('VCHAR', 'none'),
					'color_align'            => array('VCHAR', 'left'),
				),
				'PRIMARY_KEY' => array('color_id'),
			)),
		),
		
		'table_row_insert' => array(
			array(MENU_BUTTONS_TABLE, array(
        'button_id'  => '1', 'button_url'  => 'http://www.google.com', 'button_name'  => 'Example', 'button_external'  => '1', 'button_display'  => '1', 'button_only_registered'  => '0',
      )),
      array(MENU_COLORS_TABLE, array(
        'color_id'  => '1', 'color_name'  => 'blue', 'color_text'  => 'FFFFFF', 'color_text_hover'  => 'FFFFFF', 'color_text_hover_decor'  => 'none', 'color_text_weight'  => 'bold', 'color_display_search'  => '1', 'color_text_transform'  => 'none', 'color_align'  => 'left',
      )),
      array(MENU_COLORS_TABLE, array(
        'color_id'  => '2', 'color_name'  => 'black', 'color_text'  => 'FFFFFF', 'color_text_hover'  => 'FFFFFF', 'color_text_hover_decor'  => 'none', 'color_text_weight'  => 'bold', 'color_display_search'  => '1', 'color_text_transform'  => 'none', 'color_align'  => 'left',
      )),
      array(MENU_COLORS_TABLE, array(
        'color_id'  => '3', 'color_name'  => 'brown', 'color_text'  => 'FFFFFF', 'color_text_hover'  => 'FFFFFF', 'color_text_hover_decor'  => 'none', 'color_text_weight'  => 'bold', 'color_display_search'  => '1', 'color_text_transform'  => 'none', 'color_align'  => 'left',
      )),
      array(MENU_COLORS_TABLE, array(
        'color_id'  => '4', 'color_name'  => 'gray', 'color_text'  => 'FFFFFF', 'color_text_hover'  => 'FFFFFF', 'color_text_hover_decor'  => 'none', 'color_text_weight'  => 'bold', 'color_display_search'  => '1', 'color_text_transform'  => 'none', 'color_align'  => 'left',
      )),
      array(MENU_COLORS_TABLE, array(
        'color_id'  => '5', 'color_name'  => 'orange', 'color_text'  => 'FFFFFF', 'color_text_hover'  => 'FFFFFF', 'color_text_hover_decor'  => 'none', 'color_text_weight'  => 'bold', 'color_display_search'  => '1', 'color_text_transform'  => 'none', 'color_align'  => 'left',
      )),
    ),
	),
	
	'2.1.0'	=> array(
	 
	  'table_column_add' => array(
			array(MENU_COLORS_TABLE, 'color_style_id', array('UINT', '0')),
			array(MENU_BUTTONS_TABLE, 'button_only_guest', array('BOOL', '0')),
			array(MENU_BUTTONS_TABLE, 'left_id', array('UINT', '0')),
			array(MENU_BUTTONS_TABLE, 'right_id', array('UINT', '0')),
			array(MENU_BUTTONS_TABLE, 'parent_id', array('UINT', '0')),
		),    
		
		'table_row_insert' => array(
			array(MENU_BUTTONS_TABLE, array(
        'button_id'  => '2', 'button_url'  => 'http://www.phpbb3hacks.com', 'button_name'  => 'phpBB3 Hacks', 'button_external'  => '1', 'button_display'  => '1', 'button_only_registered'  => '0', 'button_only_guest'  => '0', 'left_id' => '3', 'right_id' => '4', 'parent_id' => '1',
      )),
    ),
		
		'module_add' => array(
      array('acp', 'MENU_TITLE', array(
      	'module_basename'	=> 'buttons_menu',
        'modes'	=> array('colors_menu'),
      ), ),
		),

		'config_remove' => 'menu_color_id',
		
		'custom' => array( 'default_style', 'set_button_order' ),
	),      
  
  '2.1.1'	=> array(
	),
	
	'2.2.0'	=> array(
	),
	
	'2.3.0'	=> array(
	 
    'cache_purge' => array(
			array(),
			array('imageset'),
			array('template'),
			array('theme'),
		),
	),

);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

function default_style($action, $version)
{
  global $db, $config;
  
  if ($action == 'update' || $action == 'install')
  {
    $sql = 'UPDATE ' . MENU_COLORS_TABLE . '
              SET color_style_id = ' . $config['default_style'] . '
                WHERE color_id = 1';
    $db->sql_query($sql);
  }
}

function set_button_order($action, $version)
{
  global $db;
  
  if ($action == 'update' || $action == 'install')
  {
    $sql = 'UPDATE ' . MENU_BUTTONS_TABLE . '
              SET left_id = 1, right_id = 2, parent_id = 0
                WHERE button_id = 1';
    $db->sql_query($sql);
  }
}

?>