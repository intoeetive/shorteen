<?php

// Use this file in all the other ones so the numbers are only in one place
if (! defined('SHORTEEN_VER'))
{
	define('SHORTEEN_NAME', 'Shorteen');
	define('SHORTEEN_VER',  '0.4.3');
	define('SHORTEEN_DOCS',  'https://github.com/wiseloren/lk_cc');
	
}

//NSM Addon Updater data

$config['name']=SHORTEEN_NAME;
$config['version']=SHORTEEN_VER;
$config['nsm_addon_updater']['versions_xml'] = 'http://www.intoeetive.com/index.php/update.rss/41';