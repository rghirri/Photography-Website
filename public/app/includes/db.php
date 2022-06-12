<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* This code is included in the files to 
   add connection to HomePage database */
$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
return $db->getConn();