<!DOCTYPE html>
<?include('../../validate.php');
	include('../../../script/test/testRecovery.php');?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>
    <body>
        <form name="authf" onsubmit="return false;" method="post">
            <div class="error-php">
            </div>
            <label for="email">
                Введите E-mail, который Вы указывали при регистрации<br/>
            </label>
            <input type="Text" id="email" class="cs3" name="email" value=""><br/>
               <input type="submit" id="password" value="Запрос воcстановления пароля"> 
            </button>
            </div>
        </form>
        <form name="language" id="language" class="language">
      <span>
          <a class="enbut" title="EN" href="../en/RecoverySmall.php">
<img src="../../../images/USA.ico" width="32" height="32" />
          </a>
        
        
          <a title="RU" class="rubut" href="RecoverySmall_ru.php">
<img src="../../../images/Russia.ico" width="32" height="32" />
          </a>
 
                
          <a title="UA" class="uabut" href="../ua/RecoverySmall_ua.php">
<img src="../../../images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
    </form>
    </body>
</html>