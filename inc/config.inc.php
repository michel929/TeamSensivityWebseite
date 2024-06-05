<?php
$db_host = 'sensivity:3306';
$db_name = 'TeamSensivity';
$db_user = 'discord';
$db_password = '';
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
