<?php

function check_registration( $uid ) {
	global $pdo;
	$response = false;
	$q = "SELECT COUNT(`id`) FROM `users` WHERE `vkid`='" . $uid . "'";
	$res = $pdo->query( $q );
	if( $res->fetchColumn() > 0 ) {
		$response = true;
	}
	if( $pdo->errorCode() != 0 ) {
		//error
	}
	return $response;
}

function register( $uid, $f_name, $s_name ) {
	global $pdo;
	$q = "INSERT INTO `users` (`vkid`,`first_name`,`last_name`) VALUES ('$uid','$f_name','$s_name')";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
}

function createToken( $uid ) {
	global $pdo;
	$str = "";
	for( $i = 0; $i < 20; $i++ ) {
		$str .= rand( $i * 11, ( $i + 31 ) / 17 );
	}
	$token = md5( $str );
	$q = "UPDATE `users` SET `token`='$token' WHERE `vkid`='$uid'";
	$pdo->query( $q );

}

function getToken( $uid ) {
	global $pdo;
	$q = "SELECT `token` FROM `users` WHERE `vkid`='$uid'";
	$token = "";
	foreach( $pdo->query( $q ) as $row ) {
		$token = $row[ 'token' ];
	}
	return $token;
}

function toShit( $uid ) {
	global $pdo;
	$q = "UPDATE `users` SET `balance`=`balance`+100 WHERE `vkid`='$uid'";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
}

function getShopItem( $id ) {
	global $pdo;
	$q = "	SELECT 
				`shop_items`.`id`,
				`shop_items`.`name`,
				`shop_items`.`description`,
				`shop_items`.`level`,
				`shop_category`.`name` AS cat_name,
				`shop_category`.`description` AS cat_desc,
				`shop_items`.`price`,
				`shop_items`.`usage_type`,
				`shop_usage_type`.`name` AS usage_name,
				`shop_items`.`usage_time`,
				`shop_items`.`category_id` 
			FROM
				`shop_items`,
				`shop_category`,
				`shop_usage_type`
			WHERE
				`shop_items`.`category_id`=`shop_category`.`id` AND
				`shop_items`.`usage_type`=`shop_usage_type`.`id` AND
				`shop_items`.`id`='$id'";
	$data = array();	
	foreach( $pdo->query( $q ) as $row ) {
		$data[ 'category_id' ]			= $row[ 'category_id' ];
		$data[ 'category_name' ]		= $row[ 'cat_name' ];
		$data[ 'category_description' ]	= $row[ 'cat_desc' ];
		$data[ 'id' ]					= $row[ 'id' ];
		$data[ 'name' ]					= $row[ 'name' ];
		$data[ 'description' ]			= $row[ 'description' ];
		$data[ 'level' ]				= $row[ 'level' ];
		$data[ 'price' ]				= $row[ 'price' ];
		$data[ 'usage' ]				= $row[ 'usage_name' ];
		$data[ 'usage_type' ]			= $row[ 'usage_type' ];
		$data[ 'usage_time' ]			= $row[ 'usage_time' ];
	}
	return $data;
}

function getShop() {
	global $pdo;
	$q = "	SELECT 
				`shop_items`.`id`,
				`shop_items`.`name`,
				`shop_items`.`description`,
				`shop_items`.`level`,
				`shop_category`.`name` AS cat_name,
				`shop_category`.`description` AS cat_desc,
				`shop_items`.`price`,
				`shop_items`.`usage_type`,
				`shop_usage_type`.`name` AS usage_name,
				`shop_items`.`usage_time`,
				`shop_items`.`category_id` 
			FROM
				`shop_items`,
				`shop_category`,
				`shop_usage_type`
			WHERE
				`shop_items`.`category_id`=`shop_category`.`id` AND
				`shop_items`.`usage_type`=`shop_usage_type`.`id`";
	$data = array();	
	foreach( $pdo->query( $q ) as $row ) {
		if( !isset( $data[ $row[ 'category_id' ] ] ) ) {
			$data[ $row[ 'category_id' ] ] = array();
			$data[ $row[ 'category_id' ] ][ 'name' ] 		= $row[ 'cat_name' ];
			$data[ $row[ 'category_id' ] ][ 'description' ] = $row[ 'cat_desc' ];
			$data[ $row[ 'category_id' ] ][ 'items' ] 		= array();
		}
		$data[ $row[ 'category_id' ] ][ 'items' ][] = array(
			'id' 			=> $row[ 'id' ],
			'name' 			=> $row[ 'name' ],
			'description' 	=> $row[ 'description' ],
			'level' 		=> $row[ 'level' ],
			'price' 		=> $row[ 'price' ],
			'usage' 		=> $row[ 'usage_name' ],
			'usage_type' 	=> $row[ 'usage_type' ],
			'usage_time' 	=> $row[ 'usage_time' ],
		);
	}
	return $data;
}

function getUser( $uid ) {
	global $pdo;
	$q = "SELECT * FROM `users` WHERE `vkid`='$uid'";
	$data = array();
	foreach( $pdo->query( $q ) as $row ) {
		$data[ 'balance' ] = $row[ 'balance' ];
		$data[ 'first_name' ] = $row[ 'first_name' ];
		$data[ 'last_name' ] = $row[ 'last_name' ];
		$data[ 'new_user' ] = $row[ 'new_user' ];
		$data[ 'level' ] = $row[ 'level' ];
		$data[ 'shit_level' ] = $row[ 'shit_level' ];
		$data[ 'current_boosts' ] = $row[ 'current_boosts' ];
	}
	return $data;
}

function buyItem( $uid, $id ) {
	global $pdo;
	$q = "INSERT INTO `transactions` (`shop_id`,`user_id`) VALUES ('$id','$uid')";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
	$user = getUser( $uid );
	$item = getShopItem( $id );
	$balance = $user[ 'balance' ] - $item[ 'price' ];
	$boosts = json_decode( $user[ 'current_boosts' ], true );
	$boosts[] = $item;
	$boosts = json_encode( $boosts );
	$q = "UPDATE `users` SET `balance`='$balance', `current_boosts`='$boosts' WHERE `vkid`='$uid'";
	$pdo->query( $q );
	if( $pdo->errorCode() != 0 ) {
		//error
	}
	
}

?>