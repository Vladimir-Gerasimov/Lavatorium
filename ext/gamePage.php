<?php

function GamePage() {
	global $base_uri;
	$uid = params( 'user' );
	
	if( !isset( $_SESSION[ 'uid' ] ) ) { 
		return 0;///error
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
	
	echo "<a href=\"/shop\">МАГАЗИН</a><br>";
	
	$friends = getUserFriends( $_SESSION[ 'access_token' ], $uid );
	foreach( $friends as $friend ) {
		echo $friend[ "first_name" ] . " " . $friend[ "last_name" ] . "<br>";
		echo "<a href=\"$base_uri/game/" . $friend[ 'uid' ] . "\"><img src=\"" . $friend[ "photo_50" ] . "\" /></a><hr>";
	}
	
}

?>