<?php
$config_inc =require './config.inc.php';
$config = array(
		//基本配置
		'APP_STATUS'=>'debug',
		'DEFAULT_THEME'=>'default',
		'URL_404_REDIRECT'=>'404.html',
);
return array_merge($config_inc ,$config);
?>
