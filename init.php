<?php 
	/**
	 *	IITBHUCSE Initialization
	**/
	define( 'INITROOT', dirname(__FILE__).'/' );
	require_once(INITROOT. 'sys/conf/schoolstreet.conf.php');
	require_once(INITROOT. 'sys/lib/Mysql.class.php');
	

	/**
	 *	MySQL class instance
	**/
	$mysql = new Mysql($mysql_database, $mysql_user, $mysql_pass, $mysql_host);
	
	
?>
