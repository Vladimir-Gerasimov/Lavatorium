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

function createToken( $uid ) {
	global $pdo;
	$str = "";
	for( $i = 0; $i < 20; $i++ ) {
		$str .= rand( $i * 11, ( $i + 31 ) / 17 );
	}
	$token = md5( $str );
	$q = "UPDATE `users` SET `token`='$token' WHERE `vkid`='$uid'";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
}

function getToken( $uid ) {
	global $pdo;
	$q = "SELECT `token` FROM `users` WHERE `vkid`='$uid'";
	$token = "";
	foreach( $pdo->query( $q ) as $row ) {
		$token = $row[ 'token' ];
	}
	return $token;
}

function toShit( $uid ) {
	global $pdo;
	$q = "UPDATE `users` SET `balance`=`balance`+100 WHERE `vkid`='$uid'";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
}

?>