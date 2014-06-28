<?php

function createDB(){
	$connection = mysql_connect ("localhost", "root", "")
		or die ("No es pot connectar al servidor.");	
	if(!mysql_select_db ("whatsthis")){
					mysql_query('CREATE DATABASE whatsthis');
					mysql_select_db('whatsthis');
					
					$inventoryDb = "CREATE TABLE IF NOT EXISTS `inventory` (
									  `epc` varchar(50) NOT NULL DEFAULT '',
									  `product` varchar(100) DEFAULT NULL,
									  `price` varchar(10) DEFAULT NULL,
									  PRIMARY KEY (`epc`)
									) ENGINE=InnoDB DEFAULT CHARSET=latin1";
					mysql_query($inventoryDb, $connection);
					$usersDb = "CREATE TABLE IF NOT EXISTS `users` (
									  `user` varchar(50) NOT NULL,
									  `password` varchar(50) NOT NULL,
									  `email` varchar(50) NOT NULL,
									  `dni` varchar(50) NOT NULL,
									  PRIMARY KEY (`user`)
									) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
					mysql_query($usersDb, $connection);

				}
	mysql_close ($connection);

}

?>