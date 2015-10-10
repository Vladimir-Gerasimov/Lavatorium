<?php

require_once( "inc/limonade.php" );
require_once( "inc/config.php" );
require_once( "inc/vk_api.php" );
require_once( "inc/common_methods.php" );
require_once( "inc/game_methods.php" );

require_once( "ext/shit.php" );
require_once( "ext/mainPage.php" );
require_once( "ext/gamePage.php" );
require_once( "ext/auth.php" );
require_once( "ext/shop.php" );

dispatch( '/', 'MainPage' );
dispatch( '/auth', 'Auth' );
dispatch( '/shop', 'Shop' );
dispatch( '/buy/:id/:token', 'Buy' );
dispatch( '/game/:user', 'GamePage' );
dispatch( '/shit/:to/:token', 'ShitFunc' );

run();

?>