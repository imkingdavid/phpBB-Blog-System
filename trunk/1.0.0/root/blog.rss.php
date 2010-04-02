<?php
/**
* blog.rss.php
* phpBB Blog System
* Copyright (c) 2009 - David King
**/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
include($phpbb_root_path . 'includes/mods/functions_blog.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);

$user->setup('mods/blog');

// Initial var setup
$blog_id	= request_var('id', '');
$cat_id		= request_var('cid', '');
$blog 		= new blog;
$redirect	= request_var('redirect', '');
$act_name 	= $config['blog_act_name'];
$action		= request_var($act_name, 'index');
if($config['blog_rss_feed_on'])
{
	$feed = $blog->getrssfeed();
}
else
{
	$user->lang['FEED_DISABLED'];
}
echo $feed;
?>