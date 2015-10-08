<?php

function MainPage() {
	global $vk_auth_link;
	if( isset( $_SESSION[ 'uid' ] ) && isset( $_SESSION[ 'access_token' ] ) ) {
		createToken( $_SESSION[ 'uid' ] );
		echo 'logged in<br>';
		echo '<a href="/game">GAME</a>';
	} else {
		echo '<a href="' . $vk_auth_link . '">VK AUTH</a>';
	}
}

?>