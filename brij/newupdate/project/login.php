<?php
// print_r($_SERVER);
$url=$_SERVER['REQUEST_URI'];
session_start();
include("header.php");
?>


<!-- 
<!DOCTYPE html>
<html>
<form action="save" method="post">
<head>
  <title>the today</title>
  <link rel="stylesheet" type="text/css" href="css/facestyle.css">
</head>
<body>
  <div id="box"> <div id="box1a"></div>
    <div id="box1"><h1>Flipkart </h1> 
      <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">contect</a></li>
      </ul> 
      <form action="save.php" method="post">
      <table border="0" align="center" cellspacing="0" cellpadding="04" width="30">
        <tr>
          <td id="color">Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td id="color">passward</td>
          <td><input type="password" name="password"></td>
          <td><input type="submit" value="login"></td>
        </tr>
        <tr> <td></td>
          <td id="colorf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forgotten accoutn ?</td>
        </tr>
      </table>
    </form>
    </div>
  </div> -->
<div class="container-fluid" style="background-color: #F6F6FA">
  <br/>
<div class="row">
  <div class="col-md-6"><h4 id="facebook"><b>Flipkart helps you connect and share with  the people in your life</b></h4>
  </div>
</div>
 <br/>
  <div class="row">
    <div class="col-md-4 "><img src="image/3.abc" height="250" width="450"></div>
    <div class="col-md-6 offset-md-2"><h1 style="padding-left: 100px;">Login account</h1>
<form action="auth.php" method="post">
  <table cellpadding="10" cellspacing="0" align="center">
            <br/>
              <tr>
                <td><input type="text" name="user_name" placeholder="Enter User Name"></td>
              </tr>
              <tr>
                <td><input type="password" name="password" placeholder="Enter Your Password"></td>
              </tr>
              <tr>
                <td><input class="btn btn-success" type="submit" name=""  value="login"></td>
              </tr>
              <tr>
                <td>
                <?php
                if(isset($_SESSION['msg']))
                {
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
                ?>
                </td>
              </tr>
              <tr>
                <td><p class="text-primary">Already Have An Account?</p></td>
              </tr>
            </table>
            <hr/>
  </form></div>
  </div><br/><br/><br/><br/>
  </div>
  

<p class="text-denger">
English (UK)
हिन्दी
मराठी
اردو
ਪੰਜਾਬੀ
বাংলা
ગુજરાતી
தமிழ்
తెలుగు
മലയാളം
ಕನ್ನಡ</p>
<hr/><p id="colora">
Sign UpLog InMessenger Facebook LiteFind FriendsPeople ProfilesPages Page catego riesPlaces Games Locations Marketplace Groups Instagram Local Fundraisers AboutCreate adCreate PageDevelopers Careers Privacy Cookies AdChoices TermsAccount securityLogin helpHelp Settings Activity log
Facebook © 2019</p>
</body>
</form>
</html>






