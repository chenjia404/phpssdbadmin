<?php
define('ENV', 'online');
if(file_exists('servers.json'))
{
    $servers = json_decode('servers.json',true);
}
else
{
    $servers = array();
}
return array(
	'env' => ENV,
	'logger' => array(
		'level' => 'all', // none/off|(LEVEL)
		'dump' => 'file', // none|html|file, 可用'|'组合
		'files' => array( // ALL|(LEVEL)
			#'ALL'	=> dirname(__FILE__) . '/../../logs/' . date('Y-m') . '.log',
		),
	),
	'servers' => $servers,
	'login' => array(
		'name' => 'test',
		'password' => '12345678', // at least 6 characters
	),
);
