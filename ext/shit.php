<?php

function ShitFunc() {
	if( !isset( $_SESSION[ 'uid' ] ) ) { return 0;/*/error */ }
	$from = $_SESSION[ 'uid' ];
	$to = params( 'to' );
	$token = params( 'token' );
		
	$token_db = getToken( $from );
	if( $token == $token_db ) {
		toShit( $from );
	}
}

?>