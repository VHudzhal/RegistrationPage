<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
function get_connection(){
    $servername = "localhost";
    $username = "admin";
    $password = "123";
    $dbname = "Users";

$connection = new mysqli($servername, $username, $password, $dbname);
    $bd = @mysqli_select_db($connection, 'Users');
    @mysqli_query($connection, 'SET name utf8');
    @mysqli_query($connection, 'id');
    if (!$connection || $bd){
        exit(@mysqli_error());
    }
    $result = @mysqli_query($connection,"SELECT * FROM 'Users'");
    return $result;
}