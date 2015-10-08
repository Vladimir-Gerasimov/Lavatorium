<?php

function ShitFunc() {
	$from = params( 'from' );
	$to = params( 'to' );
	$token = params( 'token' );
	
	$token_db = getToken( $from );
	if( $token == $token_db ) {
		toShit( $from );
	}
}

?>