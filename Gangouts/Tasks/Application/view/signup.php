<?php
   session_start();
	include_once 'helper.php';
    include_once '../../Config/config.php';
    include ('header.php');
    $signup = new SignupController();
    if(isset($_POST['submit'])) {
        $_SESSION['username']=$_POST['username'];
    	$signup->signupAction();
    }
    
    ?>
<head>
    <title> Sign Up </title>
</head>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="masthead clearfix" align="left">
                <div class="inner" >
                    <div class="masthead-brand"  style="margin-left:auto;"><img src ="../../Public/images/go1.png" width="15%" height="30%"></img>
                    <nav>
                        <ul class="nav masthead-nav" align="center">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="admin.php">Admin Login</a></li>
                            <li><a href="signin.php">User Login</a></li>
                        </ul>
                    </nav>
					</div>
				</div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" method="post" id="signupForm">
                        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <?php
                                        inputText("firstname", "First Name*", "1");
                                        ?><span class="error">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <?php
                                        inputText("lastname", "Last Name*", "2");
                                        ?>  <span class="error">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php
                                inputText("username", "User Name*", "3");
                                ?>
                        </div>
                        <div class="form-group">
                            <?php
                                inputEmail("email", "Email Address*", "4");
                                ?> <span class="error">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <?php
                                        inputPassword("password", "Password*", "5");
                                        ?><span class="error">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <?php
                                        inputPassword("confirm_Password", "Re-enter Password*", "6");
                                        ?><span class="error">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="bs-docs-example">
                                        <?php
                                            inputMobile("mobile", "Mobile No*", "7");
                                            ?>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="bs-docs-example">
                                        <h4><label for="interest"> Blood Group*</label></h4>
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
                                    <h4><label for="interest"> BirthDay*</label></h4>
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
                                <h4><label>Gender*</label></h4>
                                <div class="col-sm-12">
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="gender" value="male">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        Male
                                        </label>
                                        <label>
                                        <input type="radio" name="gender" value="female">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        Female
                                        </label>
                                    </div>
                                </div>
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
						 <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-3">
            <span class="button-checkbox">
            <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
            <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
            </span>
            </div>
            <div class="col-xs-8 col-sm-9 col-md-9">
            By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
            </div>
            </div>
            <hr class="colorgraph">
            <div class="row">
            <div class="form-group">
            <div class="col-xs-12 col-md-6"><input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            <div class="col-xs-12 col-md-6"><a href="signin.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
            <span class="success">
            </div>
            </form>   			            
            </div>
                </div>
            </div>
           
			</div>
		</div>
    </div>
</div>
</div>
</div>
<script>
$document.ready</script>
</body>
</html>