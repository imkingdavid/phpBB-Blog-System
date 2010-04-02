<?php
/**
*
* @package phpBB3
* @version 0.0.1a
* @copyright (c) 2009 David King
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* @package module_install
*/
class acp_blog_info
{
    function module()
    {
        return array(
            'filename'	=> 'acp_blog',
            'title'		=> 'phpBB Blog System',
            'version'	=> '0.0.3a',
            'modes'		=> array(
				'index'		=> array('title' => 'ACP_BLOG_OVERVIEW',	'auth' => 'acl_a_blog_manage',	'cat' => array('ACP_CAT_BLOG')),
                'settings'	=> array('title' => 'ACP_BLOG_MANAGE',		'auth' => 'acl_a_blog_manage',	'cat' => array('ACP_CAT_BLOG')),
				'cats'		=> array('title' => 'ACP_BLOG_CATS_MANAGE',	'auth' => 'acl_a_blog_manage',	'cat' => array('ACP_CAT_BLOG')),
            ),
        );
    }

    function install()
    {
    }

    function uninstall()
    {
    }
}
?>