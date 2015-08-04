<?php
session_start();

require_once( "php/db_conn.php" );
require_once( "php/vk_api.php" );
require_once( "php/game.php" );

$logged = 0;
if( isset( $_SESSION[ 'uid' ] ) && isset( $_SESSION[ 'access_token' ] ) ) {
	$logged = 1;
	if( !check_registration( $_SESSION[ 'uid' ] ) ) {
		echo "not registered\n";
		register( $_SESSION[ 'uid' ], $_SESSION[ 'first_name' ], $_SESSION[ 'last_name' ] );
	}
}
echo $logged;
echo "<a href='" . $link . "' > vk </a>";
if( !isset( $_GET[ 'game' ] ) ) {
	
} else {
	
}

?>