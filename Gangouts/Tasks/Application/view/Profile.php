<?php 
require_once "../../Config/config.php";
session_start();
$user= new UserPageController();
$friend=$user->displayFriends();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gangouts</title>
	<link href="../../Public/css/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../Public/css/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../../Public/css/assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong><?php echo 'Welcome '.$_SESSION['email_id'].$_SESSION['username'];?>
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+1800-600-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="../../Public/css/assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                               Share your Personal Details!! 
                                <hr />
                                <a href="logout.php" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>
					</ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index.html">Dashboard</a></li>
                            <li><a href="userPage.php">Home</a></li>
                            <li><a href="Profile.php">Profile</a></li>
                            <li><a href="Friends.php">Friends</a></li>
                             <li><a href="Notifications.php">Notifications</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                       This is your profile page. Watch your progress till now with Gangouts
                    </div>
                </div>

            </div>
            <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-venus dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
  </div>
                           
</div>
                         <h5>Profile </h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Edit Profile </h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div>
                         <h5>Settings </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
                           
</div>
                         <h5>Notifications</h5>
                    </div>
                </div>

            </div>
           
            <div class="row">
                <div class="col-md-6">
                      <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           Active  Notice Panel 
                                <div class="pull-right" >
                                    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <span class="glyphicon glyphicon-cog"></span>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Refresh</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a></li>
  </ul>
</div>
                                </div>
                            </div>
                            <div class="panel-body">
                               
                                <ul >
                                   
                                     <li>
                                            <a href="#">
                                     <span class="glyphicon glyphicon-align-left text-success" ></span> 
                                                  Lorem ipsum dolor sit amet ipsum dolor sit amet
                                                 <span class="label label-warning" > Just now </span>
                                            </a>
                                    </li>
                                     <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-info-sign text-danger" ></span>  
                                          Lorem ipsum dolor sit amet ipsum dolor sit amet
                                          <span class="label label-info" > 2 min chat</span>
                                            </a>
                                    </li>
                                     <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-comment  text-warning" ></span>  
                                          Lorem ipsum dolor sit amet ipsum dolor sit amet
                                          <span class="label label-success" >GO ! </span>
                                            </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-edit  text-danger" ></span>  
                                          Lorem ipsum dolor sit amet ipsum dolor sit amet
                                          <span class="label label-success" >Let's have it </span>
                                            </a>
                                    </li>
                                   </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Just A Small Footer Button</a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="text-center alert alert-warning">
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                     
                    <hr />
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th> No.</th>
                                            <th>Age</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th> Email </th>
                                            <th> Gender</th>
											<th># #</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
											if( mysqli_num_rows( $friend )==0 ){
												echo '<tr><td colspan="4">No Rows Returned</td></tr>';
											} else {
												 while( $row = mysqli_fetch_assoc( $friend ) ){
													echo 
													"<tr>
														<td>{$row['id']}</td>
														<td>{$row['age']}</td>
														<td>{$row['first_name']}</td>
														<td>{$row['status']}</td>
														<td>{$row['email']}</td>
														<td>{$row['gender']}</td>
														<td> <a href='#' class='btn btn-xs btn-danger'>Add</a> </td>
													</tr>\n";
												}
											  }
											?>
									   
                                       
                                    </tbody>
                                </table>
                            </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-danger">
                        This is a simple admin template that can be used for your small project or may be large projects. This is free for personal and commercial use.
                    </div>
                    <hr />
                     <div class="Compose-Message">               
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Compose New Message 
                    </div>
                    <div class="panel-body">
                        
                        <label>Enter Recipient Name : </label>
                        <input type="text" class="form-control" />
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control" />
                        <label>Enter Message : </label>
                        <textarea rows="9" class="form-control"></textarea>
                        <hr />
                        <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Send Message </a>&nbsp;
                      <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-tags"></span>  Save To Drafts </a>
                    </div>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                    </div>
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">@Kapso</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
