<?php

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

?>