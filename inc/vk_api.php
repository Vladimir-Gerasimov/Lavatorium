<?php

function login() {
	$user = array();
	if( isset( $_GET[ 'code' ] ) ) {
		$params = array(
			'client_id'		=> $client_id,
			'client_secret'	=> $client_secret,
			'code'			=> $_GET[ 'code' ],
			'redirect_uri'	=> $auth_uri
		);

		$token = getVKData( $access_token_uri, $params );

		if( isset( $token[ 'access_token' ] ) ) {
			$params = array(
				'uids'		 => $token[ 'user_id' ],
				'fields'	   => 'uid',
				'access_token' => $token[ 'access_token' ]
			);

			$userInfo = getVKData( $user_data_uri, $params );
			if( isset( $userInfo[ 'response' ][ 0 ][ 'uid' ] ) ) {
				$userInfo = $userInfo[ 'response' ][ 0 ];
			}
			
			$user[ 'access_token' ] = $token[ 'access_token' ];
			$user[ 'uid' ] = $userInfo[ 'uid' ];
		}
	}
	return $user;
}

function getVKData( $url, $params ) {
	return json_decode( file_get_contents( $url . '?' . urldecode( http_build_query( $params ) ) ), true );
}
?>