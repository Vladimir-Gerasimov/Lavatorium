<?php

function check_registration( $uid ) {
	global $pdo;
	$response = false;
	$q = "SELECT COUNT(`id`) FROM `users` WHERE `vkid`='" . $uid . "'";
	$res = $pdo->query( $q );
	if( $res->fetchColumn() > 0 ) {
		$response = true;
	}
	if( $pdo->errorCode() != 0 ) {
		//error
	}
	return $response;
}

function register( $uid, $f_name, $s_name ) {
	global $pdo;
	$q = "INSERT INTO `users` (`vkid`,`first_name`,`last_name`) VALUES ('$uid','$f_name','$s_name')";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
}


?>