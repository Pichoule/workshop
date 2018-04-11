<?php
	define ('DB_NOM' , 'mysql:host=localhost;dbname=workshopb32');
	define ('DB_USER' , 'root');
	define ('DB_PASSWORD' , '');
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$p_base = new PDO(DB_NOM, DB_USER, DB_PASSWORD, $pdo_options);
	$p_base->exec("Set character set utf8");
?>