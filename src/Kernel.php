<?php

if ( defined( 'ABSPATH' ) && ! defined( 'BRIDGE_CONNECT_VERSION' ) ) {
	require_once dirname( __FILE__ ) . '/Loader.php';
	$loader = new \Bridge\Connect\Loader();
	$loader->init();
}
