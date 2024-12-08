<?php 

//Database configuration

    $db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "uploads_database";

    //Create database connection
    $db = new mysqli($db_host, $db_user, $db_password, $db_name);

    //Check connection
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    