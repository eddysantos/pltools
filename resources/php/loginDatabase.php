<?php

/** PRODUCTION DATABASE **/

// $datab = 'prolog';
// $host = '10.1.4.10';
// $port = 3306;
// $usr = 'prolog';
// $pwd = 'f4Tnps.03';
//
/** TEST DATABASE **/
$datab = 'prolog';
$host = 'localhost';
$port = 8889;
$usr = 'root';
$pwd = 'root';

$db = new mysqli($host, $usr, $pwd, $datab, $port) or die ('Could not connect to the database server ' . $db->error );

 ?>
