<?php 

###########
#	Section 0: base
###########
$base_uri = 'http://ferma.net78.net';
option( 'base_uri', '/' );

############
#	Section 1: Vkontakte
############
$client_id = '5012186';
$client_secret = '6aWMLP567gsUCLBsX6xL';
$auth_uri = $base_uri . '/auth/';
$access_token_uri = 'https://oauth.vk.com/access_token';
$user_data_uri = 'https://api.vk.com/method/users.get';
$user_friends_uri = 'https://api.vk.com/method/friends.get';

$url = 'http://oauth.vk.com/authorize';
$vkinit = array(
	'client_id'		=> $client_id,
	'redirect_uri'	=> $auth_uri,
	'response_type'	=> 'code'
);
$vk_auth_link = $url . '?' . urldecode( http_build_query( $vkinit ) );

############
#	Section 2: MySQL
############
$mysql_host = "mysql2.000webhost.com";
$mysql_database = "a8855041_dev";
$mysql_user = "a8855041_dev";
$mysql_password = "a8855041_dev";

$dsn = "mysql:host=$mysql_host;dbname=$mysql_database;charset=utf8";
$pdo = new PDO( $dsn, $mysql_user, $mysql_password, 
	array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	)
);
?>