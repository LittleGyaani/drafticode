<?php

//Hiding all errors and notices
error_reporting(0);

/**
 * This file is for establishing connection with Database.
 */
 $dbHost = "localhost";
 $dbUser = "root";
 $dbPass = "";
 $dbName = "encore_srm";

 //Establishing connection to Database using MySQLi
 $conn = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

 if(!$conn)
   echo 'Connection bridge not available.'.$conn->connect_errno;
