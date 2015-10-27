<?php 
    include_once '../../Config/config.php';
	include('header.php');
    session_start();
    $_SESSION['admin'] = $_POST['adminId'];
	$adm=new AdminController();
    if(isset($_POST['submit'])){
    	$adm->accessAdmin();
    }
    ?>
<head>
    <title>Admin Log In </title>
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
    <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Admin Login</h2>
        <label for="adminId" class="sr-only">Admin Id</label>
        <input type="email" id="adminId" name="adminId" class="form-control" placeholder="Admin Id"  required autofocus>
        <label for="adminPassword" class="sr-only">Password</label>
        <input type="password" id="adminPassword" name="adminPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
    </form>
    <?php include('footer.php');?>
</div>
<!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>