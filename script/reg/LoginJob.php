<?php
include ('../../bd/bd.php');
//include '../../cfg/config.php';
include '../avatar.php';
//include "../connection.php"
?>

<html lang="en">
  <head>
    <title>
      RegistrationJob
    </title>
    <link rel="stylesheet" type="text/css" href="../../CSS/style_reg.css">
    <meta http-equiv="content-type" content="text/html; charset=cp1251"/>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script type="text/javascript">
          $(function(){
              $("form[name = 'register_form']").validate({
                  rules: {
                      name: "required",
                      surname: "required",
                      country: "required",
                      city: "required",
                      gender: "required",
                      email: {
                          required: true,
                          email: true
                      },
                      login: "required",
                      password: {
                          required: true,
                          minlength: 5
                      },
                      phone: {
                          required: true,
                          minlength: 10
                      }
                  },

                  messages: {
                      name: "Please enter your name",
                      surname: "Please enter your surname",
                      country: "Please select your country",
                      city: "Please enter your city",
                      gender: "Please specify your gender",
                      email: "Please enter a valid email address",
                      login: "Please enter a valid username",
                      password: {
                          required: "Please provide a password",
                          minlength: "Your password must be at least 5 characters long"
                      },

                      phone: {
                          required: "Please enter your telephone number",
                          minlength: "Your phone must be at least 10 characters long"
                      }
                  },
                  submitHandler: function (form) {
                      form.submit();
                  }
              });
          });
      </script>
    </head>
  

  <body>
    <div id="contact" class="contact">

      <form name="register_form" id="register_form" class="form_check form_style" method="post" enctype="multipart/form-data" accept-charset="text/html; charset=cp1251" style="font-style: italic; font-family: cursive; color: #008040;" action="../../profile.php">
        <div class="panel" id="UserInfo">
        <table class="form_table">
        <colgroup>
        <col width="50%">
        <col width="50%">
        </colgroup>
        <tbody>
          <tr>
          <!-- User name -->
            <td>
            Name:
             <div> Your real name<br /></div>
              <input type="text" id="name" name="name" value="" placeholder="name">
            </td>
              <!-- User login -->
            <td>
            Login:
            <div>Choose your network name<br /></div> 
            <input type="text" id="login" name="login" value=""><br/>
          </td>
          </tr>
          
                        
            <tr>
            <!-- User surname -->
            <td>
            Surname:
            <div>Your real surname</div>
              <input type="text" id="surname" name="surname" value="" placeholder="surname">
            </td>
            <!-- User password -->
            <td>
            Password
            <div>from 8 to 32 symbols</div>
              <input type="password" id="password" name="code" value="" placeholder="Password">
            </td>
          </tr>
          <tr>
          <!-- User birthday -->
          <td>
          <table id="age">
          <tbody>
            <tr style="color='#ff0000'">
                Select your birthday
              <td>
                  Day
              </td>
              <td>
              Mounth
              </td>
              <td>
                Year
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
                <select id="mounth" name="mounth">
                  <option selected>
                    January
                  </option>
                  <option>
                    February
                  </option>
                  <option>
                    Mart
                  </option>
                  <option>
                    April
                  </option>
                  <option>
                    May
                  </option>
                  <option>
                    June
                  </option>
                  <option>
                    July
                  </option>
                  <option>
                    August
                  </option>
                  <option>
                    September
                  </option>
                  <option>
                    October
                  </option>
                  <option>
                    November
                  </option>
                  <option>
                    December
                  </option>
                </select>
              </td>
              
              <td>
                <?php

echo '<select id="year" name="year">';
for ($i = 1950; $i < 2016; $i++) {
    echo '<option>' . $i . "\n" . '</option>';
}
echo '</select>';

?>
              </td>
              </tr>
          </tbody>
          </table>
              </td>
              
            <td>
            <!-- Repeat user passwors -->
            Confirm password:
            <div>Repeat password</div>
              <input type="password" id="password" name="code" value="" placeholder="Repeat password">
            </td>
          </tr>
          
          <tr 4>          
          <!-- User gender -->
            <td>
        <table>
            <legend style="color='#ff0000'">Select your gender:</></legend>
          <tr>

            <td>
              Male</td>
            <td><input type="radio" id="gender" name="gender" value="male">
            </td>
            <td>
              Female
            </td>
            <td>
              <input type="radio" name="gender" id="gender" value="female">
            </td>

          </tr>
         </table>
            </td>
            <!-- User E-mail -->
        <td>
            Email:<br>
            <input type="email" id="email" name="email" value=""><br>
        </td>
          </tr>
          <tr 5>
          <div id="address" class="panel">
          <!-- User address:Country -->
          <td>
          <table class="address">
            <font color="#ff0000" size="5px"><left>Adress</br></left></font>
              Country:<br/>
              <?php

$file = './adr/Country_en.txt';
$arr = file($file);
$count = count($arr);
echo '<select name="country" selected="selected">';
for ($i = 0; $i < $count; $i++) {
    echo '<option value="' . trim($arr[$i]) . '">' . trim($arr[$i]) . '</option>';
}
echo '</select>';

?>
</table>
</td>
</div>
<!-- User phone number -->
    <td>
              Telephone<br/>
              <input type="tel" id="phone" name="phone" value="" placeholder="Phone" title="phone"><br/>
            </td>        
          </tr>
          
          <tr>
          <!-- User address:City -->
          <td>
              City:<br/>
              <input type="text" id="city" name="city" placeholder="City" value="">
            </td>
            <!-- User photo -->
              <td><input type="file" id="avatar" name="avatar" formaction="../avatar.php"  /></td>
          </tr>
        </tbody>
        </table>
          <div>
        <input type="submit" id="register" class="btnsubmit" name="register" value="Register" onclick=""><br/>
      </div>
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
  </body>
  </html>