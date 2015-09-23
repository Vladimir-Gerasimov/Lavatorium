<?php

function check_registration( $uid ) {
	global $dbh;
	$response = false;
	$q = "SELECT COUNT(`id`) FROM `users` WHERE `vk_id`='" . $uid . "'";
	$res = $dbh->query( $q );
	if( $res->fetchColumn() > 0 ) {
		$response = true;
	}
	//echo $dbh->errorCode();
	return $response;
}

function register( $uid, $f_name, $s_name ) {
	global $dbh;
	$q = "INSERT INTO `users` (`vk_id`,`name`,`surname`) VALUES ('$uid','$f_name','$s_name')";
	$dbh->query( $q );
	//echo $dbh->errorCode();
}


?>