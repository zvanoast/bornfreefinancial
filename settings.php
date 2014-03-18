<?php
    include_once 'includes/register_inc.php';
    include_once 'includes/functions.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnalystWars Profile Setttings</title>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/foundation/foundation.magellan.js"></script>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  <nav class="top-bar" data-topbar>
          <ul class="title-area">
              
              <li class="name">
                  <h1><a href="index.html">ANALYST WARS</a></h1>
              </li>
              <li class="toggle-topbar menu-icon">
              <a href="#">menu</a>
              </li>
          </ul>
          
          <section class="top-bar-section">
              
              <ul class="right">
                  <li class="divider"></li>
                  <li><a href="includes/logout.php">LOG OUT</a></li>
	      </ul>
          </section>
   </nav>
      
     

<hr />

<div class="row">
      <div class="large-12 small-centered columns">
      	<center><h5>PROFILE SETTINGS</h5></center>
              <br />
            
            <form method="post" action="" name="">
            	<div class="large-6 medium-6 columns">
                	<div class="row">
                                <div class="large-18 medium-18 columns">
                                    <label>Select a Profile Picture</label>
                                    <input id="" name="" type="file"></input>
                                    <img alt="" class="" src="http://placehold.it/300x240&text=[img]"/>
                                </div>
                        </div>

                </div>
                <div class="large-6 medium-6 columns">
                	
                    	<div class="row">
                                <div class="large-18 medium-18 columns">
                                    <label>Email Address</label>
                                    <input type="text" name="email"  />
                                </div>
                        </div>
                        <div class="row">
                                <div class="large-18 medium-18 columns">
                                    <label>First Name</label>
                                    <input type="text" name="firstName" />
                                </div>
                        </div>
                        <div class="row">
                            	<div class="large-18 medium-18 columns">
                                	<label>Last Name</label>
                                	<input type="text" name="lastName" />
                            	</div>
                        </div>
                        <div class="row">
                                <div class="large-18 medium-18 columns">
                                    	<label>Change Password</label>
                                    	<input type="password" name="password" />
                                </div>
                        </div>
                        
                        
                    
                </div>
                <div class="large-6 medium-6 columns">
               		<div class="row">
                                <div class="large-18 medium-18 columns">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dateOfBirth" />
                                </div>
                        </div>
                        
                        <div class="row">
                                 <div class="large-18 medium 18 columns">
                                    <label>Education Level</label>
                                      <select name="educationLevel">
                                      	    <option value=""></option>
                                            <option value="HighSchoolDiploma">High School Diploma/GED</option>
                                            <option value="Bachelors">Bachelor&#39s Degree</option>
                                            <option value="Masters">Master&#39s Degree</option>
                                            <option value="PhD">Doctor of Philosophy</option>
                                       </select>
                                   </div>
                        </div>
                        
                        <div class="row">
                                  <div class="large-18 medium-18 columns">
                                            <label>Investment Experience</label>
                                            <textarea placeholder="Short or Long Term Investment Experience"></textarea>
                                  </div>
                        </div>
                        
                        <div class="row">
                                  <div class="large-18 medium-18 columns">
                                            <label>Reserach Expertise</label>
                                            <textarea placeholder="Sector or Market Cap Research Expertise"></textarea>
                                  </div>
                        </div>
                       

                </div>
               		<div class ="row">
               			<div class ="large-18 small-centered columns">
                            
                            	<input class="small radius button" type= "submit" value="SAVE" onclick=""/><br/>
                         	</div>   
                        </div>
              </form>
            
            
	    
      </div>
 </div>

<hr><hr>

<div class="row">
      <div class="large-14 medium-14 small-centered columns">
      		<div class="panel"> 
                    <form action="" method="" name="">
			<fieldset>
  			<center><legend>New Form Under Construction</legend></center><br>
  				
  			<div class="magellan-container" data-magellan-expedition="fixed" data-options="destination_threshold:65;throttle_delay:0;">
  				<dl class="sub-nav">
    				<dd data-magellan-arrival="picture"><a href="#">Picture</a></dd>
    				<dd data-magellan-arrival="about"><a href="#">About</a></dd>
    				<dd data-magellan-arrival="experience"><a href="#">Experience</a></dd>
  				</dl>
			</div>
			
			<div class="row">
				<a name="picture"></a>
                                    <label data-magellan-destination="picture">Select a Profile Picture</label>
                                    <input id="" name="" type="file"></input>
                                    <img alt="" class="" src="http://placehold.it/300x240&text=[img]"/>
                        </div>
			
			
			<div class="row">
				<a name="about"></a>
                                    <label data-magellan-destination="about">Select a Profile Picture</label>
                                    <input id="" name="" type="file"></input>
                                    <img alt="" class="" src="http://placehold.it/300x240&text=[img]"/>
                        </div>
			
			<!--<p><a name="destination"></a></p>
<h3 data-magellan-destination="destination">Destination</h3>-->

  			</fieldset>	 
	 
		    </form>
                
                	
                	
            	</div>
   	</div>
</div>


    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>