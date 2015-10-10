<?php

function MainPage() {
	global $vk_auth_link;
	$params = array();
	if( isset( $_SESSION[ 'uid' ] ) && isset( $_SESSION[ 'access_token' ] ) ) {
		createToken( $_SESSION[ 'uid' ] );
		$params[ 'login' ] = 1;
		$params[ 'button_class' ] = "btn btn-success";
		$params[ 'link' ] = "/game";
		$params[ 'link_text' ] = "Играть";
	} else {
		$params[ 'login' ] = 0;
		$params[ 'button_class' ] = "btn btn-primary";
		$params[ 'link' ] = $vk_auth_link;
		$params[ 'link_text' ] = "Авторизация ВК";
	}
		
	return html( 'index.html.php', null, $params );
}

?>