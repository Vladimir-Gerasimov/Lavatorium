<?php 

###########
#	Section 0: base
###########
$base_uri = 'http://ferma.net78.net';


############
#	Section 1: Vkontakte
############
$client_id = '5012186';
$client_secret = '6aWMLP567gsUCLBsX6xL';
$auth_uri = $base_uri . '/auth/';
$access_token_uri = 'https://oauth.vk.com/access_token';
$user_data_uri = 'https://api.vk.com/method/users.get';

$url = 'http://oauth.vk.com/authorize';
$vkinit = array(
	'client_id'		=> $client_id,
	'redirect_uri'	=> $auth_uri,
	'response_type'	=> 'code'
);
$vk_auth_link = $url . '?' . urldecode( http_build_query( $vkinit ) );


?>