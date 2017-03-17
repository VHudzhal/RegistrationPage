    <?php
	include('../../../script/test/testRecovery.php');
    include('../../validate.php');
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" >
		<title></title>
	</head>

	<body>
	<form name="authf" onsubmit="return makeCheck();" method="post">
    <div class="error-php"></div>                    
    <label for="email">Email address:</label><br>
    <input type="Text" id="email" class="cs3" name="email" value=""><br>
    <button type="submit" class="recovery" onclick="document.authf.submit()">password recovery</button>
    </div>                           
    </form>
    <form name="language" id="language" class="language">
      <span>
          <a class="enbut" title="EN" href="RecoverySmall.php">
<img src="../../../images/USA.ico" width="32" height="32" />
          </a>
        
        
          <a title="RU" class="rubut" href="../ru/RecoverySmall_ru.php">
<img src="../../../images/Russia.ico" width="32" height="32" />
          </a>
 
                
          <a title="UA" class="uabut" href="../ua/RecoverySmall_ua.php">
<img src="../../../images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
    </form>
	</body>
</html>