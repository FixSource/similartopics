<?php
/**
*
* @package acp
* @version $Id: acp_similar_topics.php 3 6/15/10 10:37 PM VSE $
* @copyright (c) 2010 Matt Friedman
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package module_install
*/
class acp_similar_topics_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_similar_topics',
			'title'		=> 'PST_TITLE',
			'version'	=> '1.1.0',
			'modes'		=> array(
				'index'	=> array(
					'title'			=> 'PST_TITLE',
					'auth'			=> 'acl_a_board',
					'cat'			=> array('PST_TITLE'),
				),
			),
		);
	}
}

?>