<?php

function Shop() {
	if( isset( $_SESSION[ 'uid' ] ) ) {
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
		
	} else {
		return 0;//error
	}
}

function Buy() {
	$id = params( 'id' );
	$token = params( 'token' );
}

?>