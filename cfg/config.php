<?php

//DB adress
$host = "localhost";

$username = "root";

$password = "";

$db = "User";

//Errors
//define('ERROR_CONNECT', 'Сan not connect with DB');

//Errors
//define('ERROR_NO_DB_SELECT', 'This DB is absent on the server');

//Site host address
//define($host,'http://'.$_SERVER['HTTP_HOST'].'/');

$connect = mysqli_connect($host, $username, $password, $db);
   if(!$connect) exit(mysqli_error($connect));
       else {echo "Error";}

       if (!mysqli_select_db($connect,$db)) exit(mysqli_error($connect));
       else{echo "Can not connect";}

       mysqli_query($connect,'SET NAMES cp1251;');
