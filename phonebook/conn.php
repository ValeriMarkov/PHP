<?php
     $connHost = "localhost";
     $connUser = "root";
     $connPass = "1234";
     $database = "phonebook";
	$DBconn = @mysqli_connect($connHost, $connUser, $connPass, $database);
   if(!$DBconn)
   {
   die('Could not find database'. mysqli_error($DBconn));
   }
?>