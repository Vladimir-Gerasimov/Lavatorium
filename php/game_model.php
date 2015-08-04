<?php

function check_registration( $uid ) {
	global $dbh;
	$response = false;
	$q = "SELECT COUNT(`id`) FROM `users` WHERE `vk_id`='" . $uid . "'";
	$res = $dbh->query( $q );
	if( $res->fetchColumn() > 0 ) {
		echo 111 . "\n";
		$response = true;
	}
	echo $dbh->errorCode();
	return $response;
}

function register( $uid, $f_name, $s_name ) {
	global $dbh;
	echo $f_name . "\n";
	
	echo $s_name . "\n";
	$x = utf8_encode($f_name);
	echo $x;
	$q = "INSERT INTO `users` (`vk_id`,`name`,`surname`) VALUES ('$uid','$x','$s_name')";
	$dbh->query( $q );
	echo $dbh->errorCode();
}


?>