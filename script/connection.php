<?php
require_once ('../cfg/config.php');
$connection = mysqli_connect($host, $username, $password, $db) or die("не могу соединиться".mysqli_error($connection));
mysqli_select_db($connection, $db);
if (mysqli_connect_errno() ){
    echo "Can not connect";
    exit();
}
mysqli_query($connection, 'SET name utf8');
mysqli_query($connection, 'id');

    if (isset($_REQUEST['Name']) && isset($_REQUEST['Surname']) && isset($_POST['day']) && isset($_REQUEST['Mounth']) && isset($_REQUEST['Year'])
        && isset($_REQUEST['Country']) && isset($_REQUEST['City']) && isset($_REQUEST['Email']) && isset($_POST['Login']) && isset($_REQUEST['Password'])
        && isset($_REQUEST['Sex']) && isset($_REQUEST['Avatar']) && isset($_REQUEST['Phone'])){
        $name = $_REQUEST['Name'];
        $surname = $_REQUEST['Surname'];
        $day = $_REQUEST['Day'];
        $mounth = $_REQUEST['Mounth'];
        $year = $_REQUEST['Year'];
        $country = $_REQUEST['Country'];
        $city = $_REQUEST['City'];
        $email = $_REQUEST['Email'];
        $login = $_POST['Login'];
        $password = $_REQUEST['Password'];
        $sex = $_REQUEST['Sex'];
        $avatar = $_REQUEST['Avatar'];
        $phone = $_REQUEST['Phone'];
        $insert_user = "INSERT INTO (Name, Surname, Day, Mounth, Year, Country, City, Email, Login, Password, Sex, Phone, Avatar) 
                            VALUES ('$name', '$surname', '$day', '$mounth', '$year', '$country', '$city', '$email', '$login', '$password', '$sex', '$phone', '$avatar')";
        if(mysqli_query($connection,$insert_sql_user)){
            echo "<p>Новая запись вставлена в базу!</p>";
        }
        $query_reg = "SELECT t.* FROM User.Users t ORDER BY Id_user DESC LIMIT 501";
        $update_user = "UPDATE User.Users SET Name ='$name', Surname = '$surname',Day='$day',Mounth='$mounth',Year='$year', Email = '$email', Login='$login', Password = '$password', Sex = '$sex', Phone='$phone' Avatar='$avatar'";
        $result_reg = $connection->query($query_reg);


        $insert_photo = "INSERT INTO User.photo(name) VALUES ('$avatar')";

        if (mysqli_query($connection, $insert_photo)){
            echo "<p>Новая запись вставлена в базу!</p>";
        }

        $query_ph = $connection->query("SELECT t.* FROM User.photo t ORDER BY Id_user DESC LIMIT 501", MYSQLI_USE_RESULT);
        $update_photo = "UPDATE User.photo SET  ='$account', added = '$added' WHERE id = '$id'";
        $result_ph = $connection->query($query_ph);

        if($result = mysqli_query($connection, $insert_user, $insert_photo)){
            if ($result = true) {
                echo "<span style='color: red;'>Вашы данные успешно добавлены</span>";
            }
    }

mysqli_free_result($result);
}
    mysqli_close($connection);
//header("Location: index.php");