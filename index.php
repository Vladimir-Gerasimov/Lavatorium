<?php
require 'inc/flight/Flight.php';

Flight::route('/', function(){
    echo 'Index page';
});

Flight::route('/game', function(){
    echo 'game page';
});

Flight::start();






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