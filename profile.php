<link rel="stylesheet" type="text/css" href="CSS/style_reg.css">

<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta http-equiv="content-type" content="text/html; charset=cp1251"/>
</head>
<body>
<form action="" id="welcome" method="get">

 <h2>Welcome, <?php

echo $_GET['name'];

?></h2>
	<p><a href="logout.php">Exit</a> system </p>

<table title="Profile" class="profile" lang="ru" id="profile" style="border-collapse: collapse; line-break: normal;">
<tr>
	<td rowspan="2"> <?php

echo '<img src="images/' . $_POST['avatar'] .'"/>';

?></td>
	<td> <?php
echo $_POST['name']," ";
echo $_REQUEST['surname'],"</br>";
echo $_POST['sex'];
?></td>
</tr>

<tr>
	<td><?php

echo $_REQUEST['day'],".", $_REQUEST['mounth'],".",$_REQUEST['year'];

?></td>

</tr>

<tr>
	<td colspan="2"><?php

echo $_REQUEST['country'], ","; echo $_REQUEST['city'];

?></td>
</tr>

<tr>
	<td><?php
    echo"<div>Login</div>";
    echo $_REQUEST['login'];
    ?>
    </td>
<td>
<?php
echo "<div>E-mail</div>";
echo $_REQUEST['email'];
?>
</td>
</tr>
<tr>
<td colspan="2">
<?php
	echo $_REQUEST['phone'];
?>
</td>
</tr>
</table>
</form>
</body>
</html>