<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            UA
        </title>
        </head>
    <body>
    <?php
	include('../../validate.php');
    include('../../../script/test/testRecovery.php');
?>
    <script type="text/javascript" src="../../test/testRecovery.php" ></script>
        <form name="authf" action="RecoverySmall_ua.php" method="post">
            <div class="error-php">
            </div>
            <label for="email">
                Введите ваш E-mail
            </label><br/>
            <input type="Text" id="email" class="cs3" name="email" value="">
            <div>
                <button type="submit" class="recovery" onclick="document.authf.submit()">
Введіть Ваш Email
                </button>
            </div>
        </form>
            <form name="language" id="language" class="language">
      <span>
          <a class="enbut" title="EN" href="../en/RecoverySmall.php">
<img src="../../../images/USA.ico" width="32" height="32" />
          </a>
        
        
          <a title="RU" class="rubut" href="../ru/RecoverySmall_ru.php">
<img src="../../../images/Russia.ico" width="32" height="32" />
          </a>
 
                
          <a title="UA" class="uabut" href="RecoverySmall_ua.php">
<img src="../../../images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
    </form
    </body>
</html>