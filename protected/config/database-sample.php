<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'pgsql:host=localhost;dbname=your_db_name',
	'emulatePrepare' => true,
	'username' => 'your_db_user',
	'password' => 'your_db_password',
	'charset' => 'utf8',

);
