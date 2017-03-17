<?
include ('../../cfg/config.php');
include ('../../bd/bd.php');
?>
<html>
    <head>
        <title>
            RegistrationJob
        </title>
        <meta http-equiv="content-type" content="text/html" charset="windows-1251" lang="ua"/>
        <link rel="stylesheet" type="text/css" href="../../CSS/style_reg.css">
        <script src="../jquery.js"></script>
        <script src="../jquery.validate.min.js"></script>
        <script src="../rules.js"></script>
        <script src="../messages.js"></script>
        <script src="../is.mobile.js"></script>
        <script src="../validate.js"></script>
        <script src="../jquery.validate.js"></script>
    </head>

    <form name="contact" id="contact" class="form_check form_style" method="post" action="../../profile.php" enctype="multipart/form-data">
        <table class="form_table">
        <colgroup>
        <col width="50%">
        <col width="50%">
        </colgroup>
            <tr 1>
            <!-- Ім'я користувача -->
                <td>
                    Ім'я:<br>
                    <div>Введіть ваше справжнє ім'я</div>
                    <input type="text" name="name" id="name" value=""><br>
                </td>
                <!-- Логін користувача -->
           <td>
            Логін:<br>
            <div>Оберіть ваше мережеве ім'я, під яким ви будете спілкуватись </div>
            <input type="text" id="login" name="login" value=""><br>
        </td>
            </tr>
            
            <tr 2>
            <!-- Прізвище користувача -->
            <td>
                Прізвище:<br>
                <div>Введіть ваше справжнє прізвище</div>
                <input type="text" id="surname" name="surname" value=""><br/>
            </td>
            <!-- Пароль користувача -->
            <td>
                Пароль:<br/>
                <div>від 8 до 32 символів</div>
                <input type="password" id="password" name="code" value=""><br/>
            </td>
            </tr>
            
            <tr 3>
            <td>
            <!-- Дата народження користувача -->
            <table id="age">    
                <tr>
                <font color="#ff0000">Дата народження:</font>
                    <td>
                        День
                    </td>
                    <td>
                        Місяць
                    </td>
                    <td>
                        Рік
                    </td>
                </tr>
                <tr>
                    <td>
<select id="day" name="day">
<?php
for ($i = 1; $i <= 31; $i++) {
    echo '<option>' . $i . '</option>';
}
?>
</select>
                    </td>
                    <td>
                        <select name="mounth" id="mounth">
                            <option selected>
                                Січня
                            </option>
                            <option>
                                Лютого
                            </option>
                            <option>
                                Березня
                            </option>
                            <option>
                                Квітня
                            </option>
                            <option>
                                Травня
                            </option>
                            <option>
                                Червня
                            </option>
                            <option>
                                Липня
                            </option>
                            <option>
                                Серпня
                            </option>
                            <option>
                                Вересня
                            </option>
                            <option>
                                Жовтня
                            </option>
                            <option>
                                Листопада
                            </option>
                            <option>
                                Грудня
                            </option>
                        </select>
                    </td>
                    <td>
                        
<select name="year" id="year">
<?php
for ($i = 1950; $i < 2016; $i++) {
    echo '<option>' . $i . "\n" . '</option>';
}
?>
</select>

                    </td>
                </tr>
            </table>
            </td>
            <!-- Повтор паролю користувача -->
            <td>
            Підтвердження паролю:<br/>
            <div>Повторіть пароль</div>
            <input type="password" id="password" name="code" value=""><br/>
        </td>
            </tr>
        <tr 4>
        <!-- Стать -->
        <td>   
        <table>
            <legend style="width: 4.3cm">
                <font color="#ff0000">Вкажіть вашу стать:</font>
            </legend>
            Чол.
            <input type="radio" name="gender" value="male" checked>
            Жін.
            <input type="radio" name="gender" value="female" >
        </table>
        </td>
        <!-- Адреса електронної почти користувача -->
        <td>
            Email:<br>
            <input type="email" id="email" name="email" value=""><br>
        </td>
        </tr> 

        <tr 5>
        <!-- Адреса користувача: Країна -->
        <td>
            <font color="#ff0000" size="3px"><left>Adress</br></left></font>  
            Країна:<br>
            <?php

$file = './adr/Country_ua.txt';
$arr = file($file);
$count = count($arr);
echo '<select name="country" style="width:5cm">';
for ($i = 0; $i < $count; $i++) {
    echo '<option value="' . trim($arr[$i]) . '">' . trim($arr[$i]) . '</option>';
}
echo '</select>';

?>
        </td>
        <!-- Номер телефону користувача -->
        <td>
            Телефон:<br>
            <input type="tel" id="phone" name="phone" value="" title="phone"><br/>
        </td>   
        </tr>

        <tr 6>
        <!-- Адреса користувача: місто -->
        <td>
            Місто:<br>
            <input type="text" id="city" name="city" value=""><br/>
           
        </td>
        <!-- Фото користувача -->
        <td>
            Фото:<br>
            <input type="file" id="avatar" name="avatar" value="" title="phone" ><br/>
        </td>
        </tr>
</table>
        <input type="submit" id="register" class="btnsubmit" name="register" value="Register"><br>
    </form>

        <form name="language" id="language">
      <span>
        
          <a class="enbut" title="EN" href="LoginJob.php">
<img src="../../images/USA.ico" width="32" height="32" />
          </a>
        
        
          <a title="RU" class="rubut" href="LoginJob_ru.php">
<img src="../../images/Russia.ico" width="32" height="32" />
          </a>
        
                
          <a title="UA" class="uabut" href="LoginJob_ua.php">
<img src="../../images/Ukraine.ico" width="32" height="32" />
          </a>
      </span>
    </form>
</html>