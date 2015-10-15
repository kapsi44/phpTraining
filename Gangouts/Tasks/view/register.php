<?php

include_once '../controller/tagFunctions.php';
include_once '../controller/signup.php';
include_once '../model/validateRegister.php';
$signup = new SignupController();

    
    $signup->addUser();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="UserManagement">
    <meta name="author" content="Kapso">
    <link rel="icon" href="../images/favicon.ico">

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
    <link href="../css/cover.css" rel="stylesheet">
    <link href="../css/register.css" rel="stylesheet">
    
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/bootstrap/ie-emulation-modes-warning.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/dropdwon.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        @import url("http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css")
    </style>
    <script src="../js/bootstrap/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>  
	<script src="../js/dropdown.js"></script>
</head>

  <body>
       <div class="site-wrapper">

      <div class="site-wrapper-inner">
           <div class="masthead clearfix">
           <center> <div class="inner">
              <h1 class="masthead-brand">GO</h1>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="signin.php">Sign In</a></li>  
                </ul>
              </nav>
            </div></center>
          </div>      

      <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		            <form role="form" method="post" action="success.php">
			            <h2>Please Sign Up <small>It's free and always will be.</small></h2>
			            <hr class="colorgraph">
			            <div class="row">
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
                                  <?php
inputText("fn", "First Name", "1");
?>
					            </div>
				            </div>
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
						          <?php
inputText("ln", "Last Name", "2");
?>  
					            </div>
				            </div>
			            </div>
			            <div class="form-group">
				           <?php
inputText("username", "User Name", "3");
?>
			            </div>
			            <div class="form-group">
				           <?php
inputEmail("email", "Email Address", "4");
?> 
			            </div>
			            <div class="row">
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
						            <?php
inputPassword("password", "Password", "5");
?>
					            </div>
				            </div>
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
						            <?php
inputPassword("confirmPassword", "Re-enter Password", "6");
?>
					            </div>
				            </div>
			            </div>
                        <div class="row">
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">                            
                                <div class="bs-docs-example">
                                    <?php
inputText("mobile", "Mobile No.", "7");
?>
                                </div>
                                </div>
                             </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">                            
                                <div class="bs-docs-example">
                                    <h4><label for="interest"> Blood Group</label></h4>     
                                   <select class="selectpicker"  data-style="btn-primary" style="display: none;" name="bloodGroup" >
                                  		<?php
option("A+,A-,B+,B-,O+,O-,AB+,AB-");
?>
                                   </select>
                                               
                                </div>
                                </div>
                        </div>                                    
                                            
                        </div>  
                        <div class="row">
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
                                    <h4><label for="interest"> BirthDay</label></h4>                                                          
                                    
                         				<select class="selectpicker" data-style="btn-primary" data-width="auto" style="display: none;" name="day">
                                  				<?php
daysOption();
?>
                           				</select>
			                              <select class="selectpicker" data-style="btn-primary" data-width="auto" style="display: none;" name="month">
			                                      <?php
monthOption("January,Febuary,March,April,May,June,July,August,September,October,November,December");
?>
			                           </select>
			                            <select class="selectpicker" data-style="btn-primary" data-width="auto" style="display: none;" name="year">
			                              <?php
yearOption();
?>
			                           </select><br>                      
				            </div>
                        </div>    
                        <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
						             <div class="bs-docs-example">
                                        <h4><label for="interest"> Area of Interest</label></h4>                                                          
                                            <select class="selectpicker" id="interest" name="interest" multiple="" style="display: none;">
                                            <?php
option("Singing,Dancing,Cooking,Painting,Surfing,Sports,Reading,Teaching,Fishing");
?>                
                                          </select>
                                    </div>
                                  </div>
				            </div>
                        </div>		            
                        <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">                        
                                    <h4><label>Gender</label></h4>
            
                                    <div class="col-sm-12">
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="gender" value="Male">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Male
                                          </label>
                                       
                                          <label>
                                            <input type="radio" name="gender" value="Female">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Female
                                          </label>
                                          </div>  </div>                       
                                 </div>
                         </div>
                          <div class="row">
				            <div class="col-xs-12 col-sm-6 col-md-6">
					            <div class="form-group">
                                   <h4><label for="education">Qualifications</label></h4>         
                                  <select class="selectpicker" name="qualify" id="education" data-style="btn-info" multiple="" style="display: none;">
                                       <?php
option("10th,12th,B.E,B.Tech,MCA,Phd");
?>       
                                  </select>
					            </div>
				            </div>
                        </div> 
                </div>      </div>            
                         <div class="row">
				            <div class="col-xs-4 col-sm-3 col-md-3">
					            <span class="button-checkbox">
						            <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                                    <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					            </span>
				            </div>
				            <div class="col-xs-8 col-sm-9 col-md-9">
					             By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-          target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				            </div>
			            </div>
		   
			            <hr class="colorgraph">
			            <div class="row">
				             <div class="form-group">
                            <div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				            <div class="col-xs-12 col-md-6"><a href="signin.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                        </div> </form>   			            
                        </div>
		          
	            </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	            <div class="modal-dialog modal-lg">
		            <div class="modal-content">
			            <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			            </div>
			
			            <div class="modal-footer">
				            <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			            </div>
		            </div><!-- /.modal-content -->
	            </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            </div> 

    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.js" ></script>
 	<script type="text/javascript">

	</script>

</div>
</div>
</body>
</html>


	