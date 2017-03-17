	<head>
		<meta charset="utf-8">
		<title>StartPage</title>
		<link rel="stylesheet" type="text/css" href="../../../CSS/style_login.css">
		<script src="/script/test/testAuth.php"></script>
        	</head>

	<body id="indexbody">
    <div class="all" style="margin-left: 33%; margin-top: 33%; margin-bottom: 33%">
	<div class="authf" id="authf">
	<span><h2 class="headline1" style="color:#E37B13;">Авторизація</h2></span><br/>
	    <label for="password">Користувач</label><br/>
	    <input type="text" name="login" id="login" class="login" style="height: 1.5cm; width: 296px;" placeholder="Введіть ваш логін"><br>
	    <label for="password">Пароль</label><br/>
		<input type="password" name="password" id="password" class="password"  style="height: 1.5cm; width: 296px;" placeholder="Введіть ваш пароль" value="">
        <input id="submit" tabindex="4" name="LogIn" value="LogIn" title="Login" type="submit"><br/>
	</div>
        <div class="links" style="margin-top: 23%">
    <table id="tabs" class="tabs">
        <a id="tabLog" href="index_ua.php">
<img src="http://hitsk.in/t/14/71/11/i_icon_mini_login.png" width="32" height="32" /> </a><br />
    <a id="tabReg" href="../../reg/LoginJob_ua.php"> <img src="../../../images/add-user.ico" /> </a><br />
    <a id="tabRec" href="RecoverySmall_ua.php"> <img src="../../../images/Data-Recovery.ico" /> </a>
    </table>
        </div>
    </div>
	<form name="language" id="Language" class="language">
      <span>
        
          <a class="enbut" title="EN" href="../../../index.php">
<img src="../../../images/USA.ico" width="32" height="32" />
          </a>
        
        
          <a title="RU" class="rubut" href="../ru/index_ru.php">
<img src="../../../images/Russia.ico" width="32" height="32" />
          </a>
        
                
          <a title="UA" class="uabut" href="index_ua.php">
<img src="../../../images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
    </form>
	</body>
    <!-- checking the entered login and password -->
    <?php
include ('../../../bd/bd.php');
include("../../validate.php");
require_once ('../../../cfg/config.php');
if (isset($_POST['login']) && isset($_POST['password']))
{
    $uname = $_POST['login'];
    $data = @mysql_fetch_array(@mysqli_query($conn,
        "SELECT user_login, password FROM users WHERE user_login='$uname'"));
    if ($data['password'] === md5($_POST['upass']) and $data['login'] == $_POST['uname'])
    {
        //session_start();
        $_SESSION['sess_login'] = $_POST['uname'];
        $_SESSION['sess_password'] = $_POST['upass'];
        header('Refresh:0; href="./index.php"');
        exit();
    }
    else
    {
        $err = '<span style="color: green"><b>';
        $err .= 'Login or password are not correct';
        $err .= '</b></span><br>';
    }
}

?>