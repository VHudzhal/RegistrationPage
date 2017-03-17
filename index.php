<head>
    <meta charset="utf-8">
    <title>StartPage</title>
    <link rel="stylesheet" type="text/css" href="CSS/style_login.css">
    <script type="text/javascript" src="/script/jquery.validate.js"> </script>
</head>
<body id="indexbody">
<div id="all" class="all" style="margin-left: 40%;margin-top: 15%">
    <div action="" method="post" class="authf" name="authf">

        <span><h2 class="headline1" style="color:#E37B13;">Log In</h2></span>
        <!-- Label and text input -->
        <label for="login">User name</label><br/>
        <input type="text" class="login" name="login" id="login" style="height: 1.5cm; width: inherit; border-radius: 15px;" placeholder="Enter your user name" value=""><br/>
        <label for="password">Password</label><br/>
        <input type="password" class="password" name="password" id="password" style="width: inherit; height: 1.5cm;" placeholder="Enter your password" value=""><br/>
        <span style="width: 5cm">
<input id="submit" tabindex="4" name="LogIn" value="LogIn" title="Login" type="submit"><br/>
  </span>


    </div>
    <div class="links" style="margin-top: 23%">
        <table id="tabs" class="tabs">
            <a id="tabLog" href="index.php"><img src="http://hitsk.in/t/14/71/11/i_icon_mini_login.png" width="32" height="32" /></a><br>

            <a id="tabReg" href="script/reg/LoginJob.php"><img src="images/add-user.ico" /> </a><br>

            <a id="tabRec" href="script/auth/en/RecoverySmall.php" > <img src="images/Data-Recovery.ico" /></a>
         </table>
    </div>
</div>

<form name="language" id="Language" class="language">
      <span>
          <a class="enbut" title="EN" href="index.php">
<img src="images/USA.ico" width="32" height="32" />
          </a>
        
        
          <a title="RU" class="rubut" href="script/auth/ru/index_ru.php">
<img src="images/Russia.ico" width="32" height="32" />
          </a>

          <a title="UA" class="uabut" href="script/auth/ua/index_ua.php">
<img src="images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
</form>
</body>
<!-- checking the entered login and password -->
<?php
//include ('bd/bd.php');
//include ('script/validate.php');
//require_once ('/cfg/config.php');
if (isset($_POST['login']) && isset($_POST['password'])) {
    $uname = $_POST['login'];
    $data = mysqli_fetch_array(mysqli_query($conn,
        "SELECT user_login, password FROM users WHERE user_login='$uname'"));
    if ($data['password'] === md5($_POST['upass']) and $data['login'] == $_POST['uname']) {
        //session_start();
        $_SESSION['sess_login'] = $_POST['uname'];
        $_SESSION['sess_password'] = $_POST['upass'];
        header('Refresh:0; href="./index.php"');
        exit();
    } else {
        $err = '<span style="color: green"><b>';
        $err .= 'Login or password are not correct';
        $err .= '</b></span><br>';
    }
}

?>