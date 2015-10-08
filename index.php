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

dispatch( '/', 'MainPage' );
dispatch( '/auth', 'Auth' );
dispatch( '/game/:user', 'GamePage' );
dispatch( '/shit/:from/:to/:token', 'ShitFunc' );

run();

?>