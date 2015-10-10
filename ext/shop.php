<?php

function Shop() {
	if( !isset( $_SESSION[ 'uid' ] ) ) { return 0; /*error*/ }
	
	$data = getShop();

	foreach( $data as $cat_id ) {
		echo $cat_id[ 'name' ] . "<br>";
		echo $cat_id[ 'description' ] . "<br>";
		foreach( $cat_id[ 'items' ] as $item ) {
			echo "____" . $item[ 'name' ] . "<br>";
			echo "____" . $item[ 'description' ] . "<br>";
			echo "____price: " . $item[ 'price' ] . "<br>";
			echo "____level: " . $item[ 'level' ] . "<br>";
			echo "____действует: " . $item[ 'usage' ] . "<br>";
			echo "____действует: " . $item[ 'usage_time' ] . ( $item[ 'usage_type' ] == 1 ? "мин." : "раз" ) . "<br>";
			echo "____<a href=\"/buy/" . $item[ 'id' ] . "/" . getToken( $_SESSION[ 'uid' ] ) . "\">купить</a><br>";
		}
	}
}

function Buy() {
	if( !isset( $_SESSION[ 'uid' ] ) ) { return 0; /*error*/ }
	$id = params( 'id' );
	$token = params( 'token' );
	$token_db = getToken( $_SESSION[ 'uid' ] );
	if( $token != $token_db ) { return 0; /*token wrong */ }
	
	$user = getUser( $_SESSION[ 'uid' ] );
	$shop_item = getShopItem( $id );
	if( $user[ 'level' ] >= $shop_item[ 'level' ] ) {	
		if( $user[ 'balance' ] >= $shop_item[ 'balance' ] ) {
			buyItem( $_SESSION[ 'uid' ], $id );
		} else {
			return 0; //balance not OK
		}
	} else {
		return 0; //level not OK
	}
}

?>