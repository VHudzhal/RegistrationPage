    <head>
        <title>StartPage</title>
        <link rel="stylesheet" type="text/css" href="../../../CSS/style_login.css">
        <meta charset="utf-8"/>
        </head>

    <body id="indexbody">
    <div class="all">
        <div action="" method="post" class="authf" id="authf">
            <h2 class="headline1">
                <span style=color:#E37B13;">
                    ?????
                </span>
            </h2>
             <label for="login">Логин</label><br/>
                <input type="text" name="login" id="login" class="login" style="height: 1.5cm; width: inherit;" placeholder="Введите ваш логин"/><br/>
                  <label for="password">Пароль</label><br/>
                <input type="password" name="password" id="password" class="password"  style="height: 1.5cm; width: inherit;"  placeholder="Введите ваш пароль" /><br />
<input id="submit" tabindex="4" name="LogIn" value="Войти" title="Login" type="submit"><br/>
  <a href="../ru/RecoverySmall_ru.php" style="">
  ?????? ???????
  </a>
  </span>

        </div>
        <div class="links">
            <table id="tabs" class="tabs">
                <tr >
                    <td style="height: 32px;">
                        <a id="tabLog" href="index.php">
                            <img src="http://hitsk.in/t/14/71/11/i_icon_mini_login.png" width="32" height="32" />
                        </a>
                    </td>
                </tr>
                <tr><td style="height: 32px;"><a id="tabReg" href="script/reg/LoginJob.php" style="top: auto;" > <img src="../../../images/add-user.ico" width="32" height="32" /> </a></td></tr>
                <tr><td style="height: 32px;"><a id="tabRec" href="script/auth/en/RecoverySmall.php"> <img src="../../../images/Data-Recovery.ico" /> </a></td></tr>
            </table>
        </div>
    </div>
                <form name="language" id="Language" class="language">
      <span>
        
          <a class="enbut" title="EN" href="../../../index.php">
            <img src="../../../images/USA.ico" width="32" height="32" alt="EN" />
          </a>
        
        
          <a title="RU" class="rubut" href="index_ru.php">
<img src="../../../images/Russia.ico" width="32" height="32" />
          </a>
        
                
          <a title="UA" class="uabut" href="../ua/index_ua.php">
<img src="../../../images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
    </form>
    </body>
    <!-- checking the entered login and password -->
    <?php
include ('../../../bd/bd.php');
include ('../../validate.php');
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