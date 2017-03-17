<?php

include ('/../bd/bd.php');
// Файл в кодировке UTF-8 без BOM !!!
mb_internal_encoding('UTF-8'); // Установка кодировки
//session_start();

if (isset($_SESSION['id']))
{
    header("Location: ../../index.php");
}
if (isset($_POST['register']))
{
    // Создаем короткие имена переменных
    if (isset($_POST['name']))
        $name = $_POST['name'];
    else
        $name = '';
    if (isset($_POST['surname']))
        $surname = $_POST['surname'];
    else
        $surname = '';
    if (isset($_POST['day']))
        $day = $_POST['day'];
    else
        $day = '';
    if (isset($_POST['mounth']))
        $mounth = $_POST['mounth'];
    else
        $mounth = '';
    if (isset($_POST['year']))
        $year = $_POST['year'];
    else
        $year = '';
    if (isset($_POST['country']))
        $country = $_POST['country'];
    else
        $country = '';
    if (isset($_POST['city']))
        $city = $_POST['city'];
    else
        $city = '';
    if (isset($_POST['email']))
        $email = $_POST['email'];
    else
        $email = '';
    if (isset($_POST['login']))
        $login = $_POST['login'];
    else
        $login = '';
    if (isset($_POST['avatar']))
        $avatar = $_POST['avatar'];
    else
        $avatar = '';
    if (!empty($_FILES['file']['tmp_name']))
    {
        //Получаем временный файл
        $tmp = $_FILES['file']['tmp_name'];

        //Получаем имя присланного файла
        $name = $_FILES['file']['name'];

        //Пишем куда в дальнейшем, надо будет впихнуть файл,
        //в данном случае в папку images, имя файла оставляем родное
        $avatar = "images/" . $name;

        //перемещаем файл на сервер
        move_uploaded_file($tmp, $path);

        //Собственно выводим изображение
        echo "<img src='$path' alt='$name' />";
    }
    if (isset($_POST['pass1']))
        $pass1 = $_POST['pass1'];
    else
        $pass1 = '';
    if (isset($_POST['pass2']))
        $pass2 = $_POST['pass2'];
    else
        $pass2 = '';
    // Создаем переменную для описания всех ошибок
    $err = '';
}
$query = mysql_query("SELECT * FROM user WHERE login='" . $login . "'");

$numrows = @mysql_num_rows("$query");
if (numrows == 0)
{
    $sql = "INSERT INTO user
        (name,surname,day,mounth,year,country,city,email,login,password,avatar)
        VALUES('$name','$surname','$day','$mounth','$year','$country','$city','$email','$login','$password','$avatar')";
    $result = @mysql_query($sql);
}

// Проверяем корректность введенных данных
// Если произошла ошибка, присваиваем переменной $err описание ошибки
if (mb_strlen($name) > 50 || mb_strlen($name) < 2)
{
    $err .= 'Недопустимая длина поля Имя<br>';
}
if (mb_strlen($surname) > 50 || mb_strlen($surname) < 2)
{
    $err .= 'Недопустимая длина поля Фамилия<br>';
}
if (!preg_match('/^[0-9]{1,3}$/su', $day || $year || $mounth) == 0)
{
    $err .= 'Неверный возраст<br>';
}

if (!preg_match('/^[a-z0-9_.-]+@([a-z0-9-]+\.)+[a-z]{2,6}$/isu', $email) ||
    mb_strlen($email) > 50)
{
    $err .= 'Неверный адрес E-mail<br>';
}
if (!preg_match('/^[a-z0-9_.-]{6,16}$/isu', $pass1 && $pass2))
{
    {
        $err .= 'Неверный пароль<br>';
    }
    /*else if ($pass1 !== $pass2)
    {
    $err .= 'Пароли должны совпадать<br>';
    }*/
}

// Если ошибок нет, то переменная $err будет пустой
if ($err == '')
{

    exit(); // Завершаем работу скрипта
}
else
{
    // Если возникли ошибки
    // Заменяем все спецсимволы на HTML-эквиваленты
    $login = htmlspecialchars($login, ENT_COMPAT, 'UTF-8');
    $name = htmlspecialchars($name, ENT_COMPAT, 'UTF-8');
    $surname = htmlspecialchars($surname, ENT_COMPAT, 'UTF-8');
    $email = htmlspecialchars($email, ENT_COMPAT, 'UTF-8');

}

?>
