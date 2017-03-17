<?php
include ('../../bd/bd.php');
//include ('../../cfg/config.php');

?>

<html lang="ru">
    <head>
        <title>
            RegistrationJob
        </title>
        <link rel="stylesheet" type="text/css" href="../../CSS/style_reg.css">
        <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
        <script src="../jquery.js"></script>
        <script src="../jquery.validate.min.js"></script>
        <script src="../rules.js"></script>
        <script src="../messages.js"></script>
        <script src="../is.mobile.js"></script>
        <script src="../validate.js"></script>
        <script src="../jquery.validate.js"></script>
            </head>
    <body>
    <div id="wb_Form2" class="contact">
        <form name="contact" class="form_check form_style" method="post" action="../../profile.php" enctype="multipart/form-data" accept-charset="text/html; charset=cp1251" id="contact">
        <table class="form_table">
        <colgroup>
        <col width="50%">
        <col width="50%">
        </colgroup>
            <tr>
            <!-- имя пользователя -->
                <td>
                Имя:
                <div>Введите ваше настоящее имя</div>
                    <input type="text" id="name" name="name" class="rfield" value=""><br/>
                </td>
                <td>
                    Логин:
                    <div>Выберите себе сетевое имя, под которым Вы будете общаться</div>
                    <input type="text" id="login" name="login" class="rfield passfield" value=""><br/>
                </td>
                    
                </tr>
                
                <tr 2>
                <!-- фамилия пользователя -->
                    <td>
                    Фамилия:
                    <div>Введите вашу настоящую фамилию</div>
                        <input type="text" id="surname" name="surname" class="rfield" value="" placeholder="Введите вашу фамилию"><br/>
                    </td>
                    <!-- Пароль пользователя -->
                    <td>
                        Пароль:<br/>
                        <div>от 8 до 32 символов</div>
                        <input type="password" id="password" name="code" class="rfield" value="">
                    </td>
                    </tr>
                    
                    <tr 3>
                   <td> 
                   
                <table id="age">
                    <tbody>
                    <tr>
                    <!-- Дата рождения пользователя -->
                    <font color="#ff0000">Дата рождения</font>
                        <td>
                        День
                        </td>
                        <td>
                            Месяц
                        </td>
                        <td>
                            Год
                        </td>
                    </tr>
                    <tr>
                        <td>
                            

<select name="day">
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
                                    Января
                                </option>
                                <option>
                                    Февраля
                                </option>
                                <option>
                                    Марта
                                </option>
                                <option>
                                    Апреля
                                </option>
                                <option>
                                    Maя
                                </option>
                                <option>
                                    Июня
                                </option>
                                <option>
                                    Июля
                                </option>
                                <option>
                                    Aвгуста
                                </option>
                                <option>
                                    Сентября
                                </option>
                                <option>
                                    Октября
                                </option>
                                <option>
                                    Ноября
                                </option>
                                <option>
                                    Декабря
                                </option>
                            </select>
                        </td>
                        <td>
                            
<select name="year">
<?php
for ($i = 1950; $i < 2016; $i++) {
    echo '<option>' . $i . "\n" . '</option>';
}
?>
</select>

                        </td>
                    </tr>
                    </tbody>
                </table>
                        </td>
                       <!-- Подтверждение пароля пользователя -->
                    <td>
                        Подтверждение пароля:
                        <div>Повторите пароль<br/></div>
                        <input type="password" id="Editbox2" name="code" class="rfield" value="">
                    </td>
            </tr>
            
                    

                <tr 4>
                <!-- Пол -->
                <td>
                <table>
            <legend style="width: 50mm;"><font color="#ff0000">Ваш пол:</font></legend>
          <tr>
            <center>
            <td>
              Мужской</td>
            <td><input type="radio" id="gender" name="gender" class="rfield" value="male">
            </td>
            <td>
              Женский
            </td>
            <td>
              <input type="radio" name="gender" id="gender" class="rfield" value="female">
            </td>
            </center>
          </tr>
        </table>
        </td>
                    <!-- Адресс электронной почты пользователя -->
                    <td>
                        Email:<br/>
                        <input type="email" id="email" name="email" class="rfield mailfield" value=""><br/>
                    </td>
                </tr>

                <!-- адрес пользователя:страна -->
                <tr>
                    <td>
                <font color="#ff0000" size="3px"><left>Адрес</br></left></font>
                        Страна:<br/>
                        <?php

$file = './adr/Country_rus.txt';
$arr = file($file);
$count = count($arr);
echo '<select name="country" class="rfield" style="width:5cm">';
for ($i = 0; $i < $count; $i++) {
    echo '<option value="' . trim($arr[$i]) . '">' . trim($arr[$i]) . '</option>';
}
echo '</select>';

?>
                    </td>
                    <!-- Телефонный номер пользователя -->
                    <td>
                        Тел. номер:<br/>
                        <input type="tel" id="phone" name="phone" class="rfield phonefield" value="" title="phone">
                    </td>
                </tr>


                <tr>
                <!-- Адрес пользователя: Город -->
                <td>
                        Город:<br/>
                        <input type="text" id="city" name="city" class="rfield" value="">
                    </td>
                    <!-- Фото пользователя -->
                    <td>
                        Фото:<br/>
                        <input type="file" id="photo" name="photo" value="" title="photo">
                    </td>
                </tr>

</table>
            <input type="submit" id="register" name="register" class="btnsubmit" value="Register"><br/>
        </form>
    </div>

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
    <div>
    </div>
    </body>
</html>