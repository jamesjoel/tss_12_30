<?php
// print_r($_SERVER);
$url=$_SERVER['REQUEST_URI'];
session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <title>class design</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" type="text/css" href="css/styleclass.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
  <div class="container-fluid">
      <div class="row bg-dark">
        <div class="col-md-4 col-sm-4 col-lg-4 col-4 ">
          <img src="image/today1.jpg">
        </div>
      <div class="col-md-3 col-sm-5 col-5   offset-md-5 offset-sm-3 offset-3">
        <ul class="nav">
          <?php
          if (isset($_SESSION['is_user_logged']))
           {?>
            <li class="nav-item">
          <a class="nav-link text-light ml-2 navbar_link mt-2 <?php if(strstr($url,'my_account.php')){ echo "navbar_link_active";} ?>" href="my_account.php">My account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light ml-2 navbar_link mt-2 <?php if(strstr($url,'logout.php')){ echo "navbar_link_active";} ?>" href="logout.php">logout</a>
        </li>

         <?php }
         else
         {?>
                   
          <li class="nav-item">
              <a href="#" class="text-light mt-2  btn btn-success " data-toggle="modal" data-target="#myModal">
      Login <i class="fa fa-lock" aria-hidden="true"></i></a>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

   <!--  -->
      <div class="modal-header row">

          <div class="col-md-5" style="height: 400px;"><h3>Login</h3>
              <p>Get access to your Orders, Wishlist and Recommendations</p> 
              <img src="image/cart.jpg" style="height: 280px; width: 100%">
          </div>
          
          <div class="col-md-7">
            <form >
            <button class="close " data-dismiss="modal">&times;</button>
            <table cellpadding="10" cellspacing="0">
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><input style="border-style: none;" type="text" name="" placeholder="Enter Email & Mobile Number"><hr/></td>
              </tr>
              <<tr>
                <td><input style="border-style: none;" type="passward" name="" placeholder=" Enter Your Passward"><hr/></td>
              </tr>
              <tr>
                <td><input type="submit" value="Login" style="border-style:none; width: 250px; height: 50px; background-color: #FB6200; " style class="bnt "></td>
              </tr>
              <tr>
                <td><input type="submit" value="Request OTP" style="border-style:none; width: 250px; height: 50px; box-shadow: 5px 5px 5px gray; " style class="bnt btn-light text-success"></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><p class="text-primary">New to Flipkart? Create account</p></td>
              </tr>
            </table>
          </form>
          </div>
          
  
      </div>

    </div>
  </div>
</div>


            </li>&nbsp;&nbsp;
          <li class="nav-item">
                    <a href="#" class="text-light mt-2  btn btn-success " data-toggle="modal" data-target="#myModal1">
      SignUp <i class="fa fa-lock" aria-hidden="true"></i></a>


<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

   
      <div class="modal-header row">

          <div class="col-md-5" style="height: 400px;"><h2>Sign Up</h2><br/>
              <p>Get access to your Orders, Wishlist and Recommendations</p> <br/><br/> <br/><br/>
              <img src="image/cart.jpg" style="height: 250px; width: 100%">
          </div>
          
          <div class="col-md-7">
            <form action="save.php" method="post">
            <button class="close " data-dismiss="modal">&times;</button>
            <table cellpadding="10" cellspacing="0">
            <tr>
              <td><h2>Create Account</h2></td>
            </tr>
              <tr>
                <td><input  style="border-style: none;" type="text" name="full-name" placeholder="Enter Frist Name"><hr/></td>
              </tr>

              <tr>
                <td><select><option>+91</option><option>+20</option><option>+65</option><option>56</option></select> <input style="border-style: none;" type="text" name="mobile" placeholder="Mobile Number"><hr/></td>
              </tr>
              
              <tr>
                <td><input style="border-style: none;" type="text" name="email" placeholder="Enter Email"><hr/></td>
              </tr>
              <<tr>
                <td><input style="border-style: none;" type="password" name="password" placeholder=" Enter Your Passward"><hr/></td>
              </tr>
              <tr>
                <td><input type="submit" value="Sign Up" style="border-style:none; width: 250px; height: 50px; background-color: #FB6200; " style class="bnt "></td>
              </tr>
              
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><p class="text-primary">Already Have An Account?</p></td>
              </tr>
            </table>
          </form>
          </div>
          
  
      </div>

    </div>
  </div>
</div>
            </li>

         <?php } ?>





        </ul>
      </div>
      </div> 
  </div>
  <nav class="navbar  navbar-expand-sm bg-primary navbar-dark sticky-top justify-content-center">
    <a class="navbar-brand" href="#">
      <img src="image/h10.jpg" style="width: 80px;">
    </a>
  
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#idtarget">
      <span class="navbar-toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i> The Best product </span>
    </button>
    <div class="collapse navbar-collapse justify-content-center " id="idtarget"  >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-light navbar_link mr-2 <?php if(strstr($url,'index.php') ) {echo "navbar_link_active";} ?>">Home</a>
        </li>
        <?php
        if (isset($_SESSION['is_user_logged'])) 
        {?>
           
       <?php }
       else{?>

<li class="nav-item">
          <a href="login.php" class="nav-link text-light navbar_link mr-2 <?php if(strstr($url,'login.php') ) {echo "navbar_link_active";} ?>">login</a>
        </li>
  <!--       <li class="nav-item">
          <a class="nav-link text-light navbar_link " href="#" data-toggle="modal" data-target="#myModal">Login</a>



 <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

   
      <div class="modal-header row">

          <div class="col-md-5" style="height: 400px;"><h3>Login</h3>
              <p>Get access to your Orders, Wishlist and Recommendations</p> 
              <img src="image/cart.jpg" style="height: 280px; width: 100%">
          </div>
          
          <div class="col-md-7">
            <button class="close " data-dismiss="modal">&times;</button>
            <table cellpadding="10" cellspacing="0">
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><input style="border-style: none;" type="text" name="" placeholder="Enter Email & Mobile Number"><hr/></td>
              </tr>
              <<tr>
                <td><input style="border-style: none;" type="passward" name="" placeholder=" Enter Your Passward"><hr/></td>
              </tr>
              <tr>
                <td><input type="submit" value="Login" style="border-style:none; width: 250px; height: 50px; background-color: #FB6200; " style class="bnt "></td>
              </tr>
              <tr>
                <td><input type="submit" value="Request OTP" style="border-style:none; width: 250px; height: 50px; box-shadow: 5px 5px 5px gray; " style class="bnt btn-light text-success"></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><p class="text-primary">New to Flipkart? Create account</p></td>
              </tr>
            </table>
          </div>
          
  
      </div>

    </div>
  </div>
</div> 
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-light navbar_link " href="#" data-toggle="modal" data-target="#myModal1">& &nbsp;Sign UP</a>
        

<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

   
      <div class="modal-header row">

          <div class="col-md-5" style="height: 400px;"><h2>Sign Up</h2><br/>
              <p>Get access to your Orders, Wishlist and Recommendations</p> <br/><br/> <br/><br/>
              <img src="image/cart.jpg" style="height: 250px; width: 100%">
          </div>
          
          <div class="col-md-7">
            <form>
            <button class="close " data-dismiss="modal">&times;</button>
            <table cellpadding="10" cellspacing="0">
            <tr>
              <td><h2>Create Account</h2></td>
            </tr>
              <tr>
                <td><input style="border-style: none;" type="text" name="" placeholder=" Enter Full Name"><hr/></td>
              </tr>

              <tr>
                <td><select><option>+91</option><option>+20</option><option>+65</option><option>56</option></select> <input style="border-style: none;" type="text" name="" placeholder="Mobile Number"><hr/></td>
              </tr>
              
              <tr>
                <td><input style="border-style: none;" type="text" name="" placeholder="Enter Email"><hr/></td>
              </tr>
              <<tr>
                <td><input style="border-style: none;" type="passward" name="" placeholder=" Enter Your Passward"><hr/></td>
              </tr>
              <tr>
                <td><input type="submit" value="Sign Up" style="border-style:none; width: 250px; height: 50px; background-color: #FB6200; " style class="bnt "></td>
              </tr>
              
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><p class="text-primary">Already Have An Account?</p></td>
              </tr>
            </table>
          </form>
          </div>
          
  
      </div>

    </div>
  </div>
</div>
        </li>
 -->

       <li class="nav-item">
          <a class="nav-link text-light ml-2 navbar_link <?php if(strstr($url,'signup.php')){ echo "navbar_link_active";} ?>" href="signup.php">Sign Up</a>
        </li>


      <?php }
        ?>
        


        <li class="nav-item">
          <a class="nav-link text-light ml-2 navbar_link <?php if(strstr($url,'about.php')){ echo "navbar_link_active";} ?>" href="about.php">about</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light ml-2 dropdown-toggle navbar_link " href="#" data-toggle="dropdown" >more</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">information</a>
            <a href="#" class="dropdown-item">location</a>
            <a href="#" class="dropdown-item">marketing</a>
            <a href="#" class="dropdown-item">products</a>
          </div>
        </li>
      </ul>
    </div>
      <a href="#" class="text-light " data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
      My Cart (0)</a>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

   <!--  -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

     
      <div class="modal-body" style="background-image:url(image/cart.jpg); background-size: 100% 100%; height: 250px;">
  
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    </nav>