﻿<?php

require_once( "inc/limonade.php" );
require_once( "inc/config.php" );
require_once( "inc/vk_api.php" );
require_once( "inc/common_methods.php" );
require_once( "inc/game_methods.php" );

dispatch( '/', 'MainPage' );
dispatch( '/auth', 'Auth' );
dispatch( '/game/:user', 'GamePage' );
dispatch( '/shit/:from/:to/:token', 'ShitFunc' );

function ShitFunc() {
	$from = params( 'from' );
	$to = params( 'to' );
	$token = params( 'token' );
	
	$token_db = getToken( $from );
	if( $token == $token_db ) {
		toShit( $from );
	}
}

function MainPage() {
	global $vk_auth_link;
	if( isset( $_SESSION[ 'uid' ] ) && isset( $_SESSION[ 'access_token' ] ) ) {
		createToken( $_SESSION[ 'uid' ] );
		echo 'logged in<br>';
		echo '<a href="/game">GAME</a>';
	} else {
		echo '<a href="' . $vk_auth_link . '">VK AUTH</a>';
	}
}

function Auth() {
	global $base_uri;
	$user = login();
	if( isset( $user[ 'uid' ] ) && isset( $user[ 'access_token' ] ) ) {
		if( !check_registration( $user[ 'uid' ] ) ) {
			register( $user[ 'uid' ], $user[ 'first_name' ], $user[ 'last_name' ] );
		}
		$_SESSION[ 'uid' ] = $user[ 'uid' ];
		$_SESSION[ 'access_token' ] = $user[ 'access_token' ];
		header( "Location: " . $base_uri );
	} else {
		///auth failed
	}
}

function GamePage() {
	global $base_uri;
	$uid = params( 'user' );
	
	if( !isset( $_SESSION[ 'uid' ] ) ) { 
		return 0;
	} else { 
		createToken( $_SESSION[ 'uid' ] );
	}
	
	$reg = 0;
	$shit = 0;
	if( !isset( $uid ) || $uid == "" ) {
		$uid = $_SESSION[ 'uid' ];
	} else {
		if( !check_registration( $uid ) ) {
			$reg = 1;
		}
		$shit = 1;
	}
	$user = getUserInfo( $_SESSION[ 'access_token' ], $uid, 'photo_max' );
	if( $reg ) {
		register( $uid, $user[ 'first_name' ], $user[ 'last_name' ] );
	}
	echo $user[ 'first_name' ] . " " . $user[ 'last_name' ];
	echo "<img src=\"". $user[ 'photo_max' ] . "\" /><br><br>";
	if( $shit ) {
		echo "<a href=\"/shit/" . $_SESSION[ 'uid' ] . "/" . $uid . "/" . getToken( $_SESSION[ 'uid' ] ) . "\">shit</a><br>";
	}
	$friends = getUserFriends( $_SESSION[ 'access_token' ], $uid );
	foreach( $friends as $friend ) {
		echo $friend[ "first_name" ] . " " . $friend[ "last_name" ] . "<br>";
		echo "<a href=\"$base_uri/game/" . $friend[ 'uid' ] . "\"><img src=\"" . $friend[ "photo_50" ] . "\" /></a><hr>";
	}
	
}
run();

?>