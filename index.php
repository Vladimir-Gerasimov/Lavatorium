<?php
require_once( 'inc/limonade.php' );
require_once( "inc/vk_api.php" );
require_once( "inc/config.php" );

dispatch( '/', 'MainPage' );
dispatch( '/auth', 'Auth' );
dispatch( '/game/:user', 'GamePage' );

function MainPage() {
	global $vk_auth_link;
	if( isset( $_SESSION[ 'uid' ] ) && isset( $_SESSION[ 'access_token' ] ) ) {
		echo 'logged in\n';
		echo '<a href="/game">GAME</a>';
	} else {
		echo '<a href="' . $vk_auth_link . '">VK AUTH</a>';
	}
}

function Auth() {
	global $base_uri;
	$user = login();
	if( isset( $user[ 'uid' ] ) && isset( $user[ 'access_token' ] ) ) {
		$_SESSION[ 'uid' ] = $user[ 'uid' ];
		$_SESSION[ 'access_token' ] = $user[ 'access_token' ];
		header( "Location: " . $base_uri );
	} else {
		///auth failed
	}
	
	return 'auth page!';
}

function GamePage() {
	$user = getUserInfo( $_SESSION[ 'access_token' ], $_SESSION[ 'uid' ] );
	echo $user[ 'first_name' ] . " " . $user[ 'last_name' ];
	echo "<img src=\"". $user[ 'photo_max' ] . "\" />";
	return 'Hello world!';
}
run();

/*
session_start();

require_once( "php/db_conn.php" );
require_once( "php/vk_api.php" );
require_once( "php/appearence.php" );

$logged = 0;
if( isset( $_SESSION[ 'uid' ] ) && isset( $_SESSION[ 'access_token' ] ) ) {
	$logged = 1;
	if( !check_registration( $_SESSION[ 'uid' ] ) ) {
		register( $_SESSION[ 'uid' ], $_SESSION[ 'first_name' ], $_SESSION[ 'last_name' ] );
	}
}
echo "<a href='" . $link . "' > vk </a>";
if( $logged ) {
	echo "<a href='/?game=1' >game</a>";
}
if( !isset( $_GET[ 'game' ] ) ) {
	loadTemplate( "main" );
} else {
	loadTemplate( "game" );
}
*/

?>