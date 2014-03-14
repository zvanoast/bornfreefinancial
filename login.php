<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
/*
if (login_check($mysqli) == true) {			//commented out
    $logged = 'in';
} else {
    $logged = 'out';
}
*/
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BORN FREE beta LOGIN PORTAL</title>
    <script type="text/JavaScript" src="js/sha512.js"></script> 		<!-- JS -->
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  <nav class="top-bar" data-topbar>
          <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
                  <h1>
                      <a href="index.html">
                          BORN FREE beta
                      </a>
                  </h1>
              </li>
              <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
          </ul>
          
          <section class="top-bar-section">
              <!-- Right Nav Section -->
              <ul class="right">
                  
                  <li class="divider"></li>
                  <li><a href="signup.php" target="_blank">SIGNUP</a></li>
                  
              </ul>
          </section>
    </nav>
      
      <!-- End Top Bar --> 

<hr />

<div class="row">
      <div class="large-12 large-centered columns">
      	<div class="panel">
              
            <div class ="row">
                <div class="large-6 medium-6 columns">
                   <img src="img/BusinessCardLogo.png" /> 
                </div>

                <div class="large-6 medium-6 columns">
                    
                    <form action="includes/process_login.php" method="post" name="login_form">
                        <fieldset><center><legend>PLEASE ENTER</legend></center><hr />
                        <div class="row">
                                <div class="large-18 medium-18 columns">
                                    <!--<label>Email Address</label>-->
                                    <input type="text" name="email" Placeholder="Email Address"/>
                                </div>
                        </div>
                        <div class="row">
                                <div class="large-18 medium-18 columns">
                                    <!--<label>Password</label>-->
                                    <input type="password" name="password" placeholder="Password"/>
                                </div>
                        </div>
                        <div class ="row">
	       
                                <center><input class="small round button" type= "submit" value= "LOGIN" onclick="return formhash(this.form,
                                											this.form.password);"/>
                                											<br/></center>
    
                         </div>
                       
                   </fieldset>
                    </form>
                   
                </div>
                
                  

                <div class="large-6 medium-6 columns">
                                 <div class="large-18 medium 18 columns">
                                    <a href="#" data-dropdown="drop1" class="button dropdown">Need help?</a><br>
                                    <ul id="drop1" data-dropdown-content class="f-dropdown">
                                    <li><a href="#">ForgotPassword</a></li>
                                    <li><a href="#">ForgotUserName</a></li>
                                    </ul>

                                  </div>
                      
                 </div>
            
            </div>
                
            
   	    </div>
      </div>
    <hr />
</div>

 
    

    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
  </body>
  
</html>